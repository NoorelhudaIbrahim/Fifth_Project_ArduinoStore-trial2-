<?php

include './components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

// ----------------------------------------------------------------------
$pass='';
$cpass='';
$name='';
$email='';

if(isset($_POST['submit'])){

   // Validate name
    if(preg_match("/^([a-zA-Z' ]+)$/",$_POST['name'])){  
        $name= $_POST['name'];
        $name = htmlspecialchars($name, ENT_QUOTES);
       }else{
           $message[]= "Name must contain only alphabets and space";
       }

   // Validate email
   if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $email = $_POST['email'];
      $email = htmlspecialchars($email, ENT_QUOTES);
   }
   else{
      $message[] = "Please Enter Your Valid Email Address";
   }
   // Validate password
  if(preg_match('^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$^',$_POST['pass']))
  {
   $pass = sha1($_POST['pass']);
     $pass =htmlspecialchars($pass, ENT_QUOTES);
 
  }
  else 
  {
   $message[]='Invalid Password';
  }
  
  $cpass = sha1($_POST['cpass']);
  $cpass = htmlspecialchars($cpass, ENT_QUOTES);


     if($name!='' && $email!='' && $pass!='' && $cpass!='')
     {
      $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
      $select_user->execute([$email,]);
      $row = $select_user->fetch(PDO::FETCH_ASSOC);
   
      if($select_user->rowCount() > 0){
         $message[] = 'email already exists!';
      }else{
         if( $pass != $cpass){
            $message[] = 'confirm password not matched!';
         }
         else{
            $insert_user = $conn->prepare("INSERT INTO `users`(name, email, password) VALUES(?,?,?)");
            $insert_user->execute([$name, $email, $cpass]);
            $message[] = 'registered successfully, login now please!';
            header('location: user_login.php');

         }
      }
     }
}

// ---------------------------regex using pdo(but not work)-------------------------------------------
// if(isset($_POST['submit']))
// {
//    $name= ($_POST['name']);
//    $email= ($_POST['email']);
//    $pass= ($_POST['pass']);
//    $cpass=($_POST['cpass']);


//    if(empty($name)){
//       $name_errorMsg[]="Please Enter Your Name";

//    }
//    else if (!preg_match("/^[a-zA-Z ]+$/",$name))
//    {
//       $name_errorMsg[]= "Name must contain only alphabets and space";
//    }
//    else if(empty($email)){
//       $email_errorMsg[]="Please Enter Your Email";
//    }
//    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//       $email_errorMsg[]="Please Enter Your Valid Email Address";
//    }
//    else if(empty($pass)){
//       $pass_errorMsg[]="Please Enter Your Password";
//    }
//    else if(strlen($pass)<8){
//       $pass_errorMsg[]="Password must be atleast 8 characters";
//    }

//     $select_user = $conn->prepare("SELECT * FROM users WHERE email = ?");
//     $select_user->execute([$email,]);
//     $row = $select_user->fetch(PDO::FETCH_ASSOC);
         
//     if($select_user->rowCount() > 0)
//     {
//             $emaile_errorMsg[] = 'email already exists!';
//          }else{
//             if($pass != $cpass){
//                $passe_errorMsg[] = 'confirm password not matched!';
//             }else
//             {
//                $insert_user = $conn->prepare("INSERT INTO users(name, email, password) VALUES(?,?,?)");
//                $insert_user->execute([$name, $email, $pass]);
//                $message[] = 'registered successfully, login now please!';
//                header('location: user_login.php');
//             }
//    }
// }

//  ------------before any edit-----------------------------------  

// if(isset($_POST['submit'])){

//    $name = $_POST['name'];
//    $name = filter_var($name, FILTER_SANITIZE_STRING);
//    $email = $_POST['email'];
//    $email = filter_var($email, FILTER_SANITIZE_STRING);
//    $pass = sha1($_POST['pass']);
//    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
//    $cpass = sha1($_POST['cpass']);
//    $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

