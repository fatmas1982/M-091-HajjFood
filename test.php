<?php
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "id6663956_root";
 $dbpass = "root1";
 $db = "id6663956_categories_db";
 
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
 
 


 
$conn = OpenCon();
 
echo "Connected Successfully";

$checkUsername = "select * from user_db";
echo $checkUsername;

$rr=$conn->query($checkUsername);
$rr;
 
CloseCon($conn);
   
?>