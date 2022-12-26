<?php
ob_start();
session_start();

require_once("admin_site_sayfalari.php");

if (isset($_REQUEST["SK"])) {
    $SayfaKoduDegeri =$_REQUEST["SK"];
} else {
    $SayfaKoduDegeri = 0;
}

?>


<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Paneli</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    


    <style>
            
        
    
        
*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}
.mesaj {
            display: block;
            background: green;
            padding: 1.5rem;
            text-align: center;
            font-size: 2rem;
            color: white;
            font-weight: 700;
            margin-bottom: 2rem;
        }
.ürünekrani {
            margin: 1rem 0;
            overflow-y: scroll;
        }

        .ürünekrani .ürünekranitablo {
            width: 100%;
            text-align: left;
        }

        .ürünekrani .ürünekranitablo thead {
            padding: 1rem;
            background: #ff9900;
        }

        .ürünekrani .ürünekranitablo tr {
            font-size: 2rem;
            padding: 1rem;
            border-bottom: #ff9900;
        }

        .ürünekrani .ürünekranitablo .btn:first-child {
            margin-top: 0;
        }

        .ürünekrani .ürünekranitablo .btn:last-child {
            background: #F39900;
            color: black;
        }
        .ürünekrani .ürünekranitablo .btn:last-child:hover {
            background: red;
            color: black;
        }

.container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
}

.container .content{
   text-align: center;
}

.container .content h3{
   font-size: 30px;
   color:#333;
}

.container .content h3 span{
   background: crimson;
   color:#fff;
   border-radius: 5px;
   padding:0 15px;
}

.container .content h1{
   font-size: 50px;
   color:#333;
}

.container .content h1 span{
   color:crimson;
}

.container .content p{
   font-size: 25px;
   margin-bottom: 20px;
}

.container .content .btn{
   display: inline-block;
   padding:10px 30px;
   font-size: 20px;
   background: #333;
   color:#fff;
   margin:0 5px;
   text-transform: capitalize;
}

.container .content .btn:hover{
   background: crimson;
}

.form-container{
   min-height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:20px;
   padding-bottom: 60px;
   background: #eee;
}

.form-container form{
   padding:20px;
   border-radius: 5px;
   box-shadow: 0 5px 10px rgba(0,0,0,.1);
   background: #fff;
   text-align: center;
   width: 500px;
}

.form-container form h3{
   font-size: 30px;
   text-transform: uppercase;
   margin-bottom: 10px;
   color:#333;
}

.form-container form input,
.form-container form select{
   width: 100%;
   padding:10px 15px;
   font-size: 17px;
   margin:8px 0;
   background: #eee;
   border-radius: 5px;
}

.form-container form select option{
   background: #fff;
}

.form-container form .form-btn{
   background: #fbd0d9;
   color:crimson;
   text-transform: capitalize;
   font-size: 20px;
   cursor: pointer;
}

.form-container form .form-btn:hover{
   background: crimson;
   color:#fff;
}

.form-container form p{
   margin-top: 10px;
   font-size: 20px;
   color:#333;
}

.form-container form p a{
   color:crimson;
}

.form-container form .error-msg{
   margin:10px 0;
   display: block;
   background: crimson;
   color:#fff;
   border-radius: 5px;
   font-size: 20px;
   padding:10px;
}
    </style>
</head>

<body>

    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/img/logo.png" />

                    </a>

                </div>

              
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">



                    <li class="active-link">
                        <a href="index.php?SK=1"><i class="fa fa-desktop "></i>Ana Ekran </a>
                    </li>
                    <li>
                        <a href="index.php?SK=2"><i class="fa fa-edit "></i>Ürün Ekle </a>
                    </li>


                    <li>
                        <a href="index.php?SK=3"><i class="fa fa-qrcode "></i>Ürün Düzenle</a>
                    </li>
                    <li>
                        <a href="index.php?SK=5"><i class="fa fa-bar-chart-o"></i>Destek</a>
                    </li>

                    <li>
                        <a href="index.php?SK=6"><i class="fa fa-edit "></i>Üyeler </a>
                    </li>
                    <li>
                        <a href="index.php?SK=7"><i class="fa fa-table "></i>Admin</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Sipariş </a>
                    </li>

                </ul>
            </div>

        </nav>


        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <?php

                if ((!$SayfaKoduDegeri) or ($SayfaKoduDegeri == "") or ($SayfaKoduDegeri == 0)) {

                ?>

                    <div class="container">

                        <div class="content">
                            <h3><span>admin</span></h3>
                            <h1>Hoş Geldin <span><?php echo $_SESSION['admin_name'] ?></span></h1>
                            <p>Yan menüden işlerinizi kolaylıkla kontrol edebilirsiniz.</p>
                            <a href="http://localhost/e-ticaret/User/logout.php" class="btn">logout</a>
                        </div>

                    </div>




                <?php


                } else {
                    include($Sayfa[$SayfaKoduDegeri]);
                }
                ?>

            </div>




        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <div class="footer">


        <div class="row">
            <div class="col-lg-12">
                &copy; 2022 | Design by: <a href="http://www.instagram.com/Ugurcan024" style="color:#fff;" target="_admin_add">Uğur Can Yıldız</a>
            </div>
        </div>
    </div>


    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>