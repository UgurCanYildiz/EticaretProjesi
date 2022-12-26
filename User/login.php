<?php

require_once('config.php');


if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      session_start();
      $row = mysqli_fetch_array($result);

      if($row['KullaniciTuru'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:http://142.93.235.237/admin/index.php?SK=0');

      }elseif($row['KullaniciTuru'] == 'kullanici'){

         $_SESSION['user_name'] = $row['name'];
         header('location: http://142.93.235.237');

      }
     
   }else{
      $error[] = 'Email veya şifre uyuşmuyor!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Giriş Ekranı</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Giriş Ekranı</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Email">
      <input type="password" name="password" required placeholder="Şifre">
      <input type="submit" name="submit" value="Giriş Yap" class="form-btn">
      <p>Hesabın yok mu? <a href="register.php">Kayıt Ol</a></p>
   </form>

</div>

</body>
</html>

