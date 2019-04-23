<?php
$nik = "MI-007";
$nama = "BUDIMAN";
$jabatan = "Marketing";
$satus = "Karyawan";
$gaji_pokok = 1800000;
$TJ_Jabatan = 900000;
$TJ_Konsumsi = 455000;
$TJ_Harian = 520000;
$Bonus_target = 752000;
$totalA = $gaji_pokok + $TJ_Jabatan + $TJ_Konsumsi + $TJ_Harian + $Bonus_target;
$pph21 = 180000;
$asuransi = "-";
$totalB = $pph21 + $asuransi;
$total_bersih = $totalA - $totalB;
$terbilang = "empat juta empat ratus dua puluh tuju ribu rupiah";




?>
<html>
<head>
 <style>
    .borde-atas{
        border-top: 2px solid #000;
    }
    .border-bawah{
        border-bottom:2px solid #000;
    }
    .abu{
        background: #ccc;
    }
 </style>
</head>
<body>
<center>
<table>
    <tr >
        <td colspan="3" align="center"><b>PT.CAHAYA BERKAH</b></td>
    </tr>
    <tr>
        <td colspan="3" align="center"> shipping & Marine Supplier Indonesia</td>
    </tr>
    <tr>
        <td colspan="3" align="center"> Jl Gading Kirana 3 No. 23, Kelapa Gading, Jakarta Utara Telp 0721 271411 <br> <hr></td>
    </tr>
    <tr>
        <td colspan="3" align="center"> <u><b>SLIP GAJI KARYAWAN</b></u> <br>
        Priode 1 Juni 2013 - 30 Juni 2017 </td>
    </tr>
    <tr>
        <td colspan="3" align="left">
            <table>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><?=$nik;?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?=$nama; ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><?= $jabatan ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><?= $status ?></td>
            </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table>
                <tr>
                    <td><u><b>PENGHASILAN</b></u></td>
                </tr>
                <tr>
                    <td>Gaji Pokok</td>
                    <td> = </td>
                    <td><?= $gaji_pokok;?></td>
                </tr>
                <tr>
                    <td>Tj. jabatan</td>
                    <td> = </td>
                    <td><?= $TJ_Jabatan;?></td>
                </tr>
                <tr>
                    <td>TJ. Konsumsi</td>
                    <td> = </td>
                    <td><?= $TJ_Konsumsi; ?></td>
                </tr>
                <tr>
                    <td>TJ. Harian</td>
                    <td> = </td>
                    <td><?= $TJ_Harian; ?></td>
                </tr>
                <tr>
                    <td>Bonus Target</td>
                    <td> = </td>
                    <td class="border-bawah"><?= $Bonus_target; ?></td>
                </tr>
                <tr align="right">
                    <td colspan="2">Total (A)</td>
                    <td ><?= $totalA; ?></td>
                </tr>
            </table>
        </td>
        <td align="right" colspan="2">
            <table>
                <tr>
                    <td><u><b>POTONGAN</b></u></td>
                </tr>
                <tr>
                    <td>pph 21</td>
                    <td> = </td>
                    <td><?= $pph21; ?></td>
                </tr>
                <tr>
                    <td>Bonus Target</td>
                    <td> = </td>
                    <td><?= $asuransi; ?></td>
                </tr>
                <tr>
                    <td> &nbsp;</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td> &nbsp;</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td> &nbsp;</td>
                    <td></td>
                    <td class="border-bawah"></td>
                </tr>
                <tr align="right">
                    <td colspan="2">Total (B)</td>
                    <td ><?= $totalB; ?></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr >
        <td align="Center" colspan="3" class="abu border-bawah border-atas"> <b>PENERIMAAN BERSIH (A-B) = <?= $total_bersih; ?></b> </td>
    </tr>
    <tr>
        <td colspan="3" align="center" class="abu border-bawah"><i>Terbilang: # <?= $terbilang; ?> #</i></td>
    </tr>
    <tr>
        <td colspan="3" align="right">
                <small>Jakarta Utara 30, Juni 2017 <br> Manajer Opretional</small>
                <br>
                <br>
                <br>
                <br>
                <br>
                <u>Lina Aprillia,SE</u>

        </td>
    </tr>

    </table>
</center>


</body>
</html>
