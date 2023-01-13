<?php

session_start();
require('config.php');
include('../functions/myfunctions.php');

if($_SERVER['REQUEST_METHOD']=="POST"&&isset($_POST['add_category_btn']))
{
    $name = $_POST['name'];
    $description = $_POST['description'];

    // $image = $_FILES['image']['name'];
    // $path = "../uploads";

    // $image_ext = pathinfo($image, PATHINFO_EXTENION);
    // $filename = time().'.'.$image_ext;

    $cate_query = "INSERT INTO category 
    (category_id,name,description)
    VALUES (NULL,'$name','$description')";

    $conn->query($cate_query);
    header("location:read_category.php");

    // if($cate_query_run){
    //     move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);

    //     redirect("add-category.php" , "Category Added Successfully");

    // }else{
    //     redirect("add-category.php" , "Something Went Wrong");
    // }


}



?>