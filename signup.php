<?php
$dbhost="localhost";  
$dbuser="root";
$dbpass="";
$db="data";
$do=0;
$conn=new mysqli($dbhost,$dbuser, $dbpass,$db) or die();
$user=$_POST["username"];
$pass=$_POST["password"];
$cpass=$_POST["confirmpassword"];
$name=$_POST["name"];
$birth=$_POST["birthday"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$res1=mysqli_query($conn,"select * from data");
while($row = mysqli_fetch_array($res1))
{
if(($user==$row[0])){
echo '<script>alert("Username is already exists")</script>';
header("Refresh:0.05;url='signup.html'");
exit;
}}
if($pass!=$cpass){
echo '<script>alert("Password is not matching")</script>';
header("Refresh:0.05;url='signup.html'");
}
else if($gender!="Male" && $gender!="Female" && $gender!="Other" && (!isset($gender)))
{
echo '<script>alert("Check Gender")</script>';
header("Refresh:0.05;url='signup.html'");
}
else{
$res=mysqli_query($conn,"insert into data values('$user','$pass','$name','$birth','$gender','$email','$phone')");
echo '<script>alert("Successfully Registered")</script>';
header("Refresh:0.05;url='signin.html'");
$conn -> close();
} 
?>
