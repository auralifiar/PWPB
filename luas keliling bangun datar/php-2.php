<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
	.container {
		margin: 30px;
	}
	</style>
</head>
<body>

	<div class="container">

<h3>1. Menghitung Keliling dan Luas Persegi</h3>
	<form method="POST" enctype="multipart/form-data">
		<table>
			<tr>
                <td>Sisi</td>
                <td></td>
                <td><input type="text" name="sisi" required> cm</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
		</table>
	</form>
	<?php
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		if(isset($_POST['submit'])){
			$sisi = $_POST['sisi'];

		$keliling_persegi = $sisi * 4;
		$luas_persegi = $sisi * $sisi;

		echo "Persegi memiliki sisi $sisi maka : <br>";
		echo "Luas : $luas_persegi cm <br>";
		echo "Keliling : $keliling_persegi cm ";
		}
	?>


<h3>2. Hitung Keliling Dan Luas Persegi Panjang</h3>
	<form method="POST" enctype="multipart/form-data">
		<table>
			<tr>
                <td>Panjang</td>
                <td></td>
                <td><input type="text" name="panjang" required> cm</td>
            </tr>
            <tr>
                <td>Lebar</td>
                <td></td>
                <td><input type="text" name="lebar" required > cm</td>
            </tr>
			<tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
		</table>
	</form>
	<?php
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		if(isset($_POST['submit'])){
			$panjang = $_POST['panjang'];
			$lebar = $_POST['lebar'];
		
		$keliling = 2*($panjang+$lebar); // Menghitung keliling
		$luas = $panjang * $lebar; // Menghitung luas
		
		echo "Persegi panjang yang memiliki lebar = $lebar, dan panjang = $panjang, maka : <br>";
		echo "Keliling: $keliling cm <br>";
		echo "Luas: $luas cm";
		}
	?>


<h3> 3.1 Menghitung Luas Segitiga</h3>
	<form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Alas Segitiga</td>
                <td></td>
                <td><input type="text" name="alas" required> cm</td>
            </tr>
            <tr>
                <td>Tinggi Segitiga</td>
                <td></td>
                <td><input type="text" name="tinggi" required > cm</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <?php
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        if(isset($_POST['submit'])){
            $alas    =$_POST['alas'];
            $tinggi    =$_POST['tinggi'];
            
        // menghitung luas segitiga
        $luas_segitiga = 1/2 * $alas * $tinggi;
            
        echo "Hasil hitung luas segitiga adalah sebagai berikut:<br />";
        echo "Diketahui;<br />";
        echo "Alas Segitiga = $alas<br />";
        echo "Tinggi Segitiga = $tinggi<br />";
        echo "Maka luas segitiga sama dengan 1/2 ($alas x $tinggi) = $luas_segitiga cm";
        }
    ?>


<h3>3.2 Menghitung Keliling Segitiga</h3>
	<?php
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
        if(isset($_POST['submit'])){
            $sisi_a    =$_POST['sisi_a'];
            $sisi_b    =$_POST['sisi_b'];
            $sisi_c    =$_POST['sisi_c'];
            $keliling=$sisi_a+$sisi_b+$sisi_c;
        }
    ?>
    <form method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Sisi A</td>
                <td><input type="text" name="sisi_a" value="<?php echo $sisi_a;?>"> cm</td>
            </tr>
            <tr>
                <td>Sisi B</td>
                <td><input type="text" name="sisi_b"  value="<?php echo $sisi_b;?>"> cm</td>
            </tr>
            <tr>
                <td>Sisi C</td>
                <td><input type="text" name="sisi_c"  value="<?php echo $sisi_c;?>"> cm</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
			<tr>
                <td>Keliling Segitiga</td>
                <td>= <?php echo $keliling;?> cm</td>
            </tr>

        </table>
    </form>


<h3>4. Hitung Keliling dan Luas Lingkaran</h3>
	<form method="post" enctype="multipart/form-data">
		<table>
			<tr>
                <td>Jari-jari</td>
                <td></td>
                <td><input type="text" name="jari2" required > cm</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
		</table>
	</form>
	<?php
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		if(isset($_POST['submit'])){
			$jari2 = $_POST['jari2'];
			$phi = 22/7;
			$luas_lingkaran = $phi * $jari2 * $jari2;
			$keliling_lingkaran = $phi*($jari2 + $jari2);
	
		echo "Lingkaran dengan jari-jari $jari2 maka memiliki : <br>";
		echo "Luas : $luas_lingkaran cm <br>";
		echo "Keliling : $keliling_lingkaran cm";
		}
	?>


<h3>5.1 Hitung Luas Belah Ketupat</h3>
	<form method="post" enctype="multipart/form-data">
		<table>
			<tr>
                <td>Diagonal 1 (D1)</td>
                <td></td>
                <td><input type="text" name="d1" required> cm</td>
            </tr>
			<tr>
                <td>Diagonal 2 (D2)</td>
                <td></td>
                <td><input type="text" name="d2" required> cm</td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
		</table>
	</form>
	<?php
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		if(isset($_POST['submit'])){
			$d1 = $_POST['d1'];
			$d2 = $_POST['d2'];
			$luas = 1/2 * $d1 * $d2;

			echo "Hasil hitung luas belah ketupat adalah sebagai berikut :<br />";
			echo "Diketahui;<br />";
			echo "Diagonal 1 = $d1 cm<br />";
			echo "Diagonal 2 = $d2 cm<br />";
			echo "Maka luas belah ketupat adalah $luas cm";
		}
	?>		


<h3>5.2 Hitung Keliling Belah Ketupat</h3>
	<form method="POST" enctype="multipart/form-data">
		<table>
			<tr>
                <td>Sisi</td>
                <td></td>
                <td><input type="text" name="sisi" required> cm</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="submit" value="Hitung"></td>
            </tr>
		</table>
	</form>
	<?php
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		if(isset($_POST['submit'])){
			$sisi = $_POST['sisi'];
			$keliling = 4 * $sisi;

		echo "Keliling dari belah ketupat tersebut adalah $keliling cm";
		}
	?>
	</div>

</body>
</html>