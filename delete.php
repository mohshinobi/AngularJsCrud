<?php 
$data = json_decode(file_get_contents("php://input"));

$id=mysql_real_escape_string($data->id); 
mysql_connect("localhost","root","");
mysql_select_db("crud");
mysql_query("DELETE FROM `mytable` WHERE `id` = $id");


 ?>