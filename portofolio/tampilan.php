<?php
$nav = ["Home", "About", "Gallery", "Contact"];
?>

<?php
include 'koneksi.php';
?>
<?php
$koneksi = new mysqli("localhost","root","","portofolio")
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <link rel="stylesheet" href="style.css" />
    <title>My Portofolio</title>
  </head>
  <body>
    <!-- Navbar -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0abde3" fill-opacity="1" d="M0,160L40,176C80,192,160,224,240,208C320,192,400,128,480,138.7C560,149,640,235,720,266.7C800,299,880,277,960,250.7C1040,224,1120,192,1200,197.3C1280,203,1360,245,1400,266.7L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #0abde3;">
      <div class="container">
        <a class="navbar-brand" href="admin.php">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <?php foreach ($nav as $navbar) { ?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href=""><?php echo $navbar ?></a>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
          
    <!-- Profile -->
    <section class="jumbotron text-center">
    <?php $ambil=$koneksi->query("SELECT * FROM editprofile");?>    
    <?php $pecah = $ambil->fetch_assoc()?>
      <img src="../portofolio/img/<?php echo $pecah['gambar'];?>" width="200" class="rounded-circle img-thumbnail" />
      <h1 class="display-4"><?php echo $pecah['nama'];?></h1>
      <p class="lead"><?php echo $pecah['deskripsi'];?></p>
    </section>

        <!-- About Me -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e0ffff" fill-opacity="1" d="M0,32L24,64C48,96,96,160,144,170.7C192,181,240,139,288,112C336,85,384,75,432,85.3C480,96,528,128,576,154.7C624,181,672,203,720,208C768,213,816,203,864,202.7C912,203,960,213,1008,197.3C1056,181,1104,139,1152,112C1200,85,1248,75,1296,64C1344,53,1392,43,1416,37.3L1440,32L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
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
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e0ffff" fill-opacity="1" d="M0,96L24,117.3C48,139,96,181,144,208C192,235,240,245,288,234.7C336,224,384,192,432,160C480,128,528,96,576,112C624,128,672,192,720,202.7C768,213,816,171,864,154.7C912,139,960,149,1008,165.3C1056,181,1104,203,1152,224C1200,245,1248,267,1296,277.3C1344,288,1392,288,1416,288L1440,288L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z"></path></svg>
    
    <!-- Gallery -->
    <section id="gallery">
      <div class="container">
        <div class="row text-center pt-5 mb-3">
          <div class="col">
            <h2>My Gallery</h2>
          </div>
        </div>
        <?php $ambil = $koneksi->query("SELECT * FROM gallery"); ?>
        <?php while($pergambar = $ambil->fetch_assoc()) { ?>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card ">
              <img src="../portofolio/img/<?php echo $pergambar['foto'];?>" class="card-img-top" alt="" />
              <div class="card-body">
                <p class="card-text"><?php echo $pergambar['deskripsi'];?></p>
              </div>
            </div>
          </div>
            </div>
            <?php } ?>

    <!-- Contact -->
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e0ffff" fill-opacity="1" d="M0,96L40,101.3C80,107,160,117,240,138.7C320,160,400,192,480,197.3C560,203,640,181,720,165.3C800,149,880,139,960,144C1040,149,1120,171,1200,181.3C1280,192,1360,192,1400,192L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    <section id="contact">
      <div class="container">
        <div class="row text-center  ">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form action="form.php" method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" aria-describedby="name" name="nama">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" aria-describedby="email" name="email">
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" rows="3" name="pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-primary" name="save" value="save">Kirim</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e0ffff" fill-opacity="1" d="M0,160L40,165.3C80,171,160,181,240,186.7C320,192,400,192,480,176C560,160,640,128,720,133.3C800,139,880,181,960,181.3C1040,181,1120,139,1200,133.3C1280,128,1360,160,1400,176L1440,192L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
    
    <!-- Footer -->
    <footer class="p-3 text-center text-white" style="background-color: #0abde3;">
      <p>Created by Aura Alifia</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>
