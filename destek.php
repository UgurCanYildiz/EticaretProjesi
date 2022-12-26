
<table style="align-items: center;  border:0; margin-left:auto;margin-right:auto; width:100%;">

    <tr>
        <td style="text-align: center; height: 80px; background: #3D474D; color:white; font-size: 30px;">Sık Sorulan Sorular</td>
    </tr>
    <tr>

        <td style="text-align: center; height: 45px; font-size: 25px; border-bottom: 1px dashed #CCCCCC;">Firmamıza sıkça gelen sorulara aşşağıdan ulaşabilirsiniz.</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td><?php
            $SoruSorgusu = $VeriTabaniBaglantisi->prepare("SELECT * FROM sorular ");
            $SoruSorgusu->execute();
            $SoruSayisi = $SoruSorgusu->rowCount();
            $SoruKayitlari = $SoruSorgusu->fetchAll(PDO::FETCH_ASSOC);
            foreach ($SoruKayitlari as $Kayitlar) {
            ?>
                <div style="text-align: left; padding-left:80px; padding-top:40px;">
                    <div ><?php echo $Kayitlar["Soru"]; ?></div>
                    <div > <?php echo $Kayitlar["Cevap"]; ?></div>
                </div>
            <?php
            }
            ?>
        </td>
    </tr>
</table>