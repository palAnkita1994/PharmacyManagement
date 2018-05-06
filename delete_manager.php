<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$user=$_SESSION['username'];
$mid=$_GET['manager_id'];
$sql="DELETE FROM manager WHERE manager_id='$mid'";
$result =$conn->query($sql); 

if($result){
	//echo "Record Deleted...";
	header("location:admin_manager.php");
}  else{
	echo "Sorry,Delete process failed...";
}}
else{
header("location:http:index.php");
}
?>