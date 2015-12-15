<?php
    $link = mysql_connect("localhost", "root", "") or die (mysql_error());
    $db = "techstore";
    if (! $link) die ("Could not connect to MySQL");
    mysql_select_db($db, $link) or die ("Select DB Error:".mysql_error());
?>