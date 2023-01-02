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
</style>
<body>
   
<?php include 'components/user_header.php'; ?>
  
   <div> 
      <video src="https://www.datocms-assets.com/76605/1668676208-banner-handbrake.webm" width="100%"  muted autoplay></video>
   </div>

<section class="about">
 

   <div class="row">
      <div class="content">
         <h3>What is Arduino?</h3>
         <p>Arduino designs, manufactures, and supports electronic devices and software, allowing people around the world to easily access advanced technologies that interact with the physical world. Our products are straightforward, simple, and powerful, ready to satisfy users’ needs from students to makers and all the way to professional developers.</p>
         <h3>Our Mission & Vision</h3>
            <p>Arduino’s mission is to enable anyone to enhance their lives through accessible electronics and digital technologies. There was once a barrier between the electronics, design, and programming world and the rest of the world. Arduino has broken down that barrier.

            Over the years, our products have been the brains behind thousands of projects, from everyday objects to complex scientific instruments. A worldwide community, comprising students, hobbyists, artists, programmers, and professionals, has gathered around this open-source platform, their contributions adding up to an incredible amount of accessible knowledge.

            Our vision is to make Arduino available to everyone, whether you are a student, maker or professional, which is why we now have three segments to our business. These segments work together as an ecosystem with a shared mindset: we started with Maker, and that has evolved into Education and PRO solutions.</p>

         <a href="contact.php" class="btn" >Contact </a>

      </div>

   </div>

</section>
<!-- <section>
      <div class="content">

         <h3>Our Mission & Vision</h3>
            <p>Arduino’s mission is to enable anyone to enhance their lives through accessible electronics and digital technologies. There was once a barrier between the electronics, design, and programming world and the rest of the world. Arduino has broken down that barrier.

            Over the years, our products have been the brains behind thousands of projects, from everyday objects to complex scientific instruments. A worldwide community, comprising students, hobbyists, artists, programmers, and professionals, has gathered around this open-source platform, their contributions adding up to an incredible amount of accessible knowledge.

            Our vision is to make Arduino available to everyone, whether you are a student, maker or professional, which is why we now have three segments to our business. These segments work together as an ecosystem with a shared mindset: we started with Maker, and that has evolved into Education and PRO solutions.</p>

         <a href="contact.php" class="btn" >Contact </a>

         <h3>why choose us?</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam veritatis minus et similique doloribus? Harum molestias tenetur eaque illum quas? Obcaecati nulla in itaque modi magnam ipsa molestiae ullam consequuntur.</p>
         <a href="contact.php" class="btn">contact us</a>

      </div>

   </div>

</section> -->





<!-- <section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-1.png" alt="">
         <p>Awesome for getting into microcontroler programming and circuit design,An excellent way to start in microcontrollers</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Noor Esmael</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-2.png" alt="">
         <p>As a computer engineer I have been using a LOT of development boards ranging from Spartan to Basys, to digilent boards. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Deema Hindawi</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-3.png" alt="">
         <p>great little microcontroller to learn on,A lot of them have been great boards.Short and to the point, this is a great product</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alaa ahmad</h3>
      </div>

      <!-- <div class="swiper-slide slide">
         <img src="images/pic-4.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-5.png" alt="">
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
      </div>

      <div class="swiper-slide slide">
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

</section> -->









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