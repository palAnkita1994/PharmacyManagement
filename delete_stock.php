<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$user=$_SESSION['username'];
$id=$_GET['stock_id'];

$sql="DELETE FROM stock WHERE stock_id='$id'";
$result =$conn->query($sql); 

if($result){
	//echo "Record Deleted...";
	header("location:stock_pharmacist.php");
}  else{
	echo "Sorry,Delete process failed...";
}}
else{
header("location:http:index.php");
}
?>