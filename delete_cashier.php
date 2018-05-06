<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$user=$_SESSION['username'];
$cid=$_GET['cashier_id'];
$sql="DELETE FROM cashier WHERE cashier_id='$cid'";
$result =$conn->query($sql); 

if($result){
	//echo "Record Deleted...";
	header("location:admin_cashier.php");
}  else{
	echo "Sorry,Delete process failed...";
}}
else{
header("location:http:index.php");
}
?>