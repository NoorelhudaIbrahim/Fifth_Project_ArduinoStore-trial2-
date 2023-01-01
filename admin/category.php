<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
};

if(isset($_POST['add_category'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $descreption = $_POST['descreption'];
   $descreption = filter_var($descreption, FILTER_SANITIZE_STRING);
   
   $image_01 = $_FILES['image_01']['name'];
   $image_01 = filter_var($image_01, FILTER_SANITIZE_STRING);
   $image_size_01 = $_FILES['image_01']['size'];
   $image_tmp_name_01 = $_FILES['image_01']['tmp_name'];
   $image_folder_01 = '../uploaded_img/'.$image_01;


   $select_category = $conn->prepare("SELECT * FROM `category` WHERE category_name = ?");
   $select_category->execute([$name]);

   if($select_category->rowCount() > 0){
      $message[] = 'category name already exist!';
   }else{
      echo ('test');
      $insert_category = $conn->prepare("INSERT INTO `category`(category_name, category_description, category_imge) VALUES(?,?,?)");
      $insert_category->execute([$name, $descreption, $image_01]);

      if($insert_category){
         if($image_size_01 > 2000000 ){
            $message[] = 'image size is too large!';
         }else{
            move_uploaded_file($image_tmp_name_01, $image_folder_01);
            $message[] = 'new category added!';
         }

      }

   }  

};

if(isset($_GET['delete'])){

   $delete_id = $_GET['delete'];
   $delete_category_image = $conn->prepare("SELECT * FROM `category` WHERE category_id = ?");
   $delete_category_image->execute([$delete_id]);
   $fetch_delete_image = $delete_category_image->fetch(PDO::FETCH_ASSOC);
   unlink('../uploaded_img/'.$fetch_delete_image['image_01']);
   $delete_category = $conn->prepare("DELETE FROM `category` WHERE category_id = ?");
   $delete_category->execute([$delete_id]);
   $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE pid = ?");
   $delete_cart->execute([$delete_id]);
   $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE pid = ?");
   $delete_wishlist->execute([$delete_id]);
   header('location:category.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>category</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="add-category">

   <h1 class="heading">add category</h1>

   <form action="" method="post" enctype="multipart/form-data">
      <div class="flex">
         <div class="inputBox">
            <span>category name (required)</span>
            <input type="text" class="box" required maxlength="100" placeholder="category name" name="name">
         </div>
         <div class="inputBox">
            <span>category descreption (required)</span>
            <input type="text" min="0" class="box" required max="9999999999" placeholder="category descreption" onkeypress="if(this.value.length >= 50) return false;" name="descreption">
         </div>
        <div class="inputBox">
            <span>image (required)</span>
            <input type="file" name="image_01" accept="image/jpg, image/jpeg, image/png, image/webp" class="box" required>
        </div>
      </div>
      
      <input type="submit" value="add category" class="btn" name="add_category">
   </form>

</section>

<!-- show category -->
<section class="show-category">

   <h1 class="heading">category added</h1>

   <div class="box-container">

   <?php
      $select_category = $conn->prepare("SELECT * FROM `category`");
      $select_category->execute();
      if($select_category->rowCount() > 0){
         while($fetch_category = $select_category->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <div class="box">
      <img src="../uploaded_img/<?= $fetch_category['category_imge']; ?>" alt="">
      <div class="name"><?= $fetch_category['category_name']; ?></div>
      <div class="description"><span><?= $fetch_category['category_description']; ?></span></div>
      <div class="flex-btn">
         <a href="update_category.php?update=<?= $fetch_category['category_id']; ?>" class="option-btn">update</a>
         <a href="category.php?delete=<?= $fetch_category['category_id']; ?>" class="delete-btn" onclick="return confirm('delete this category?');">delete</a>
      </div>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">no category added yet!</p>';
      }
   ?>
   
   </div>

</section>








<script src="../js/admin_script.js"></script>
   
</body>
</html>