<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<<<<<<< HEAD
<header class="header">

   <section class="flex">

      <a href="home.php" class="logo">Shopie<span>.</span></a>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="about.php">about</a>
         <a href="orders.php">orders</a>
         <a href="shop.php">shop</a>
         <a href="contact.php">contact</a>
=======
<!-- 
<header class="header " style="background-color:#117693;">

<style>
   .navbar a{
      /* justify-content: center; */
      padding:50px;
   }
 
</style> -->
<header class="header">


   <section class="flex">

      <a href="home.php" class="logo"><span><img style="height:60px; width:70px;" src="images/logo.png"></span></a>

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="about.php">About us</a>
         <a href="orders.php">Orders</a>
         <a href="shop.php">Shop</a>
         <a href="contact.php">Contacts</a>
>>>>>>> 281448b688c54dfda2ec74280e7d485f8f9cd535
      </nav>

      <div class="icons">
         <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_counts = $count_wishlist_items->rowCount();

            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
         <div id="menu-btn" class="fas fa-bars"></div>
<<<<<<< HEAD
         <a href="search_page.php"><i class="fas fa-search"></i></a>
         <a href="wishlist.php"><i class="fas fa-heart"></i><span>(<?= $total_wishlist_counts; ?>)</span></a>
         <a href="cart.php"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_counts; ?>)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
=======
         <a href="search_page.php"><i class="fa-brands fa-searchengin" style="color: white;font-size: 2.1rem; margin-right:10px;"></i></a>
         <a href="cart.php" style="margin-right:10px;"><i class="fa-solid fa-bag-shopping" style="color: white;font-size: 2rem; "></i><p style=" display:inline-block; color:white; ">(<?= $total_cart_counts; ?>)</p></a>
         <div id="user-btn" class="fa-solid fa-user-tie" style="color: white;font-size: 2rem;"></div>
>>>>>>> 281448b688c54dfda2ec74280e7d485f8f9cd535
      </div>

      <div class="profile">
         <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile["name"]; ?></p>
         <a href="update_user.php" class="btn">update profile</a>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">register</a>
            <a href="user_login.php" class="option-btn">login</a>
         </div>
         <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
         <?php
            }else{
         ?>
         <p>please login or register first!</p>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">register</a>
            <a href="user_login.php" class="option-btn">login</a>
         </div>
         <?php
            }
         ?>      
         
         
      </div>

   </section>

</header>