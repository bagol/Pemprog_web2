<?php 
 
 


 function terbilang($nilai) {
     $nilai = abs($nilai);
     $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
     $pembilang = "";
     if ($nilai < 12) {
         $pembilang = " ". $huruf[$nilai];
     } else if ($nilai <20) {
         $pembilang = terbilang($nilai - 10). " belas";
     } else if ($nilai < 100) {
         $pembilang = terbilang($nilai/10)." puluh". terbilang($nilai % 10);
     } else if ($nilai < 200) {
         $pembilang = " seratus" . terbilang($nilai - 100);
     } else if ($nilai < 1000) {
         $pembilang = terbilang($nilai/100) . " ratus" . terbilang($nilai % 100);
     } else if ($nilai < 2000) {
         $pembilang = " seribu" . terbilang($nilai - 1000);
     } else if ($nilai < 1000000) {
         $pembilang = terbilang($nilai/1000) . " ribu" . terbilang($nilai % 1000);
     } else if ($nilai < 1000000000) {
         $pembilang = terbilang($nilai/1000000) . " juta" . terbilang($nilai % 1000000);
     } else if ($nilai < 1000000000000) {
         $pembilang = terbilang($nilai/1000000000) . " milyar" . terbilang(fmod($nilai,1000000000));
     } else if ($nilai < 1000000000000000) {
         $pembilang = terbilang($nilai/1000000000000) . " trilyun" . terbilang(fmod($nilai,1000000000000));
     }     
     return $pembilang;
 }
 ?>
<html>
<head>

    <style>
        .border-atas{
            border-top: 1px solid #000;
        }
        .border-bawah{
            border-bottom: 1px solid #000;
        }
    </style>
</head>
<body>
<table>
    <thead >
        <tr>
            <th>No</th>
            <th>Keterangan</th>
            <th align="right">Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Gaji Pokok</td>
            <td align="right">2000000</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Bonus Teknisi</td>
            <td align="right">0</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Bonus Seles</td>
            <td align="right">0</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Lain - Lain</td>
            <td class="border-bawah" align="right">200000</td>
            <td rowspan="2">(+)</td>
        </tr>
        <tr>
            <td colspan="3" align="right">2200000</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Sisa Hutang yang lalu</td>
            <td align="right">150000</td>
        </tr>
        <tr>
            <td>6</td>
            <td>Hutang Bulan ini</td>
            <td class="border-bawah" align="right">50000</td>
            <td rowspan="2">(+)</td>
        </tr>
        <tr>
            <td colspan="3" align="right">200000</td>
        </tr>
        <tr>
            <td>7</td>
            <td>Potongan Gaji</td>
            <td align="right">150000</td>
        </tr>
        <tr>
            <td>8</td>
            <td>Sisa Hutang yang Belum dibayar</td>
            <td align="right">50000</td>
        </tr>
        <tr >
            <td colspan="2" class="border-atas"> <i><?= terbilang(2050000);?></i> </td>
            <td align="right" class="border-atas"> <b>TOTAL DITERIMA : 2050000</b> </td>
        </tr>
    </tbody>
 </table>
</body>
</html>
 