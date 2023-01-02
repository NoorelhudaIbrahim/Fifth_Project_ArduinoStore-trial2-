<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
}

if(isset($_POST['update'])){

   $pid = $_POST['pid'];
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $details = $_POST['details'];
   $details = filter_var($details, FILTER_SANITIZE_STRING);

   $update_category = $conn->prepare("UPDATE `category` SET category_name = ?, category_description = ? WHERE category_id = ?");
   $update_category->execute([$name, $details, $pid]);

   $message[] = 'category updated successfully!';

   $old_cat_01 = $_POST['old_cat_01'];
   $cat_01 = $_FILES['cat_01']['name'];
   $cat_01 = filter_var($cat_01, FILTER_SANITIZE_STRING);
   $image_size_01 = $_FILES['cat_01']['size'];
   $image_tmp_name_01 = $_FILES['cat_01']['tmp_name'];
   $image_folder_01 = '../uploaded_img/'.$cat_01;

   if(!empty($cat_01)){
      if($image_size_01 > 2000000){
         $message[] = 'image size is too large!';
      }else{
         $update_cat_01 = $conn->prepare("UPDATE `category` SET ategory_imge = ? WHERE category_id = ?");
         $update_cat_01->execute([$cat_01, $pid]);
         move_uploaded_file($image_tmp_name_01, $image_folder_01);
         unlink('../uploaded_img/'.$old_cat_01);
         $message[] = 'image 01 updated successfully!';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update category</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="update-product">

   <h1 class="heading">update category</h1>

   <?php
      $update_id = $_GET['update'];
      $select_category = $conn->prepare("SELECT * FROM `category` WHERE category_id = ?");
      $select_category->execute([$update_id]);
      if($select_category->rowCount() > 0){
         while($fetch_category = $select_category->fetch(PDO::FETCH_ASSOC)){ 
   ?>
   <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="pid" value="<?= $fetch_category['category_id']; ?>">
      <span>Category Name</span>
      <input type="text" name="name" required class="box" maxlength="100" placeholder="enter category name" value="<?= $fetch_category['category_name']; ?>">
      <span>Category Description</span>
      <textarea name="details" class="box" required cols="30" rows="30"><?= $fetch_category['category_description']; ?></textarea>
      <span>update image</span>
      <div class="flex-btn">
         <input type="submit" name="update" class="btn" value="update">
         <a href="category.php" class="option-btn">go back</a>
      </div>
   </form>
   
   <?php
         }
      }else{
         echo '<p class="empty">no category found!</p>';
      }
   ?>

</section>












<script src="../js/admin_script.js"></script>
   
</body>
</html>