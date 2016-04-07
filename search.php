
<?php
require_once 'koneksi.php';

$que = $_GET['query'];
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
        $sql = "SELECT npm, nama, tl, email FROM pengguna WHERE npm LIKE '%$que%' OR nama LIKE '%$que%' OR email LIKE '%$que%'";
        $hasil = $db->query($sql);

        if ($hasil->num_rows > 0) {
            $no = 1;
            while (($baris = $hasil->fetch_assoc())) {
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
        } else {
            echo "No Data Available. Isi dulu di <a href='form_daftar.php' target='_blank'>Form Pendaftaran</a>";
        }
        ?>
    </tbody>
</table>