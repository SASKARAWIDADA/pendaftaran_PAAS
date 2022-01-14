<?php include "pages/login.php"; ?>
<?php include "koneksi.php"; ?>
<?php 
    $login=mysqli_query(
        $conn, "SELECT * FROM tb_pendaftaran WHERE username='$username' and password='$password'");
    $data=mysqli_num_rows($login);

    if(isset($_POST["tujuan"])){

        $tujuan = $_POST["tujuan"];
        
        if($tujuan == "LOGIN"){
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            /* logika sederhana admin */
            if($login){
                header("location:pages/home.php?sukses=$username");
            }else{
                echo "<h2>Username atau Password Salah!</h2>";
            }
    
        }else{
            $username = $_POST["username"];
            $password = $_POST["password"];
            $email = $_POST["email"];
    
            echo "<h1>Anda sudah terdaftar sebagai ".$username."!</h1>";
            
        }
    }   
?>