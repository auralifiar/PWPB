<?php
$koneksi = new mysqli ("localhost", "root", "", "portofolio")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />

</head>
<body>
<h2 style="margin-top: 50px; text-align: center;">Tambah Gallery Baru</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group ms-5 me-5">
        <label class="label mt-3">Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <div class="form-group ms-5 me-5">
        <label class="label mt-3">Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi">
    </div>
    <button class="btn btn-primary mt-3 ms-5" name="save">Simpan</button>
</form>
<?php
        if (isset($_POST['save']))
    {
        $nama = $_FILES['foto']['name'];
        $lokasi = $_FILES['foto']['tmp_name'];
        move_uploaded_file($lokasi, "../portofolio/img/".$nama);
        $koneksi->query("INSERT INTO gallery (foto, deskripsi) VALUES('$nama','$_POST[deskripsi]')");
        
        echo "<div class='alert alert-info'>Data Tersimpan</div>";
        echo "<meta http-equiv=refresh content='1;editgallery.php'>";
    }
    ?>
</body>
</html>