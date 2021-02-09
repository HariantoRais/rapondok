<!DOCTYPE html>
<html>
<head>
  <title><?= $siswa->nis ?></title>
  <link rel="shortcut icon" href="<?php echo base_url('assets/dist/img/favicon.png') ?>">
  <style type="text/css">
      /*design table 1*/
        .table {
            font-family: arial, sans-serif;
            color: black;
            border-collapse: collapse;
        }
  </style>

  <?php 
  function penyebut($nilai) {
        $nilai = abs($nilai);
        $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " ". $huruf[$nilai];
        } else if ($nilai <20) {
            $temp = penyebut($nilai - 10). " Belas";
        } else if ($nilai < 100) {
            $temp = penyebut($nilai/10)." Puluh". penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " Seratus" . penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = penyebut($nilai/100) . " Ratus" . penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " Seribu" . penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = penyebut($nilai/1000) . " Ribu" . penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = penyebut($nilai/1000000) . " Juta" . penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = penyebut($nilai/1000000000) . " Milyar" . penyebut(fmod($nilai,1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = penyebut($nilai/1000000000000) . " Trilyun" . penyebut(fmod($nilai,1000000000000));
        }     
        return $temp;
    }
 
    function terbilang($nilai) {
        if($nilai<0) {
            $hasil = "minus ". trim(penyebut($nilai));
        } else {
            $hasil = trim(penyebut($nilai));
        }           
        return $hasil;
    }


   ?>

</head>
<body style="background-color: grey">
<div class="page">

<!-- KOP -->

<img src="<?php echo base_url('assets/img/kop.png') ?>" width=100%>

<center>
<h3>LAPORAN PENILAIAN MATA PELAJARAN KEAGAMAAN</h3>
</center>

<table class="table" width="100%">
    <tbody>
        <tr>
            <td><b style="font-family: bookmanoldstyle; font-style: italic;">Nama Siswa</b></td>
            <td width="50%"><b>: <?= $siswa->nama ?></b></td>
            <td style="font-family: bookmanoldstyle; font-style: italic;">Kelas/Semester</td>
            <td style="font-family: bookmanoldstyle; font-style: italic;">: 
                <?php if ($siswa->id_kelas == 'viia'): ?>
                    VII A
                <?php elseif($siswa->id_kelas == 'viib'): ?>
                    VII B
                <?php elseif($siswa->id_kelas == 'viic'): ?>
                    VII C
                <?php elseif($siswa->id_kelas == 'viiia'): ?>
                    VIII A
                <?php elseif($siswa->id_kelas == 'viiib'): ?>
                    VIII B
                <?php elseif($siswa->id_kelas == 'viiic'): ?>
                    VIII C
                <?php elseif($siswa->id_kelas == 'ixa'): ?>
                    IX A
                <?php elseif($siswa->id_kelas == 'ixb'): ?>
                    IX B
                <?php elseif($siswa->id_kelas == 'ixc'): ?>
                    IX C
                <?php endif ?>

                /1 (Satu)
            </td>
        </tr>
        <tr>
            <td><b style="font-family: bookmanoldstyle; font-style: italic;">Nomor Induk</b></td>
            <td><b>: <?= $siswa->nis ?></b></td>
            <td style="font-family: bookmanoldstyle; font-style: italic;">Tahun Pelajaran</td>
            <td style="font-family: bookmanoldstyle; font-style: italic;">: 2020/2021</td>
        </tr>
        <tr>
            <td><b style="font-family: bookmanoldstyle; font-style: italic;">NISN</b></td>
            <td><b>: <?= $siswa->nisn ?></b></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><b style="font-family: bookmanoldstyle; font-style: italic;">Nama Sekolah</b></td>
            <td><b style="font-family: bookmanoldstyle; font-style: italic;">: SMP Islam As-Sunnah Bagik Nyaka</b></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>

<br>

<!-- ISI -->
<table class="table" width=100% border=1 cellpadding="3" cellspacing=0 style="border: black">
    
        <tr>
            <td rowspan=2 align="center">No</td>
            <td rowspan=2 align="center">Mata Pelajaran</td>
            <td rowspan=2 align="center">KKM</td>
            <td colspan=2 align="center">Nilai</td>
            <td rowspan=2 align="center">Keterangan</td>
        </tr>
        <tr>
            <td align="center">Angka</td>
            <td align="center">Huruf</td>
        </tr>
        <tr>
            <td colspan="6" style="background: #e5e2e1"></td>
        </tr>
        <tr>
            <td align="center">1</td>
            <td>Aqidah</td>
            <td align="center">65</td>
            <td align="center"><strong><?php echo $siswa->aqidah ?></strong></td>
            <td align="center"><?php echo terbilang($siswa->aqidah) ?></td>
            <td align="center">
                <?php if ($siswa->aqidah < 65): ?>
                    Belum Tuntas
                <?php elseif($siswa->aqidah == 65): ?>
                    Tuntas
                <?php else: ?>
                    Terlampaui
                <?php endif ?>
            </td>
        </tr>

        <!-- TADRIB LUGHOWI -->
        <?php if ($siswa->id_kelas == 'viia' or $siswa->id_kelas == 'viib' or $siswa->id_kelas == 'viic' or $siswa->id_kelas == 'viiia' or $siswa->id_kelas == 'viiib' or $siswa->id_kelas == 'viiic'): ?>
            <tr>
            <td align="center">2</td>
            <td>Tadrib Lughowi</td>
            <td align="center">65</td>
            <td align="center"><strong><?php echo $siswa->tadrib_lughowi ?></strong></td>
            <td align="center"><?php echo terbilang($siswa->tadrib_lughowi) ?></td>
            <td align="center">
                <?php if ($siswa->tadrib_lughowi < 65): ?>
                    Belum Tuntas
                <?php elseif($siswa->tadrib_lughowi == 65): ?>
                    Tuntas
                <?php else: ?>
                    Terlampaui
                <?php endif ?>
            </td>
        </tr>
        <?php endif ?>
        
        <?php if ($siswa->id_kelas == 'ixa' or $siswa->id_kelas == 'ixb' or $siswa->id_kelas == 'ixc'): ?>
            <tr>
                <td align="center">2</td>
                <td>Tadrib Lughowi</td>
                <td align="center">60</td>
                <td align="center"><strong><?php echo $siswa->tadrib_lughowi ?></strong></td>
                <td align="center"><?php echo terbilang($siswa->tadrib_lughowi) ?></td>
                <td align="center">
                    <?php if ($siswa->tadrib_lughowi < 60): ?>
                        Belum Tuntas
                    <?php elseif($siswa->tadrib_lughowi == 60): ?>
                        Tuntas
                    <?php else: ?>
                        Terlampaui
                    <?php endif ?>
                </td>
            </tr>
                    
        <?php endif ?>

        <!-- TAHFIDZ -->
        <?php if ($siswa->id_kelas == 'viia' or $siswa->id_kelas == 'viiia' or $siswa->id_kelas == 'ixa'): ?>
            <tr>
                <td align="center">3</td>
                <td>Tahfidz</td>
                <td align="center">65</td>
                <td align="center"><b><?php echo $siswa->tahfidz ?></b></td>
                <td align="center"><?php echo terbilang($siswa->tahfidz) ?></td>
                <td align="center">
                    <?php if ($siswa->tahfidz < 65): ?>
                        Belum Tuntas
                    <?php elseif($siswa->tahfidz == 65): ?>
                        Tuntas
                    <?php else: ?>
                        Terlampaui
                    <?php endif ?>
                </td>
            </tr>
        <?php endif ?>

        <!-- FIQIH -->
        <?php if ($siswa->id_kelas == 'viib' or $siswa->id_kelas == 'viic' or $siswa->id_kelas == 'viiib' or $siswa->id_kelas == 'viiic' or $siswa->id_kelas == 'ixb' or $siswa->id_kelas == 'ixc'): ?>
            <tr>
                <td align="center">3</td>
                <td>Fiqih</td>
                <td align="center">65</td>
                <td align="center"><b><?php echo $siswa->fiqih ?></b></td>
                <td align="center"><?php echo terbilang($siswa->fiqih) ?></td>
                <td align="center">
                    <?php if ($siswa->fiqih < 65): ?>
                        Belum Tuntas
                    <?php elseif($siswa->fiqih == 65): ?>
                        Tuntas
                    <?php else: ?>
                        Terlampaui
                    <?php endif ?>
                </td>
            </tr>    
        <?php endif ?>
        

        <?php if ($siswa->id_kelas == 'viib' or $siswa->id_kelas == 'viic' or $siswa->id_kelas == 'viiib' or $siswa->id_kelas == 'viiic'): ?>
             <!-- TAJWID -->
            <tr>
                <td align="center">4</td>
                <td>Tajwid dan Tahsin</td>
                <td align="center">60</td>
                <td align="center"><b><?php echo $siswa->tajwid ?></b></td>
                <td align="center"><?php echo terbilang($siswa->tajwid) ?></td>
                <td align="center">
                    <?php if ($siswa->tajwid < 60): ?>
                        Belum Tuntas
                    <?php elseif($siswa->tajwid == 60): ?>
                        Tuntas
                    <?php else: ?>
                        Terlampaui
                    <?php endif ?>
                </td>
            </tr>

            <!-- DOA DZIKIR -->
            <tr>
                <td align="center">5</td>
                <td>Do'a dan Dzikir</td>
                <td align="center">65</td>
                <td align="center"><b><?php echo $siswa->doa_dzikir ?></b></td>
                <td align="center"><?php echo terbilang($siswa->doa_dzikir) ?></td>
                <td align="center">
                    <?php if ($siswa->doa_dzikir < 65): ?>
                        Belum Tuntas
                    <?php elseif($siswa->doa_dzikir == 65): ?>
                        Tuntas
                    <?php else: ?>
                        Terlampaui
                    <?php endif ?>
                </td>
            </tr>
        <?php endif ?>

        <?php if ($siswa->id_kelas == 'ixb' or $siswa->id_kelas == 'ixc'): ?>
             <!-- TAJWID -->
            <tr>
                <td align="center">4</td>
                <td>Nahwu</td>
                <td align="center">65</td>
                <td align="center"><b><?php echo $siswa->nahwu ?></b></td>
                <td align="center"><?php echo terbilang($siswa->nahwu) ?></td>
                <td align="center">
                    <?php if ($siswa->nahwu < 65): ?>
                        Belum Tuntas
                    <?php elseif($siswa->nahwu == 65): ?>
                        Tuntas
                    <?php else: ?>
                        Terlampaui
                    <?php endif ?>
                </td>
            </tr>

            <!-- DOA DZIKIR -->
            <tr>
                <td align="center">5</td>
                <td>Shorof</td>
                <td align="center">65</td>
                <td align="center"><b><?php echo $siswa->shorof ?></b></td>
                <td align="center"><?php echo terbilang($siswa->shorof) ?></td>
                <td align="center">
                    <?php if ($siswa->shorof < 65): ?>
                        Belum Tuntas
                    <?php elseif($siswa->shorof == 65): ?>
                        Tuntas
                    <?php else: ?>
                        Terlampaui
                    <?php endif ?>
                </td>
            </tr>
        <?php endif ?>
       

        <!-- KHOT IMLA -->
        <tr>
            <td align="center">
                <?php if ($siswa->id_kelas == 'viia' or $siswa->id_kelas == 'viiia' or $siswa->id_kelas == 'ixa'): ?>
                    4
                <?php endif ?>
                <?php if ($siswa->id_kelas == 'viib' or $siswa->id_kelas == 'viic' or $siswa->id_kelas == 'viiib' or $siswa->id_kelas == 'viiic' or $siswa->id_kelas == 'ixb' or $siswa->id_kelas == 'ixc'): ?>
                    6
                <?php endif ?>
            </td>
            <td>Khot dan Imla'</td>
            <td align="center">65</td>
            <td align="center"><b><?php echo $siswa->khot ?></b></td>
            <td align="center"><?php echo terbilang($siswa->khot) ?></td>
            <td align="center">
                <?php if ($siswa->khot < 65): ?>
                    Belum Tuntas
                <?php elseif($siswa->khot == 65): ?>
                    Tuntas
                <?php else: ?>
                    Terlampaui
                <?php endif ?>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">Jumlah Nilai</td>
            <td align="center"><b><?php echo $siswa->jum_nilai ?></b></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="3" align="center">Rata-rata</td>
            <td align="center"><b><?php echo $siswa->rata ?></b></td>
            <td></td>
            <td></td>
        </tr>
            
</table>
<br>

<table class="table" width="100%">
    <tr>
        <td width="30%" valign="top">
            
            <table class="table" border=1 cellpadding="3" cellspacing=0 width="100%" style="border: black">
            <tr>
                <td align="center">Ketidakhadiran</td>
                <td align="center">Hari</td>
            </tr>
            <tr>
                <td>1. Sakit</td>
                <td align="center">
                    <?php 
                    if ($siswa->sakit == 0) { echo '-'; }
                    else{ echo $siswa->sakit; }
                    ?>
                </td>
            </tr>
            <tr>
                <td>2. Izin</td>
                <td align="center">
                    <?php 
                    if ($siswa->izin == 0) { echo '-'; }
                    else{ echo $siswa->izin; }
                    ?>
                </td>
            </tr>
            <tr>
                <td>3. Alfa</td>
                <td align="center">
                <?php 
                    if ($siswa->alfa == 0) { echo '-'; }
                    else{ echo $siswa->alfa; }
                    ?>
                </td>
            </tr>
        </table>

        </td>

<!-- ---------------- -->
        <td width="10%">
            
            <table class="table" width="100%">
            <tr>
                <td></td>
            </tr>
        </table>

        </td>
<!-- ---------------- -->

        <td width="20%">
            <td>
            
            <table class="table" border=1 cellpadding="3" cellspacing=0 width="100%" style="border: black">
            <tr>
                <td align="center" colspan="2">Kepribadian</td>
            </tr>
            <tr>
                <td>1. Akhlakul Karimah</td>
                <td align="center"><?php echo $siswa->akhlak ?></td>
            </tr>
            <tr>
                <td>2. Kerajinan</td>
                <td align="center"><?php echo $siswa->kerajinan ?></td>
            </tr>
            <tr>
                <td>3. Kerapian</td>
                <td align="center"><?php echo $siswa->kerapian ?></td>
            </tr>
            <tr>
                <td>4. Poin Pelanggaran</td>
                <td align="center"><?php echo $siswa->poin ?></td>
            </tr>
        </table>
        
        
        </td>
    </tr>
</table>
<br>
<!-- catatan wali kelas -->
<table class="table" width="100%" border="1" cellspacing="0" cellpadding="3" style="border: black">
    <tr>
        <td height="100px" valign="top">
            <b>Catatan Wali Kelas:</b>
            <p style="font-family: bookmanoldstyle; font-style: italic; text-align: center;"><?php echo $siswa->catatan ?></p>
        </td>
    </tr>
</table><br>
<table class="table" width="100%" border="1" cellspacing="0" cellpadding="3" style="border: black">
    <tr>
        <td height="100px" valign="top">
            <b>Catatan Orangtua/wali Murid:</b>
            
        </td>
    </tr>
</table>

<table class="table" width="100%">
    <tr>
    <td width="65%"></td>
    <td>
        <table>
            <tr>
                <td>Diberikan di</td>
                <td>: Bagik Nyaka</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>: 19 Desember 2020</td>
            </tr>
        </table>
    </td>
    </tr>
</table>
<br>
<table class="table" width="100%">
    <tr>
        <td align="center" width="33%" valign="top">
            Orangtua/wali <br><br><br><br>
            <u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u>
        </td>
        <td align="center" width="33%" valign="top">
            Kepala Sekolah <br><br><br><br>
            <u><b>AHMAD YANI, S.Pd</b></u><br>
            NIP. 197409241999031002
        </td>
        <td align="center" width="33%" valign="top">
            Wali Kelas <br><br><br><br>
            <b>
                <?php if ($siswa->id_kelas == 'viia'): ?>
                    YAHYA, S.Pd.I
                <?php elseif($siswa->id_kelas == 'viib'): ?>
                    MOH. PATIX ARIANGGA, S.Pd
                <?php elseif($siswa->id_kelas == 'viic'): ?>
                    YAYAN PUTRA, S.Pd
                <?php elseif($siswa->id_kelas == 'viiia'): ?>
                    ULIAN TUHIBBI, S.Pd
                <?php elseif($siswa->id_kelas == 'viiib'): ?>
                    AHZAR, S.Pd.I
                <?php elseif($siswa->id_kelas == 'viiic'): ?>
                    SAUFIAN SAURI, S.Pd.I
                <?php elseif($siswa->id_kelas == 'ixa'): ?>
                    HERJAN PANDI K., S.Pd
                <?php elseif($siswa->id_kelas == 'ixb'): ?>
                    SUHENDRI, SH
                <?php elseif($siswa->id_kelas == 'ixc'): ?>
                    L. MUHAMMAD RISPAN S. S., S.Pd
                <?php endif ?>
                    
                </b>
        </td>
    </tr>
</table>

</div>
  
<!-- menampilkan jendela print -->
<script type="text/javascript">
  window.print();
</script>


<style type="text/css">
/* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "arial";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 210mm;
        min-height: 330mm;
        padding: 1cm;
        margin: 1mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 257mm;
        outline: 2cm #FFEAEA solid;
    }
    
    @page {
        size: F4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 330mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }

        div {
     width:200px;
     height: 50px;
   }
   .garis_tepi1 {
     border: 2px solid red;
   }
   .garis_tepi2 {
     border: 10px dotted blue;
   }
    }
        
</style>
    
</body>
</html>
