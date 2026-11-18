<?php

function hitungLuas($alas, $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

function kelilingSikuSiku($alas, $tinggi) {
    $sisiMiring = sqrt(($alas * $alas) + ($tinggi * $tinggi));
    $keliling = $alas + $tinggi + $sisiMiring;
    return $keliling;
}

function kelilingSamaKaki($alas, $tinggi) {
    $setengahAlas = $alas / 2;
    $sisiKaki = sqrt(($setengahAlas * $setengahAlas) + ($tinggi * $tinggi));
    $keliling = $alas + (2 * $sisiKaki);
    return $keliling;
}

function kelilingSamaSisi($sisi) {
    $keliling = 3 * $sisi;
    return $keliling;
}

//-Segitiga Siku-Siku
$alasSiku = 6;
$tinggiSiku = 8;
echo "1.Segitiga Siku-Siku (Alas = $alasSiku, Tinggi = $tinggiSiku) <br>";
echo " Luas     : " . hitungLuas($alasSiku, $tinggiSiku) . "<br>";
echo " Keliling : " . round(kelilingSikuSiku($alasSiku, $tinggiSiku), 2) . "<br><br>";

//-Segitiga Sama Kaki
$alasKaki = 10;
$tinggiKaki = 12;
echo "2.Segitiga Sama Kaki (Alas = $alasKaki, Tinggi = $tinggiKaki)<br>";
echo " Luas     : " . hitungLuas($alasKaki, $tinggiKaki) . "<br>";
echo " Keliling : " . round(kelilingSamaKaki($alasKaki, $tinggiKaki), 2) . "<br><br>";

//-Segitiga Sama Sisi
$sisiSama = 6;
$tinggiSamaSisi = ($sisiSama / 2) * sqrt(3); 
echo "3.Segitiga Sama Sisi (Sisi = $sisiSama)<br>";
echo " Luas     : " . round(hitungLuas($sisiSama, $tinggiSamaSisi), 2) . "<br>";
echo " Keliling : " . kelilingSamaSisi($sisiSama) . "<br>";

