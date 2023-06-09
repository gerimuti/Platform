<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Form Pendaftaran</title>
</head>

<body>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .container p {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .container label {
            flex: 0 0 100px;
            /* Adjust the width as needed */
            margin-right: 1px;
            /* Adjust the spacing between label and input */
        }
    </style>
    <div class="container">
        <h1>PENGHAPUSAN ASISTEN PRAKTIKUM</h1>
        <form action="/asisten/delete" method="post">
            <?= csrf_field() ?>
            <p>
                <label for="name">NIM</label>
                <input type="text" name="nim" />
            </p>
            <input type="submit" value="Delete" />
        </form>
    </div>
</body>

</html>