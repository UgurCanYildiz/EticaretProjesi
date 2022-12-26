<table style="align-items: center;  border:0;margin-left: auto; margin-right: auto;  ">
    <tr>
        <td style="text-align: center; height: 80px; background: #321919; color:white; font-size: 30px; ">Banka Hesaplarımız</td>
    </tr>
    <tr>
        <td style="text-align: center; height: 45px; font-size: 25px; border-bottom: 1px dashed #CCCCCC;">Ödemelerimiziçin çalışmakta olduğumuz banka hesaplarını aşşağıdan kontrol ederek ulaşabilirsiniz ...</td>
    </tr>
    <tr>&nbsp;</tr>
    <tr>
        <td>
            <table style="  align-items: center; margin-left: auto; margin-right: auto; ">
                <tr>
                    <?php
                    $BankalarSorgusu = $VeriTabaniBaglantisi->prepare("SELECT * FROM bankahesaplarimiz");
                    $BankalarSorgusu->execute();
                    $BankaSayisi  = $BankalarSorgusu->rowCount();
                    $BankaKayitlari = $BankalarSorgusu->fetchAll(PDO::FETCH_ASSOC);
                    $DonguSayisi = 1;
                    $SutunAdetSayisi = 3;
                    foreach ($BankaKayitlari as $Kayit) {
                    ?>
                        <td style="width: 450px; border : 1px solid black; ">
                            <table style="margin-bottom: 20px;">
                                <tr style="height: 30px;">
                                    <td colspan="5">
                                        <img src="Resimler/<?php echo DonusumleriGeriDondur($Kayit["BankaLogosu"]); ?>" style="width:140px; height:70px; position : relative ;  left : 80px; padding-bottom : 10px;">
                                    </td>
                                </tr>
                                <tr style="height: 30px; ">
                                    <td style="width: 80px;"><b>Banka Adı</b></td>
                                    <td style="width: 20px;">:</td>
                                    <td style="width: 240px;"><?php echo DonusumleriGeriDondur($Kayit["BankaAdi"]); ?></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td><b>Konum</b></td>
                                    <td>:</td>
                                    <td><?php echo DonusumleriGeriDondur($Kayit["KonumSehir"]); ?> / <?php echo DonusumleriGeriDondur($Kayit["KonumUlke"]); ?></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td><b>Şube</b></td>
                                    <td>:</td>
                                    <td><?php echo DonusumleriGeriDondur($Kayit["SubeAdi"]); ?> / <?php echo DonusumleriGeriDondur($Kayit["SubeKodu"]); ?></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td><b>Birim</b></td>
                                    <td>:</td>
                                    <td><?php echo DonusumleriGeriDondur($Kayit["ParaBirimi"]); ?></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td><b> Adı</b></td>
                                    <td>:</td>
                                    <td><?php echo DonusumleriGeriDondur($Kayit["HesapSahibi"]); ?></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td><b>Hesap No</b></td>
                                    <td>:</td>
                                    <td><?php echo DonusumleriGeriDondur($Kayit["HesapNumarasi"]); ?></td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td><b>İban No</b></td>
                                    <td>:</td>
                                    <td><?php echo IBANBicimlendirme(DonusumleriGeriDondur($Kayit["IbanNumarasi"])); ?></td></tr>
                            </table></td>
                        <?php
                        if ($DonguSayisi < $SutunAdetSayisi) {
                        ?> <td style="width: 20px;">&nbsp;</td>
                        <?php } ?>
                    <?php $DonguSayisi++;
                        if ($DonguSayisi > $SutunAdetSayisi) {
                            echo "</tr><tr>";
                            $DonguSayisi = 1;
                        }}?>
               </tr>
            </table>
        </td>
    </tr>
</table>