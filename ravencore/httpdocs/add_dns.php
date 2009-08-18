<?php
/*
                 RavenCore Hosting Control Panel
               Copyright (C) 2005  Corey Henderson

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

include "auth.php";

if (!$did) goto("domains.php");

if (!user_can_add($uid, "dns_rec") and !is_admin()) goto("users.php?uid=$uid");

$domain = $db->run("get_domain_by_id", Array(id => $did));

if ($action == "add") {
	$recs = $db->run("get_dns_recs_by_domain_id", Array(did => $did));

	$count = 0;

	foreach ($recs as $rec) {
		if ($rec[name] == $_POST[name] and $rec[type] == $_POST[type] and $rec[target] == $_POST[target]) $count = 1;
	}

	if (0 != $count) alert(__("You already have a $_POST[type] record for $_POST[name] pointing to $_POST[target]"));
	else {
		if ($_POST[name] == $_POST[target] and $_POST[type] != "MX") alert(__("Your record name and target cannot be the same."));
		else {
			if (($_POST[type] == "SOA" or $_POST[type] == "MX" or $_POST[type] == "CNAME") and is_ip($_POST[target])) alert(__("A $_POST[type] record cannot point to an IP address!"));
			else {
				if ($_POST[name] == $domain[name]) $_POST[name] = "@";
				if ($_POST[target] == $domain[name]) $_POST[target] = "@";

				if (ereg('\.$', $_POST[name])) alert(__("You cannot enter in a full domain as the record name."));
				else {
					if ($_POST[type] == "MX") $_POST[type] .= '-' . $_POST[preference];

					if ($_POST[type] == "SOA") $sql = "update domains set soa = '$_POST[target]' where id = '$did'";
					else $sql = "insert into dns_rec set did = '$did', name = '$_POST[name]', type = '$_POST[type]', target = '$_POST[target]'";

					$db->data_query($sql);

					$db->run("rehash_named");

					goto("dns.php?did=$did");
				}
			}
		}
	}
}

if (0 == count($domain)) goto("domains.php");

nav_top();

print '<form method=post>
<input type=hidden name=did value="' . $did . '">
<input type=hidden name=action value=add>
';

switch ($_POST[type]) {
	case "SOA":
		print '<input type=hidden name=type value=SOA>
' . __('Start of Authority for') . ' ' . $domain[name] . ': <input type=text name=target>
';
		break;
	case "A":
		print '<input type=hidden name=type value=A>
' . __('Record Name') . ': <input type=text name=name>
<br>
' . __('Target IP') . ': <input type=text name=target>
';

		break;
	case "NS":
		print '<input type=hidden name=type value=NS>
<input type=hidden name=name value="@">
' . __('Nameserver') . ': <input type=text name=target>
';
		break;
	case "MX":
		print __('Mail for') . ': <select name=name>';

		$recs = $db->run("get_dns_recs_by_domain_id", Array(did => $did));

		foreach ($recs as $rec) {
			if ("A" != $rec[type]) continue;

			$disp_name = $rec[name];

			if ($rec[name] == "@") $disp_name = $domain[name];
			else $disp_name .= '.' . $domain[name];

			print '<option value="' . $rec[name] . '">' . $disp_name . '</option>';
		}

		print '</select><br><input type=hidden name=type value=MX>
' . __('MX Preference') . ': <select name=preference>';
		for($i = 10; $i < 51; $i += 10) print '<option value="' . $i . '">' . $i . '</option>';
		print '</select>
<br>
' . __('Mail Server') . ': <input type=text name=target> ( ' . __('must not be an IP!') . ' )
';
		break;
	case "CNAME":
		print '<input type=hidden name=type value=CNAME>
' . __('Alias name') . ': <input type=text name=name>
<br>
' . __('Target name') . ': <input type=text name=target>';
		break;
	case "TXT":
		print '<input type=hidden name=type value=TXT><input type=hidden name="name" value="@">
' . __('TXT') . ': <input type=text name=target>';
		break;
	case "PTR":
		print '<input type=hidden name=type value=PTR>
' . __('Reverse pointer records are not yet available');

		nav_bottom();

		break;

	default:

		print __('Invalid DNS record type');

		nav_bottom();

		break;
}

print '<p><input type=submit value="' . __('Add Record') . '">
</form>';

nav_bottom();

?>
