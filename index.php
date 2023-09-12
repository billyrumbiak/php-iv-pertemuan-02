<?php
    // variabel
    $a = 'Welcome';

    // integer
    $b = 10;
    $c = 20;

    // float
    $d = $b + $c;

    echo $d;

    //vakiaber shpibon

    $nama = 'Billy';
    
    $pesan = 'Selamat Datang';
    echo "<h2>" . $pesan.' '.$nama . "</h2>";

    var_dump($pesan);

    // variabel int

    $x = 10;
    $y = 5;

    echo "<p> x = " . $x . "</p>";
    echo "<p> y = " . $y . "</p>";

    $tambah = $x + $y;
    echo "<p>" . $tambah . "</p>";

    $kurang = $x - $y;
    echo "<p>" . $kurang . "</p>";


    $kali = $x * $y;
    echo "<p>" . $kali . "</p>";

    $bagi = $x / $y;
    echo "<p>" . $bagi . "</p>";

    var_dump($x);

    // variabel float

    $x = 23.3;
    $y = 4.7;
    $z = $x + $y;

    print $z;

    var_dump($z);

    /* 
        TRUE - 1 and FALSE - 0
        AND x
        OR +
    */
    $a = true;
    $b = false;
    $or = $a || $b;
    $and = $a && $b;

    echo "<br>";

    echo $or;

    var_dump($and);

    // variabel array
    // untuk menyimpan berbagai macam data
    // Penulisan Lama

    $nama = array ("Samuel", "Billy", "Efati", "Sultan", "Korinus");

    echo "<br>";

    $nama_kedua = ["Melpen", "Sella", "Samuel"];

    echo "<br>";

    foreach($nama_kedua as $peserta) 
    {
        echo $peserta . "<br>";
    }

    echo "<br>";

    $data = [
        'nama' => 'Samuel',
        'alamat' => 'Sentani',
        'jenis_kelamin' => 'Pria',
    ];

    echo 'Nama : ' . $data['nama'] . '<br>';
    echo 'Alamat : ' . $data['alamat'] . '<br>';
    echo 'Jenis Kelamin : ' . $data['jenis_kelamin'] . '<br>';