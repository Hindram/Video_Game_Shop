<?php
//connect  to the database
$db=mysql_pconnect( "localhost","root", "" ) or die ('I cannot connect to the database  because: ' . mysql_error());
  //select  the database to use
  $mydb=mysql_select_db("cosmos");

?>