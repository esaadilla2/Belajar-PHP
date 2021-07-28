<?php
/**
 * /**
 * function/method/fungsi = blok kode yang akan dijanlankan ketika dipanggil
 * blok kode -> kumpulan baris kode yang diapit oleh tanda {} kurung kurawal
 * function punya parameter -> datang yang akan diolah oleh fungsi tsb
 */

 function prokes (){
     echo "Memakai masker";
     echo "Mencuci tangan";
     echo "Menguarangi mobilitas";
 }

 function makan ($nama_makanan){
     echo "Cuci tangan ";
     echo "Baca doa ";
     echo "Masukkan $nama_makanan ";
     echo "Kunyah $nama_makanan ";
     echo "Telan $nama_makanan ";
 }

 //echo prokes();
 echo makan ("Burger");
echo makan ("Soto");
?>