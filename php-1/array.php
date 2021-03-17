<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berlatih Array</title>
</head>
<body>
<h1>Berlatih Array</h1>
<?php
echo "<h3> Soal 1 </h3>";
/*
SOAL NO 1
Kelompokkan nama-nama di bawah ini ke dalam Array.
Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"
Adults: "Hopper", "Nancy", "Joyce", "Jonathan", "Murray"
*/

    $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"]; 
    $adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];


    echo "<h3> Soal 2</h3>";
/*
SOAL NO 2
Tunjukkan panjang Array di Soal No 1 dan tampilkan isi
dari masing-masing Array.
*/

    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " ; // Berapa panjang array kids
    echo count($kids);
    echo "<br>";
    echo "<ol>";
    echo "<li> $kids[0] </li>";
    echo "<li> $kids[1] </li>";
    echo "<li> $kids[2] </li>";
    echo "<li> $kids[3] </li>";
    echo "<li> $kids[4] </li>";
    echo "<li> $kids[5] </li>";
// Lanjutkan
    echo "</ol>";

    echo "Total Adults: " ;// Berapa panjang array adults
    echo count($adults);
    echo "<br>";
    echo "<ol>";
    echo "<li> $adults[0] </li>";
    echo "<li> $adults[1] </li>";
    echo "<li> $adults[2] </li>";
    echo "<li> $adults[3] </li>";
    echo "<li> $adults[4] </li>";
// Lanjutkan
    echo "</ol>";


    echo "<h3> Soal 3</h3>";
/*
SOAL No 3
Susun data-data berikut ke dalam bentuk Asosiatif Array
(Array Multidimensi)

Name: "Will Byers"
Age: 12,
Aliases: "Will the Wise"
Status: "Alive"

Name: "Mike Wheeler"
Age: 12,
Aliases: "Dungeon Master"
Status: "Alive"

Name: "Jim Hopper"
Age: 43,
Aliases: "Chief Hopper"
Status: "Deceased"

Name: "Eleven"
Age: 12,
Aliases: "El"
Status: "Alive"
*/

    echo "<h5>Assosiatif Array</h5>";
    $siswa1 = 
            [   "name" => "Will Byers",
                "age" => "12",
                "aliases" => "Will the Wise",
                "status" => "Alive",
            ];
    echo "<br>Name : ".$siswa1["name"];
    echo "<br>Age : ".$siswa1["age"];
    echo "<br>Aliases : ".$siswa1["aliases"];
    echo "<br>Status : ".$siswa1["status"];
    echo "<p>";

    $siswa2 = 
            [   "name" => "Mike Wheeler",
                "age" => "12",
                "aliases" => "Dungeon Master",
                "status" => "Alive",
            ];
    echo "<br>Name : ".$siswa2["name"];
    echo "<br>Age : ".$siswa2["age"];
    echo "<br>Aliases : ".$siswa2["aliases"];
    echo "<br>Status : ".$siswa2["status"];
    echo "<p>";

    $siswa3 = 
            [   "name" => "Jim Hopper",
                "age" => "43",
                "aliases" => "Chief Hopper",
                "status" => "Deceased",
            ];
    echo "<br>Name : ".$siswa3["name"];
    echo "<br>Age : ".$siswa3["age"];
    echo "<br>Aliases : ".$siswa3["aliases"];
    echo "<br>Status : ".$siswa3["status"];
    echo "<p>";

    $siswa4 = 
            [   "name" => "Eleven",
                "age" => "12",
                "aliases" => "El",
                "status" => "Alive",
            ];
    echo "<br>Name : ".$siswa4["name"];
    echo "<br>Age : ".$siswa4["age"];
    echo "<br>Aliases : ".$siswa4["aliases"];
    echo "<br>Status : ".$siswa4["status"];
    echo "<p>";

    echo "<h5>Array Multidimensi</h5>";
    $siswa = [
    ["name" => "Mike Wheeler",
        "age" => 12,
        "aliases" => "Will the Wise",
        "status" => "Alive"
    ],
    [
        "name" => "Mike Wheeler",
        "age" => "12",
        "aliases" => "Dungeon Master",
        "status" => "Alive"
    ],
    [
        "name" => "Jim Hopper",
        "age" => "43",
        "aliases" => "Chief Hopper",
        "status" => "Deceased"
    ],
    [
        "name" => "Eleven",
        "age" => "12",
        "aliases" => "El",
        "status" => "Alive"
    ]
    ];

    foreach($siswa as $post) {
        echo"<br>";
        echo "<br>".$post["name"];
        echo "<br>".$post["age"];
        echo "<br>".$post["aliases"];
        echo "<br>".$post["status"];
    }

?>
</body>
</html>