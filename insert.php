<?php 
$data = json_decode(file_get_contents("php://input"));

$Nom=mysql_real_escape_string($data->Nom);
$Password=mysql_real_escape_string($data->Password);
$Email=mysql_real_escape_string($data->Email);

mysql_connect("localhost","root","");
mysql_select_db("crud");
mysql_query("INSERT INTO mytable(`Nom`, `Password`, `Email`) 
			VALUES ('".$Nom."','".$Password."', '".$Email."')");
// preg_match("/^(\w|-)+@((\w|-)+\.)+[a-z]{2,6}$/i",$email)
 

 ?>