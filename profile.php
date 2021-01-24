<?php
error_reporting(0);
$dbhost="localhost";  
$dbuser="root";
$dbpass="";
$db="data";
$do="";
$conn=new mysqli($dbhost,$dbuser, $dbpass,$db) or die();
session_start();
if(!isset($_SESSION['channel']))
{
header("location:signin.html");
}
else{
$res2=mysqli_query($conn,"select * from images");
while($row = mysqli_fetch_array($res2))
{
if($row['username']==$_SESSION['channel']){
$name=$row['name'];
$branch=$row['branch'];
$aboutme=$row['aboutme'];
$colgname=$row['colgname'];
$colgstart=$row['colgstart'];
$colgend=$row['colgend'];
$aboutcolg=$row['aboutcolg'];
$schoolname=$row['schoolname'];
$schoolstart=$row['schoolstart'];
$schoolend=$row['schoolend'];
$aboutschool=$row['aboutschool'];
$ht=$row['ht'];
$cs=$row['cs'];
$jq=$row['jq'];
$ph=$row['ph'];
$my=$row['my'];
$an=$row['an'];
$ru=$row['ru'];
$ja=$row['ja'];
$wo=$row['wo'];
$de=$row['de'];
$py=$row['py'];
$jobname=$row['jobname'];
$companyname=$row['companyname'];
$jobstart=$row['jobstart'];
$jobend=$row['jobend'];
$aboutjob=$row['aboutjob'];
}}
if($colgname==null){
header("Location:resumedetails.php");
	
}
$res1=mysqli_query($conn,"select * from data");
while($row1 = mysqli_fetch_array($res1))
{
if($row1[0]==$_SESSION['channel']){
$nam=$row1['name'];
$phone=$row1['phone'];
$ema=$row1['email'];
$bir=$row1['birthday'];
}}
$dir_path="files/";

if(is_dir($dir_path)){
$files =scandir($dir_path);}
}
$res2=mysqli_query($conn,"select * from resume");
   while($ro = mysqli_fetch_array($res2))
     {
	  if($ro[2]==$_SESSION['channel']){
	  $want=1;
	  $remname=$ro['name'];
	 }
	 }
	 if($want==1){}
	 else{
	    header("location:pdf.php");
	 }

?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	<link rel="shortcut icon"  href="data:image/jpeg;base64,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">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style1.css">
	<script src="js/modernizr1-2.6.2.min.js"></script>
	<style>
.btn {
  display: inline-block;
  line-height: 50px;
  padding: 0 50px;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  transition: all 0.4s ease;
  cursor: pointer;
  font-size: 18px;
  color: blue;
  font-family: "Poppins", "Arial", "Helvetica Neue", sans-serif;
}

