<<<<<<< HEAD
<?php include('./header.php');?>
<div class=" mt-5 p-5">
   <div class="container-fluid mt-5 p-5">
      <div class="row p-4 d-flex justify-content-center g-2">
         <div class="card m-2" style="width: 24rem;">
               <img src="./img/1.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="product.php" class="btn bgcolor">View Product</a>
               </div>
         </div>
         <div class="card m-2" style="width: 24rem;">
               <img src="./img/2.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="product.php" class="btn bgcolor">View Product</a>
               </div>
         </div>
         <div class="card m-2" style="width: 24rem;">
               <img src="./img/3.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="product.php" class="btn bgcolor">View Product</a>
               </div>
         </div>
         <div class="card m-2" style="width: 24rem;">
               <img src="./img/1.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="product.php" class="btn bgcolor">View Product</a>
               </div>
         </div>
         <div class="card m-2" style="width: 24rem;">
               <img src="./img/2.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="product.php" class="btn bgcolor">View Product</a>
               </div>
         </div>
         <div class="card m-2" style="width: 24rem;">
               <img src="./img/3.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="product.php" class="btn bgcolor">View Product</a>
               </div>
         </div>
         <div class="card m-2" style="width: 24rem;">
               <img src="./img/3.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="product.php" class="btn bgcolor">View Product</a>
               </div>
         </div>
         <div class="card m-2" style="width: 24rem;">
               <img src="./img/3.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="product.php" class="btn bgcolor">View Product</a>
               </div>
         </div>
      </div>
   </div>
</div>
         

<?php include('./footer.php');?>
=======
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
   <title>shop</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="products">

   <h1 class="heading" style="margin-top:7rem;"> Products</h1>
   <div class="box-container">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products`"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   
   <form action="" method="post" class="box">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <!-- <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button> -->
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>$</span><?= $fetch_product['price']; ?><span></span></div>
         <!-- <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1"> -->
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products found!</p>';
   }
   ?>

   </div>

</section>


<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
>>>>>>> 281448b688c54dfda2ec74280e7d485f8f9cd535
