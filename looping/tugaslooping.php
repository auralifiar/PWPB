<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--No. 1 Looping While 
Pada tugas ini kamu diminta untuk melakukan looping dalam PHP dengan menggunakan syntax while. 
Untuk membuat tantangan ini lebih menarik, kamu juga diminta untuk membuat suatu looping yang menghitung 
maju dan menghitung mundur. Jangan lupa tampilkan di console juga judul ‘LOOPING PERTAMA’ dan ‘LOOPING KEDUA’.”
-->
<?php
$a = 2;
echo "LOOPING PERTAMA <br />";

while($a<=20) {
    echo $a." - I Love Coding <br />";
    $a+=2;
}
?>
<p>

<?php
$b = 20;
echo "LOOPING KEDUA <br />";

while($b>=2) {
    echo $b." - I will become a mobile developer <br />";
    $b-=2;
}

?>
<p>

<!--No. 2 Looping menggunakan for
Pada tugas ini kamu diminta untuk melakukan looping dalam JavaScript dengan menggunakan syntax for. 
Untuk membuat tantangan ini lebih menarik, kamu juga diminta untuk memenuhi syarat tertentu yaitu:
SYARAT:
A. Jika angka ganjil maka tampilkan RPL
B. Jika angka genap maka tampilkan TARUNA BHAKTI 
C. Jika angka yang sedang ditampilkan adalah kelipatan 3 DAN angka ganjil maka tampilkan I Love Coding.
-->
<?php
for($a = 1; $a <= 20; $a++) {
    if($a % 2 == 0) {
        echo "$a - Taruna Bhakti <br />";
    } else if ($a % 1 == 0) {
        if($a % 3 == 0) {
            echo "$a - I Love Coding <br />";
        } else {
            echo "$a - RPL <br />";
        }
    }
}

?>

<!--No. 3 Looping menggunakan FOREACH

Kamu diminta untuk menampilkan data dari array menggunakan Foreach
-->
<?php
$products = [
    ['name' => 'shiny star', 'price' => 20, 'stock' => 10],
    ['name' => 'green shell', 'price' => 10, 'stock' => 20],
    ['name' => 'red shell', 'price' => 15, 'stock' => 15],
    ['name' => 'golden coin', 'price' => 5, 'stock' => 12],
    ['name' => 'lightning bolt', 'price' => 40, 'stock' => 8],
    ['name' => 'banana skin', 'price' => 2, 'stock' => 5]

];

foreach($products as $barang) {
    echo "<br>";
    echo $barang['name']." - ";
    echo $barang['price']." - ";
    echo $barang['stock'];
}
?>
</body>
</html>