.btn--radius {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}</style>
	</head>
	<body>
	<div class="fh5co-loader"></div>
	<div id="page">	
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(https://i.ytimg.com/vi/uNCr7NdOJgw/maxresdefault.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<div class="profile-thumb" style="background: url('files/<?php echo $name?>');"></div>
							<h1><span><?php echo $nam ?></span></h1>
							<h3><span><?php echo $branch ?></span></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header></br></br>
    <span style="float:right">
<a href="index.php" ><input type="button" value="BACK" class="btn btn--radius-2 btn--blue" /></a>
</span>
	<div id="fh5co-about" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>About Me</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="info">
						<li><span class="first-block">Full Name:</span><span class="second-block"><?php echo $nam ?></span></li>
						<li><span class="first-block">Phone:</span><span class="second-block"><?php echo $phone ?></span></li>
						<li><span class="first-block">Email:</span><span class="second-block"><?php echo $ema ?></span></li>
						<li><span class="first-block">Birthday:</span><span class="second-block"><?php echo $bir ?></span></li></br></br>
					</ul></br>
					<center><a href="files/<?php echo $remname ?>" ><b style="font-size:25px;text-decoration:underline">Resume</b></a></center>
				</div>
				<div class="col-md-8">
					<h2>Hello There!</h2>
					<p><?php echo $aboutme ?></P>
					</div>
			</div>
		</div>
	</div>

	<div id="fh5co-resume" class="fh5co-bg-color">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>My Resume</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline">
						<li class="timeline-heading text-center animate-box">
							<div><h3>Work Experience</h3></div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title"><?php echo $jobname ?></h3>
									<span class="company"><?php echo $companyname ?> - <?php echo $jobstart ?> - <?php echo $jobend ?></span>
								</div>
								<div class="timeline-body">
									<p><?php echo $aboutjob ?></p>
								</div>
							</div>
						</li>
						

						<br>
						<li class="timeline-heading text-center animate-box">
							<div><h3>Education</h3></div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">College</h3>
									<span class="company"> <?php echo $colgname ?> Year - <?php echo $colgstart ?> - <?php echo $colgend ?></span>
								</div>
								<div class="timeline-body">
									<p><?php echo $aboutcolg ?></p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">School</h3>
									<span class="company"><?php echo $schoolname ?> Year - <?php echo $schoolstart ?> - <?php echo $schoolend ?></span>
								</div>
								<div class="timeline-body">
									<p><?php echo $aboutschool ?></p>
								</div>
							</div>
						</li>
			    	</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-skills" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Skills</h2>
				</div>
			</div>
			<div class="row row-pb-md">
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="<?php echo $ht ?>"><span><strong>HTML5</strong><?php echo $ht ?></span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="<?php echo $cs ?>"><span><strong>CSS3</strong><?php echo $cs ?></span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="<?php echo $jq ?>"><span><strong>jQuery</strong><?php echo $jq ?></span></div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="<?php echo $ph ?>"><span><strong>PHP</strong><?php echo $ph ?></span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="<?php echo $my ?>"><span><strong>MySQL</strong><?php echo $my ?></span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="<?php echo $an ?>"><span><strong>AngularJS</strong><?php echo $an ?></span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="<?php echo $ru ?>"><span><strong>Ruby</strong><?php echo $ru ?></span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="<?php echo $ja ?>"><span><strong>Java</strong><?php echo $ja ?></span></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="progress-wrap">
						<h3><span class="name-left">HTML5/CSS3</span><span class="value-right"><?php echo $ht ?></span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $ht ?>">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">WordPress</span><span class="value-right"><?php echo $wo ?></span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $wo ?>">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">PHP</span><span class="value-right"><?php echo $ph ?></span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $ph ?>">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Java</span><span class="value-right"><?php echo $ja ?></span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-4 progress-bar-striped active" role="progressbar"
						  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $ja ?>">
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="progress-wrap">
						<h3><span class="name-left">Design</span><span class="value-right"><?php echo $de ?></span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar"
						  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $de ?>">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Ruby</span><span class="value-right"><?php echo $ru ?></span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-striped active" role="progressbar"
						  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $ru ?>">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Python</span><span class="value-right"><?php echo $py ?></span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $py ?>">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">jQuery</span><span class="value-right"><?php echo $jq ?></span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $jq ?>">
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
					<p>
						<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-twitter2"></i></a></li>
									<li><a href="#"><i class="icon-facebook2"></i></a></li>
									<li><a href="#"><i class="icon-linkedin2"></i></a></li>
									<li><a href="#"><i class="icon-dribbble2"></i></a></li>
								</ul>
							</p>
				</div>
			</div>
		</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	<script src="js/jquery1.min.js"></script>
	<script src="js/jquery1.easing.1.3.js"></script>
	<script src="js/bootstrap1.min.js"></script>
	<script src="js/jquery1.waypoints.min.js"></script>
	<script src="js/jquery1.stellar.min.js"></script>
	<script src="js/jquery1.easypiechart.min.js"></script>
	<script src="js/google_map.js"></script>
	<script src="js/main2.js"></script>

	</body>
</html>

