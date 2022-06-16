<?php
include('config.php');

$nama =  $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$notelp = $_POST['notelephone'];
$nik = $_POST['nik'];
$tempatlahir = $_POST['tempatlahir'];
$tanggallahir = $_POST['tanggallahir'];
$alamat_user = $_POST['alamat_user'];
$jeniskelamin = $_POST['jeniskelamin'];
$agama = $_POST['agama'];
$ktp = $_FILES['ktp']['name'];
$jenispekerjaan = $_POST['jenispekerjaan'];
$perusahaan = $_POST['perusahaan'];
$jabatan = $_POST['jabatan'];
$notelpperusahaan = $_POST['notelpperusahaan'];
$alamatperusahaan = $_POST['alamatperusahaan'];
$jumlahgaji = $_POST['jumlahgaji'];


// proses upload foto
// menentukan destinasi untuk menyimpan foro
$dir = "img/";
// temporaari file
$tmpFile = $_FILES['ktp']['tmp_name'];

move_uploaded_file($tmpFile, $dir . $ktp);

$query = mysqli_query($koneksi, "INSERT INTO users (id_user, nama_user, username, password, no_telp, nik, tempat_lahir, tanggal_lahir, alamat_user, jenis_kelamin, agama, ktp, jenis_pekerjaan, nama_perusahaan, jabatan, telp_perusahaan, alamat_perusahaan, jumlah_gaji, level) VALUES('','$nama','$username','$password','$notelp','$nik','$tempatlahir','$tanggallahir','$alamat_user','$jeniskelamin','$agama','$ktp','$jenispekerjaan','$perusahaan','$jabatan','$notelpperusahaan','$alamatperusahaan','$jumlahgaji','user')");

$message = "Anda berhasil mendftar silahkan masuk!";
echo "<script>
        alert('$message');
        window.location.href = '../index.php';
        </script>";
// header('Location:../index.php');
