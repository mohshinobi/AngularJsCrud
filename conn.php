<?php 

$host   = "localhost";
$user	  =	"root";
$password 	  =	"";
$databasename = "crud";
$tablename	  = "mytable";

// $host   	  = "localhost";
// $user	  	  =	"devpluss_moh";
// $password 	  =	"user$432";
// $databasename = "devpluss_crud";
// $tablename	  = "mytable";

 
 $conn = new mysqli ($host, $user, $password, $databasename);
 
// vérifier la connextion
if ($conn->connect_error) {
	die("erreur dans la connextion bdd! :".$conn->connect_error);
} 

// afficher le resultat 
$sql =   " SELECT * FROM  ".$tablename;
$result = $conn->query($sql);
  
 
 $nb  = 0;
if ($result-> num_rows > 0 )  { 

	while ($row = $result-> fetch_assoc()) {

		$data[] = $row;
		 $nb++;
	 } 
}

 
 ;
 print_r(json_encode($data));
 
 

 
?>
