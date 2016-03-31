<html>
    <head>
        <title>List Data</title>
        
        <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css" />
    </head>
    <body>
        <?php
            require_once 'koneksi.php';
        ?>
        
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Npm</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT npm, nama, tl, email FROM pengguna";
                    $hasil = $db->query($sql);
                    
                    if($hasil->num_rows > 0){
                        $no = 1;
                        while( ($baris = $hasil->fetch_assoc() ) ){
                ?>
                
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $baris['npm']; ?></td>
                    <td><?php echo $baris['nama']; ?></td>
                    <td><?php echo $baris['tl']; ?></td>
                    <td><?php echo $baris['email']; ?></td>
                    <td><a class="btn btn-primary" href='form_edit.php?npm=<?php echo $baris['npm']; ?>'>Edit</a> <a class="btn btn-danger" href='javascript:tampilinModal("<?php echo $baris['npm']; ?>");'>Hapus</a></td>
                </tr>
                
                <?php
                            $no++;
                        }
                    }else{
                        echo "No Data Available. Isi dulu di <a href='form_daftar.php' target='_blank'>Form Pendaftaran</a>";
                    }
                ?>
            </tbody>
        </table>
        
        <div class="modal fade" id="pemberitahuan" tabindex="-1" role="modal" aria-labelledby="label">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="label">Pemberitahuan</h4>
                    </div>
                    <div class="modal-body">
                        Apakah yakin ingin menghapus data?<br>
                        <a href="" class="btn btn-success">Ya</a>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
        <script>
            function tampilinModal(id){
                $("#pemberitahuan").modal("show");
            }
        </script>
    </body>
</html>