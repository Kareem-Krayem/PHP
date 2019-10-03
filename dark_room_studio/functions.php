<?php
//Display Header
function display_header(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dark Room Studio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/lightgallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <div class="site-wrap">
      <div class="site-mobile-menu">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
<style>
.activee{
  color: #EDB564;
}
.activee:hover{
  color: #EDB564;
}
.menu_hover> a:hover{
  color:pink;
}
a:hover{
  color:#EDB564 !important;
}
.active{
  color:blue !important;
}
.gallery{
  height:auto;
  margin-top:50px;
}
</style>
      <header class="site-navbar py-3" role="banner">

        <div class="container-fluid">
          <div class="row align-items-center">

            <div class="col-6 col-xl-2" data-aos="fade-down">
              <img src="images/logo/logo_dark.png" style="height:60px; width:110px">
            </div>
            <div class="col-10 col-md-8 d-none d-xl-block" data-aos="fade-down">
              <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                  <li class="menu_hover"><a href="index.php">Home</a></li>
                  <li class="menu_hover"><a href="about.html">Gallery</a></li>
                  <li class="menu_hover"><a href="services.html">Services</a></li>
                  <li class="menu_hover"><a href="contact.html">Contact</a></li>
                </ul>
              </nav>
            </div>

            <div class="col-6 col-xl-2 text-right" data-aos="fade-down">
              <div class="d-none d-xl-inline-block" style="position:absolute; margin-left:1050px; margin-top:-40px ;float:right">
                <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
                  <li>
                    <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  </li>
                  <li>
                    <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  </li>
                  <li>
                    <a href="#" class="pl-3 pr-3"><span class="icon-youtube-play"></span></a>
                  </li>
                </ul>
              </div>

              <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

            </div>

          </div>
        </div>

      </header>
<?php
} // End Display Header

