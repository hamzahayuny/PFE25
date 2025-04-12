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
      <a href="home.php" >home</a>
      <a href="réalisation.php">réalisation</a>
      <a href="simulateur.php" class="active">simulation</a>
      <a href="packages.php">packages</a>
      <a href="about.php">about</a>
      <a href="contact.php">contact</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-1.jpg) no-repeat">
   <h1>simulation</h1>
</div>

<!-- about section starts  -->

<section class="simulation">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   

</section>


<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

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
         <a href="#"> <i class="fas fa-envelope"></i> contact@unilumin.com.tn </a>
         <a href="https://www.google.com/maps/place/Unilumin+tunisia,+Africa+office/@36.8326349,10.2034771,17z/data=!4m14!1m7!3m6!1s0x12fd359de60d871d:0x42b1ee122ba74f80!2sUnilumin+tunisia,+Africa+office!8m2!3d36.8326349!4d10.2034771!16s%2Fg%2F11lcx4rjqt!3m5!1s0x12fd359de60d871d:0x42b1ee122ba74f80!8m2!3d36.8326349!4d10.2034771!16s%2Fg%2F11lcx4rjqt?entry=ttu&g_ep=EgoyMDI1MDQwOS4wIKXMDSoJLDEwMjExNjM5SAFQAw%3D%3D"> <i class="fas fa-map"></i> Impasse 2 rue 8612 , charguia 1 , 2035  </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="https://tn.linkedin.com/company/unilumintunisia?trk=public_post_feed-actor-name"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="https://www.facebook.com/UniluminTunisia/about?locale=fr_FR"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://www.instagram.com/unilumintn/"> <i class="fab fa-instagram"></i> instagram </a>
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