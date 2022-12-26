<?php

try {
    $VeriTabaniBaglantisi = new PDO("mysql:host=localhost:3306;dbname=eticaret;charset=UTF8", "ugur" , "Ugur2442");
} catch (PDOException $Hata) {
   echo "Bağlantı Hatası <br/>" . $Hata ->getMessage(); // Site hata yaparsa kullanıcılar hata değerini görmesin.
    die();
}


$AyarlarSorgusu = $VeriTabaniBaglantisi ->prepare("SELECT * FROM ayarlar LIMIT 1");
$AyarlarSorgusu -> execute();
$AyarSayisi = $AyarlarSorgusu->rowCount();
$Ayarlar = $AyarlarSorgusu->fetch(PDO::FETCH_ASSOC);


if($AyarSayisi>0)
{
    $SiteAdi = $Ayarlar["SiteAdi"]; 
    $SiteTitle = $Ayarlar["SiteTitle"]; 
    $SiteDescription = $Ayarlar["SiteDescription"]; 
    $SiteKeywords  = $Ayarlar["SiteKeywords"]; 
    $SiteCopyrightMetni = $Ayarlar["SiteCopyrightMetni"]; 
    $SiteLogosu  = $Ayarlar["SiteLogosu"]; 
    $SiteEmailAdresi  = $Ayarlar["SiteEmailAdresi"]; 
    $SiteEmailSifresi  = $Ayarlar["SiteEmailSifresi"]; 
    $SiteEmailHostAdresi  = $Ayarlar["SiteEmailHostAdresi"]; 

    $SosyalLinkFacebook  = $Ayarlar["SosyalLinkFacebook"]; 
    $SosyalLinkInstagram  = $Ayarlar["SosyalLinkInstagram"]; 
    $SosyalLinkTwitter = $Ayarlar["SosyalLinkTwitter"]; 
    $SosyalLinkYoutube  = $Ayarlar["SosyalLinkYoutube"]; 
    $SosyalLinkPinterest  = $Ayarlar["SosyalLinkPinterest"]; 



}
else
{
   // echo "Site Ayar Sorgusu Hatalı <br/>"; // Site hata yaparsa kullanıcılar hata değerini görmesin.
   die();
}


$MetinlerSorgusu = $VeriTabaniBaglantisi ->prepare("SELECT * FROM sozlesmelervemetinler LIMIT 1");
$MetinlerSorgusu -> execute();
$MetinSayisi = $MetinlerSorgusu->rowCount();
$Metinler = $MetinlerSorgusu->fetch(PDO::FETCH_ASSOC);



if($MetinSayisi>0)
{
    $HakkimizdaMetni = $Metinler["HakkimizdaMetni"]; 
    $UyelikSözlesmesiMetni = $Metinler["UyelikSözlesmesiMetni"]; 
    $KullanimKosullariMetni = $Metinler["KullanimKosullariMetni"]; 
    $GizlilikSozlesmesiMetni  = $Metinler["GizlilikSozlesmesiMetni"]; 
    $IadeDegisimMetni = $Metinler["IadeDegisimMetni"]; 
}
else
{
    echo "Metinler Sorgusu Hatalı <br/>"; // Site hata yaparsa kullanıcılar hata değerini görmesin.
   die();
}


?>