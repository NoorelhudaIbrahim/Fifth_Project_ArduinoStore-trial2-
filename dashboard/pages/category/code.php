<?php

session_start();
require('config.php');
include('../functions/myfunctions.php');


if($_SERVER['REQUEST_METHOD']=="POST"&&isset($_POST['add_category_btn']))
{
    $name = $_POST['name'];
    $description = $_POST['description'];

    $cate_query = "INSERT INTO category 
    (category_id,name,description)
    VALUES (NULL,'$name','$description')";

    $conn->query($cate_query);
    header("location:category.php");

}else if(isset($_POST['update_category_btn'])){

    $category_id = $_POST['category_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $update_query = "UPDATE category SET name='$name', description='$description' WHERE category_id='$category_id'  ";

    $update_query_run = mysqli_query($conn , $update_query);


    if($update_query_run)
    {
        redirect("category.php?catecory_id=$category_id", "Category Updated Successfully");   
    }else{
        redirect("category.php?catecory_id=$category_id", "something went wrong");  
    }
    
}else if(isset($_POST['delete_category_btn'])){
    $category_id = mysqli_real_escape_string($conn , $_POST['category_id']);
    $delete_query = "DELETE FROM category WHERE category_id='$category_id' ";
    $delete_query_run = mysqli_query($conn , $delete_query);


    if($delete_query_run)
    {
        redirect("category.php?catecory_id=$category_id", "Category Delete Successfully");   
    }else{
        redirect("category.php?catecory_id=$category_id", "something went wrong");  
    }
}




?>

