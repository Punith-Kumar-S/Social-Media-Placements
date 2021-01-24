<?php
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
}
$res1=mysqli_query($conn,"select * from data");
while($row = mysqli_fetch_array($res1))
{
if($row[0]==$_SESSION['channel']){
$do=$row['name'];
}}
$imag= array();
$name= array();
$branch= array();
$count=0;
$res2=mysqli_query($conn,"select * from images");
while($row1 = mysqli_fetch_array($res2))
{
array_push($imag,$row1['name']);
array_push($branch,$row1['branch']);
$count=$count+1;
}
$res3=mysqli_query($conn,"select * from data");
while($row2 = mysqli_fetch_array($res3))
{
array_push($name,$row2['name']);
}
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>RecruKt</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon"  href="data:image/jpeg;base64,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">
	<link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
	

</head>

<body>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2" width="50" height="50">
                             
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
										<li></li>
                                            <li><a href="profile.php">Profile</a>
                                            </li>
                                            <li><a href="box.php">Queries</a>
                                            </li>
											<li><a href="news.php">News</a>
                                            </li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="d-none d-lg-block">
                                        <a class="boxed-btn3" href="postnews.php">Post News</a>&ensp;&ensp;&ensp;&ensp;
                                        <a href="signin.html"><input type="button" value="LOGOUT" class="boxed-btn3" style="float:right"  /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text">
                            <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">Welcome to Placements <?php echo $do ?> </h5>
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Dream Big in Life</h3>
                            <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">We provide Infromation and news of placements</p>
                            <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                <a href="pdf.php" class="boxed-btn3">Upload your Resume</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
            <img src="img/banner/illustration.png" alt="">
        </div>
    </div>
    <div class="popular_catagory_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title mb-40">
                        <h3>Popolar Categories</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="http://newhorizonindia.edu/nhengineering/information-science-engineering/"><h4>Information Science Engineering</h4></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="http://newhorizonindia.edu/nhengineering/department-of-computer-science-engineering/"><h4>Computer Science Engineering</h4></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="http://newhorizonindia.edu/nhengineering/mechanical-engineering/"><h4>Mechanical Engineering</h4></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="http://newhorizonindia.edu/nhengineering/automobile-engineering/"><h4>Automobile Engineering</h4></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="http://newhorizonindia.edu/nhengineering/department-of-electrical-and-electronics-engineering/"><h4>Electrical and Electronics Engineering</h4></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="http://newhorizonindia.edu/nhengineering/department-of-civil-engineering/"><h4>Civil Engineering</h4></a>
                    </div>
                </div>
				 <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="http://newhorizonindia.edu/nhengineering/department-of-electronics-and-communication-engineering/"><h4>Electrical and Communication Engineering</h4></a>
                    </div>
                </div>
				 <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_catagory">
                        <a href="http://newhorizonindia.edu/nhengineering/artificial-intelligence-machine-learning/"><h4>Artificial Intelligence and Machine Learning</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="job_listing_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section_title">
                        <h3>Job Listing</h3>
                    </div>
                </div>
            </div>
            <div class="job_lists">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/svg_icon/1.svg" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href=""><h4>Software Engineer</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href=""> <i class="ti-heart"></i> </a>
                                    <a href="https://www.naukri.com/software-jobs" class="boxed-btn3">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/svg_icon/2.svg" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href=""><h4>Digital Marketer</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                    <a href="https://www.naukri.com/digital-marketing-jobs" class="boxed-btn3">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/svg_icon/3.svg" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href=""><h4>Wordpress Developer</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                    </div>
                                </div>
                            </div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                    <a href="https://www.naukri.com/wordpress-developer-jobs" class="boxed-btn3">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/svg_icon/4.svg" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href=""><h4>Visual Designer</h4></a>
                                    <div class="links_locat d-flex align-items-center">
                                </div>
                            </div>
							</div>
                            <div class="jobs_right">
                                <div class="apply_now">
                                    <a class="heart_mark" href="#"> <i class="ti-heart"></i> </a>
                                    <a href="https://www.naukri.com/visual-designer-jobs" class="boxed-btn3">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
    <div class="featured_candidates_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3>Featured Candidates</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="candidate_active owl-carousel">
					<?php for($i=0;$i<$count;$i++){ ?>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="files/<?php echo $imag[$i]; ?>" alt="" width="100" height="100" class="profile-thumb">
                            </div>
                            <a href="#"><h4><?php echo $name[$i]; ?></h4></a>
                            <p><?php echo $branch[$i]; ?></p>
                        </div>
						<?php } ?>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="img/candiateds/5.png" alt="">
                            </div>
                            <a href="#"><h4>Markary Jondon</h4></a>
                            <p>Civil Engineer</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="img/candiateds/6.png" alt="">
                            </div>
                            <a href="#"><h4>Markary Jondon</h4></a>
                            <p>Electrical and Communication Engineer</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="img/candiateds/7.png" alt="">
                            </div>
                            <a href="#"><h4>Markary Jondon</h4></a>
                            <p>Computer Engineer</p>
                        </div>
                        <div class="single_candidates text-center">
                            <div class="thumb">
                                <img src="img/candiateds/8.png" alt="">
                            </div>
                            <a href="#"><h4>Markary Jondon</h4></a>
                            <p>Civil Engineer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top_companies_area">
        <div class="container">
            <div class="row align-items-center mb-40">
                <div class="col-lg-6 col-md-6">
                    <div class="section_title">
                        <h3>Top Companies</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_company">
                        <div class="thumb">
                            <img src="https://media-exp1.licdn.com/dms/image/C560BAQF0vXIfG2vpKg/company-logo_200_200/0?e=2159024400&v=beta&t=9wjQwc99VGC1yMOLpyh6Yj6JCEAfMyHbmmSs0wUz56M" alt="" width="50" height="50">
                        </div>
                        <a href="https://en.wikipedia.org/wiki/Capgemini"><h3>Capgemini</h3></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_company">
                        <div class="thumb">
                            <img src="https://yt3.ggpht.com/a/AATXAJzaLU3e7BDQflShI1Qh2PSJ8ehUJN9kkA0VnD8n=s176-c-k-c0x00ffffff-no-rj-mo" alt="" width="50" height="50">
                        </div>
                        <a href="https://www.lowes.com/"><h3>Lowe's</h3></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_company">
                        <div class="thumb">
                            <img src="https://bsmedia.business-standard.com/media-handler.php?mediaPath=http://bsmedia.business-standard.com/_media/bs/img/article/2015-08/11/full/1439286359-1482.jpg&width=1200" alt="" width="50" height="50">
                        </div>
                        <a href="https://www.larsentoubro.com/"><h3>L&T Infotech</h3></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3 col-md-6">
                    <div class="single_company">
                        <div class="thumb">
                            <img src="data:image/png;base64,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" alt="" width="50" height="50">
                        </div>
                        <a href="https://www.infosys.com/"h3>Infosys</h3></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center"></br></br>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
                        </p><p><ul class="fh5co-social-icons">
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
    </footer>
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
</body>

</html>