<?php

include('../../../conf/config.php');

$nama =  $_GET['nama'];
$username = $_GET['username'];
$password = $_GET['password'];
$notelp = $_GET['notelephone'];
$nik = $_GET['nik'];
$tempatlahir = $_GET['tempatlahir'];
$tanggallahir = $_GET['tanggallahir'];
$alamat_user = $_GET['alamat_user'];
$jeniskelamin = $_GET['jeniskelamin'];
$agama = $_GET['agama'];
$ktp = $_GET['ktp'];
$jenispekerjaan = $_GET['jenispekerjaan'];
$perusahaan = $_GET['perusahaan'];
$jabatan = $_GET['jabatan'];
$notelpperusahaan = $_GET['notelpperusahaan'];
$alamatperusahaan = $_GET['alamatperusahaan'];
$jumlahgaji = $_GET['jumlahgaji'];

$query = mysqli_query($koneksi, "INSERT INTO users (id_user, nama_user, username, password, no_telp, nik, tempat_lahir, tanggal_lahir, alamat_user, jenis_kelamin, agama, ktp, jenis_pekerjaan, nama_perusahaan, jabatan, telp_perusahaan, alamat_perusahaan, jumlah_gaji, level) VALUES('','$nama','$username','$password','$notelp','$nik','$tempatlahir','$tanggallahir','$alamat_user','$jeniskelamin','$agama','$ktp','$jenispekerjaan','$perusahaan','$jabatan','$notelpperusahaan','$alamatperusahaan','$jumlahgaji','user')");

if ($query == 1) {

    $message = "Data Berhasil di tambahkan!";
    echo "<script type='text/javascript'>
    alert('$message');
    window.location.href = '../data-anggota.php';
    </script>";
} else {
    $message = "Data Gagal di tambahkan!";
    echo "<script type='text/javascript'>
    alert('$message');
    window.location.href = 'tambah-anggota.php';
    </script>";
    // header("Location: ../");
}
