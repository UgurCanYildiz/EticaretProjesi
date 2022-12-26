<?php
ob_start();

require_once('admin/adminayar.php');



if (isset($_POST["isimsoyisim"])) {
    $isimsoyisim = $_POST["isimsoyisim"];
}
else
{
    $isimsoyisim = "";
}
if(isset( $_POST["email"])){
    $email = $_POST["email"];
}
else
{
    $email="";
}
if (isset($_POST["baslik"])) {
    $baslik = $_POST["baslik"];
}
else{
    $baslik="";
}
if(isset($_POST["mesaj"])){
    $mesaj = $_POST["mesaj"];
}
else{
    $mesaj = "";
}


if (($isimsoyisim != "") or ($email != "") or ($$baslik != "") or ($mesaj != "")) {
   
    try{
        $insert = "INSERT INTO iletisim(IsimSoyisim,Email,Baslik,Mesaj) VALUES('$isimsoyisim','$email','$baslik','$mesaj')";
        $upload = mysqli_query($conn , $insert);
        if ($upload) {
            
            header("Location: index.php?SK=20");
            exit();
        }
        else
        {
            header("Location: index.php?SK=21");
            exit();
        }
    }
    catch(Exception $e){
        echo "<br><br><br><br><br><br>".$e;
    }

    

} else {
   
    header("Location: index.php?SK=22");
    exit();

}

    

?>

<?php
    ob_end_flush();
    ?>

