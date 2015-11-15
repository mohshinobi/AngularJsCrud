<?php
$data = file_get_contents("php://input");

 

$id       = $_POST['id'];
$Nom      = $_POST['name'];
$Password = $_POST['password'];
$Email    = $_POST['email'];

$conn1 = mysqli_connect("localhost", "root", "","crud");
mysqli_query($conn1	,"UPDATE mytable SET  Nom=  '".$Nom."' ,Password='".$Password."' ,Email= '".$Email."'  WHERE id= '".$id."' "); 
 
 


?>