<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>membuat Form Login Multi User</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<div class='alert'>Username dan Pasword tidak sesuai</div>";
        }
    }
    ?>
    <div class="kotak_login">
        <p class="tulisan_login">Silahkan Login</p>

        <form action="cek_login.php" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="masukkan username" required="required">
            <label>Password</label>
            <input type="text" name="password" class="form_login" placeholder="masukkan password" required="required">

            <input type="submit" class="tombol_login" value="login">
            <br />
            <br />
            <center>

            </center>
        </form>
    </div>
</body>

</html>