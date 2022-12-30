<?php

session_start();
require('config.php');
include('../functions/myfunctions.php');

if(isset($_POST['add_category_btn']))
{
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];
    $meta_keywords = $_POST['meta_keywords'];
    $Status = isset($_POST['status']) ? '1':'0';
    $popular = isset($_POST['popular']) ? '1':'0';

    echo $name;
    // $image = $_FILES['image']['name'];
    // $path = "../uploads";

    // $image_ext = pathinfo($image, PATHINFO_EXTENION);
    // $filename = time().'.'.$image_ext;

    $cate_query = "INSERT INTO category 
    (category_id,name,slug,description,meta_title,meta_description,meta_keywords,status,popular)
    VALUES (NULL,'$name','$slug','$description','$meta_title','$meta_description','$meta_keywords','$Status','$popular')";

    $conn->query($cate_query);
    header("location:add-category.php");

    // if($cate_query_run){
    //     move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);

    //     redirect("add-category.php" , "Category Added Successfully");

    // }else{
    //     redirect("add-category.php" , "Something Went Wrong");
    // }


}



?>

