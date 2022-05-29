<?php
    if (isset ($_POST['Test_name'])){
    


    $Test_name = $_POST['Test_name'];
    $Test_name = trim($Test_name);

    $exam_type = $_POST['exam_type'];
    $exam_type = trim($exam_type);

    $test_date = $_POST['test_date'];
    $test_date = trim($test_date);

    $exam_city = $_POST['exam_city'];
    $exam_city = trim($exam_city);

    $dream_country = $_POST['dream_country'];
    $dream_country = trim($dream_country);


    $dob = $_POST['dob'];
    $dob = trim($dob);


    $current_level = $_POST['current_level'];
    $current_level = trim($current_level);

    $study_level = $_POST['study_level'];
    $study_level = trim($study_level);

    $desire = $_POST['desire'];
    $desire = trim($desire);

    $prospective_university = $_POST['prospective_university'];
    $prospective_university = trim($prospective_university);

    $title = $_POST['title'];
    $title = trim($title);

    $firstnameonpassport = $_POST['firstnameonpassport'];
    $firstnameonpassport = trim($firstnameonpassport);

    $surname = $_POST['surname'];
    $surname = trim($surname);

    $gender = $_POST['gender'];
    $gender = trim($gender);

    $passport_number = $_POST['passport_number'];
    $passport_number = trim($passport_number);

    $expiration = $_POST['expiration'];
    $expiration = trim($expiration);

    $telephone = $_POST['telephone'];
    $telephone = trim($telephone);

    $additional_message = $_POST['additional_message'];
    $additional_message = trim($additional_message);

    $address = $_POST['address'];
    $address = trim($address);

    $nationality = $_POST['nationality'];
    $nationality = trim($nationality);

    $email = $_POST['email'];
    $email = trim($email);

///send message

$to = 'kunkkykukky@gmail.com';
$subject = "Online Registration Information Delivery";

$message = "
<html>
<head>
<title>Someone Just registered on the websites</title>
</head>
<body>
<p>Hello! </p>

<p>Below are the information registered </p>
<p>
**********************************************************
</p>

<p><strong> phase : ".$Test_name. "</strong> </p><br>
<p><strong> phase : ".$exam_type. "</strong> </p><br>
<p><strong> phase : ".$test_date. "</strong> </p><br>
<p><strong> phase : ".$exam_city. "</strong> </p><br>
<p><strong> phase : ".$dream_country. "</strong> </p><br>
<p><strong> phase : ".$dob. "</strong> </p><br>
<p><strong> phase : ".$current_level. "</strong> </p><br>
<p><strong> phase : ".$study_level. "</strong> </p><br>
<p><strong> phase : ".$desire. "</strong> </p><br>
<p><strong> phase : ".$prospective_university. "</strong> </p><br>
<p><strong> phase : ".$title. "</strong> </p><br>
<p><strong> phase : ".$firstnameonpassport. "</strong> </p><br>
<p><strong> phase : ".$surname. "</strong> </p><br>
<p><strong> phase : ".$gender. "</strong> </p><br>
<p><strong> phase : ".$passport_number. "</strong> </p><br>
<p><strong> phase : ".$expiration. "</strong> </p><br>
<p><strong> phase : ".$telephone. "</strong> </p><br>
<p><strong> phase : ".$email. "</strong> </p><br>
<p><strong> phase : ".$nationality. "</strong> </p><br>
<p><strong> phase : ".$address. "</strong> </p><br>
<p><strong> phase : ".$additional_message. "</strong> </p><br>

**********************************************************
</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: admin@digitalworldclassscholars.org' . "\r\n";
$headers .= 'Cc: admin@digitalworldclassscholars.org' . "\r\n";

if(
mail($to,$subject,$message,$headers)
){
$message='success';
}
else{
$message='false';

}



}
?>

<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.5.5, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.5.5, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/corel-design-of-combined-feb-2022-97x96.png" type="image/x-icon">
  <meta name="description" content="Fill in the form properly and we will  contact you">
  
  
  <title>Register</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap"></noscript>
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section data-bs-version="5.1" class="menu menu2 cid-sXDq45hrqD" once="menu" id="menu2-c">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="assets/images/corel-design-of-combined-feb-2022-97x96.png" alt="Digital World Class Scholar" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-primary display-7" href="index.html">Digital World-Class Scholars</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#navbarSupportedContent" data-bs-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-danger text-primary display-4" href="index.html">Home</a></li><li class="nav-item"><a class="nav-link link text-danger text-primary display-4" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link link text-danger text-primary display-4" href="contact.html">Contacts</a></li>
                    <li class="nav-item dropdown"><a class="nav-link link dropdown-toggle text-danger show display-4" href="index.html#contacts2-1r" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Services</a>
                    
                    <div class="dropdown-menu show" aria-labelledby="dropdown-undefined" data-bs-popper="none">
                    <!--
                    <div class="dropdown"><a class="dropdown-item dropdown-toggle text-danger display-4" href="index.html#contacts2-1r" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Study and Work Abroad </a><div class="dropdown-menu dropdown-submenu" aria-labelledby="dropdown-undefined"><a class="dropdown-item text-danger display-4" href="index.html#contacts2-1r">New Item</a><div class="dropdown"><a class="dropdown-item dropdown-toggle text-danger display-4" href="index.html#contacts2-1r" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">New Item</a><div class="dropdown-menu dropdown-submenu" aria-labelledby="dropdown-undefined"><a class="dropdown-item text-danger display-4" href="index.html#contacts2-1r">New Item</a><a class="dropdown-item text-danger display-4" href="index.html#contacts2-1r">New Item</a><div class="dropdown"><a class="dropdown-item dropdown-toggle text-danger display-4" href="index.html#contacts2-1r" data-toggle="dropdown-submenu" data-bs-toggle="dropdown" data-bs-auto-close="outside">New Item</a><div class="dropdown-menu dropdown-submenu" aria-labelledby="dropdown-undefined"><a class="dropdown-item text-danger display-4" href="index.html#contacts2-1r">New Item</a></div></div></div></div></div></div>
                    -->
                    
                    <a class="dropdown-item text-danger show text-primary display-4" href="studyandworkabroad.html">Study and Work Abroad </a><a class="dropdown-item show text-danger text-primary display-4" href="internationaladmissionexams.html">International Admission Exams</a><a class="dropdown-item show text-danger text-primary display-4" href="professionalexams.html">Professional Exams</a><a class="dropdown-item show text-danger text-primary display-4" href="sat.html">SAT</a><a class="dropdown-item show text-danger text-primary display-4" href="informationtechnology.html">Information Technology</a><a class="dropdown-item show text-danger text-primary display-4" href="register.html">Online Registration</a></div></li></ul>
                <div class="icons-menu">
                    <a class="iconfont-wrapper" href="https://www.facebook.com/Digital-world-class-scholars-consulting-113494491252615" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-facebook socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="#" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-twitter socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="https://instagram.com/digitalworldclassscholars" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-instagram socicon"></span>
                    </a>
                    
                </div>
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-warning display-4" href="tel:+234 818 351 6084"><span class="mobi-mbri mobi-mbri-phone mbr-iconfont mbr-iconfont-btn"><br></span>Call Us</a></div>
            </div>
        </div>
    </nav>
