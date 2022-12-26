<table style="width: 1065px; margin-left: auto;margin-right: auto;">
    <tr>
        <td style="width: 500px; vertical-align:top ;">
            <form action="index.php?SK=13" method="POST">
                <table style="width: 500px; margin-left: auto;margin-right: auto;">
                    <tr style="height:70px;">
                        <td>
                            <h2>Havale Bildirim Formu</h2>
                        </td>
                    </tr>
                    <tr style="height: 30px;">
                        <td style="border-bottom: 1px dashed #CCCCCC; vertical-align: top;">Tamamlanmış Olan Ödeme İşleminizi Aşşağıdaki Formda İletiniz</td>
                    </tr>
                    <tr style="height: 30px; vertical-align: bottom;">
                        <td align="left"><b>İsim Soyisim :</b> </td>
                    </tr>
                    <tr style="height: 30px;vertical-align: top;">
                        <td><input type="text" name="isimsoyisim" class="InputAlanlari" style="width: 100%; height:30px; padding: 0 10px;" placeholder="Zorunlu Alan"></td>
                    </tr>

                    <tr style="height: 30px; vertical-align: bottom;">
                        <td align="left"><b>Email Adresi : </b></td>
                    </tr>
                    <tr style="height: 30px;vertical-align: top;">
                        <td style="vertical-align: top;"><input type="mail" name="emailadresi" class="InputAlanlari" style="width: 100%; height:30px; padding: 0 10px;" placeholder="Zorunlu Alan"></td>
                    </tr>

                    <tr style="height: 30px; vertical-align: bottom;">
                        <td align="left"><b>Telefon Numarası : </b></td>
                    </tr>
                    <tr style="height: 30px;vertical-align: top;">
                        <td style="vertical-align: top;"><input type="text" placeholder="Zorunlu Alan" name="telefonnumarasi" maxlength="11" class="InputAlanlari" style="width: 100%; height:30px; padding: 0 10px;"></td>
                    </tr>
                    <tr style="height: 30px; vertical-align: bottom;">
                        <td align="left"><b>Ödeme Yapılan Banka : (Zorunlu Alan)</b></td>
                    </tr>
                    <tr style="height: 30px;">
                        <td style="vertical-align: top;"><select name="bankasecimi" style="width: 100%; height:40px; padding: 0 10px;">
                                <?php
                                $BankalarSorgusu = $VeriTabaniBaglantisi->prepare("SELECT * FROM bankahesaplarimiz ORDER BY BankaAdi ASC");
                                $BankalarSorgusu->execute();
                                $BankaSayisi = $BankalarSorgusu->rowCount();
                                $BankaKayitlari = $BankalarSorgusu->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($BankaKayitlari as $Bankalar) {
                                ?>
                                    <option value="<?php echo $Bankalar["id"]; ?>"><?php echo $Bankalar["BankaAdi"]; ?></option>
                                <?php
                                }
                                ?>
                            </select></td>
                    </tr>
                    <tr style="height: 30px; vertical-align: bottom;">
                        <td align="left"><b>Açıklama : </b></td>
                    </tr>
                    <tr style="height: 30px;vertical-align: top;">
                        <td style="vertical-align: top;"><textarea name="aciklama" cols="55" rows="10"></textarea></td>
                    </tr>

                    <tr style="height: 50px; vertical-align: bottom;">
                        <td align="center"><input type="submit" value="Gönder" width="300px" style="height:40px; border:1px solid #00FF00; background:#009900; color:white; font-weight: 700; cursor: pointer;"></td>
                    </tr>
                </table>
            </form>
        </td>
        <td style="padding-left:25px ; padding-right:25px">&nbsp;</td>
        <td style="width: 545px; vertical-align: top;">
            <table style="width: 565px; margin-left: auto;margin-right: auto;">
                <tr style="height:70px;">
                    <td>
                        <h2>İşleyiş</h2>
                    </td>
                </tr>
                <tr style="height: 30px;">
                    <td colspan="2" style="border-bottom: 1px dashed #CCCCCC; vertical-align: top;">Havale / EFT İşlemlerinin Kontrolü</td>
                </tr>
                <tr style="height: 30px;">
                    <td align="center" style="width: 30px;"> <img src="Resimler/bankalogo.png" style="border:0; margin-top: 2px;"></td>
                    <td style="margin-top: 2px;"><b>Havale / EFT İşlemi</b></td>
                </tr>
                <tr style="height: 30px;">
                    <td colspan="2" align="left" style="vertical-align: top;">Müşteri tarafından banka hesaplarımız sayfasında bulunan herhangi bir hesaba ödeme işlemi gerçekleştirilir.</td>
                </tr>
                <tr style="height: 45px;">
                    <td align="center" style="width: 30px;"> <img src="Resimler/notdefteri.png" style="border:0; margin-top: 2px;"></td>
                    <td style="margin-top: 2px;"><b>Bildirim İşlemi</b></td>
                </tr>
                <tr style="height: 30px;">
                    <td colspan="2" align="left" style="vertical-align: top;">Ödeme işleminiz tamamlandıktan sonra "Havale Bildirim Formu" sayfasından müşteri yapmış olduğu ödeme için bildirim formu doldurarak online olarak gönderilir.</td>
                </tr>
                <tr style="height: 45px;">
                    <td align="center" style="width: 30px;"> <img src="Resimler/cark.png" height="30px" width="30px" style="border:0; margin-top: 2px;"></td>
                    <td style="margin-top: 2px;"><b>Kontroller</b></td>
                </tr>
                <tr style="height: 30px;">
                    <td colspan="2" align="left" style="vertical-align: top;">"Havale Bildirim Formu"'nuz tarafımıza ulaştığı anda ilgili departman tarafından yapmış olduğunuz Havale / EFT işlemi ilgili banka üzerinden kontrol edilir.</td>
                </tr>
                <tr style="height: 45px;">
                    <td align="center" style="width: 30px;"> <img src="Resimler/musteritemsilcisi.png" height="30px" width="30px" style="border:0; margin-top: 2px;"></td>
                    <td style="margin-top: 2px;"><b>Onay / Red</b></td>
                </tr>
                <tr style="height: 30px;">
                    <td colspan="2" align="left" style="vertical-align: top;">Havale bildirimi geçerli ise yani hesaba ödeme geçmiş ise yönetici ilgili ödeme onayını vererek ,siparişiniz teslimat birimine iletilir.</td>
                </tr>
                <tr style="height: 45px;">
                    <td align="center" style="width: 30px;"> <img src="Resimler/saatlogo.png" height="30px" width="30px" style="border:0; margin-top: 2px;"></td>
                    <td style="margin-top: 2px;"><b>Sipariş Hazırlama & Teslimat </b></td>
                </tr>
                <tr style="height: 30px;">
                    <td colspan="2" align="left" style="vertical-align: top;">Yönetici ödeme onayından sonra sayfamız üzerinden vermiş olduğunuz sipariş en kısa sürede hazırlanarak kargoya teslim edilir ve tarafınıza ulaştırılır.</td>
                </tr>











            </table>
        </td>
    </tr>
</table>