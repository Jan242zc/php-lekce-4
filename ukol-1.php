<?php
if (!file_exists('pristupy.txt')){
  echo "Vítejte, na této stránce jste prvně! \n";
  $handle = fopen('pristupy.txt','w');
  $pristup = date('Y-m-d H:i:s') . "<br> \n";
  fwrite($handle, $pristup);
  fclose($handle);
} else {
  echo "Historie přístupů: <br>";
  $handle = fopen('pristupy.txt','r');
  $text = fread($handle, 1000);
  echo $text;
  fclose($handle);
  $handle = fopen('pristupy.txt', 'a');
  $pristup = date('Y-m-d H:i:s') . "<br> \n";
  fwrite($handle, $pristup);
  fclose($handle);
}
