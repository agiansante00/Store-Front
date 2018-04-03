<?php
function login()
{
   $con = mysql_connect("localhost", "root", "password") or die('Could not connect to server');
   mysql_select_db("store", $con) or die('Could not connect to database');
}
?>