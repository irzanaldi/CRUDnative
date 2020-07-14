<?php
include("views/navbar.php");
// php script
require_once "model/db.php";
$id = $_GET['id'];

$query = "SELECT * FROM data_daerah ORDER BY kota ASC";
$result = mysqli_query($link, $query);
$query2 = "SELECT * FROM data_relawan where id='$id' ";
$result2 = mysqli_query($link, $query2);
include("functions/controller_edit.php");

?>
<h3>Ubah Data Relawan</h3>
<?php

while ($data = mysqli_fetch_array($result2)) {

?>
    <form action="" method="post" style="margin:50px">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <div class="row">
            <div class="col-sm-8">
                <strong>Nama Lengkap :</strong>
                <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>">
            </div>

            <div class="col-sm-8">
                <strong>Alamat :</strong>
                <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat'] ?>">
            </div>

            <div class="col-sm-8">
                <strong>Email :</strong>
                <input type="text" name="email" class="form-control" value="<?php echo $data['email'] ?>">
            </div>

            <div class="col-sm-8">
                <strong>No HP :</strong>
                <input type="text" name="nohp" class="form-control" value="<?php echo $data['nohp'] ?>">
            </div>

            <div class="col-sm-8">
                <strong>Keahlian :</strong>
                <input type="text" name="keahlian" class="form-control" value="<?php echo $data['keahlian'] ?>">
            </div>


            <div class="col-sm-8">
                <strong>Daerah :</strong>
                <select name="daerah" id="daerah" class="custom-select">
                    <option value="<?php echo $data['daerah'] ?>"><?php echo $data['daerah'] ?></option>
                    <?php while ($data = mysqli_fetch_assoc($result)) { ?>
                        <option value="<?php echo $data['kota']; ?>"><?php echo $data['kota']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="col-sm-12 mt-3">
                <a href="" class="btn btn-sm btn-success">Back</a>
                <button type="submit" name="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
        </div>
    </form>
<?php } ?>