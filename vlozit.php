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
<?php
if($handle = @fopen('prispevky.txt','a')){
    $text = "<b>" . $_POST['jmeno'] . "</b>" . "<br>" . $_POST['vzkaz'] . "<hr>";
    fwrite($handle, $text);
    fclose($handle);
    echo "Váš příspěvek do knihy návštěv byl uložen. Děkujeme! <br> <br>";
} else {
    echo "Zápis do knihy návštěv se nezdařil. <br> <br>";
}
?>
<a class="button button-primary" href="navstevni-kniha.php">Zpět do knihy návštěv</a>
</div>
</body>
</html>