//Display body
function display_body01(){
?>
<div class="container-fluid" data-aos="fade" data-aos-delay="400">
  <div class="swiper-container images-carousel">
      <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="image-wrap">
              <img src="images/slide/01.jpg" alt="Image">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="image-wrap">
              <img src="images/slide/02.jpg" alt="Image">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="image-wrap">
              <img src="images/slide/03.jpg" alt="Image">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="image-wrap">
              <img src="images/slide/04.jpg" alt="Image">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="image-wrap">
              <img src="images/slide/05.jpg" alt="Image">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="image-wrap">
              <img src="images/slide/06.jpg" alt="Image">
            </div>
          </div>
          <div class="swiper-slide">
            <div class="image-wrap">
              <img src="images/slide/07.jpg" alt="Image">
            </div>
          </div>
      </div>

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      <div class="swiper-scrollbar"></div>
  </div>
</div>

<div class="gallery">
<!-- <h2 class="site-section-heading text-center" style="margin-bottom:50px">Gallery</h2> -->
<div class="site-section"  data-aos="fade">
  <div class="container-fluid">

    <div class="row justify-content-center">

      <div class="col-md-7">
        <div class="row mb-5">
          <div class="col-12 ">
            <h2 class="site-section-heading text-center">Gallery</h2>
          </div>
        </div>
      </div>

    </div>
    <div class="row" id="lightgallery">
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_1.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor doloremque hic excepturi fugit, sunt impedit fuga tempora, ad amet aliquid?</p>">
        <a href="#"><img src="images/slide/01.jpg" alt="IMage" class="img-fluid"></a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_2.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam omnis quaerat molestiae, praesentium. Ipsam, reiciendis. Aut molestiae animi earum laudantium.</p>">
        <a href="#"><img src="images/slide/02.jpg" alt="IMage" class="img-fluid"></a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_3.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reiciendis, dolorum illo temporibus culpa eaque dolore rerum quod voluptate doloribus.</p>">
        <a href="#"><img src="images/slide/03.jpg" alt="IMage" class="img-fluid"></a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_4.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim perferendis quae iusto omnis praesentium labore tempore eligendi quo corporis sapiente.</p>">
        <a href="#"><img src="images/slide/04.jpg" alt="IMage" class="img-fluid"></a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_5.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, voluptatum voluptate tempore aliquam, dolorem distinctio. In quas maiores tenetur sequi.</p>">
        <a href="#"><img src="images/slide/05.jpg" alt="IMage" class="img-fluid"></a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_6.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum cum culpa blanditiis illum, voluptatum iusto quisquam mollitia debitis quaerat maiores?</p>">
        <a href="#"><img src="images/slide/06.jpg" alt="IMage" class="img-fluid"></a>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_7.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores similique impedit possimus, laboriosam enim at placeat nihil voluptatibus voluptate hic!</p>">
        <a href="#"><img src="images/slide/07.jpg" alt="IMage" class="img-fluid"></a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_8.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam vitae sed cum mollitia itaque soluta laboriosam eaque sit ratione, aliquid.</p>">
        <a href="#"><img src="images/slide/08.jpg" alt="IMage" class="img-fluid"></a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_9.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem reiciendis debitis beatae facilis quos, enim quis nobis magnam architecto earum!</p>">
        <a href="#"><img src="images/slide/09.jpg" alt="IMage" class="img-fluid"></a>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_9.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officiis magnam, facilis nam eos perspiciatis eligendi pariatur numquam debitis quos!</p>">
        <a href="#"><img src="images/slide/10.jpg" alt="IMage" class="img-fluid"></a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_8.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis consequatur quam et, delectus, cum iste ipsa animi eligendi obcaecati nemo.</p>">
        <a href="#"><img src="images/slide/11.jpg" alt="IMage" class="img-fluid"></a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_7.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci quia illo voluptatibus numquam inventore, ab asperiores molestiae distinctio atque nihil.</p>">
        <a href="#"><img src="images/slide/12.jpg" alt="IMage" class="img-fluid"></a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_6.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt unde placeat obcaecati sapiente illum, fuga nostrum necessitatibus delectus maiores magnam.</p>">
        <a href="#"><img src="images/slide/13.jpg" alt="IMage" class="img-fluid"></a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_5.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas dignissimos non consectetur. Facilis totam, explicabo nam iure! Veniam modi, molestiae.</p>">
        <a href="#"><img src="images/slide/14.jpg" alt="IMage" class="img-fluid"></a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_4.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias minus voluptatibus inventore odio. Iure amet nesciunt a, officia quo ex.</p>">
        <a href="#"><img src="images/slide/15.jpg" alt="IMage" class="img-fluid"></a>
      </div>

      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_3.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium illum consectetur dolorum consequuntur sint doloribus eveniet deleniti! Illo, quibusdam, earum.</p>">
        <a href="#"><img src="images/slide/16.jpg" alt="IMage" class="img-fluid"></a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_2.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto ad iure, inventore asperiores, cupiditate optio dignissimos labore quidem totam. Dignissimos.</p>">
        <a href="#"><img src="images/slide/17.jpg" alt="IMage" class="img-fluid"></a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_1.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam temporibus totam similique provident delectus quos fugiat officia earum nisi voluptatibus?</p>">
        <a href="#"><img src="images/slide/18.jpg" alt="IMage" class="img-fluid"></a>
      </div>


      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_1.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe beatae qui aliquid nostrum unde ut officiis omnis delectus sequi deleniti!</p>">
        <a href="#"><img src="images/slide/19.jpg" alt="IMage" class="img-fluid"></a>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 item" data-aos="fade" data-src="images/big-images/nature_big_2.jpg" data-sub-html="<h4>Fading Light</h4><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi iusto vero, soluta porro dicta quaerat tempore magni perferendis aspernatur cupiditate.</p>">
        <a href="#"><img src="images/slide/20.jpg" alt="IMage" class="img-fluid"></a>
      </div>

    </div>
  </div>
</div>
</div>

<?php
}
//Display footer
function display_footer(){
?>
<div class="footer py-4">
  <div class="container-fluid">
    <p id='mark'>
    Copyright &copy; All The Right Reserved By <span id='credit'>Kareem Krayem</span>
    </p>
  </div>
</div>
</div>
<style>
#credit{
  color: black;
  font-size: 20px;
  font-style: bold;
}
#mark{
  margin-left: 35%;
  margin-right: 30%;
}
</style>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/picturefill.min.js"></script>
<script src="js/lightgallery-all.min.js"></script>
<script src="js/jquery.mousewheel.min.js"></script>

<script src="js/main.js"></script>

<script>
  $(document).ready(function(){
    $('#lightgallery').lightGallery();
  });
</script>

</body>
</html>
<?php
} // End Display Footer
?>
