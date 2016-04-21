<?php
    session_start();
?>
<!DOCTYPE>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="form_login.php" method="post">
            <input type="text" name="nim_mhs" placeholder="Masukkan NIM" size="30" required="required"><br>
            <input type="password" name="pass_mhs" placeholder="Masukkan Password" required="required"><br>
            <button type="submit">Login</button><br>
        </form>
        
        <?php
            if(isset($_POST['nim_mhs'])){
                
                require_once 'koneksi.php';
                
                $nim = $_POST['nim_mhs'];
                $pass = md5($_POST['pass_mhs']);
                
                $sql = "SELECT * FROM pengguna WHERE npm='$nim' AND password='$pass' LIMIT 1";
                
                $hasil = $db->query($sql);
                
                if($hasil->num_rows > 0){
                    $_SESSION['npm'] = $nim;
                    header("location:Dashboard.php");
                }else{
                    echo 'Cek pass / nim';
                }
            }
        ?>
        
    </body>
</html>