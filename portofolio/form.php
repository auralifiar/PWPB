<?php
include 'koneksi.php';
if(isset($_POST['save'])) {
    $namalengkap = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    $sql = "INSERT INTO kontak (nama, email, pesan) VALUES ('$namalengkap', '$email', '$pesan')";
    $query = mysqli_query($connect, $sql);
    if ($query) {
        header('Location: tampilan.php');
    } else {
        header('Location: form.php?status=gagal');
    }
    
}
?>