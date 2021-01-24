<?php
error_reporting(0);
$host = "localhost";
$user = "root";
$password = "";
$dbname = "data"; 
$con = mysqli_connect($host, $user, $password,$dbname);
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
session_start();
if(!isset($_SESSION['channel']))
{
header("location:signin.html");
}
$username=$_SESSION['channel'];
$branch=$_POST['branch'];
$aboutme=$_POST['aboutme'];
$colgname=$_POST['colgname'];
$colgstart=$_POST['colgstart'];
$colgend=$_POST['colgend'];
$aboutcolg=$_POST['aboutcolg'];
$schoolname=$_POST['schoolname'];
$schoolstart=$_POST['schoolstart'];
$schoolend=$_POST['schoolend'];
$aboutschool=$_POST['aboutschool'];
$ht=$_POST['ht'];
$cs=$_POST['cs'];
$jq=$_POST['jq'];
$ph=$_POST['ph'];
$my=$_POST['my'];
$an=$_POST['an'];
$ru=$_POST['ru'];
$ja=$_POST['ja'];
$wo=$_POST['wo'];
$de=$_POST['de'];
$py=$_POST['py'];
$jobname=$_POST['jobname'];
$companyname=$_POST['companyname'];
$jobstart=$_POST['jobstart'];
$jobend=$_POST['jobend'];
$aboutjob=$_POST['aboutjob'];
if(isset($_POST['submit'])){
  $name = $_FILES['file']['name'];
  $target_dir = "files/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $extensions_arr = array("jpg","jpeg","png","gif");
 if( in_array($imageFileType,$extensions_arr) ){
    $query = "insert into images values('','$name','$username','$branch','$aboutme','$colgname','$colgstart','$colgend','$aboutcolg','$schoolname','$schoolstart','$schoolend',
	'$aboutschool','$ht','$cs','$jq','$ph','$my','$an','$ru','$ja','$wo','$de','$py','$jobname','$companyname','$jobstart','$jobend','$aboutjob')";
    mysqli_query($con,$query);
    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
	echo "<script>alert('Sucessfully Updated')</script>";
	header("Location:profile.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Details</title>
<link href="css/impact.css" rel="stylesheet" media="all">
</head>
<body>
<span style="float:right">
<a href="index.php" ><input type="button" value="BACK" class="btn btn--radius-2 btn--blue" /></a>
</span>
    <div class="page-wrapper bg-gra-02 p-t-100 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Details</h2>
                    <form method="POST" enctype='multipart/form-data' action="">
                            <div class="col-2">
							<div class="input-group">
                                    <label class="label">Branch</label>
                                    <input class="input--style-4" type="text" name="branch" required>
                                </div>
                                <div class="input-group">
                                    <label class="label">About Me</label>
                                    <textarea name="aboutme" rows="4" cols="60" required >
									</textarea>
                                </div>
								<h3> Education details</h3></br>
                                <div class="input-group">
                                    <label class="label">collge name</label>
                                    <input class="input--style-4" type="text" name="colgname" required>
                                </div>
								<div class="row row-space">
								<div class="col-2">
								<label class="label">Start year</label>
								<input class="input--style-4" type="tel" name="colgstart" pattern="[0-9]{4}" title="Enter the year" required>
								</div>
								<div class="col-2">
								<label class="label">End year</label>
								<input class="input--style-4" type="tel" name="colgend"  pattern="[0-9]{4}" title="Enter the year" required>
								</div>
							    </div>
								</br>
								<div class="input-group">
                                    <label class="label">About college</label>
                                    <textarea name="aboutcolg" rows="4" cols="60" required>
									</textarea>
                                </div>
                                <div class="input-group">
                                    <label class="label">school name</label>
                                    <input class="input--style-4" type="text" name="schoolname" required>
                                </div> 
								<div class="row row-space">
								<div class="col-2">
								<label class="label">Start year</label>
								<input class="input--style-4" type="text" name="schoolstart" pattern="[0-9]{4}"  title="Enter the year" required>
								</div>
								<div class="col-2">
								<label class="label">End year</label>
								<input class="input--style-4" type="text" name="schoolend" pattern="[0-9]{4}"  title="Enter the year" required>
								</div>
                                </div>
								</br>
								<div class="input-group">
                                    <label class="label">About school</label>
                                    <textarea name="aboutschool" rows="4" cols="60" required>
									</textarea>
                                </div>
								<h3>Skilss</h3><p>(in Percentage with symbol)</p></br>
								<div class="input-group">
                                    <label class="label">Html5</label>
                                    <input class="input--style-3" type="tel" name="ht"  pattern="[0-9]{2}+%"  title="Enter percentage" required></br>
									<label class="label">css3</label>
                                    <input class="input--style-3" type="tel" name="cs"  pattern="[0-9]{2}+%"  title="Enter percentage" required></br>
									<label class="label">jQuery</label>
                                    <input class="input--style-3" type="tel" name="jq"  pattern="[0-9]{2}+%"  title="Enter percentage" required></br>
									<label class="label">php</label>
                                    <input class="input--style-3" type="tel" name="ph"  pattern="[0-9]+%"  title="Enter percentage" required></br>
									<label class="label">MYSQL</label>
                                    <input class="input--style-3" type="tel" name="my"  pattern="[0-9]+%"  title="Enter percentage" required></br>
									<label class="label">AngularJS</label>
                                    <input class="input--style-3" type="tel" name="an"  pattern="[0-9]+%"  title="Enter percentage" required></br>
									<label class="label">Ruby</label>
                                    <input class="input--style-3" type="tel" name="ru"  pattern="[0-9]+%"  title="Enter percentage" required></br>
									<label class="label">Wordpress</label>
                                    <input class="input--style-3" type="tel" name="wo"  pattern="[0-9]+%"  title="Enter percentage" required></br>
									<label class="label">Design</label>
                                    <input class="input--style-3" type="tel" name="de"  pattern="[0-9]+%"  title="Enter percentage" required></br>
									<label class="label">Python</label>
                                    <input class="input--style-3" type="tel" name="py"  pattern="[0-9]+%"  title="Enter percentage" required></br>
									<label class="label">Java</label>
                                    <input class="input--style-3" type="tel" name="ja"  pattern="[0-9]+%"  title="Enter percentage" required></br>
                                </div> 
								<h3> Work Experience</h3></br>
								<div class="input-group">
                                    <label class="label">Job Post</label>
                                    <input class="input--style-4" type="text" name="jobname" required>
                                </div>
								<div class="input-group">
                                    <label class="label">Company name</label>
                                    <input class="input--style-4" type="text" name="companyname" required>
                                </div>
								<div class="row row-space">
								<div class="col-2">
								<label class="label">Start Job</label>
								<input class="input--style-4" type="text" name="jobstart" pattern="[0-9]{4}"  title="Enter the year" required>
								</div>
								<div class="col-2">
								<label class="label">End Job</label>
								<input class="input--style-4" type="text" name="jobend" pattern="[0-9]{4}"  title="Enter the year" required >
								</div>
                                </div>
                                <div class="input-group">
                                    <label class="label">About Job</label>
                                    <textarea name="aboutjob" rows="4" cols="60" required>
									</textarea>
                                </div>	
								<h3>Select Profile Photo</h3></br>
						<input type='file' name='file' required />
						</br></br></br>
						<div class="row row-space">
                        <input class="btn btn--radius-2 btn--blue" type='submit' value='SUBMIT' name='submit'/>&ensp;
						<input class="btn btn--radius-2 btn--blue" type='reset' value='RESET' name='reset'/>
						</div>
                        </div>
                        </div>						
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>