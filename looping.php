<?php
/**
 * looping -> mengulang barisan kode perintah
 * tipe looping -> for, while, do while
 * 
 * konsep looping:
 * 1. titik awal
 * 2. kondisi
 * 3. perubahan nilai
 * 
 * selama kondisi benar looping akan berlanjut,
 * saat kondisi salah looping akan berhenti
 */

 //ase 1: menampilkan bilangan kelipatan 7 mulai dari -70 sampai 100
 //$start = -70;
 //for ($i=$start; $i<100 ; $i+=7){
   //  echo "$i ";
 //}

 //case 2
 $person = [
    ["name" => "Gopal", "address" => "Madrid", "age" => 40],
    ["name" => "Kaizo", "address" => "Saturnus", "age" => 80],
    ["name" => "Kokochi", "address" => "Pluto", "age" => 20],
];
#count digunakan untuk mengetahui jumlah array (pada java -> .lenght)
for ($i=0; $i < count($person); $i++) { 
    echo $person[$i]['name']." ".$person[$i]['address']." ".$person[$i]['age']." | ";
}
?>