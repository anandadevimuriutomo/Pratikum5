<?php
include "inc.php";
//mengisi variable dari inc.php
echo $angka;
//variable angka
echo "<br>";
if($angka==100){
    //Jika variable angka 100
    echo "Memuaskan";
    //Output : Memuaskan
}
elseif($angka<100&&$angka>=85){
    //Jika variable angka antara 85 sampai 100
    echo "Sangat Baik";
    //Output : Sangat Baik
}
elseif($angka<85&&$angka>=70){
    //Jika variable angka antara 70 sampai 85
    echo "Baik";
    //Output : Baik
}
elseif($angka<70&&$angka>=55){
    //Jika variable angka antara 55 sampai 70
    echo "Cukup";
    //Output : Cukup
}
elseif($angka<55&&$angka>=0){
    //Jika variable angka antara 0 sampai 55
    echo "Kurang";
    //Output : Kurang
}
?> 