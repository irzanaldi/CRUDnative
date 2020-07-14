<?php

function register_user($nama, $pass)
{
    global $link;
    // mencegah sql injection
    $nama = mysqli_real_escape_string($link, $nama);
    $pass = mysqli_real_escape_string($link, $pass);
    // Encrypt password
    $pass = password_hash($pass, PASSWORD_DEFAULT);
    $query = "INSERT INTO users(username, password) VALUES('$nama', '$pass')";

    if (mysqli_query($link, $query)) return true;
    else return false;
}

function input_relawan($nama, $alamat, $email, $nohp, $keahlian, $daerah)
{
    global $link;
    $nama = mysqli_real_escape_string($link, $nama);
    $alamat = mysqli_real_escape_string($link, $alamat);
    $email = mysqli_real_escape_string($link, $email);
    $nohp = mysqli_real_escape_string($link, $nohp);
    $keahlian = mysqli_real_escape_string($link, $keahlian);
    $daerah = mysqli_real_escape_string($link, $daerah);

    $query = "INSERT INTO data_relawan(nama, alamat, email, nohp, keahlian, daerah) 
    VALUES('$nama', '$alamat', '$email', '$nohp', '$keahlian', '$daerah')";

    if (mysqli_query($link, $query)) return true;
    else return false;
}

function edit_relawan($id, $nama, $alamat, $email, $nohp, $keahlian, $daerah)
{
    global $link;
    $id = mysqli_real_escape_string($link, $id);
    $nama = mysqli_real_escape_string($link, $nama);
    $alamat = mysqli_real_escape_string($link, $alamat);
    $email = mysqli_real_escape_string($link, $email);
    $nohp = mysqli_real_escape_string($link, $nohp);
    $keahlian = mysqli_real_escape_string($link, $keahlian);
    $daerah = mysqli_real_escape_string($link, $daerah);

    $query = "UPDATE data_relawan SET nama='$nama', alamat='$alamat', email='$email', nohp='$nohp',
    keahlian='$keahlian', daerah='$daerah' WHERE id='$id'";

    if (mysqli_query($link, $query)) return true;
    else return false;
}

function hapus($id)
{
    global $link;
    $id = mysqli_real_escape_string($link, $id);

    $query = "DELETE from data_relawan WHERE id='$id'";
    if (mysqli_query($link, $query)) return true;
    else return false;
}

// cegah duplikasi username
function register_cek_username($nama)
{
    global $link;
    // mencegah sql injection
    $nama = mysqli_real_escape_string($link, $nama);

    $query = "SELECT * FROM users where username = '$nama'";

    if ($result = mysqli_query($link, $query)) {
        if (mysqli_num_rows($result) == 0) return true;
        else return false;
    }
}

// cek nama terdaftar / belum
function login_cek_nama($nama)
{
    global $link;

    $nama = mysqli_real_escape_string($link, $nama);

    $query = "SELECT * FROM users where username = '$nama'";

    if ($result = mysqli_query($link, $query)) {
        if (mysqli_num_rows($result) > 0) return true;
        else return false;
    }
}

// cek password Login
function cek_data($nama, $pass)
{
    global $link;
    // mencegah sql injection
    $nama = mysqli_real_escape_string($link, $nama);
    $pass = mysqli_real_escape_string($link, $pass);

    $query = "SELECT password FROM users WHERE username = '$nama'";

    $result = mysqli_query($link, $query);
    $hash = mysqli_fetch_assoc($result);

    if (password_verify($pass, $hash['password'])) return true;
    else return false;
}

// clear all session
function logout($session)
{
    unset($session);
    session_destroy();
}
