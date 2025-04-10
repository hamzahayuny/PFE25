<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Unilumin</title>
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>
</head>
<body>
<!-- header section starts  -->
<section class="header">
   <a href="home.php" class="logo"><img src="images/uni.png"></a>
   <nav class="navbar">
      <a href="home.php" class="active">home</a>
      <a href="réalisation.php">réalisation</a>
      <a href="simulation.php">simulation</a>
      <a href="packages.php">packages</a>
      <a href="about.php">about</a>
      <a href="contact.php">contact</a>

   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->
<!-- home section starts  -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/home-1.jpg) no-repeat">
            <div class="content">
               
               <h3>Unnatural Texture Screen Turn off the Display, Turn on the Art</h3>
               <a href="produit" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-2.jpg) no-repeat">
            <div class="content">

               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>
<!-- home section ends -->
<!-- services section starts  -->
<section class="services">
   <h1 class="heading-title"> our services </h1>
   <div class="box-container">
      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3></h3>
      </div>
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3></h3>
      </div>
      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3></h3>
      </div>
      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3></h3>
      </div>
      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3></h3>
      </div>
      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3></h3>
      </div>
   </div>
</section>
<!-- services section ends -->
<!-- home about section starts  -->
<section class=home-contact">
   <div class="image">
      <img src="images/about-img.webp" alt="">
   </div>
   <div class="content">
      <h3>about us</h3>
      <p>Unilumin, is the LED application pioneer, established in 2004, providing professional LED application services, including the world's leading LED display and lighting products and Metasight solutions.</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>
<!-- home about section ends -->
<!-- home packages section starts  -->
<section class="home-products">
   <h1 class="heading-title"> our packages </h1>
   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="images/img-.jpg" alt="">
         </div>
         <div class="content">
            <h3></h3>
            <p></p>
            <h2></h2>
            <a href="contact.php" class="btn"></a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-.jpg" alt="">
         </div>
         <div class="content">
            <h3></h3>
            <p> </p>
            <h2></h2>
            <a href="contact.php" class="btn"></a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-.jpg" alt="">
         </div>
         <div class="content">
            <h3></h3>
            <p> </p>
            <h2></h2>
            <a href="contact.php" class="btn"></a>
         </div>
      </div>
   </div>
   <div class="load-more"> <a href="products.php" class="btn">load more</a> </div>
</section>
<!-- home packages section ends -->


<section class="partner">
   <h1 class="heading-title"> our partners </h1>
   <div class="box-container">
      <div class="partner">
         <a><img src="images/sp.png" alt=""></a>
      </div>

</section>





<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!-- footer section starts  -->
<section class="footer">
   <div class="box-container">
   <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="réalisation.php"> <i class="fas fa-angle-right"></i> réalisation</a>
         <a href="simulation.php"> <i class="fas fa-angle-right"></i> simulation</a>
         <a href="packages.php"> <i class="fas fa-angle-right"></i> packages</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="contact.php"> <i class="fas fa-angle-right"></i> contact</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +216 70 256 445</a>
         <a href="#"> <i class="fas fa-envelope"></i> contact@inilumin.com.tn </a>
         <a href="#"> <i class="fas fa-map"></i> Impasse 2 rue 8612 , charguia 1 , 2035  </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      </div>
   </div>
   <div class="credit">  <span>Unilumin Tunisia</span>  </div>
</section>
<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>