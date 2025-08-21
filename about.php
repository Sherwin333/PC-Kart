<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3 style="color:white;">About Us</h3>
   <p style="color:white;"> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>PC-Kartzz is a leading e-retailer and retailer committed to becoming the most loved and trusted store for all 
            electronic devices with a focus on computer components and DIY products by providing a great shopping experience, rapid delivery, 
            tech customer service and provide the best warranty support.</p>
         <p>Whether you are a novice or a tech guru, you are sure to enjoy shopping at pckartzz.com. </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>



<section class="authors">

   <h1 class="title">Top Picks</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/corsair.jpg" alt="">
         <h3>Corsair Vengeance i7500</h3>
      </div>

      <div class="box">
         <img src="images/ibuy.jpg" alt="">
         
         <h3>iBuyPower Y60</h3>
      </div>

      <div class="box">
         <img src="images/msi.jpg" alt="">
         
         <h3>MSI Infinite RS 13th</h3>
      </div>

      <div class="box">
         <img src="images/home-bg.jpg" alt="">
         
         <h3>Alienware Aurora R15</h3>
      </div>

      <div class="box">
         <img src="images/len.jpg" alt="">
         
         <h3>Lenovo Legion Tower 7i (Gen 8)</h3>
      </div>

      <div class="box">
         <img src="images/corsair2.jpg" alt="">
      
         <h3>Corsair One i500</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>