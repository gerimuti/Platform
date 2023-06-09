<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <form action="/login/check" method="post">
        <?= csrf_field() ?>
        <label for="usr"> User :</label>
        <input type="text" name="usr" class="form-control-sm"><br>
        <label for="pwd">Password: </label>
        <input type="password" name="pwd" class="form-control-sm"><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>

</html>