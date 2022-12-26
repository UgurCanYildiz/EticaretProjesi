<?php
if (isset($_POST["KargoTakipNo"])) {
    $GelenKargoTakipNo = SayiliIcerikleriFiltrele(Guvenlik($_POST["KargoTakipNo"]));
} else {
    $GelenKargoTakipNo = "";
}
if ($GelenKargoTakipNo != "") {
    header("Location: https://www.yurticikargo.com/tr/online-servisler/gonderi-sorgula?code=".$GelenKargoTakipNo);
    exit();
} else {
    header("Location: index.php?SK=17");
    exit();
}

