<?php
$dbhost="localhost";  
$dbuser="root";
$dbpass="";
$db="data";
$do=0;
$conn=new mysqli($dbhost,$dbuser, $dbpass,$db) or die();
session_start();
if(isset($_SESSION['username']))
{
header("location:signin.html");
}
else{
$_SESSION['channel']=$_POST['username'];
}

$x=$_POST["username"];
$y=$_POST["password"];
$res1=mysqli_query($conn,"select * from data");
function add($do){
if(isset($do)){
}
if($do){
echo '<script>alert("Signin Successfully")</script>';
header("Refresh:0.05;url='index.php'");
exit;
}
else{
echo '<script>alert("Username not Exist")</script>';
header("Refresh:0.05;url='signin.html'");
exit;
}}
while($row = mysqli_fetch_array($res1))
{
if(($x==$row[0])&&($y==$row[1])){
$do=1;
}}
add($do);
$conn -> close(); 
?>
<html>
<body>
<form method="post" action="index.php">
<input type="text" name="username" value="<?php $X ?>"/>
</form>
</body>
<html>

