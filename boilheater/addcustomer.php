<?php

$con=mysqli_connect("localhost","root","tharindu");
//or die("Access denied");
if(!$con){
    echo 'not connected';
}
$res=mysqli_select_db($con,"id2587951_boilheater");
if(!$res){
echo "Connetion Faliur";
}else{
    echo"Connected";
}

$item1=$_POST['custId'];
$item2=$_POST['staffId'];
$item3=$_POST['custName'];
$item4=$_POST['custSurname'];
$item5=$_POST['custEmail'];
$item6=$_POST['custMobileNo'];

$item7=$_POST['companyName'];
$item8=$_POST['password'];

$item9=$_POST['DOB'];
$item10=$_POST['secretCodeNb'];

if(isset($_POST['customer'])){
    $customer = $_POST['customer'];
}else{
    $customer = NULL;
}

if($customer != NULL){
    if($customer == "estate"){
    
        $query="INSERT INTO `tdds_estatecustomer` (`custId`, `custName`, `custSurname`, `custEmail`, `custMobileNo`, `companyName`, `password`, `staffId`) values('$item1','$item3','$item4','$item5','$item6','$item7','$item8','$item2')";
    
    }else{
        $query="insert into `tdds_individualcustomer`(custId,custName,custSurname,custEmail,custMobileNo,DOB,secretCodeNb,staffId) values('$item1','$item3','$item4','$item5','$item6','$item9','$item10','$item2')";
    }
    
}else{
    echo "You must select";
}

if(!mysqli_query($con,$query)){
    echo 'Not Inserted';
}else{
    echo 'Inserted';
}
    
header("refresh:2, url=addcustomer.html");

?>
