<?php 
session_start();
include '../php/db.php';?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weblog</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">وبلاگ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="#">خانه <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">پروفایل</a>
      </li>
      <li class="nav-item dropdown">
      <?php if (isset($_SESSION['signin'])){?>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          حساب کاربری
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">ایمیل : <?php echo $_SESSION['email']; ?></a>
          <a class="dropdown-item" href="#">سن : <?php echo $_SESSION['age']; ?></a>
          <a class="dropdown-item" href="#">اسم : <?php echo $_SESSION['username']; ?></a>
          <a class="dropdown-item" href="log.php">خروج</a>
        </div>
      </li>
      <?php } else { ?>
        <li class="nav-item active">
        <a class="nav-link" href="login.php">ورود<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="register.php">ثبت نام <span class="sr-only">(current)</span></a>
      </li>
      <?php } ?>
      
    </ul>
    <form class="form-inline my-2 my-lg-0 mr-auto">
      <input class="form-control mr-sm-2 placeholder" type="search" placeholder="چی میخوای؟" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">جستجو</button>
    </form>
  </div>
</nav>
<br><br>
<div>
    <div class="row d-none d-lg-flex">
        <div class="col-4 information-site">
            <img src="../Asset/image/stat-time.svg">
            <span>تعداد مقالات</span>
            <span>۵</span>
        </div>
        <div class="col-4 information-site">
             <img src="../Asset/image/stat-teacher.svg">
             <span>تعداد نویسندگان</span>
             <span>۵</span>
        </div>
        <div class="col-4 information-site">
              <img src="../Asset/image/stat-student.svg">
              <span>تعداد کاربران</span>
              <span>۸</span>
        </div>
    </div>
</div>
<br class="d-none d-lg-block">
<div>
  <h4 style="color:#fff; padding:10px">مقالات</h4>
  <div class="row">
    <div class="col-12 col-lg-4">
       <div class="post-item">
       <a href=""><img src="../Asset/image/post1.png" width="100%">
      <div class="hovershow">
      <div class="hover-image-post d-none d-lg-flex">
       </div>
       <a href="" class="more-opst btn d-none d-lg-flex">مشاهده ی مقاله</a>
      </div>
      </a>
       <div class="post-caption">
       <p><a href="">چطور بفهمیم وبسایتی که طراحی کردیم خوب است یا بد؟</a></p>
       <span>همان قدری که کلمات برای یک سخنران مهم است ، طراحی یک وبسایت هم برای تجارت حیاتی است ! </span>
       </div>
       </div>
    </div>
    <div class="col-12 col-lg-4">
       <div class="post-item">
       <a href=""><img src="../Asset/image/post2.png" width="100%">
      <div class="hovershow">
      <div class="hover-image-post d-none d-lg-flex">
       </div>
       <a href="" class="more-opst btn d-none d-lg-flex">مشاهده ی مقاله</a>
      </div>
      </a>
       <div class="post-caption">
       <p><a href="">چگونه یک رزومه حرفه ای طراحی کنیم؟ </a></p>
       <span>نوشتن رزومه می تونه چالش برانگیز باشه در این مقاله کوتاه به بررسی نحوه نوشتن رزومه خوب می پردازیم </span>
       </div>
       </div>
    </div>
    <div class="col-12 col-lg-4">
       <div class="post-item">
       <a href=""><img src="../Asset/image/post3.png" width="100%">
      <div class="hovershow">
      <div class="hover-image-post d-none d-lg-flex">
       </div>
       <a href="" class="more-opst btn d-none d-lg-flex">مشاهده ی مقاله</a>
      </div>
      </a>
       <div class="post-caption">
       <p><a href="">دلایل یادگــیری و کار با وردپــــرس </a></p>
       <span>یادگیری وردپرس برای ایجاد یک وبسایت ، این روز ها یکی از ساده ترین و کم هزینه ترین روش </span>
       </div>
       </div>
    </div>
    <div class="col-12 col-lg-4">
       <div class="post-item">
       <a href=""><img src="../Asset/image/post4.png" width="100%">
      <div class="hovershow">
      <div class="hover-image-post d-none d-lg-flex">
       </div>
       <a href="" class="more-opst btn d-none d-lg-flex">مشاهده ی مقاله</a>
      </div>
      </a>
       <div class="post-caption">
       <p><a href="">دستیار صوتی چیست؟</a></p>
       <span>تا حالا به این فکر کردین که آیا میشه با کامپیوتر یا گوشی های هوشمند حرف زد؟ </span>
       </div>
       </div>
    </div>
    <div class="col-12 col-lg-4">
       <div class="post-item">
       <a href=""><img src="../Asset/image/post5.png" width="100%">
      <div class="hovershow">
      <div class="hover-image-post d-none d-lg-flex">
       </div>
       <a href="" class="more-opst btn d-none d-lg-flex">مشاهده ی مقاله</a>
      </div>
      </a>
       <div class="post-caption">
       <p><a href="">چتفاوت بین Angular و AngularJS</a></p>
       <span>تفاوت بین Angular و AngularJS چیست؟ یک تفاوت حیاتی بین Angular و AngularJS این است</span>
       </div>
       </div>
    </div>
    <div class="col-12 col-lg-4">
       <div class="post-item">
       <a href=""><img src="../Asset/image/post6.png" width="100%">
      <div class="hovershow">
      <div class="hover-image-post d-none d-lg-flex">
       </div>
       <a href="" class="more-opst btn d-none d-lg-flex">مشاهده ی مقاله</a>
      </div>
      </a>
       <div class="post-caption">
       <p><a href="">چگونه توسعه‌دهنده وب شویم؟</a></p>
       <span>آیا به یادگیری توسعه وب علاقه دارید ولی نمی‌دانید از کجا شروع کنید؟ </span>
       </div>
       </div>
    </div>
  </div>
</div>
  </div>
  <br><br><br>
<footer>
  <div class="footer1">
    <div class="container">
      <div class="row d-none d-lg-flex">
      <div class="col-12 col-lg-6 foot "><br><br><br><br><br>
        <form>
          <input type="text" class="input-group" placeholder="ایمیل">
          <input type="submit" class="btn btn-success" value="عضویت">
        </form>
      </div>
      </div>
    </div>
  </div>
</footer>
</body>
<script src="../js/jquery-3.5.1.min.js"></script> 
  <script src="../js/bootstrap.min.js"></script> 
</html>