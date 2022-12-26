

<?php
require_once("adminayar.php");


if(isset($_GET['delete'])){
    
    $id=$_GET['delete'];
    mysqli_query($conn,"DELETE  FROM iletisim WHERE id=$id");
    header('location: index.php?SK=5');
    }
    



?>



      
        <!-- /. NAV SIDE  -->
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Destek Formları</h2>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />

                <!--- İçerik--->

                <?php
                $select  = mysqli_query($conn, "SELECT * FROM iletisim")
                ?>

                <div class="ürünekrani">
                    <table class="ürünekranitablo">
                        <thead>
                            <tr>
                                <th>İsim-Soyisim</th>
                                <th>Email Adresi</th>
                                <th>Baslik</th>
                                <th>Mesaj</th>
                                

                            </tr>
                        </thead>
                        <?php
                        while ($row = mysqli_fetch_assoc($select)) {
                        ?>
                            <tr >

                                <td style="width: 25%;"><?php echo $row["IsimSoyisim"]; ?> </td>
                                <td style="width: 25%;"><?php echo $row["Email"]; ?></td>
                                <td style="width: 25%;"><?php echo $row["Baslik"]; ?></td>
                                <td style="width: 25%;"><?php echo $row["Mesaj"]; ?></td>
                                <th colspan="2">
                                    <a href="admin_destek.php?delete=<?php echo $row['id']; ?>"  class="btn"> <i class="fas fa-trash"></i>Sil</a>
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
    
