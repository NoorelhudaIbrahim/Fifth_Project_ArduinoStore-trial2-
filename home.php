<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   
   <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Seymour+One&display=swap" rel="stylesheet">
   
   <style>
      .home-bg{
         background-image:none;  
      }

      .swiper-slide{
         background-image:url('project images/Untitled__8_-removebg-preview.png');
         background-repeat: no-repeat;
         background-size: 70%;
         height:50em;
      }
         
      .imge_hoda_noor{
         background-image:url('images/bg33.jpg') !important;   
         background-size: 115.5%;
         background-repeat: no-repeat;
         /* height: 150% !important; */
      }
      .img1{
         background-image:url('images/ai.png') !important;
         background-size: 130%;
         background-repeat: no-repeat;
      }
      .img2{
         background-image:url('images/learning.jpg') !important;
         background-size: 130%;
         background-repeat: no-repeat;
      }
      .img3{
         background-image:url('images/33.jpeg') !important;
         background-size: 130%;
         background-repeat: no-repeat;
      }
      .sale {
         margin-left :20px;
         padding:230px 100px 30px 20px;
      }

      .sale2{
         padding:50px 0px 30px 200px;
      }

    
      .swiper-pagination-bullet{
         background-color:white;
      }

      .btn{
        
         background-color:#117693;

      }
      

   </style>

</head>
<body>

<?php include 'components/user_header.php'; ?>

<div class="home-bg">

   <div class="home">

      <div class="swiper home-slider">
      
         <div class="swiper-wrapper">

            <div class="swiper-slide slide imge_hoda_noor">
               <div class="content sale">
                  <span>up to 50% off</span>
                  <h3>Discover <br>the power of AI</h3>
                  <a href="shop.php" class="btn">shop now</a>
               </div>
            </div>

            <div class="swiper-slide slide img1">
               <!-- <div class="image">
                  <img src="images/1.png" alt="">
               </div> -->
               <div class="content sale2" style="margin-left:41%; margin-top:10%;">
                  <span style="color:white;">up to 50% off</span>
                  <h3 style="color:white;">Discover <br> the power of AI</h3>
                  <a href="shop.php" class="btn">shop now</a>
               </div>
            </div>

            <div class="swiper-slide slide img2">
               <!-- <div class="image">
                  <img src="images/from-human.png" alt="0">
               </div> -->
               <div class="content sale2" style="margin-left:-13rem; ">
                  <span style="color:#103848;">up to 50% off</span>
                  <h3 style="color:#103848;">AI is going to <br>change the world!</h3>
                  <a href="shop.php" class="btn" style="background-color:#103848;">shop now</a>
               </div>
            </div>

            <div class="swiper-slide slide img3">
               <!-- <div class="image">
                  <img src="images/to-machine.png" alt="">
               </div> -->
               <div class="content sale2" style="margin-left:-13rem;">

                  <span style="color:white;">upto 50% off</span>
                  <h3 style="color:white;">From human to machine <br>and back again!</h3>
                  <a href="shop.php" class="btn" style="background-color:white;color:#103848;">shop now</a>
               </div>
            </div>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

</div>
<div >

<!-- <section class="category" >

   <h1 class="heading">shop by category</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=laptop" class="swiper-slide slide">
      <img src="images/icon-1.png" alt="">
      <h3>laptop</h3>
   </a>

   <a href="category.php?category=tv" class="swiper-slide slide">
      <img src="images/icon-2.png" alt="">
      <h3>tv</h3>
   </a>

   <a href="category.php?category=camera" class="swiper-slide slide">
      <img src="images/icon-3.png" alt="">
      <h3>camera</h3>
   </a>

   <a href="category.php?category=mouse" class="swiper-slide slide">
      <img src="images/icon-4.png" alt="">
      <h3>mouse</h3>
   </a>

   <a href="category.php?category=fridge" class="swiper-slide slide">
      <img src="images/icon-5.png" alt="">
      <h3>fridge</h3>
   </a>

   <a href="category.php?category=washing" class="swiper-slide slide">
      <img src="images/icon-6.png" alt="">
      <h3>washing machine</h3>
   </a>

   <a href="category.php?category=smartphone" class="swiper-slide slide">
      <img src="images/icon-7.png" alt="">
      <h3>smartphone</h3>
   </a>

   <a href="category.php?category=watch" class="swiper-slide slide">
      <img src="images/icon-8.png" alt="">
      <h3>watch</h3>
   </a>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section> -->

<section class="home-products">

   <h1 class="heading">latest products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?><br>
         <span style="color: #247580;"><?= $fetch_product['category']; ?></span>
      </div>
      <!-- <div class="category"></div> -->
      <div class="flex">
         <div class="price"><span>$</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>
</div>

</section>
<section >
<div class="noor">
   <span><i class="fa-solid fa-user-shield"></i></span>
  
   <span><i class="fa-solid fa-truck-fast"></i></span>
   
   <span><i class="fa-solid fa-screwdriver-wrench"></i></span>
   
   
</div>
<div class="noor1">
   <span class="huda1">Secure payments</span>
   <span class="huda1"> worldwide delivery</span>
   <span class="huda1">Excellent service</span>
</div>

</section>





<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>