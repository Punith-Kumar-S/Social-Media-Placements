<?php
error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$dbname = "data"; 
$con = mysqli_connect($host, $user, $password,$dbname);
session_start();
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
if(!isset($_SESSION['channel']))
{
header("location:signin.html");
}
$na=$_SESSION['channel'];
$res1=mysqli_query($con,"select * from resume");
   while($row1 = mysqli_fetch_array($res1))
     {
	  if($row1[2]==$_SESSION['channel']){
	  echo "<script>alert('Resume Already Uploaded ')</script>";
	  header("Refresh:0.0005;url='profile.php'");
	  exit;
	 }}
if(isset($_POST['but_upload'])){
 
  $name = $_FILES['file']['name'];
  $target_dir = "files/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $extensions_arr = array('pdf');
  if( in_array($imageFileType,$extensions_arr) ){
    $query = "insert into resume(name,username) values('".$name."','$na')";
    mysqli_query($con,$query);
    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
	echo "<script>alert('Sucessfully Updated')</script>";
	header("Refresh:0.005;url='index.php'");
  }
else{
	echo "<script>alert('PDF format only')</script>";
}
}
?>
<html><head><title>Resume</title>
<link href="css/impact.css" rel="stylesheet" media="all">
</head>
<body>
    <div class="page-wrapper bg-gra-02 p-t-100 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <center><h1 class="title">Upload Resume</h1></center>
<form method="post" action="" enctype='multipart/form-data'>
<center>
</br><input class="btn btn--radius-2 btn--blue" type='file' name='file'/></br></br>
<input class="btn btn--radius-2 btn--blue" type='submit' value='SUBMIT' name='but_upload'/>
<?php
$dir_path="files/";
$extensions_array =array('pdf');
if(is_dir($dir_path)){
$files =scandir($dir_path);
echo "</br></br><a href='$dir_path$name' /></br>Preview</br>";}
?>
</center>
</form>
</div>
            </div>
        </div>
    </div>
</body>
</html>