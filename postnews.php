<?php 
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
if(isset($_POST['submit'])){
  $username=$_SESSION['channel'];
  $title=$_POST['title'];
  $subject=$_POST['subject'];
  $comment=$_POST['comment'];
  $date=date("d");
  $month=mon();
  $name = $_FILES['file']['name'];
  $target_dir = "files/";
  $target_file = $target_dir . basename($_FILES["file"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $extensions_arr = array("jpg","jpeg","png","gif");
 if( in_array($imageFileType,$extensions_arr) ){
    $query = "insert into news values('','$name','$username','$title','$subject','$comment','$month','$date')";
    mysqli_query($con,$query);
    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
	echo "<script>alert('Sucessfully posted')</script>";
	header("Refresh:0.005;url='index.php'");
}
}
function mon(){
$monthNames = array("Jan", "Feb", "Mar", "Apr", "May", "Jun","Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
return ($monthNames[date("m")-1]);
}

?>
<html><head><title>Post</title>
<link href="css/impact.css" rel="stylesheet" media="all">
	<link rel="shortcut icon"  href="data:image/jpeg;base64,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">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script>
 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(500)
                        .height(300);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
<meta charset=utf-8 />
</head>

<body>
<span style="float:right">
<a href="index.php" ><input type="button" value="BACK" class="btn btn--radius-2 btn--blue" /></a>
</span>
    <div class="page-wrapper bg-gra-02 p-t-100 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <center><h2 style="font-family: sans-serif;">Post News</h2></center>
<form method="post" action="" enctype='multipart/form-data'autocomplete="off">
<center>
</br><h5>Upload Image</h5><input class="btn btn--radius-2 btn--blue" type='file' name='file' onchange="readURL(this);"/></br></br>
<div class="form-group">
    <img id="blah" src="#" onerror='this.src="img/undefined.jpg"' width="500" height="300"/></br>
	</br>
	<div class="form-group">
                  <input class="form-control" name="title" id="title" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter title'" placeholder = 'Enter title' required></br>
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject' required>
                </div>
    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="5" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Comment'" placeholder = 'Comment' required></textarea>
 </div>
<input class="btn btn--radius-2 btn--blue" type='submit' value='SUBMIT' name='submit'/>
</body>
</html>
