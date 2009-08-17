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
// If we're not an admin, and this user doens't have permissions to add another domain,
// redirect them back to their main page
if (!user_can_add($uid, "domain") and !is_admin()) goto("users.php?uid=$uid");

if ($action == "add") {
	// Check to see that the domain isn't already setup on the server
	$sql = "select count(*) as count from domains where name = '$_POST[name]'";
	$result = $db->data_query($sql);
	$row = $db->data_fetch_array($result);

	if ($row[count] != 0) {
		alert(__("The domain $_POST[name] is already setup on this server"));

		$_POST[name] = "";
		$select = "name";
		// Each of these checks provides the $select variable, which tells the page to focus on that
		// form element when the page loads.
	} else if (!$_POST[name]) {
		alert(__("Please enter the domain name you wish to setup"));
		$select = "name";
	} else {
		// Match the incoming string against the valid syntax of a domain/subdomain
		if (preg_match('/^' . REGEX_DOMAIN_NAME . '$/', $_POST[name])) {
			if (!preg_match('/^www\./', $_POST[name])) {
				// If we get this far, we have a valid domain name to setup. Continue
				// If we don't get a www post variable, set it to 'false' for db insert purposes
				$sql = "insert into domains set name = '$_POST[name]', uid = '$uid', created = now()";
				$db->data_query($sql);

				$did = $db->data_insert_id();

				$d = new domain($did);

				$domain_name = $d->name();

				if (have_service("mail")) $db->run("rehash_mail");
				// Copy over server default DNS to this domain, if the option was checked
				if ($_POST[dns]) {
					// First, we need the Start Of Authority record
					$sql = "select * from dns_def where type = 'SOA'";
					$result = $db->data_query($sql);

					$row = $db->data_fetch_array($result);
					// Add the SOA to the new domain, if we got one
					if ($row[target]) {
						$sql = "insert into parameters set type_id = '$did', param = 'soa', value = '$row[target]'";
						$db->data_query($sql);

						$sql = "update domains set soa = '$row[target]' where id = '$did'";
						$db->data_query($sql);
					}

					// Get all other DNS records to setup
					$sql = "select * from dns_def where type != 'SOA'";
					$result = $db->data_query($sql);

					while ($row = $db->data_fetch_array($result)) {
						$sql = "insert into dns_rec set did = '$did', name = '$row[name]', type = '$row[type]', target = '$row[target]'";
						$db->data_query($sql);
					}

					$db->run("rehash_named");
				}

				// If we have the hosting variable, send us to hosting setup, because most of the time
				// that is the next logical thing to do when adding a domain.
				if ($_POST[hosting]) $url = "hosting.php?did=$did";
				else $url = "domains.php?did=$did";

				goto($url);
			} else {
				alert(__("Invalid domain name. Please re-enter the domain name without the www."));
			}
		} else {
			// We failed against the regex provided above
			alert(__("Invalid domain name. May only contain letters, numbers, dashes and dots. Must not start or end with a dash or a dot, and a dash and a dot cannot be next to each other"));
		}
	}
}

nav_top();

?>

<form method="post">

<?php
// The admin user gets a dropdown of the users setup on the server, to assin
// to the domain
if (is_admin()) {
	$users = $db->run("get_users");

	if (0 != count($users)) {
		print __('Control Panel User') . ': <select name="uid"><option value="">' . __('Select One') . '</option>';

		foreach ($users as $user) {
			print "<option value=\"$user[id]\"";
			if ($uid == $user[id]) print " selected";
			print ">$user[name] - $user[login]</option>";
		}

		print '</select><p>';
	}
}

?>
<table>
<tr><th colspan="2"><?php e_('Add domain')?></th></tr>
<tr><td><?php e_('Name')?>: </td><td>http://<input type="text" name="name"></td></tr>
<tr><td align="center"><input type="submit" value="<?php e_('Add Domain')?>"></td>
<td><?php
// Only display these options if we are a webserver
if (have_service("web")) {
	?>
<input type=checkbox name=hosting value="true" <?php if (($action and $_POST[hosting]) or !$action) print ' checked';
	?>> <?php e_('Proceed to hosting setup')?>
<?php
}
// Only display this option if we have a DNS server in our cluster
if (have_service("dns")) {
	$sql = "select * from dns_def";
	$result = $db->data_query($sql);
	// only display this option if we have default dns record setup
	if ($db->data_num_rows() > 0) print '<input type=checkbox name="dns" value="true" checked> ' . __('Add default DNS to this domain');
}

?>
</td></tr>
</table>

<input type="hidden" name="action" value="add">
</form>

<?php

nav_bottom();

?>
