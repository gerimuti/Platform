<!DOCTYPE html>
<html>

<head>
    <title>Tampilan KTP</title>
</head>

<body>
    <?php
    // Data KTP
    $nama = "Mas Ellon";
    $nik = "1234567890";
    $tempat_lahir = "Bekasi";
    $tanggal_lahir = "30 Juni 2003";
    $jenis_kelamin = "Laki-laki";
    $alamat = "Jl. Mancasan Condongcatur";
    $rt_rw = "001/011";
    $kelurahan = "Mancasan";
    $kecamatan = "Depok";
    $agama = "Katolik";
    $kewarganegaraan = "Warga Negara Indonesia";
    ?>

    <div class="container">
        <h2>KARTU TANDA PENDUDUK</h2>
        <div class="row">
            <div class="col-sm-8">
                <span class="label">Nama</span>:
                <?php echo $nama; ?><br>
                <span class="label">NIK</span>:
                <?php echo $nik; ?><br>
                <span class="label">Tempat/Tgl Lahir</span>:
                <?php echo $tempat_lahir . ", " . $tanggal_lahir; ?><br>
                <span class="label">Jenis Kelamin</span>:
                <?php echo $jenis_kelamin; ?><br>
                <span class="label">Alamat</span>:
                <?php echo $alamat; ?><br>
                <span class="label">RT/RW</span>:
                <?php echo $rt_rw; ?><br>
                <span class="label">Kelurahan</span>:
                <?php echo $kelurahan; ?><br>
                <span class="label">Kecamatan</span>:
                <?php echo $kecamatan; ?><br>
                <span class="label">Agama</span>:
                <?php echo $agama; ?><br>
            </div>
            <div class="col-sm-1">
                <img src="https://globalnews.ca/wp-content/uploads/2022/05/elon-musk-2.jpg?quality=85&amp;strip=all&amp;w=720&amp;h=379&amp;crop=1" alt="Foto KTP" width="200px" border="3">
            </div>
        </div>