//    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
//    $select_user->execute([$email,]);
//    $row = $select_user->fetch(PDO::FETCH_ASSOC);

//    if($select_user->rowCount() > 0){
//       $message[] = 'email already exists!';
//    }else{
//       if($pass != $cpass){
//          $message[] = 'confirm password not matched!';
//       }else{
//          $insert_user = $conn->prepare("INSERT INTO `users`(name, email, password) VALUES(?,?,?)");
//          $insert_user->execute([$name, $email, $cpass]);
//          $message[] = 'registered successfully, login now please!';
//       }
//    }

// }
// ----------------------------------------------------------


// -------------------regex using mysqli---------------------

// if (isset($_POST['submit'])) {
//    $name = mysqli_real_escape_string($conn, $_POST['name']);
//    $email = mysqli_real_escape_string($conn, $_POST['email']);
//    $password = mysqli_real_escape_string($conn, $_POST['password']);
//    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']); 


//    if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
//    $name_error = "Name must contain only alphabets and space";
//    }
//    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
//    $email_error = "Please Enter Valid Email ID";
//    }
//    if(strlen($password) < 6) {
//    $password_error = "Password must be minimum of 6 characters";
//    }       
   
//    if($password != $cpassword) {
//    $cpassword_error = "Password and Confirm Password doesn't match";
//    }
//    if (!$error) {
//    if(mysqli_query($conn, "INSERT INTO users(name, email, mobile ,password) VALUES('" . $name . "', '" . $email . "', '" . $mobile . "', '" . md5($password) . "')")) {
//    header("location: registration.php");
//   
//    } else {
//    echo "Error: " . $sql . "" . mysqli_error($conn);
//    }
//    
// -------------------------------------------------------

   ?>




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
         body{
            background-image: url("project images/Untitled__5_-removebg-preview.png");
            background-repeat: no-repeat;
            background-size: 59%;
         }
         input{
            background-color: none !important;
         }
         .btn_login_now , .option-btn{
            background-color: #165168 !important;   
            color: white;
         }

         .option-btn:hover{
            background-color:white !important;
            color: #165168 !important;
            border: 1px #165168 solid !important;

         }

         .btn_login_now:hover{
            background-color:white !important;
            color: #165168 !important;
            border: 1px #165168 solid !important;
         }
         .footer{
            background-color: #165168 !important;

         
         }
         .footer a {
            color:white !important;
         }
         .footer h3 {
            color:rgb(250 240 240) !important
         }

         form h3{
            position:absolute !important;
            left:60px !important;
            top:16pc !important;
            margin-bottom : 30px;
            font-size:60px !important;
            color:white !important;
            
         }
         
         .form-container form{
               padding:2rem;
               text-align: center;
               margin: 10px auto 55px auto;
               margin-right:-150px;
               max-width: 50rem;
         }

         .footer .fab , .fas{
            color:white !important ;
         }
  
         .btn-first-time{
            color:black !important;
            text-align: center;
            font-size:15px !important;
            margin-top:330px !important;
            color:#165168 !important;
         }
         .btn-first-time:hover{
            text-decoration:underline;
            
         }

   </style>

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="form-container">

   <form action="" method="post" auto_complete="off">
      <h3>register now</h3>
      <input type="text" name="name" required placeholder="enter your username" maxlength="20"  class="box">
      <span><?php if(isset($name_errorMsg)) echo $name_errorMsg; ?></span>
      <input type="email" name="email" required placeholder="enter your email" maxlength="50"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <span><?php if(isset($email_errorMsg)) echo $email_errorMsg; ?></span>
      <input type="password" name="pass" required placeholder="enter your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <span><?php if(isset($pass_errorMsg)) echo $pass_errorMsg; ?></span>
      <input type="password" name="cpass" required placeholder="confirm your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="register now" class="btn btn_login_now" name="submit">
      <div><pre> </pre></div>
      <a href="user_login.php" class="btn-first-time">already have an account?Login</a>
   </form>

</section>



<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>