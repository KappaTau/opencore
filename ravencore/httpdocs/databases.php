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

if ($action == "userdel") {
	$sql = "select * from data_base_users where id = '$dbu'";
	$result = $db->data_query($sql);

	$row = $db->data_fetch_array($result);

	// Connect to the mysql database
	$db->use_database('mysql');

	$sql = "delete from user where User = '$row[login]'";

	$db->data_query($sql);

	$db->data_query("flush privileges");

	$db->use_database($CONF['MYSQL_ADMIN_DB']);

	$sql = "delete from data_base_users where id = '$dbu'";
	$db->data_query($sql);

	goto("databases.php?did=$did&dbid=$dbid");

} else if ($action == "dbdel") {
	$sql = "select * from data_bases where id = '$dbid'";
	$result = $db->data_query($sql);

	$row = $db->data_fetch_array($result);

	if (!$row) $error = __("That database does not exist");
	else {
		$sql = "drop database " . $row['name'];

		$db->data_query($sql);

		$sql = "delete from data_bases where id = '$dbid'";
		$db->data_query($sql);

		$sql = "select * from data_base_users where db_id = '$dbid'";
		$result = $db->data_query($sql);

		$db->use_database('mysql');

		while ($row = $db->data_fetch_array($result)) {
			$sql = "delete from user where User = '$row[login]'";
			$db->data_query($sql);
		}

		goto("databases.php?did=$did");

	}

}

if (!$dbid and $did) {
	nav_top();

	$sql = "select * from domains where id = '$did'";
	$result = $db->data_query($sql);

	$row = $db->data_fetch_array($result);

	if (user_can_add($user, "database") or is_admin()) print '<a href="add_db.php?did=' . $did . '">' . __('Add a Database') . '</a><br /><br />';

	$sql = "select * from data_bases where did = '$did'";
	$result = $db->data_query($sql);

	$num = $db->data_num_rows();

	if ($num == 0) print __("No databases setup");
	else print '<table class="listpad"><tr><th  class="listpad"colspan="2">' . __('Databases for') . ' <a href="domains.php?did=' . $did . '">' . $row[name] . '</a></th></tr>';

	while ($row = $db->data_fetch_array($result)) {
		print '<tr><td class="listpad"><a href="databases.php?did=' . $did . '&dbid=' . $row[id] . '">' . $row[name] . '</a></td><td class="listpad"><a href="databases.php?action=dbdel&dbid=' . $row[id] . '&did=' . $did . '" onclick="return confirm(\'' . __('Are you sure you wish to delete this database?') . '\');">' . __('delete') . '</a></td></tr>';
	}

	if ($num != 0) print '</table>';
} else if ($dbid and $did) {
	nav_top();

	$sql = "select * from data_bases where id = '$dbid'";
	$result = $db->data_query($sql);

	$row = $db->data_fetch_array($result);

	print __('Users for the') . ' <a href="databases.php?did=' . $did . '">' . __('database') . '</a> ' . $row[name] . ' - <a href="add_db_user.php?did=' . $did . '&dbid=' . $dbid . '">' . __('Add a database user') . '</a><p>';

	$sql = "select * from data_base_users where db_id = '$dbid'";
	$result = $db->data_query($sql);

	$num = $db->data_num_rows();

	if ($num == 0) print __("No users for this database") . "<p>";
	else print '<table class="listpad"><tr><th class="listpad">User</th><th class="listpad">&nbsp;</th><th class="listpad">' . __('Delete') . '</th></tr>';

	while ($row = $db->data_fetch_array($result)) {
		print '<tr><td class="listpad">' . $row[login] . '</td>
<td class="listpad"><a href="phpmyadmin.php?did=' . $did . '&dbu=' . $row[id] . '&dbid=' . $dbid . '" target=_blank>phpMyAdmin</a></td>
<td class="listpad"><a href="databases.php?action=userdel&dbu=' . $row[id] . '&did=' . $did . '&dbid=' . $dbid . '" onclick="return confirm(\'' . __('Are you sure you wish to delete this database user?') . '\');">' . __('delete') . '</a></td></tr>';
	}

	if ($num != 0) print '</table>';

	print __("Note: You may only manage one database user at a time with the phpmyadmin");
} else {
	// list all databases
	req_admin();

	nav_top();

	print '<form method=get name=search>' . __('Search') . ': <input type=text name=search value="' . $_GET['search'] . '">
<input type=submit value=Go onclick="if(!document.search.search.value) { alert(\'' . __('Please enter in a search value!') . '\'); return false; }">';

	if ($_GET['search'])  {
		print ' <input type=button value="' . __('Show All') . '" onclick="self.location=\'databases.php\'">';
	}

	print '</form><p>';

	$sql = "select d.name as domain_name, b.name as db_name, b.id, b.did from data_bases b inner join domains d on d.id = b.did";
	if ($_GET['search']) {
		$sql .= " where b.name like '%$_GET[search]%'";
	}
	$sql .= " order by d.name, b.name";
	$result = $db->data_query($sql);

	$num = $db->data_num_rows();

	if ($num == 0 and !$_GET['search']) {
		print __('There are no databases setup');
	} else if ($_GET['search']) {
		print __('Your search returned') . ' <i><b>' . $num . '</b></i> ' . __('results') . '<p>';
	}

	if ($num != 0) {
		print '<table class="listpad"><tr><th class="listpad">' . __('Domain') . '</th><th class="listpad">' . __('Database') . '</th></tr>';
	}

	while ($row = $db->data_fetch_array($result)) {
		print '<tr><td class="listpad">' . $row['domain_name'] . '</td><td class="listpad"><a href="databases.php?dbid=' . $row['id'] . '&did=' . $row['did'] . '">' . $row[db_name] . '</a></td></tr>';
	}

	if ($num != 0) print '</table>';
}

nav_bottom();

?>
