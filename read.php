<?php

session_start();
require("config.php");

if($_SERVER['REQUEST_METHOD']=="POST"&&isset($_POST['add_category_btn']))
{
  $name = $_POST['category_id'];
  $description = $_POST['description'];

  $cate_query="SELECT * From category";
  $result= $conn->query($cate_query);
  $data=mysqli_fetch_assoc($result);

  print_r($data['description']);
  // $name=$data['name'];
  // echo "Welcome $name";
  // $id=$data['category_id'];
 }



?>