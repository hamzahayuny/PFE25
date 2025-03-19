<?php session_start(); ?>

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

<div class="heading" style="background:url(images/header-bg-3.jpg) no-repeat">
   <h1>contact now</h1>
</div>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire et les nettoyer
    $nom = htmlspecialchars(strip_tags($_POST["nom"]));
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $sujet = htmlspecialchars(strip_tags($_POST["sujet"]));
    $message = htmlspecialchars(strip_tags($_POST["message"]));

    // Vérifier que tous les champs sont remplis
    if (!empty($nom) && !empty($email) && !empty($sujet) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Adresse e-mail de réception
            $destinataire = "votre-email@example.com"; 
            $headers = "From: " . $email . "\r\n";
            $headers .= "Reply-To: " . $email . "\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

            // Envoyer l'e-mail
            if (mail($destinataire, $sujet, $message, $headers)) {
                $success = "Votre message a été envoyé avec succès !";
            } else {
                $error = "Erreur lors de l'envoi du message.";
            }
        } else {
            $error = "Adresse e-mail invalide.";
        }
    } else {
        $error = "Tous les champs sont obligatoires.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 50px; }
        form { max-width: 400px; margin: auto; background: #f9f9f9; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px #ddd; }
        input, textarea { width: 100%; padding: 10px; margin: 5px 0; border: 1px solid #ccc; border-radius: 5px; }
        button { background: #28a745; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #218838; }
        .message { text-align: center; font-weight: bold; margin: 10px 0; }
        .success { color: green; }
        .error { color: red; }
    </style>
</head>
<body>

<h2 style="text-align: center;">Contactez-nous</h2>

<?php if (isset($success)) echo "<p class='message success'>$success</p>"; ?>
<?php if (isset($error)) echo "<p class='message error'>$error</p>"; ?>

<form action="" method="post">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" required>

    <label for="email">E-mail :</label>
    <input type="email" name="email" required>

    <label for="sujet">Sujet :</label>
    <input type="text" name="sujet" required>

    <label for="message">Message :</label>
    <textarea name="message" rows="5" required></textarea>

    <button type="submit">Envoyer</button>
</form>

</body>
</html>





<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!-- booking section ends -->
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