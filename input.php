<?php
include("views/navbar.php");
// php script
include("functions/controller_input.php");
require_once "model/db.php";
$query = "SELECT * FROM data_daerah ORDER BY kota ASC";
$result = mysqli_query($link, $query);

?>
<h3>Input Data Relawan</h3>

<form action="" method="post" style="margin:50px">
    <div class="row">
        <div class="col-sm-8">
            <strong>Nama Lengkap :</strong>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
        </div>

        <div class="col-sm-8">
            <strong>Alamat :</strong>
            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
        </div>

        <div class="col-sm-8">
            <strong>Email :</strong>
            <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
        </div>

        <div class="col-sm-8">
            <strong>No HP :</strong>
            <input type="text" name="nohp" class="form-control" placeholder="Masukkan No Hp">
        </div>

        <div class="col-sm-8">
            <strong>Keahlian :</strong>
            <input type="text" name="keahlian" class="form-control" placeholder="Masukkan Keahlian">
        </div>

        <div class="col-sm-8">
            <strong>Daerah :</strong>
            <select name="daerah" id="daerah" class="custom-select">
                <option value="null">Pilih Daerah</option>
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