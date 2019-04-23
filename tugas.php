<?php
// inisialisasi variable yang digunakan
// nama peralatan
$alat_geordi1="phaser";
$alat_geordi2="Tricorder";
$alat_geordi3="Visor";
$alat_geordi4="Analyzer Photonik";
// harga per unit
$harga_alat_geordi1 =7500;
$harga_alat_geordi2 =12500;
$harga_alat_geordi3 =16000;
$harga_alat_geordi4 =2300;
// jumlah peralatan yang ada 
$jumlah_alat_geordi1=2;
$jumlah_alat_geordi2=5;
$jumlah_alat_geordi3=1;
$jumlah_alat_geordi4=3;
// total harga per jenis peralatan 
$total_alat_geordi1 = $jumlah_alat_geordi1 * $harga_alat_geordi1;
$total_alat_geordi2 = $jumlah_alat_geordi2 * $harga_alat_geordi2;
$total_alat_geordi3 = $jumlah_alat_geordi3 * $harga_alat_geordi3;
$total_alat_geordi4 = $jumlah_alat_geordi4 * $harga_alat_geordi4;
// hitung grand total nilai peralatan geordil
$total_harga=$total_alat_geordi1+$total_alat_geordi2+$total_alat_geordi3+$total_alat_geordi4;
// besar diskon untuk geordi
$diskon = 5;
// jumlah total diskon yang diberikan kepada geordi
$nilai_diskon=($diskon * $total_harga)/100;
// jumlah yang harus dibayar geordi
$total_harga_dibayar = $total_harga - $nilai_diskon;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Geordi dan Daftar peralatan yang dibeli</title>
</head>
<body>
    <table border="1" callspacing="0" collpadding="3"> 
        <tr>
            <td colspan="4" align="center" valign="middle">
                <b>Daftar Pemesanan Peralatan Geordi La Forge - NCC1701D</b>
            </td>
        </tr>
        <tr>
            <td><b>Nama Peralatan</b></td>
            <td><b>Jumlah</b></td>
            <td><b>Harga Satuan</b></td>
            <td><b>Jumlah Harga</b></td>
        </tr>
        <?php
            // Mulai Untuk Mengisi table daftar dengan data yang ada
        ?>
        <tr>
            <td align="left"><?= $alat_geordi1; ?></td>
            <td align="right"><?= $jumlah_alat_geordi1; ?></td>
            <td align="right"><?= $harga_alat_geordi1; ?></td>
            <td align="right"><?= $total_alat_geordi1; ?></td>
        </tr>
        <tr>
            <td align="left"><?= $alat_geordi2; ?></td>
            <td align="right"><?= $jumlah_alat_geordi2; ?></td>
            <td align="right"><?= $harga_alat_geordi2; ?></td>
            <td align="right"><?= $total_alat_geordi2; ?></td>
        </tr>
        <tr>
            <td align="left"><?= $alat_geordi3; ?></td>
            <td align="right"><?= $jumlah_alat_geordi3; ?></td>
            <td align="right"><?= $harga_alat_geordi3; ?></td>
            <td align="right"><?= $total_alat_geordi3; ?></td>
        </tr>
        <tr>
            <td align="left"><?= $alat_geordi4; ?></td>
            <td align="right"><?= $jumlah_alat_geordi4; ?></td>
            <td align="right"><?= $harga_alat_geordi4; ?></td>
            <td align="right"><?= $total_alat_geordi4; ?></td>
        </tr>
        <tr>
            <td colspan="3" align="right"> Total Harga</td>
            <td colspan="3" align="right"> <?= $total_harga ?></td>
        </tr>
        <tr>
            <td colspan="3" align="right">Diskon <?= "($diskon %)" ?></td>
            <td colspan="3" align="right"> <?= $nilai_diskon ?></td>
        </tr>
        <tr>
            <td colspan="3" align="right"> Jumlah Harus dibayar </td>
            <td colspan="3" align="right"> <?= $total_harga_dibayar ?></td>
        </tr>
    </table>
</body>
</html>