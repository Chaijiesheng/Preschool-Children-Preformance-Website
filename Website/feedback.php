<?php

if (isset($_POST['submit'])) {

  if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['feedback'])) {
    require '../includes/database.php';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $feedback = $_POST['feedback'];
    $date = $_POST['BM2_Date'];
    $query = "INSERT INTO feedback (UserName,PhoneNumber,Email,Feedback,CreationDate) VALUES ('$username','$phone','$email','$feedback','$date')";

    $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

    if ($run) {
      echo "<script>alert('Data Inserted Successfully')</script>";
      // echo "<script>setTimeout(\"Location: ../Teacher2/addstudent.php';\",1500);</script>";
    } else {
      echo "Form not submitted";
    }

    echo "<script>setTimeout(\"location.href = '../Website/feedback.php';\",100);</script>";
    exit();
  } else {
    echo "all fields required";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Feedback</title>
  <link rel="stylesheet" href="heading&footer.css" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="feedback.css" />
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <style>
    body {
  background-image: url("../Img2/BackgroundPic5.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
  </style>
  

</head>

<body>

  <!-- Big Header -->
  <div class="header">
      <img src="../Img/TransparentLogo.png" width="100" height="100"/>
      <h1>Tadika Tasneem Bestari</h1>
      <p class="headerdesciption">
        Seni mengajar ialah seni membantu penemuan
      </p>
     <!-- <p class="headerdesciption">
         The art of teaching is the art of assisting discovery 
      </p>-->
    </div>

  <!-- Slideshow container -->
  <div class="topnav">
      <a href="index.php">Laman Utama</a>
      <a href="login.php">Log Masuk</a>
      <a href="register.php">Daftar</a>
      <a class="active" href="feedback.php">Maklum Balas</a>
      <a href="about.php">Tentang Kami</a>
    </div>
    <!-- <div class="topnav">
      <a href="index.php">Home</a>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
      <a class="active" href="feedback.php">Feedback</a>
      <a href="about.php">About us</a>
    </div> -->
    

  <div class="container">
    <span class="big-circle"></span>
    <img src="img/shape.png" class="square" alt="" />
    <div class="form">
      <div class="contact-info">
        <h3 class="title">Mari kita berhubung</h3>
        <p align=justify class="text">
        Tadika Tasneem mengalu-alukan setiap maklum balas yang kami terima daripada pengguna kami - ia membantu kami terus bertambah baik. Kami telah membaca semua maklum balas dengan teliti, tetapi sila ambil perhatian bahawa kami tidak dapat membalas ulasan yang anda serahkan.
                       <!-- Tasneem Kindergarten welcomes every feedback 
               we receive from our users - it helps us keep improving. 
               We've read all feedback carefully, but please note that
                we are unable to respond to comments you submit. -->
      </p>

        <div class="info">
          <div class="information">
            <img src="../img/location.png" class="icon" alt="" />
            <p>NO.36 TAMAN TENGKU MAHERAN,
              06000 JITRA, KEDAH</p>
          </div>
          <div class="information">
            <img src="../img/email.png" class="icon" alt="" />
            <p>tadika.tasneemkedah@gmail.com</p>
          </div>
          <div class="information">
            <img src="../img/phone.png" class="icon" alt="" />
            <p>+6019-5696 560</p>
          </div>
          <!-- <div>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63464.21364410244!2d100.35092653748795!3d6.1957936517017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304b5bed21e4e055%3A0x7f5e9341bfb9d23e!2sTadika%20Tasneem%20Bestari!5e0!3m2!1sen!2smy!4v1656423367275!5m2!1sen!2smy" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>  -->
        </div>

        <div class="social-media">
          <p>Berhubung dengan kami : </p>
          <div class="social-icons">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="contact-form">
        <span class="circle one"></span>
        <span class="circle two"></span>

        <form method="post" autocomplete="off">
          <h3 class="title">Hubungi Kami</h3>
          <div class="input-container">
            <input type="text" name="username" class="input" />
            <label for="">ID Pengguna</label>
            <span>Nama pengguna</span>
          </div>
          <div class="input-container">
            <input type="email" name="email" class="input" />
            <label for="">Email</label>
            <span>Email</span>
          </div>
          <div class="input-container">
            <input type="tel" name="phone" class="input" />
            <label for="">Nombor Telefon</label>
            <span>Nombor Telefon</span>
          </div>
          <div class="input-container textarea">
            <textarea name="feedback" class="input"></textarea>
            <label for="">Mesej</label>
            <span>Mesej</span>
          </div>
          <div class="input-group date" id="datepicker" style="display:none;">
            <input type="text" class="form-control" value="2022-05-24"name="BM2_Date" />
            <span class="input-group-append">
              <span class="input-group-text bg-light d-block">
                <i class="fa fa-calendar"></i>
              </span>
            </span>
          </div>
          <input class="btn" type="submit" name="submit" value="Hantar"/>
        </form>
      </div>
    </div>
  </div>

  <script src="app.js"></script>
  <footer>
    <div class="footer-title">
      <a href="https://tadikatasneem.com.my/about-us/"><img class="footer-logo" src="../Img/TasneemLogo.png" alt="Tasneem Preschool"></a>
      <!--link to about us-->
      <ul class="social-media-footer">
        <li><a href="https://www.facebook.com/Tadikatasneempintarbestari/" target="_blank"><img src="../Img/FBTransLogo.png"></a></li>
        <li><a href="tadika.tasneemkedah@gmail.com" target="_blank"><img src="../Img/EMTransLogo.png"></a></li>
        <li><a href="https://www.whatsapp.com/catalog/60195696560/?app_absent=0" target="_blank"><img src="../Img/WSTransLogo.png"></a></li>
      </ul>
    </div>

    <div class = "footer-bottom">
        <!--link to feedback-->        
        <p>
          <a href="feedback.html"> Maklum Balas atau Komen </a> | Halaman direka oleh
          Chai Jie Sheng
        </p>
        <span>Copyright 2022 &copy;Tasneem Preschool. All rights reserved.</span>

        <!-- <p>
          <a href="feedback.html"> Feedback or Comments </a> | Page designed by
          Chai Jie Sheng
        </p> -->
        <!-- <span
          >Copyright 2022 &copy;Tasneem Preschool. All rights reserved.</span> -->
      </div>

</body>

</html>

<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>  
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 
<script type="text/javascript">
        $(function() {
           $('#datepicker').datepicker('setDate', 'today');
        });
    </script>