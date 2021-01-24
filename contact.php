<!doctype html>
<?php
error_reporting(0);
if(isset($_POST['submit'])){
         $to = "punith1452000@gmail.com";
         $subject = $_POST['subject'];
         
         $message =$_POST['comment'];
         $from=$_POST['email'];
         $header = "From:".$from."\r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
}
      ?>
      
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>

<body>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="profile.php">Profile</a>
                                            </li>
                                            <li><a href="box.php">Queries</a>
                                            </li>
											<li><a href="news.php">News</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <section class="contact-section section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="" method="post" id="contactForm" >
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="comment" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message' required></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name' required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address' required>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject' required>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="submit" name="submit" class="button button-contactForm btn_4 boxed-btn" value="Send Message"></input>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>New Horizon College Of Engineering.</h3>
              <p>Bangalore-560103</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>Phone Number</h3>
              <p>+91-80-6629 7777/+91-9740076446</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>assistant@newhorizonindia.edu</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <footer class="footer">
        <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
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