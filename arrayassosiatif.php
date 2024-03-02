<?php
//## Array Assosiatif
//Array Assosiatif memiliki key dan value yang dipisah dengan tanda = >
// Loop ** 'foreach' ** digunakan untuk mengulangi setiap elemen dalam sebuah array

//array assosiatif

    $mahasiswa = ["Nama"=>"Imelda Siregar", "Umur"=>19, "Alamat"=>"Medan"];

    echo $mahasiswa["Nama"] . "<br>";

    foreach ($mahasiswa as $key => $value){
        echo $key . " : " . $value;
        echo "<br>";
    }
    echo "<br>";



?>