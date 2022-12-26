<?php
ob_start();
session_start();
require_once("Ayarlar/ayar.php");
require_once("Ayarlar/fonksiyonlar.php");
require_once("Ayarlar/sitesayfalari.php");

if (isset($_REQUEST["SK"])) {
    $SayfaKoduDegeri = SayiliIcerikleriFiltrele($_REQUEST["SK"]);
} else {
    $SayfaKoduDegeri = 0;
}




?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="revisit-after" content="7 Days">
    <meta name="description" content="<?php echo DonusumleriGeriDondur($SiteDescription); ?>">
    <meta name="keywords" content="<?php echo DonusumleriGeriDondur($SiteKeywords); ?>">
    <title><?php echo DonusumleriGeriDondur($SiteTitle); ?></title>
    <script type="text/javascript" src="Ayarlar/fonksiyonlar.js" languages="javascript">
    </script>

<script type="text/javascript" src="Ayarlar/main.js" languages="javascript">
    </script>
    <!-- Favicon -->
    <link href="Resimler/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <link href="Ayarlar/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="text-body mr-3" href="">Hakkında</a>
                    <a class="text-body mr-3" href="">İletişim</a>
                    <a class="text-body mr-3" href="">Yardım</a>
                    <a class="text-body mr-3" href="">FAQs</a>
                </div>
            </div>


            <?php
    if(isset($_SESSION["user_name"])){
?>
        <div class="col-lg-6 text-center text-lg-right">
        <div class="d-inline-flex align-items-center">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Hesabım</button>
                <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button">Hoş Geldin <?php echo $_SESSION["user_name"];?> </button>
                        <button class="dropdown-item" type="button"><a href="User/register.php" style="color: black;">Hesabım</a> </button>
                        <button class="dropdown-item" type="button"><a href="User/logout.php" style="color: black;">Çıkış Yap</a></button>
                </div>
            </div>
<?php
    }else{

?>

            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Hesabım</button>
                        <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item" type="button"><a href="User/register.php" style="color: black;">Kayıt Ol</a> </button>
                                <button class="dropdown-item" type="button"><a href="User/login.php" style="color: black;">Giriş Yap </a></button>
                        </div>
                    </div>
                    <?php }?>
                    <div class="btn-group mx-2">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">TRY</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">TR</button>
                            <button class="dropdown-item" type="button">EUR</button>
                            <button class="dropdown-item" type="button">CAD</button>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">TR</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">EN</button>
                            <button class="dropdown-item" type="button">AU</button>
                            <button class="dropdown-item" type="button">RU</button>
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Talha </span>
                    <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Tekstil</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Ürün Araması Yap">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">İletişim Numarası</p>
                <h5 class="m-0">+90555 555 55 55</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Kategori</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Elbise <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="" class="dropdown-item">Erkek Elbiseleri</a>
                                <a href="" class="dropdown-item">Kadın Elbiseleri</a>
                                <a href="" class="dropdown-item">Bebek Elbiseleri</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Gömlek</a>
                        <a href="" class="nav-item nav-link">Kot</a>
                        <a href="" class="nav-item nav-link">Mayo</a>
                        <a href="" class="nav-item nav-link">Pijama</a>
                        <a href="" class="nav-item nav-link">Sport Giyim</a>
                        <a href="" class="nav-item nav-link">Tulum</a>
                        <a href="" class="nav-item nav-link">Blazer</a>
                        <a href="" class="nav-item nav-link">Ceket</a>
                        <a href="" class="nav-item nav-link">Ayakkabı</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Talha</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Tekstil</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php?SK=1" class="nav-item nav-link active">Ürünler</a>
                            <a href="index.php?SK=2" class="nav-item nav-link">Ürün Detayları</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Sepet <i class="fa fa-angle-down mt-1"></i></a>
                                <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                    <a href="index.php?SK=3" class="dropdown-item">Sepetim</a>
                                    <a href="index.php?SK=4" class="dropdown-item">Ödeme</a>
                                </div>
                            </div>
                            <a href="index.php?SK=5" class="nav-item nav-link">İletişim</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="" class="btn px-0">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                            <a href="" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- İÇERİKLER BURADA GÖSTERİLİCEK-->

    <?php

    if ((!$SayfaKoduDegeri) or ($SayfaKoduDegeri == "") or ($SayfaKoduDegeri == 0)) {
        include($Sayfa[1]);
    } else {
        include($Sayfa[$SayfaKoduDegeri]);
    }
    ?>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Sosyal Medya</h5>
                <a href="<?php echo DonusumleriGeriDondur($SosyalLinkFacebook); ?>" target="_blank"><img src="https://www.teknobeyin.com/wp-content/themes/astra/images/f1.png" style="padding-right: 15px;" title="Facebook" /></a>
                <a href="<?php echo DonusumleriGeriDondur($SosyalLinkTwitter); ?>" target="_blank"><img src="https://www.teknobeyin.com/wp-content/themes/astra/images/t1.png" style="padding-right: 15px;" title="Twitter" /></a>
                <a href=" <?php echo DonusumleriGeriDondur($SosyalLinkPinterest); ?>" target="_blank"><img src="https://www.teknobeyin.com/wp-content/themes/astra/images/p1.png" style="padding-right: 15px;" title="Pinterest" /></a>
                <a href="<?php echo DonusumleriGeriDondur($SosyalLinkInstagram); ?>" target="_blank"><img src="https://www.teknobeyin.com/wp-content/themes/astra/images/i1.png" style="padding-right: 15px;" title="Instagram" /></a>
                <a href="<?php echo DonusumleriGeriDondur($SosyalLinkYoutube); ?>" target="_blank"><img src="https://www.teknobeyin.com/wp-content/themes/astra/images/y1.png" style="padding-right: 15px;" title="YouTube" /></a>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Kurumsal</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="index.php?SK=0"><i class="fa fa-angle-right mr-2"></i>Ana Sayfa</a>
                            <a class="text-secondary mb-2" href="index.php?SK=11"><i class="fa fa-angle-right mr-2"></i>Banka Hesaplarımız</a>
                            <a class="text-secondary mb-2" href="index.php?SK=12"><i class="fa fa-angle-right mr-2"></i>Havale Bildirim Formu</a>
                            <a class="text-secondary mb-2" href="index.php?SK=17"><i class="fa fa-angle-right mr-2"></i>Kargom Nerede ?</a>
                            <a class="text-secondary mb-2" href="index.php?SK=6"><i class="fa fa-angle-right mr-2"></i>Hakkımızda</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Üyelik & Hizmetler</h5>
                        <div class="d-flex flex-column justify-content-start">

                        <?php
                        if (isset($_SESSION["user_name"])) {
                        ?>
                                <a class="text-secondary mb-2" href="User/login.php"><i class="fa fa-angle-right mr-2"></i>Hesabım</a>
                                <a class="text-secondary mb-2" href="User/logout.php"><i class="fa fa-angle-right mr-2"></i>Çıkış Yap</a>
                                <?php
                        }else{
?>
   <a class="text-secondary mb-2" href="User/login.php"><i class="fa fa-angle-right mr-2"></i>Giriş Yap</a>
                                <a class="text-secondary mb-2" href="User/register.php"><i class="fa fa-angle-right mr-2"></i>Kayıt Ol</a>
                                <?php }?>

                            <a class="text-secondary mb-2" href="index.php?SK=5"><i class="fa fa-angle-right mr-2"></i>İletişim</a>
                            <a class="text-secondary mb-2" href="index.php?SK=23"><i class="fa fa-angle-right mr-2"></i>Sık Sorulan Sorular</a>

                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Sözleşmeler</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="index.php?SK=7"><i class="fa fa-angle-right mr-2"></i>Üyelik Sözleşmesi</a>
                            <a class="text-secondary mb-2" href="index.php?SK=8"><i class="fa fa-angle-right mr-2"></i>Kullanım Koşulları</a>
                            <a class="text-secondary mb-2" href="index.php?SK=9"><i class="fa fa-angle-right mr-2"></i>Gizlilik Sözleşmesi</a>
                            <a class="text-secondary mb-2" href="index.php?SK=10"><i class="fa fa-angle-right mr-2"></i>İade & Değişim</a>
                        </div>
                    </div>

                    <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
                        <div class="col-md-6 px-xl-0">
                            <p class="mb-md-0 text-center text-md-left text-secondary">
                                &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                                by
                                <a class="text-primary" href="https://github.com/UgurCanYildiz">Uğur Can Yıldız</a>
                            </p>
                        </div>
                        <div class="col-md-6 px-xl-0 text-center text-md-right">
                            <img class="img-fluid" src="Resimler/payments.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- Footer End -->


                <!-- Back to Top -->
                <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


                <!-- JavaScript Libraries -->
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
                <script src="lib/easing/easing.min.js"></script>
                <script src="lib/owlcarousel/owl.carousel.min.js"></script>

                <!-- Contact Javascript File -->
                <script src="mail/jqBootstrapValidation.min.js"></script>
                <script src="mail/contact.js"></script>

                <!-- Template Javascript -->
                <script src="js/main.js"></script>





</body>

</html>

<script src="Ayarlar/main.js"></script>

<?php
$VeriTabaniBaglantisi = NULL;
ob_end_flush();


?>