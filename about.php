<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<style>
   .btn{
      background-color:#165168;
      color: #FFF;
   }
   .maneger{
      margin:50px !important;

   }
</style>
<body>
   
<?php include 'components/user_header.php'; ?>
  
   <!-- <div> 
      <video src="https://www.datocms-assets.com/76605/1668676208-banner-handbrake.webm" width="100%" muted autoplay></video>
   </div> -->


   <section class="reviews">

<h1 class="heading maneger">Maneger</h1>

<div class="swiper reviews-slider">

<div class="swiper-wrapper">

   <div class="swiper-slide slide">
      <img src="images/1.jpeg" alt="">
      <p>Full stack devloper orange Acdemy</p>
      <!-- <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      </div> -->
      <h3>karam</h3>
   </div>

   <div class="swiper-slide slide">
      <img src="images/4444.jfif" alt="">
      <p>Full stack devloper orange Acdemy </p>
      <!-- <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      </div> -->
      <h3>jack</h3>
   </div>

   <div class="swiper-slide slide">
      <img src="images/23.jpg" alt="">
      <p>Full stack devloper orange Acdemy</p>
      <!-- <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      </div> -->
      <h3>huda</h3>
   </div>

   <div class="swiper-slide slide">
      <img src="images/22.jpg" alt="">
      <p>Full stack devloper orange Acdemy</p>
      <!-- <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      </div> -->
      <h3>mohamad</h3>
   </div>

   <div class="swiper-slide slide">
      <img src="images/" alt="">
      <p>Full stack devloper orange Acdemy</p>
      <!-- <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      </div> -->
      <h3>Noor huda</h3>
   </div>

   <!-- <div class="swiper-slide slide">
      <img src="images/pic-6.png" alt="">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      </div>
      <h3>john deo</h3>
   </div> -->

</div>

<div class="swiper-pagination"></div>

</div>

</section>
<section class="about">
 

   <div class="row">
      <div class="content">
         <h3 style="color:#117693;">What is Arduino?</h3>
         <p>Arduino designs, manufactures, and supports electronic devices and software, allowing people around the world to easily access advanced technologies that interact with the physical world. Our products are straightforward, simple, and powerful, ready to satisfy users’ needs from students to makers and all the way to professional developers.</p>

         <h3 style="color:#117693;">Our Mission & Vision</h3>
            <p>Arduino’s mission is to enable anyone to enhance their lives through accessible electronics and digital technologies. There was once a barrier between the electronics, design, and programming world and the rest of the world. Arduino has broken down that barrier.
            Over the years, Arduino products have been the brains behind thousands of projects, from everyday objects to complex scientific instruments. A worldwide community, comprising students, hobbyists, artists, programmers, and professionals, has gathered around this open-source platform, their contributions adding up to an incredible amount of accessible knowledge.

          </p>

         <a href="contact.php" class="btn" style="background-color:#117693;">Contact us </a>

      </div>

   </div>
</br>
</br>

</section>











<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>