</section>

<section data-bs-version="5.1" class="form4 cid-sZYPvOx90r" id="form4-1u">

    

    

    <div class="container-fluid">
        <div class="row content-wrapper justify-content-center">
            <div class="col-lg-8 offset-lg-1 mbr-form">
                            <form action="register.php" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    <div class="row">

                    <?php  if (isset($message)){
                            if($message='success')
                                {
                                echo '
                                <div class="alert alert-success col-12">Thanks for filling out the form!</div>
                                
                                ';
                        }
                        else{
                            echo '
                                                    <div class="alert alert-danger col-12">
                            Oops...! some problem!
                        </div>

                            ';
                        }
                    } 
                    else{
                            echo '
                                                    <a href="register.html" class="alert alert-danger col-12">
                            Oops...! some problem! click to go back
                        </a>';
                    
                    }
                    ?>
                    </div>
            </div>
            <div class="col-lg-7 offset-lg-1 col-12">
                <div class="image-wrapper">
                    <img class="w-100" src="assets/images/beyond-722x867.jpg" alt="Mobirise">
                </div>
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="footer4 cid-sZYNfILkDR" once="footers" id="footer4-1s">

    
    
    <div class="container">
        <div class="row mbr-white">
            <div class="col-6 col-lg-3">
                <div class="media-wrap col-md-8 col-12">
                    <a href="index.html">
                        <img src="assets/images/digial-logo-g-337x179.png" alt="Digital World Class Scholar">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>Copyright</strong></h5>
                <p class="mbr-text mbr-fonts-style mb-4 display-4">Copyright 2022 Digitalworldclassscholars.org All Rights Reserved.
<br>Designed By <a href="https://wa.me/08104048887" class="text-primary">God's OwnDesign</a></p>
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-3 display-7">
                    <strong>Follow Us</strong>
                </h5>
                <div class="social-row display-7">
                    <div class="soc-item">
                        <a href="https://www.facebook.com/Digital-world-class-scholars-consulting-113494491252615" target="_blank">
                            <span class="mbr-iconfont socicon-facebook socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="#" target="_blank">
                            <span class="mbr-iconfont socicon-twitter socicon"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://instagram.com/digitalworldclassscholars" target="_blank">
                            <span class="mbr-iconfont socicon-instagram socicon"></span>
                        </a>
                    </div>
                    
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>Our Address</strong></h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap">The Topmost floor,1b Lagos Road, Off Allinson Street,Ikorodu Roundabout,Ikorodu Lagos</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h5 class="mbr-section-subtitle mbr-fonts-style mb-2 display-7">
                    <strong>Our Contact</strong></h5>
                <ul class="list mbr-fonts-style display-4">
                    <li class="mbr-text item-wrap"><strong>Email
</strong></li><li class="mbr-text item-wrap">Info@digitalworldclassscholars.org
</li><li class="mbr-text item-wrap">Contact@digitalworldclassscholars.org</li><li class="mbr-text item-wrap">
</li><li class="mbr-text item-wrap"><br></li><li class="mbr-text item-wrap"><strong>Phone
</strong></li><li class="mbr-text item-wrap">+234 (0) 803 040 8576
</li><li class="mbr-text item-wrap">+234 (0) 818 351 6084</li>
                </ul>
            </div>
            
        </div>
    </div>
</section><section style="background-color: #fff; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif; color:#aaa; font-size:12px; padding: 0; align-items: center; display: none;"><a href="https://mobirise.site/u" style="flex: 1 1; height: 3rem; padding-left: 1rem;"></a><p style="flex: 0 0 auto; margin:0; padding-right:1rem;">Designed with Mobirise - <a href="https://mobirise.site/m" style="color:#aaa;">Details here</a></p></section><script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>  <script src="assets/smoothscroll/smooth-scroll.js"></script>  <script src="assets/ytplayer/index.js"></script>  <script src="assets/dropdown/js/navbar-dropdown.js"></script>  <script src="assets/theme/js/script.js"></script>  <script src="assets/formoid/formoid.min.js"></script>  
  
  
  <input name="animation" type="hidden">
  </body>
</html>