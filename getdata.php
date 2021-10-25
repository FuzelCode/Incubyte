<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "incubyte";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
   
   $sql = 'SELECT Customer Name,Customer id,Customer Open Date,Last Consulted Date,Vaccination Type,Doctor Consulted,State,Country,post Code,Date of Birth,Active Customer FROM customer';
   mysql_select_db('incubyte');
   $result = mysql_query( $sql, $conn );
   
   if(! $result ) {
      die('Could not get data: ' . mysql_error());
   }
?>
   