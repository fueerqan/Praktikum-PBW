<!DOCTYPE>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <?php
            require_once 'koneksi.php';
            
            $npm = $_GET['npm'];
            
            $sql = "SELECT nama, npm, tl, email FROM pengguna WHERE npm='$npm'";
            $hasil = $db->query($sql);
            $baris = $hasil->fetch_assoc();
        ?>
        
        <form action="form_edit.php" method="post">
            <input value="<?php echo $baris['nama']; ?>" type="text" name="nama_mhs" placeholder="Masukkan Nama" size="30" required="required"><br>
            <input value="<?php echo $baris['npm']; ?>" type="text" name="nim_mhs" placeholder="Masukkan NIM" size="30" required="required"><br>
            <input value="<?php echo $baris['tl']; ?>" type="date" name="tgl_mhs" placeholder="Masukkan Tanggal Lahir" size="30" required="required"><br>
            <input value="<?php echo $baris['email']; ?>" type="email" name="email_mhs" placeholder="Masukkan Email" required="required"><br>
            <button type="submit">Edit Data</button><br>
        </form>
        
        <?php
            if(isset($_POST['nim_mhs'])){
                
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

