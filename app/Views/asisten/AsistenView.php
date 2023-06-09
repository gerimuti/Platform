<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1 solid #dddddd;
            text-align: left;
            padding: 8px;

        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <div class="container-fluid p-5 bg-primary text-white">
        <H3>PENDAFTARAN ASISTEN PRAKTIKUM</H3>
        <p>Asisten Praktikum mempunyai peran yang sangat penting dalam kegiatan Praktikum di kelas.
            Keberadaannya sangat dibutuhkan oleh dosen pengampu untuk membantu dosen dalam mendampingi
            peserta praktikum dalam melaksanakan percobaan-percobaan yang telah disiapkan oleh dosen
            pengampu. Mahasiswa-mahasiswa sangat didorong untuk dapat menjadi seorang asisten praktikum.
            Selain memberikan pengalaman bekerja bersama dosen, menjadi Asisten Praktikum dapat mengasah
            kepedulian terhadap orang lain yang membutuhan. Jika anda terpanggil untuk menjadi Asisten
            Praktikum, silahkan daftarkan diri anda pada form di bawah ini...</p>
    </div>
    <div class="container mt-3">

        <body>
            <table>
                <tr>
                    <td>NIM</td>
                    <td>NAMA</td>
                    <td>KELAS PRAKTIKUM</td>
                    <td>IPK</td>
                </tr>
                <tbody>
                    <?php foreach ($List as $l) : ?>
                        <tr>
                            <td>
                                <?= $l['NIM']; ?>
                            </td>
                            <td>
                                <?= $l['NAMA']; ?>
                            </td>
                            <td>
                                <?= $l['PRAKTIKUM']; ?>
                            </td>
                            <td>
                                <?= $l['IPK']; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                
                </tbody>
        </body>

</html>