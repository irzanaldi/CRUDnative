<?php

include('model/db.php');
$id = $_GET['id'];
$query = "SELECT * FROM data_relawan where id = '$id'";
$result = mysqli_query($link, $query);
require_once __DIR__ . '/assets/mpdf_v8.0.3-master/vendor/autoload.php';
$hari   = date('l');
$hari_indonesia = array(
    'Monday'  => 'Senin',
    'Tuesday'  => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu',
    'Sunday' => 'Minggu'
);
date_default_timezone_set('Asia/Jakarta');
$mpdf = new \Mpdf\Mpdf();
ob_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        h1 {
            text-align: center;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <?php
    while ($data = mysqli_fetch_array($result)) { ?>
        <h1>Data Relawan Covid 19 Wilayah <?php echo $data['daerah']; ?></h1>
        <h1>Per <?php echo date('d F Y H:i:s a') ?></h1>

        <table>
            <thead>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>Alamat Rumah</th>
                    <th>Provinsi</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Keahlian</th>
                </tr>
            </thead>
            <tbody>

                <tr>

                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['daerah']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['nohp']; ?></td>
                    <td><?php echo $data['keahlian']; ?></td>

                </tr>
            <?php } ?>
            </tbody>
        </table>

</body>

</html>
<?php
$html = ob_get_contents();
ob_end_clean();
$mpdf = new \Mpdf\Mpdf();
$mpdf->AddPage("P", "", "", "", "", "15", "15", "15", "15", "", "", "", "", "", "", "", "", "", "", "", "A4");
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output();
?>