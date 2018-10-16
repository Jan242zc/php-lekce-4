<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kniha návštěv</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">

    <form method = "POST" action ="vlozit.php">
        <div class="form-group">
            <label for="formGroupExampleInput">Jméno:</label>
            <input type="text" name="jmeno" class="form-control" id="formGroupExampleInput" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Vzkaz:</label>
            <textarea class="form-control" name="vzkaz" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Odeslat</button>
    </form>

<?php
//Nevím, jak to budeš kontrolovat, takže svůj cvičný prispevky.txt jsem nesmazal. Snad to moc nevadí.
if((($handle = @fopen('prispevky.txt', 'r')) == true) && (($text = fread($handle, 10000)) != '')){
    
    //Pro zobrazení původního seřazení odpoznámkovat řádek 32 a zapoznámkovat řádek 34.
    //echo $text;
    $obracene = seradPrispevky($text, "<hr>");
    echo $obracene;
    fclose($handle);
} else {
    echo 'Žádné příspěvky';
}

//Možná existuje praktičtější způsob, jak to udělat, ale napadlo mě jen toto.
function seradPrispevky($prispevky, $oddelovac){
    $text = explode($oddelovac, $prispevky); 
    $poradi = count($text) - 2;
    // -2, protože: 1) chci zjistit index posledního prvku, který je o 1 nižší než počet, neboť se indexuje od nuly, 
    //              2) poslední array vzniklý při explode() je prázný a na začátku pak překáží, jede se tedy od předposledního.
    $obracene = '';
    While($poradi !== -1){ //-1, aby se cyklus zastavil u prvního prvku array s indexem 0
        $obracene = $obracene . $text[$poradi] . "<hr>";
        $poradi = $poradi - 1;
    }
    return $obracene;
}
?>

</div>
</body>
</html>
