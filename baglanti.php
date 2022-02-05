<?php
$vt_sunucu= "sql309.epizy.com";
$vt_kullanici= "epiz_29706078";
$vt_sifre= "pWKYZosbr0rP";
$vt_adi= "epiz_29706078_onenleryazilim";
$baglan= mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);
if (!$baglan) {
    die("Veri Tabanı Bağlantısı Başarısız: " . mysqli_connect_error());
  }
?>