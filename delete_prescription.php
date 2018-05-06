<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$user=$_SESSION['username'];
$id=$_GET['prescription_id'];

$sql="DELETE FROM prescription WHERE prescription_id='$id'";
$result =$conn->query($sql); 

if($result){
	//echo "Record Deleted...";
	header("location:prescription.php");
}  else{
	echo "Sorry,Delete process failed...";
}}
else{
header("location:http:index.php");
}
?>