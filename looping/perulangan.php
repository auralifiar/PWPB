<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <!-- 1. FOR -->
    <?php
    for ($i = 0; $i <= 10; $i++) {
        echo "ini perulangan ke-".$i."<br>";
    }
    
    ?>
<br>

    <!-- 2. WHILE -->
    <?php
    $ulang = 0;

    while($ulang < 10) {
        echo "ini adalah perulangan ke-".$ulang."<br>";
        $ulang++;
    }
    
    ?>
<br>

    <!-- 3. DO WHILE -->
    <?php
    $ulang = 0;

    do {
        echo "ini adalah perulangan ke-".$ulang."<br>";
        $ulang++;
    } while ($ulang <= 10);
    ?>
<br>

    <!-- 4. FOREACH -->
    <?php
    $buah = ["mangga", "apel", "pisang", "nanas", "pepaya"];

    foreach($buah as $fruits) {
        echo $fruits."<br>";
    }
    ?>
</body>
</html>