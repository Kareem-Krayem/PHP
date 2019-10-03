<html>

<head>
<title>
Yahya Halabi
</title>
  <!-- links -->
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link rel="stylesheet" href="css/st.css">
<link rel="stylesheet" href="fluid-gallery.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">
<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/socialMedia.css">
<link rel="stylesheet" href="css/contact.css">
<link rel="stylesheet" href="css/services.css">
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/jquery.timepicker.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="fa/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
<!-- scripts -->
<script src="js/jquery.min.js"></script>
<script src="js/gallery.js"></script>
<script src="js/scroll.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
<script src="https://use.fontawesome.com/678a05a5ed.js"></script>
<!-- <script>
    baguetteBox.run('.tz-gallery');
</script> -->
<!-- Hero -->
<section class="et-hero-tabs">
  <div class="logo_section">
  <a href='login.php'>
  <img src="img/logo/logo_dark.png" alt="logo" class="rounded float-left" cursor = true>
  </a>
  </div>
  <h1>Yahya Halabi</h1>
  <h3>Done By Kareem Krayem</h3>
  <!-- Social Media -->
  <!-- fb insta youtube pistols  -->
  <br>
  <div class='social_media'>
  <a class='btn' href=#>
    <i class='fab fa-instagram'></i>
  </a>  
  <a class='btn' href=#>
    <i class='fab fa-facebook-f'></i>
  </a>
  <a class='btn' href=#>
    <i class='fab fa-youtube'></i>
  </a>
  <a class='btn' href=#>
    <i class='fab fa-google'></i>
  </a>
  </div>
  <div class="et-hero-tabs-container">
    <a class="et-hero-tab" href="#tab-es6">Home</a>
    <a class="et-hero-tab" href="#tab-flexbox">Gallery</a>
    <a class="et-hero-tab" href="#tab-react">Services</a>
    <a class="et-hero-tab" href="#tab-angular">Contact</a>
    <a class="et-hero-tab" href="#tab-other">About</a>
    <span class="et-hero-tab-slider"></span>
  </div>
</section>

</head>

<body>

<!-- Main -->
<main class="et-main">
<!-- Slideshoe section -->
  <section class="et-slide" id="tab-es6" style='background: #ffff ; height : auto'>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
<?php
include 'connection.php';
$q = "SELECT * FROM slideshow";
$res = mysqli_query($conn , $q);
$row1 = mysqli_fetch_assoc($res);

echo "<div class='item active'>";
echo "<img src='slideshow/".$row1['slideshow_picture']."' style='width:100%;'>";
echo "<div class='carousel-caption'>";
echo "</div>";
echo "</div>";

