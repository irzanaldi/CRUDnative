<?php

require_once("core/init.php");

// validasi register
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $keahlian = $_POST['keahlian'];
    $daerah = $_POST['daerah'];

    // trim - remove spasi
    if (!empty(trim($nama))) {
        // cek register ke database
        if (edit_relawan($id, $nama, $alamat, $email, $nohp, $keahlian, $daerah)) {
            echo "<script>alert('Berhasil Edit Relawan')</script>";
            header("location:update.php");
        } else {
            echo "<script>alert('Gagal Edit')</script>";
        }
    } else {
        echo "<script>alert('Nama Tidak boleh kosong')</script>";
    }
}
