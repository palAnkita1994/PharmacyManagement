<?php
session_start();
include_once 'connect_db.php';
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$position=$_POST['position'];

switch($position){
case 'Admin':
$sql="SELECT admin_id, username FROM admin WHERE username='$username' AND password='$password'";
$result =$conn->query($sql); 
$row_cnt=$result->num_rows;

if($row_cnt>0)  {
$_SESSION["username"]=$username;
header('location:admin.php');
}else{
echo "<font color=red>Invalid login Try Again</font>";
}
break;
case 'Pharmacist':
$sql="SELECT pharmacist_id, first_name,last_name,staff_id,username FROM pharmacist WHERE username='$username' AND password='$password'";
$result =$conn->query($sql); 
$row_cnt=$result->num_rows;

if($row_cnt>0)  {
$_SESSION["username"]=$username;
header('location:pharmacist.php');
}else{
echo "<font color=red>Invalid login Try Again</font>";
}
break;
case 'Cashier':
$sql="SELECT cashier_id, first_name,last_name,staff_id,username FROM cashier WHERE username='$username' AND password='$password'";
$result =$conn->query($sql); 
$row_cnt=$result->num_rows;

if($row_cnt>0)  {
$_SESSION["username"]=$username;
header('location:cashier.php');
}else{
echo "<font color=red>Invalid login Try Again</font>";
}
break;
case 'Manager':
$sql="SELECT manager_id, first_name,last_name,staff_id,username FROM manager WHERE username='$username' AND password='$password'";
$result =$conn->query($sql); 
$row_cnt=$result->num_rows;

if($row_cnt>0)  {
$_SESSION["username"]=$username;
header('location:manager.php');
}else{
echo "<font color=red>Invalid login Try Again</font>";
}
break;

}}
echo <<<LOGIN


<!DOCTYPE html>
<html>
<head>
<title>Pharmacy System</title>
<link rel="stylesheet" type="text/css" href="style/mystyle_login.css">
<style>
#content {
height: auto;
}
#main{
height: auto;}
</style>
</head>
<body>
<div id="content">
<div id="header">
<h1>Pharmacy System </h1>
</div>
<div id="main">

  <section class="container">
  
     <div class="login">
   <img src="images/hd_logo.jpg">
      <h1>Login here</h1>
    
      <form method="post" action="index.php">
     <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
    <p><select name="position">
    <option>--Select position--</option>
      <option>Admin</option>
      <option>Pharmacist</option>
      <option>Cashier</option>
      <option>Manager</option>
      </select></p>
        <p class="submit"><input type="submit" name="submit" value="Login"></p>
      </form>
    </div>
    </section>
</div>
<div id="footer" align="Center"> Pharmacy System 2018.</div>
</div>
</body>
</html>
LOGIN;
?>