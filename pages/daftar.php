<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login PAAS</title>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div class="container">
          <h1>Daftar</h1>
            <form method="POST" action="../proses.php">

                <!-- <input type="hidden" name="tujuan" value="DAFTAR"> -->

                <label>Username</label>
                <br>
                <input name="username" type="text">
                <br>
                <label>Email</label>
                <br>
                <input name="email" type="text">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password">
                <br>
                <button type="submit">Daftar</button>
                <p> Sudah punya akun?
                  <a href="../index.php">Login di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>