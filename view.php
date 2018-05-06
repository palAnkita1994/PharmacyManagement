<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){

$username=$_SESSION['username'];
}else{
header("location:index.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php $user?> Pharmacy System</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="style/table.css" type="text/css" media="screen" /> 
<script src="js/function1.js" type="text/javascript"></script>
   <style>#left-column {height: 477px;}
 #main {height: 477px;}
</style>
</head>
<body>
<div id="content">
<div id="header">
<h1><a href="#"><img src="images/hd_logo.jpg"></a> Pharmacy System</h1></div>
<div id="left_column">
<div id="button">
		<ul>
			<li><a href="manager.php">Dashboard</a></li>
			<li><a href="view.php">View Users</a></li>
			<li><a href="view_prescription.php">View Prescriptions</a></li>
			<li><a href="stock.php">Manage Stock</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>	
</div>
</div>
<div id="main">
<div id="tabbed_box" class="tabbed_box">  
    <h4>View users</h4> 
<hr/>	
    <div class="tabbed_area">  
      
        <ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">Pharmacist </a></li>  
            <li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">Cashier</a></li>
			<li><a href="javascript:tabSwitch('tab_3', 'content_3');" id="tab_3">Manager</a></li>
              
        </ul>  
          
        <div id="content_1" class="content">  
<?php 
		/* 
		View
        Displays all data from 'Pharmacist' table
		*/
        // connect to the database
        include_once('connect_db.php');
       // get results from database
       $sql_p ="SELECT * FROM pharmacist";
      $result =$conn->query($sql_p);
		// display data in table
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>Firstname</th> <th>Lastname </th> <th>Staff ID</th><th>Phone</th><th>Email</th><th>Username </th></tr>";
        // loop through results of database query, displaying them in the table
        if($result->num_rows>0){
        while($row = $result->fetch_assoc()) {
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['first_name'] . '</td>';
				echo '<td>' . $row['last_name'] . '</td>';
				echo '<td>' . $row['staff_id'] . '</td>';
				echo '<td>' . $row['phone'] . '</td>';
				echo '<td>' . $row['email'] . '</td>';
				echo '<td>' . $row['username'] . '</td>';
			} 
        }
        // close table>
        echo "</table>";
?> 
        </div>  
        <div id="content_2" class="content">  
		          <?php
			  
		/* 
		View
        Displays all data from 'Cashier' table
		*/

        // connect to the database
        include_once('connect_db.php');

        // get results from database
		
       $sql_c ="SELECT * FROM cashier";
      $result =$conn->query($sql_c);
				
					    
        // display data in table
        
        echo "<table border='1' cellpadding='5' >";
         echo "<tr><th>Firstname</th> <th>Lastname </th> <th>Staff ID</th><th>Phone</th><th>Email</th><th>Username </th></tr>";

        // loop through results of database query, displaying them in the table
        if($result->num_rows>0){
        while($row = $result->fetch_assoc()) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['first_name'] . '</td>';
				echo '<td>' . $row['last_name'] . '</td>';
				echo '<td>' . $row['staff_id'] . '</td>';
				echo '<td>' . $row['phone'] . '</td>';
				echo '<td>' . $row['email'] . '</td>';
				echo '<td>' . $row['username'] . '</td>';
				
		 } 
        }
        // close table>
        echo "</table>";
?>
        </div>  
		 <div id="content_3" class="content">  
		        <?php 
			  
		/* 
		View
        Displays all data from 'Manager' table
		*/

        // connect to the database
        include_once('connect_db.php');

        // get results from database
		
          $sql_m ="SELECT * FROM manager";
      $result =$conn->query($sql_m);
				
					    
        // display data in table
        
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>Firstname</th> <th>Lastname </th> <th>Staff ID</th><th>Phone</th><th>Email</th><th>Username </th></tr>";

        // loop through results of database query, displaying them in the table
       if($result->num_rows>0){
        while($row = $result->fetch_assoc()) {
                
                // echo out the contents of each row into a table
                echo "<tr>";
                
                echo '<td>' . $row['first_name'] . '</td>';
				echo '<td>' . $row['last_name'] . '</td>';
				echo '<td>' . $row['staff_id'] . '</td>';
				echo '<td>' . $row['phone'] . '</td>';
				echo '<td>' . $row['email'] . '</td>';
				echo '<td>' . $row['username'] . '</td>';
				
		 } 
        }
        // close table>
        echo "</table>";
?> 
        </div> 
    </div>  
</div>
</div>
<div id="footer" align="Center"> Pharmacy Sys 2018.</div>
</div>
</body>
</html>