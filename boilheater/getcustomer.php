<?php

$con=mysqli_connect("localhost","root","");
//or die("Access denied");
if(!$con){
    echo 'not connected';
}
$res=mysqli_select_db($con,"boilheater");
if(!$res){
echo "Connetion Faliur";
}else{
    //echo"Connected";
}

 echo  '<center><h1>Customers</h1><br></center>';

//Showing estate customer table 
$query1="SELECT * FROM `tdds_estatecustomer`";

if($is_query_run = mysqli_query($con,$query1)){
    echo  '<center><h3>Estate Customer</h3><br></center>';
    echo    '<table border="1" style="width:750" "cellspacing:1" "cellspadding:3" align="center""><tr><th>Customer ID</th><th>Customer Name</th><th>Customer Surname</th><th>Customer Email</th><th>Customer Mobile Number</th><th>Company Number</th><th>Password</th><th>Staff ID</th></tr>';
    while($query_execute=mysqli_fetch_assoc($is_query_run)){
        echo '<tr><td>'.$query_execute['custId'].'</td><td>'.$query_execute['custName'].'</td><td>'.$query_execute['custSurname'].'</td><td>'.$query_execute['custEmail'].'</td><td>'.$query_execute['custMobileNo'].'</td><td>'.$query_execute['companyName'].'</td><td>'.$query_execute['password'].'</td><td>'.$query_execute['staffId'].'</td></tr>';
      
    }
    echo '</table><br><h2>*********************************************************************************************************************************************</h2><br>';
    
}else{
    echo "query not executed<br>";
    
}
//Showing individual customer table 
$query2="SELECT * FROM `tdds_individualcustomer`";

if($is_query_run = mysqli_query($con,$query2)){
    echo  '<center><h3>Individual Customer</h3><br></center>';
    echo    '<table border="1" style="width:750" "cellspacing:1" "cellspadding:3" align="center""><tr><th>Customer ID</th><th>Customer Name</th><th>Customer Surname</th><th>Customer Email</th><th>Customer Mobile Number</th><th>Date of Birth</th><th>Secret Code Number</th><th>Staff ID</th></tr>';
    while($query_execute=mysqli_fetch_assoc($is_query_run)){
        echo '<tr><td>'.$query_execute['custId'].'</td><td>'.$query_execute['custName'].'</td><td>'.$query_execute['custSurname'].'</td><td>'.$query_execute['custEmail'].'</td><td>'.$query_execute['custMobileNo'].'</td><td>'.$query_execute['DOB'].'</td><td>'.$query_execute['secretCodeNb'].'</td><td>'.$query_execute['staffId'].'</td></tr>';
      
    }
    echo '</table><br><h2>*********************************************************************************************************************************************</h2>';
    
}else{
    echo "query not executed<br>";
    
}

?>