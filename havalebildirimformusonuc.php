<?php
require_once('Ayarlar/ayar.php');
require_once('Ayarlar/fonksiyonlar.php');

if (isset($_POST["isimsoyisim"])) {
    $Gelenisimsoyisim = Guvenlik($_POST["isimsoyisim"]);
} else {
    $Gelenisimsoyisim = "";
}

if (isset($_POST["emailadresi"])) {
    $Gelenemailadresi =  Guvenlik($_POST["emailadresi"]);
} else {
    $Gelenemailadresi = "";
}
if (isset($_POST["telefonnumarasi"])) {
    $Gelentelefonnumarasi =  Guvenlik($_POST["telefonnumarasi"]);
} else {
    $Gelentelefonnumarasi = "";
}
if (isset($_POST["bankasecimi"])) {
    $Gelenbankasecimi =  Guvenlik($_POST["bankasecimi"]);
} else {
    $Gelenbankasecimi = "";
}

if (isset($_POST["aciklama"])) {
    $Gelenaciklama =  Guvenlik($_POST["aciklama"]);
} else {
    $Gelenaciklama = "";
}

if (($Gelenisimsoyisim != "") and ($Gelenemailadresi != "") and ($Gelenbankasecimi != "") and ($Gelentelefonnumarasi != "")) {
    $HavaleBildirimiKaydet = $VeriTabaniBaglantisi->prepare("INSERT INTO havalebildirimleri(BankaId ,AdiSoyAdi ,EmailAdresi ,TelefonNumarasi ,Aciklama ,İslemTarihi ,Durum) values (? ,? ,? ,? ,? ,? ,?)  ");
    $HavaleBildirimiKaydet->execute([$Gelenbankasecimi, $Gelenisimsoyisim, $Gelenemailadresi, $Gelentelefonnumarasi, $Gelenaciklama, $ZamanDamgasi, 0]);
    $HavaleBildirimiKaydetKontrol = $HavaleBildirimiKaydet->rowCount();

    if ($HavaleBildirimiKaydet <= 0) {
        header("Location: index.php?SK=15");
        exit();
    } else {
        header("Location: index.php?SK=14");
        exit();
    }
} else {
    header("Location: index.php?SK=16");
    exit();
}
?>