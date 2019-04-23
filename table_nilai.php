<?php
// variable Nim Mahasiswa
$nim1 = "2016141010";
$nim2 = "2016140748";
$nim3 = "2016141044";
// variable Nama Mahasiswa
$namaMhs1 = "Mulyadih";
$namaMhs2 = "Andhar Permana";
$namaMhs3 = "ibnu Fajar Yusuf";
// Vaiable Nilai Tugas
$tugasMhs1 = 70;
$tugasMhs2 = 75;
$tugasMhs3 = 80;
// variable nilai UTS 
$utsMhs1 = 80;
$utsMhs2 = 70;
$utsMhs3 = 75;
// variable nilai UAS
$uasMhs1 = 80;
$uasMhs2 = 80;
$uasMhs3 = 85;
// nilai akhir Mahasiswa
$nilaiAkhirMhs1= ($tugasMhs1 + $utsMhs1 + $uasMhs1) / 3;
$nilaiAkhirMhs2= ($tugasMhs2 + $utsMhs2 + $uasMhs2) / 3;
$nilaiAkhirMhs3= ($tugasMhs3 + $utsMhs3 + $uasMhs3) / 3;
// nilai rata-rata
$rata2_Tugas = ($tugasMhs1 + $tugasMhs2 + $tugasMhs3) / 3;
$rata2_UTS = ($utsMhs1 + $utsMhs2 + $utsMhs3) / 3;
$rata2_UAS = ($uasMhs1 + $uasMhs2 + $uasMhs3) / 3;
$rata2_Nilai_Akhir = ($nilaiAkhirMhs1 + $nilaiAkhirMhs2 + $nilaiAkhirMhs3)/3;
// nilai Total 
$total_Tugas = $tugasMhs1 + $tugasMhs2 + $tugasMhs3;
$total_UTS = $utsMhs1 + $utsMhs2 + $utsMhs3;
$total_UAS = $uasMhs1 + $uasMhs2 + $uasMhs3;
$total_Nilai_Akhir = $nilaiAkhirMhs1 + $nilaiAkhirMhs2 + $nilaiAkhirMhs3;



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <td colspan="7"><center>Data Nilai Mahasiswa</center></td>
            </tr>
            <tr>
                <td colspan="7"><center>UNIVERSITAS MULYADIH JAYA</center></td>
            </tr>
            <tr>
                <td>NO</td>
                <td>NIM</td>
                <td>Nama Mahasiswa</td>
                <td>Tugas</td>
                <td>UTS</td>
                <td>UAS</td>
                <td>Nilai Akhir</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td align="center">1</td>
                <td align="left"><?= $nim1; ?></td>
                <td align="left"><?= $namaMhs1; ?></td>
                <td align="right"><?= $tugasMhs1; ?></td>
                <td align="right"><?= $utsMhs1; ?></td>
                <td align="right"><?= $uasMhs1; ?></td>
                <td align="right"><?= floor($nilaiAkhirMhs1); ?></td>
            </tr>
            <tr>
                <td align="center">2</td>
                <td align="left"><?= $nim2; ?></td>
                <td align="left"><?= $namaMhs2;?></td>
                <td align="right"><?= $tugasMhs2; ?></td>
                <td align="right"><?= $utsMhs2; ?></td>
                <td align="right"><?= $uasMhs2; ?></td>
                <td align="right"><?= $nilaiAkhirMhs2; ?></td>
            </tr>
            <tr>
                <td align="center">3</td>
                <td align="left"><?= $nim3; ?></td>
                <td align="left"><?= $namaMhs3; ?></td>
                <td align="right"><?= $tugasMhs3; ?></td>
                <td align="right"><?= $utsMhs3; ?></td>
                <td align="right"><?= $uasMhs3; ?></td>
                <td align="right"><?= $nilaiAkhirMhs3; ?></td>
            </tr>
            <tr>
                <td colspan="3" align="right">Rata-Rata</td>
                <td align="right"><?= $rata2_Tugas ?></td>
                <td align="right"><?= $rata2_UTS ?></td>
                <td align="right"><?= floor($rata2_UAS) ?></td>
                <td align="right"><?= floor($rata2_Nilai_Akhir) ?></td>
            </tr>
            <tr>
                <td colspan="3" align="right">Total</td>
                <td align="right"><?= $total_Tugas ?></td>
                <td align="right"><?= $total_UTS ?></td>
                <td align="right"><?= $total_UAS ?></td>
                <td align="right"><?= floor($total_Nilai_Akhir) ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>