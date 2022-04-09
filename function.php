<?php
$string = "D3 Rekayasa Perangkat Lunak Aplikasi";
echo "<br>".substr($string, 3);
echo "<br>".substr($string, -8);
echo "<br>".substr($string, 3,24);
$strings = array (
    'Saya adalah Abdullah',
    'Saya punya seekor kucing yang sangat lucu',
    'Setiap hari ku ajak dia bermain'
    );
    $search = array (
    'Abdullah',
    'kucing',
    'lucu',
    'bermain'
    );
    $replace = array (
    'Abdurrahman',
    'bebek',
    'gemuk',
    'berenang'
    );
    $replaced = str_replace ( $search, $replace, $strings );
    foreach ($replaced as $key => $value) {
    echo $value."<br>";
    }
    ?>