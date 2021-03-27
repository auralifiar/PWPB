<?php
$koneksi = new mysqli("localhost","root","","portofolio")
?>

<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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
  <section class="jumbotron text-center" style="margin-top: 100px; margin-bottom: 200px;">
      <?php $ambil=$koneksi->query("SELECT * FROM editprofile");?>    
      <?php $pecah = $ambil->fetch_assoc()?>
      <img src="../portofolio/img/<?php echo $pecah['gambar'];?>" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4"><?php echo $pecah['nama'];?></h1>
      <p class="lead"><?php echo $pecah['deskripsi'];?></p>
      <a href="editprofile.php" class="btn btn-sm btn-info" style="background-color: #0ffff;">Edit Profile</a>
    </section>

  <footer class="p-3 text-center text-white" style="background-color: #0abde3;">
    <p>Created by Aura Alifia</p>
  </footer>
</body>
</html>