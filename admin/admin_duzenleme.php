<?php
require_once("adminayar.php");




if(isset($_GET['delete'])){
    
$id=$_GET['delete'];
mysqli_query($conn,"DELETE  FROM urunler WHERE id=$id");
header('location: index.php?SK=3');
}



?>



      
        <!-- /. NAV SIDE  -->
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Ürün Düzenle </h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

                <!--- İçerik--->

                <?php
                $select  = mysqli_query($conn, "SELECT * FROM urunler")
                ?>

                <div class="ürünekrani">
                    <table class="ürünekranitablo">
                        <thead>
                            <tr>
                                <th>Ürün Resmi</th>
                                <th>Ürün Adı</th>
                                <th>Ürün Kategorisi</th>
                                <th>Ürün Açıklaması</th>
                                <th>Ürün Fiyatı</th>
                                <th colspan="2">Action</th>

                            </tr>
                        </thead>
                        <?php
                        while ($row = mysqli_fetch_assoc($select)) {
                        ?>
                            <tr>

                                <td><img src="Resimler/<?php echo $row['UrunResmi']; ?>" height="100"></td>
                                <td><?php echo $row["UrunAdi"]; ?></td>
                                <td><?php echo $row["UrunKategori"]; ?></td>
                                <td><?php echo $row["UrunAciklamasi"]; ?></td>
                                <td><?php echo $row["UrunFiyati"]; ?>TL</td>
                                <th colspan="2">
                                    <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> <i class="fas fa-edit"></i>Güncelle</a>
                                    <a href="admin_duzenleme.php?delete=<?php echo $row['id']; ?>"  class="btn"> <i class="fas fa-trash"></i>Sil</a>
                                </th>

                            </tr>


                        <?php
                        };

                        ?>
                    </table>
                </div>


            </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    
