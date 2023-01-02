<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = sha1($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select_user->execute([$email,]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $message[] = 'email already exists!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         $insert_user = $conn->prepare("INSERT INTO `users`(name, email, password) VALUES(?,?,?)");
         $insert_user->execute([$name, $email, $cpass]);
         $message[] = 'registered successfully, login now please!';
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

   <form action="" method="post">
      <h3>register now</h3>
      <input type="text" name="name" required placeholder="enter your username" maxlength="20"  class="box">
      <input type="text" name="email" required placeholder="enter your email" maxlength="50"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="pass" required placeholder="enter your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="cpass" required placeholder="confirm your password" maxlength="20"  class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="register now" class="btn btn_login_now" name="submit">
      <div><pre> </pre></div>
      <a href="user_login.php" class="btn-first-time">already have an account?</a>
   </form>

</section>













<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>