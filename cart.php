<?php
require_once("admin/adminayar.php");
require_once('User/config.php');
ob_start();

if (isset($_SESSION["user_name"])){
    
if(isset($_POST["sepeteEkle"])){
    $UrunResmi = $_POST["UrunResmi"];
    $UrunAdi = $_POST["UrunAdi"];
    $UrunFiyati = $_POST["UrunFiyati"];
    $insert = "INSERT INTO sepet(urunadi,urunfiyati,urunresmi) VALUES('$UrunAdi' , '$UrunFiyati' , '$UrunResmi')";
    $upload = mysqli_query($conn , $insert);

    
    }
else{
    
    try{
    
        
    }
    catch(Exception $e){
        echo "<br><br><br><br><br><br>".$e;
    }
}
} else {
    $select = mysqli_query($conn, "SELECT * FROM sepet");

    while ($row = mysqli_fetch_assoc($select)) {
        $insert = "DELETE FROM `sepet` WHERE `sepet`.`id` =" .  $row["id"] ;
    }
}

if(isset($_GET['delete'])){
    
    $id=$_GET['delete'];
    mysqli_query($conn,"DELETE  FROM sepet WHERE id=$id");
    header('location: index.php?SK=3');
    }
    


   




?>



     <!-- Breadcrumb Start -->
   <div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Ana Sayfa</a>
                <a class="breadcrumb-item text-dark" href="#">Ürünler</a>
                <span class="breadcrumb-item active">Sepet</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


    <!-- Cart Start -->


    <?php 
       $select = mysqli_query($conn, "SELECT * FROM sepet");
       ?>
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Ürün</th>
                            <th>Fiyat</th>
                            <th>Adet</th>
                            <th>Toplam</th>
                            <th>Sil</th>
                        </tr>
                    </thead>
 
                    <?php
                while ($row = mysqli_fetch_assoc($select)) {
                ?>


                    <tbody class="align-middle">
                        <tr>
                            <td class="align-middle"><img src="Resimler/<?php echo $row['urunresmi'];?>" alt="" style="width: 50px;"> <?php echo $row['urunadi']?></td>
                            <td class="align-middle"> <?php echo $row["urunfiyati"]?>TL</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle"><?php echo $row["urunfiyati"]?>TL</td>
                            <form action="" method="GET">
                            <td class="align-middle"><button class="btn btn-sm btn-danger" name="delete=<?php echo $row['id']; ?>"><i class="fa fa-times"></i></button></td>

                            </form>
                        </tr>
                        
                    </tbody>
                    <?php
                 } ?>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Kupon Kodu">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Kuponu Uygula</button>
                        </div>
                    </div>
                </form>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">SEPET ÖZETİ</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Toplam</h6>
                            <h6><?php
                            $toplam = 0; 
                            while ($row = mysqli_fetch_assoc($select)){
                                $toplam = $toplam + $row["urunfiyati"];
                            }





                            echo $toplam
                            ?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">10 TL</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>160 TL</h5>
                        </div>
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Ödeme Yap</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->


  