<?php

require_once('config.php');


if (isset($_POST['submit'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if (mysqli_num_rows($result) > 0) {

      $error[] = 'user already exist!';
   } else {

      if ($pass != $cpass) {
         $error[] = 'Şifreler uyuşmuyor!';
      } else {
         $insert = "INSERT INTO user(name, email, password, KullaniciTuru) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location: http://142.93.235.237');
      }
   }
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kayıt Ekranı</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <div class="form-container">

      <form action="" method="post">
         <h3>Kayıt Ol</h3>
         <?php
         if (isset($error)) {
            foreach ($error as $error) {
               echo '<span class="error-msg">' . $error . '</span>';
            };
         };
         ?>
         <input type="text" name="name" required placeholder="İsmin">
         <input type="email" name="email" required placeholder="Email adresin">
         <input type="password" name="password" required placeholder="Şifre">
         <input type="password" name="cpassword" required placeholder="Şifre Onayla">
         <select name="user_type">
            <option value="kullanici">Kullanıcı</option>
         </select>
         <input type="submit" name="submit" value="Kayıt Ol" class="form-btn">
         <p>Hesabın var mı? <a href="login.php">Giriş Yap</a></p>
      </form>

   </div>

</body>

</html>