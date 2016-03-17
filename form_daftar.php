<!DOCTYPE>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="form_daftar.php" method="post">
            <input type="text" name="nama_mhs" placeholder="Masukkan Nama" size="30" required="required"><br>
            <input type="text" name="nim_mhs" placeholder="Masukkan NIM" size="30" required="required"><br>
            <input type="date" name="tgl_mhs" placeholder="Masukkan Tanggal Lahir" size="30" required="required"><br>
            <input type="email" name="email_mhs" placeholder="Masukkan Email" required="required"><br>
            <input type="password" name="pass_mhs" placeholder="Masukkan Password" required="required"><br>
            <button type="submit">Kirim Data</button><br>
        </form>
        
        <?php
            if(isset($_POST['nim_mhs'])){
                
                require_once 'koneksi.php';
                
                $nama = $_POST['nama_mhs'];
                $nim = $_POST['nim_mhs'];
                $tl = $_POST['tgl_mhs'];
                $email = $_POST['email_mhs'];
                $pass = md5($_POST['pass_mhs']);
                
                $sql = "INSERT INTO pengguna VALUES('$nim', '$nama', '$tl', '$pass', '$email')";
                
                if( $db->query($sql) ){
                    echo 'Data berhasil disimpan';
                }else{
                    echo 'Error : ' . $db->error;
                }
            }
        ?>
    </body>
</html>

