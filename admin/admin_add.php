
<?php

require_once("adminayar.php");


if (isset($_POST["urunekle"])) {
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
        $insert = "INSERT INTO urunler(UrunAdi,UrunFiyati,UrunResmi,UrunAciklamasi,UrunKategori) VALUES('$urunismi','$urunfiyati','$urunresmi','$urunaciklamasi','$urunkategori')";
        $upload = mysqli_query($conn , $insert);
        if ($upload) {
            
            move_uploaded_file($urunresmi,$urunresmi_folder);
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




        <!-- /. NAV SIDE  -->
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

                    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data" style="max-width: 50rem; margin:0 auto; padding:2rem; border-radius: .5rem; background: #214761;">

                        <h3 style="color:#fff;">Ürün Ekle</h3>
                        <input type="text" style="margin-bottom:20px" placeholder="Ürün İsmi" name="urun_ismi" class="box">
                        <input type="number"  placeholder="Ürün Fiyatı" style="margin-bottom:20px;" name="urun_fiyati" class="box">
                      

                        <select name="urun_kategori" style="width: 50% ; height:35px; margin-bottom:20px;">
                            <option value="">Kategori</option>
                            <option value="Erkek">Erkek</option>
                            <option value="Kadin">Kadın</option>
                            <option value="Cocuk">Çocuk</option>
                        </select>
                        <input type="text"  placeholder="Ürün Açıklaması" name="urun_aciklamasi"  style="width: 100%; margin-bottom:20px;">
                        <input type="file" name="urun_resmi" accept="image/png, image/jpeg, image/jpg" class="box">
                        <input type="submit" style="display: block; margin-bottom:20px;cursor:pointer; border-radius: .5rem; margin-top: 1rem; font-size: 1.7rem; padding:1rem 3rem; background:green; color:white;" name="urunekle" value="Ürünü Ekle">

                    </form>

                </div>
                </div>
















                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        <!-- /. PAGE WRAPPER  -->
    </div>

























    <div class="footer">


        <div class="row">
            <div class="col-lg-12">
                &copy; 2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
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