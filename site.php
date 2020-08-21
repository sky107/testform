<?php
if($_POST['name'])
{
$server="localhost";
$username="root";
$password="";
$dbname="ndb";
$con=mysqli_connect($server,$username,$password,$dbname);
if(!$con)
{
    die("Connection Failed : ".mysqli_connect_error());
}
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$sql="INSERT INTO final(name,email,phone)
VALUES('$name','$email','$phone');";
if($con->query($sql)==true)
{   
   echo "Your Data has been successfully submitted";
}
else
{
    echo "Error $sql<br> con->error";
}

$con->close();
}
else
header("location:index.html");
?>
