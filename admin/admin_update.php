
<?php

require_once("adminayar.php");

$id = $_GET["edit"];

if (isset($_POST["urunguncelle"])) {
$urunismi = $_POST["urun_ismi"];
$urunfiyati = $_POST["urun_fiyati"];
$urunkategori = $_POST["urun_kategori"];
$urunaciklamasi = $_POST["urun_aciklamasi"];
$urunresmi = $_FILES["urun_resmi"]['name'];
$urunresmi_tmp_name = $_FILES["urun_resmi"]["tmp_name"];
$urunresmi_folder = "Resimler/".$urunresmi;

if (empty($urunismi) or empty($urunfiyati) or empty($urunaciklamasi) or empty($urunresmi)) {
    $mesaj[] ="Lütfen boş alan bırakmayınız!!!"; 
    
}
else
{
    try{
        $update = "UPDATE  urunler SET UrunAdi = '$urunismi',UrunFiyati='$urunfiyati',UrunResmi='$urunresmi',UrunAciklamasi='$urunaciklamasi' UrunKategori='$urunkategori' WHERE
        id=$id";
        $upload = mysqli_query($conn , $update);
        if ($upload) {
            
            move_uploaded_file($urunresmi_name,$urunresmi_folder);
            $mesaj[]="Yeni Ürünler Eklendi..";
        }
        else
        {
            $mesaj[]="Ürün eklenirken hatayla karşılaştı.";
        }
    }
    catch(Exception $e){
        echo "<br><br><br><br><br><br>".$e;
    }
    
}
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
        .mesaj{
            display: block;
            background: green;
            padding: 1.5rem;
            text-align: center;
            font-size: 2rem;
            color: white;
            font-weight: 700;
            margin-bottom: 2rem;
        }
    </style>
    
</head>

<body>
    
<?php
   



                        if (isset($mesaj)) {
                            foreach($mesaj as $mesaj){
                                echo "<br><br><br><span class='mesaj'>".$mesaj."</span>";
                            }
                        }


                        ?>





    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" />
                    </a>
                </div>

                <span class="logout-spn">
                    <a href="#" style="color:#fff;">Çıkış</a>

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">


                    <li>
                        <a href="index.php?SK=1"><i class="fa fa-desktop "></i>Ana Ekran </a>
                    </li>
                    <li class="active-link">
                        <a href="index.php?SK=2"><i class="fa fa-edit "></i>Ürün Güncelle </a>
                    </li>

                    <li>
                        <a href="index.php?SK=3"><i class="fa fa-qrcode "></i>Ürün Düzenle</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>My Link Two</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Three </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table "></i>My Link Four</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Five </a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Ürün Ekle  </h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

                <!-- iÇERİKLER-->
                
                        <?php
                        if (isset($mesaj)) {
                            foreach($mesaj as $mesaj){
                                echo "<br><br><br><span class='mesaj'>".$mesaj."</span>";
                            }
                        }


                        ?>
                <div style="max-width: 1200px; padding:2rem; margin:0 auto;">
                <div style="width: 100%; border-radius:.5rem;padding:1.2rem 1.5rem; font-size: 1.7rem;">



<?php
 $select =mysqli_query($conn,"SELECT * FROM urunler WHERE id=$id");
 while($row = mysqli_fetch_assoc($select)){
     
?>


                    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data" style="max-width: 50rem; margin:0 auto; padding:2rem; border-radius: .5rem;">

                        <h3>Ürün Güncelle</h3>
                        <input type="text" placeholder="<?php echo $row["UrunAdi"]; ?>" name="urun_ismi"  value="<?php $row["urun_ismi"];?>" class="box">
                        <img src="Resimler/<?php echo $row['UrunResmi']; ?>" height="100" style="position: relative; right:40rem;border-radius: 1px solid black;">
                        <input type="number" style="margin-bottom:20px;" placeholder="<?php echo $row["UrunFiyati"]; ?>" name="urun_fiyati"  value="<?php $row["urun_fiyati"];?>" class="box">
                        <select name="urun_kategori" style="width: 50% ; height:35px; margin-bottom:20px;">
                            <option value=""><?php  echo $row['UrunKategori']; ?></option>
                            <option value="Erkek">Erkek</option>
                            <option value="Kadin">Kadın</option>
                            <option value="Cocuk">Çocuk</option>
                        </select>
                        <input type="text" style="margin-bottom:20px;" placeholder="<?php echo $row["UrunAciklamasi"]; ?>" name="urun_aciklamasi"  value="<?php $row["urun_aciklamasi"];?>" style="width: 100%;">
                        <input type="file" name="urun_resmi" style="margin-bottom:20px;" accept="image/png, image/jpeg, image/jpg" value="<?php $row["urun_resmi"];?>"  class="box">
                        <input type="submit" style="display: block; cursor:pointer; margin-bottom:20px;border-radius: .5rem; margin-top: 1rem; font-size: 1.7rem; padding:1rem 3rem; background: var(--green); color:var(--white);" name="urunguncelle" value="Ürünü Güncelle">
                        <a href="admin_add.php" style="background: yellow;margin-bottom:20px; border-radius: 10px; font-size: 20px;">Geriye Dön</a>
                    </form>

                </div>
                </div>



<?php
 }

?>












                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

























    <div class="footer">


        <div class="row">
            <div class="col-lg-12">
                &copy; 2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_admin_add">www.binarytheme.com</a>
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