while ($row = mysqli_fetch_assoc($res)){
echo "<div class='item'>";
echo "<img src='slideshow/".$row['slideshow_picture']."' style='width:100%;'>";
echo "<div class='carousel-caption'>";
echo "</div>";
echo "</div>";
}
?>
              <!-- <div class="item active">
                <img src="img/slide/2.jpg" alt="Los Angeles" style="width:100%;">
                <div class="carousel-caption">
                </div>
              </div>
              <div class="item">
                <img src="img/slide/03.jpg" alt="Chicago" style="width:100%;">
                <div class="carousel-caption">
                </div>
              </div>
              <div class="item">
                  <img src="img/slide/12.jpg" alt="Chicago" style="width:100%;">
                  <div class="carousel-caption">
                  </div>
                </div>

                <div class="item">
                    <img src="img/slide/09.jpg" alt="Chicago" style="width:100%;">
                    <div class="carousel-caption">
                    </div>
                  </div>

              <div class="item">
                <img src="img/slide/05.jpg" alt="New York" style="width:100%;">
                <div class="carousel-caption">
                </div>
              </div> -->
            </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
  </section>

  <section class="et-slide" id="tab-flexbox" style="height: auto ;margin-top:50px; background:#ffff">
      <div id="colorlib-main">
          <section class="ftco-section-2">
            <div class="photograhy">
              <div class="row no-gutters">
                <div class="col-md-4 ftco-animate">
                  <a href="img/slide/20.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(img/slide/20.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                      <h3>Work 01</h3>
                      <span class="tag">Model</span>
                    </div>
                  </a>
                </div>

                <?php
                $q = "SELECT * FROM gallery";
                $res = mysqli_query($conn , $q);
                while ($row = mysqli_fetch_assoc($res)){
                  echo "<div class='col-md-4 ftco-animate'>";
                  echo "<a href='slideshow001/".$row['gallery_photos']."' class='photography-entry img image-popup d-flex justify-content-center align-items-center' style='background-image: url(slideshow001/".$row['gallery_photos'].");'>";
                  echo "<div class='overlay'></div>";
                  echo "<div class='text text-center'>";
                  echo "<h3>".$row['gallery_description']."</h3>";
                  // echo "<span class='tag'>Nature</span>";
                  echo "</div>";
                  echo "</a>";
                  echo "</div>";
                  }
                ?>
                <!-- <div class="col-md-4 ftco-animate">
                  <a href="img/slide/19.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(img/slide/19.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                      <h3>Work 02</h3>
                      <span class="tag">Nature</span>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 ftco-animate">
                  <a href="img/slide/18.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(img/slide/18.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                      <h3>Work 03</h3>
                      <span class="tag">Fashion</span>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 ftco-animate">
                  <a href="img/slide/17.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(img/slide/17.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                      <h3>Work 04</h3>
                      <span class="tag">Travel</span>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 ftco-animate">
                  <a href="img/slide/16.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(img/slide/16.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                      <h3>Work 05</h3>
                      <span class="tag">Travel</span>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 ftco-animate">
                  <a href="img/slide/15.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(img/slide/15.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                      <h3>Work 06</h3>
                      <span class="tag">Travel</span>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 ftco-animate">
                  <a href="img/slide/14.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(img/slide/14.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                      <h3>Work 07</h3>
                      <span class="tag">Fashion, Model</span>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 ftco-animate">
                  <a href="img/slide/13.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(img/slide/13.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                      <h3>Work 08</h3>
                      <span class="tag">Nature</span>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 ftco-animate">
                  <a href="img/slide/12.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(img/slide/12.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                      <h3>Work 09</h3>
                      <span class="tag">Technology</span>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 ftco-animate">
                  <a href="img/slide/11.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(img/slide/11.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                      <h3>Work 10</h3>
                      <span class="tag">Model</span>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 ftco-animate">
                  <a href="img/slide/10.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(img/slide/10.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                      <h3>Work 11</h3>
                      <span class="tag">Fashion</span>
                    </div>
                  </a>
                </div>
                <div class="col-md-4 ftco-animate">
                  <a href="img/slide/09.jpg" class="photography-entry img image-popup d-flex justify-content-center align-items-center" style="background-image: url(img/slide/09.jpg);">
                    <div class="overlay"></div>
                    <div class="text text-center">
                      <h3>Work 12</h3>
                      <span class="tag">Photography</span>
                    </div>
                  </a>
                </div> -->
              </div>
            </div>
          </section>
        </div>
  </section>

<section class="et-slide" id="tab-react" style="height: 650px ;margin-top:90px;margin-bottom:50px; background:#ffff">
  <div class="blog-slider">
  <div class="blog-slider__wrp swiper-wrapper">
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">

        <img src="img/slide/20.jpg" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">26 December 2019</span>
        <div class="blog-slider__title">Lorem Ipsum Dolor</div>
        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>
        <a href="#" class="blog-slider__button">READ MORE</a>
      </div>
    </div>
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="img/slide/14.jpg" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">26 December 2019</span>
        <div class="blog-slider__title">Lorem Ipsum Dolor2</div>
        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div>
        <a href="#" class="blog-slider__button">READ MORE</a>
      </div>
    </div>

    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="img/slide/10.jpg" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">26 December 2019</span>
        <div class="blog-slider__title">Lorem Ipsum Dolor</div>
        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div>
        <a href="#" class="blog-slider__button">READ MORE</a>
      </div>
    </div>

  </div>
  <div class="blog-slider__pagination"></div>
</div>
</section>

<section class="et-slide" id="tab-angular" style="height: 650px ;margin-bottom:50px; background:#ffff">
    <!-- this is the markup. you can change the details (your own name, your own avatar etc.) but don’t change the basic structure! -->

<aside class="profile-card">

<header>
<?php
$qq = "SELECT contact_photo c FROM `contact`";
$ress = mysqli_query($conn , $qq);
$roww = mysqli_fetch_assoc($ress);
 echo "<img src=slideshow/".$row['c']."/>";
?>

<?php
$q = "SELECT * FROM `contact`";
$res = mysqli_query($conn , $q);
while($row= mysqli_fetch_assoc($res)){
  echo "<h1>".$row['contact_name']."</h1>";
  echo "<h2 style='padding:5px; margin-top:10px;'>- ".$row['contact_career']." -</h2>";
  echo "</header>";
  echo "<div class='profile-bio'>";
  echo "<p>".$row['contact_about']."</p>";
  echo "</div>";
}
?>
</aside>
</section>

  <section class="et-slide" id="tab-other" style="height: 750px ;margin-top:50px;margin-bottom:50px; background:#ffff">
    <h1>About</h1>
    <h3>something about other</h3>
  </section>

</body>

</main>

</html>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

<script>
var swiper = new Swiper('.blog-slider', {
      spaceBetween: 30,
      effect: 'fade',
      loop: true,
      mousewheel: {
        invert: false,
      },
      // autoHeight: true,
      pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
      }
    });
</script>
