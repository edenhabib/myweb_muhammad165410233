<?php

if($_POST['submit']){
$alas = $_POST['alas']; 
$tinggi = $_POST['tinggi']; 

  $hasil = ($alas * $tinggi)/2 ;
  echo "Alas" .$alas; 
  echo "</br> Tinggi " .$tinggi; 
  echo "</br> Jadi Alas dikali tinggi bagi 2 adalah ".$hasil; 
}
?>