<?php

include('config.php');

function getAll($table)
{
    global $conn;
    $query = "SELECT * FROM $table";
    return $query_run = mysqli_query($conn,$query);   
}


function getByID($table , $id)
{
    global $conn;
    $query = "SELECT * FROM $table WHERE category_id='$id' ";
    return $query_run = mysqli_query($conn,$query);   
}


function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: '.$url);
    exit();
}



?>