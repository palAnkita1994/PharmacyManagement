<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$user=$_SESSION['username'];
$pid=$_GET['pharmacist_id'];
$sql="DELETE FROM pharmacist WHERE pharmacist_id='$pid'";
$result =$conn->query($sql); 

if($result){
	//echo "Record Deleted...";
	header("location:admin_pharmacist.php");
}  else{
	echo "Sorry,Delete process failed...";
}}
else{
header("location:http:index.php");
}
?>