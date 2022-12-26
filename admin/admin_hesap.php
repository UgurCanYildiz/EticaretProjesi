<?php
require_once("adminayar.php");




if(isset($_GET['delete'])){
    
$id=$_GET['delete'];
mysqli_query($conn,"DELETE  FROM user WHERE id=$id");
header('location: index.php?SK=7');
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
                $select  = mysqli_query($conn, "SELECT * FROM user")
                ?>

                <div class="ürünekrani">
                    <table class="ürünekranitablo">
                        <thead>
                            <tr>
                                <th>İsim</th>
                                <th>Email</th>
                                <th>Şifre</th>
                                <th>Kullanıcı Tipi</th>
                                <th>Düzenle</th>

                            </tr>
                        </thead>
                        <?php
                        while ($row = mysqli_fetch_assoc($select)) {
                            if ($row["KullaniciTuru"] == "admin") {
                                # code...
                        ?>
                            <tr>

                                <td><?php echo $row["name"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["password"]; ?></td>
                                <td><?php echo $row["KullaniciTuru"]; ?></td>
                                <th colspan="2">
                                    
                                    <a href="admin_hesap.php?delete=<?php echo $row['id']; ?>"  class="btn"> <i class="fas fa-trash"></i>Sil</a>
                                </th>

                            </tr>


                        <?php
                            }
                        };

                        ?>
                    </table>
                </div>


            </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    
