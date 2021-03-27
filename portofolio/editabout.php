<?php
$koneksi = new mysqli ("localhost", "root", "", "portofolio")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit About</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

        <style>
            body {
                height: 500px;
            }

            a {
                display:
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
<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e0ffff" fill-opacity="1" d="M0,32L24,64C48,96,96,160,144,170.7C192,181,240,139,288,112C336,85,384,75,432,85.3C480,96,528,128,576,154.7C624,181,672,203,720,208C768,213,816,203,864,202.7C912,203,960,213,1008,197.3C1056,181,1104,139,1152,112C1200,85,1248,75,1296,64C1344,53,1392,43,1416,37.3L1440,32L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg> -->
    <section id="about">
        <div class="container">
            <div class="row text-center pt-5 mb-3">
            <div class="col">
                <h2>About Me</h2>
            </div>
            </div>
            <?php $ambil=$koneksi->query("SELECT * FROM about");?>    
            <?php $pecah = $ambil->fetch_assoc()?>
            <div class="row justify-content-center fs-5 text-center">
            <div class="col-md-4">
                <p><?php echo $pecah['deskripsi1'];?></p>
            </div>
            <div class="col-md-4">
                <p><?php echo $pecah['deskripsi2'];?></p>
            </div>
                <a href="aboutedit.php" class="btn btn-md btn-info text-light" style="background-color: #0ffff; ">Edit Profile</a>
            </div>
        </div>
    </section>
    <footer class="p-3 text-center text-white" style="background-color: #0abde3; margin-top: 200px;">
        <p>Created by Aura Alifia</p>
    </footer>

</body>