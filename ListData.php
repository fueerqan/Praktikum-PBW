<html>
    <head>
        <title>List Data</title>
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
                    <td><a href='form_edit.php?npm=<?php echo $baris['npm']; ?>'><button>Edit</button></a></td>
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
    </body>
</html>