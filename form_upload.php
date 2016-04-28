<html>
    <head>
        <title>Upload File</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.min.css" />
    </head>
    <body>
        <h3><strong>Upload File</strong></h3>
        <br>
        <form action="form_upload.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    Pilih File : 
                    <input type="file" name="foto" class="form-control" />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <br>
                    <button type="submit" class="btn btn-primary btn-block" name="submit"><span class="fa fa-upload"></span> Upload</button>
                </div>
            </div>
        </form>
        <br>
        <?php
            if(isset($_POST['submit'])){
                
                $folder = "hasil/";
                $namaHasil = $folder . $_FILES['foto']['name'];
                $tipeFile = pathinfo($namaHasil, PATHINFO_EXTENSION);
                
                if(file_exists($namaHasil)){
                    echo "Upload gambar lain, itu udah ada";
                }else{
//                    batas = 5 MB
                    if($_FILES['foto']['size'] > 5000000){
                        echo "File terlalu besar. Cari lain atau edit dulu.";
                    }else{
                        if($tipeFile != 'png' && $tipeFile != 'jpg' && $tipeFile != 'jpeg' && $tipeFile != 'gif'){
                            echo "Pilih foto, jangan yang lain. Form upload foto kok upload lain.";
                        }else{
                            if(move_uploaded_file($_FILES['foto']['tmp_name'], $namaHasil)){
                                echo "<img class='img-rounded' src='$namaHasil' />";
                            }else{
                                echo "Upload gagal. Mungkin foto anda terlalu jelek.";
                            }
                        }
                    }
                }
            }
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
    </body>
</html>