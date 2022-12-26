<?php 
$IPAdresi = $_SERVER["REMOTE_ADDR"];
$ZamanDamgasi = time();
$TarihSaat= date("d.m.Y H:i:s" , $ZamanDamgasi);

function RakamlarHaricTemizle($Deger)
{
    $Islem = preg_replace("/[^0-9]/" , "" , $Deger);
    $Sonuc = $Islem;
    return $Sonuc;
}
function BosluklariSil($Deger)
{
    $Islem = preg_replace("/[\s | &nbsp;]/" , "" , $Deger);
    $Sonuc = $Islem;
    return $Sonuc;
}
function DonusumleriGeriDondur($Deger){
    $GeriDondur =  htmlspecialchars_decode($Deger , ENT_QUOTES);
    $Sonuc = $GeriDondur;
    return $Sonuc;
}
function Guvenlik($Deger){
    $BoslukSil = trim($Deger);
    $TaglariTemizle = strip_tags($BoslukSil);
    $EtkisizYap =  htmlspecialchars($TaglariTemizle ,ENT_QUOTES);
    $Sonuc = $EtkisizYap;
    return $Sonuc;
}
function SayiliIcerikleriFiltrele($Deger){
    $BoslukSil = trim($Deger);
    $TaglariTemizle = strip_tags($BoslukSil);
    $EtkisizYap =  htmlspecialchars($TaglariTemizle , ENT_QUOTES);
    $Temizle = RakamlarHaricTemizle($EtkisizYap);
    $Sonuc = $Temizle;
    return $Sonuc;
}
function IBANBicimlendirme($Deger){
    $BoslukSil = trim($Deger);
    $BoslukSil =  BosluklariSil($BoslukSil);
    $BirinciBlok = substr($BoslukSil , 0 , 4);
    $IkinciBlok = substr($BoslukSil , 4 , 4);
    $UcuncuBlok = substr($BoslukSil , 8 , 4); 
    $DorduncuBlok = substr($BoslukSil , 12 , 4); 
    $BesinciBlok = substr($BoslukSil , 16 , 4); 
    $AltinciBlok = substr($BoslukSil , 20 , 4); 
    $YedinciBlok = substr($BoslukSil , 24 , 2);  
   $Duzenle = $BirinciBlok . " " . $IkinciBlok . " " .$UcuncuBlok ." ".$DorduncuBlok . " " . $BesinciBlok . " " .$AltinciBlok . " " . $YedinciBlok; 
   $Sonuc = $Duzenle;
   return $Sonuc;
}
function AktivasyonKoduUret(){
    $IlkBesli = rand(10000,9999); 
    $IkinciBesli = rand(10000,9999);
    $UcuncuBesli = rand(10000,9999);
    $DorduncuBesli = rand(10000,9999);

    $Kod = $IlkBesli."-" . $IkinciBesli . "-" . $UcuncuBesli . "-" .$DorduncuBesli;
    $Sonuc = $Kod;
    return $Sonuc;
}


?>