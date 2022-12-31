<?php

session_start();
require('config.php');
include('../functions/myfunctions.php');


if($_SERVER['REQUEST_METHOD']=="POST"&&isset($_POST['add_user_btn']))
{
    $name = $_POST['user_name'];
    $email = $_POST['email'];

    $cate_query = "INSERT INTO `user` (`user_id`, `user_name`, `email`, `mobile`, `password`, `is_admin`, `created_at`, `updated_at`)
    VALUES (NULL,'$name','$email'ّ)";

    $conn->query($cate_query);
    header("location:users.php");

}else if(isset($_POST['update_user_btn'])){

    $user_id = $_POST['user_id'];
    $name = $_POST['user_name'];
    $email = $_POST['email'];

    $update_query = "UPDATE user SET user_name='$name', email='$email' WHERE user_id='$user_id'  ";

    $update_query_run = mysqli_query($conn , $update_query);


    if($update_query_run)
    {
        redirect("users.php?user_id=$user_id", "user Updated Successfully");   
    }else{
        redirect("users.php?user_id=$user_id", "something went wrong");  
    }
    
}else if(isset($_POST['delete_user_btn'])){
    $user_id = mysqli_real_escape_string($conn , $_POST['user_id']);
    $delete_query = "DELETE FROM user WHERE user_id='$user_id' ";
    $delete_query_run = mysqli_query($conn , $delete_query);


    if($delete_query_run)
    {
        redirect("users.php?user_id=$user_id", "user Delete Successfully");   
    }else{
        redirect("users.php?user_id=$user_id", "something went wrong");  
    }
}




?>

