<?php
$koneksi = new mysqli ("localhost", "root", "", "portofolio")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gallery</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

        <style>
            body {
                height: 1000px;
            }
        </style>
</head>

<body>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0abde3" fill-opacity="1" d="M0,160L40,176C80,192,160,224,240,208C320,192,400,128,480,138.7C560,149,640,235,720,266.7C800,299,880,277,960,250.7C1040,224,1120,192,1200,197.3C1280,203,1360,245,1400,266.7L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #0abde3;">
    <div class="container">
        <a class="navbar-brand" href="tampilan.php">User  </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin.php">Edit Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="editabout.php">Edit About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="editgallery.php"> Edit Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="tampildata.php">Data Contact</a>
                </li>
            </ul>
        </div>
</nav>

<table class="table table-bordered text-center" style="margin-top: 100px;">
    <thead>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Deskripsi</th>
            <th>Action</th>

        </tr>
    </thead>

    <tbody>
        <?php $nomor=1;?>
        <?php $ambil=$koneksi->query("SELECT * FROM gallery");?>    
        <?php while($pecah = $ambil->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $nomor;?></td>
            <td>
                <img src="../portofolio/img/<?php echo $pecah['foto'];?>" width="100">
            </td>
            <td><?php echo $pecah['deskripsi'];?></td>
            <td>
                <a href="editgallery.php?halaman=hapus&id=<?php echo $pecah['id'];?>" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-trash2-fill" viewBox="0 0 16 16">
                    <path d="M2.037 3.225A.703.703 0 0 1 2 3c0-1.105 2.686-2 6-2s6 .895 6 2a.702.702 0 0 1-.037.225l-1.684 10.104A2 2 0 0 1 10.305 15H5.694a2 2 0 0 1-1.973-1.671L2.037 3.225zm9.89-.69C10.966 2.214 9.578 2 8 2c-1.58 0-2.968.215-3.926.534-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466-.18-.14-.498-.307-.975-.466z"/>
                </svg></a>
                <a href="ubah.php?halaman=ubah&id=<?php echo $pecah['id'];?>" class="btn btn-warning">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                </svg></a>
            </td>
        </tr>
        <?php $nomor++;?>
        <?php } ?>
    </tbody>
</table>

            <a href="tambah.php" class="btn btn-primary ms-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg> Tambah Gallery Anda </a>

<?php
    if (isset($_GET['halaman'])) 
        {
            if ($_GET['halaman']=="admin")
            {
                include 'admin.php';
            }
            elseif ($_GET['halaman']=="hapus")
            {
                include 'hapus.php';
            }
            elseif ($_GET['halaman']=="ubah")
            {
                include 'ubah.php';

            }
            elseif ($_GET['halaman']=="hapusdata")
            {
                include 'hapusdata.php';

            }

        }                
?>

    <footer class="p-3 text-center text-white" style="background-color: #0abde3; margin-top: 100px;">
        <p>Created by Aura Alifia</p>
    </footer>
</body>