<?php
include("views/navbar.php");
require_once "model/db.php";
$query = "SELECT * FROM data_relawan ";
$result = mysqli_query($link, $query);
?>
<div class="container">
    <h1>Data Relawan</h1>
    <div class="row justify-content-md-center">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Keahlian</th>
                    <th scope="col">Daerah</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                while ($data = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <th><?php echo $i++; ?></th>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['nohp']; ?></td>
                        <td><?php echo $data['keahlian']; ?></td>
                        <td><?php echo $data['daerah']; ?></td>
                        <td>
                            <a href=" laporan.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm" target="blank"> <i class="fa fa-eye"></i> </a>
                            <a href=" ubah.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pen"></i> </a>
                            <a href=" hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>