<?php
$koneksi = new mysqli ("localhost", "root", "", "portofolio")
?>
<?php
include 'koneksi.php';
?>
<?php
$ambil = $koneksi->query("SELECT * FROM gallery WHERE id='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<h2 style="margin: 20px 0px 20px 0px; text-align: center;">EDIT GALLERY</h2>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group ms-5 me-5 mb-4 text-center">
            <img src="../portofolio/img/<?php echo $pecah ['foto']?>" width="200" >
        </div>
        <div class="form-group ms-5 me-5 mb-4">
            <label style="margin-bottom: 10px;">Ganti Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <div class="form-group ms-5 me-5 mb-4">
        <label style="margin-bottom: 10px;">Deskripsi </label>
        <input type="text" name="deskripsi" class="form-control" value="<?php echo $pecah['deskripsi']?>">
        </div>

        <button class="btn btn-primary ms-5" name="ubah">Ubah Data</button>
    </form>
    <?php
        if (isset($_POST['ubah']))
    {
        $namafoto = $_FILES['foto']['name'];
        $lokasifoto = $_FILES['foto']['tmp_name'];
        //jika foto diubah
        if (!empty($lokasifoto))
    {
        move_uploaded_file($lokasifoto, "../portofolio/img/".$namafoto);

        $koneksi->query("UPDATE gallery SET foto='$namafoto', deskripsi='$_POST[deskripsi]' WHERE id='$_GET[id]'");
    }
    else
    {
        $koneksi->query("UPDATE gallery SET deskripsi='$_POST[deskripsi]' WHERE id='$_GET[id]'");
    }

        echo "<script>location='editgallery.php?halaman=editgallery.php';</script>";
    }
    ?>
</body>
</html>