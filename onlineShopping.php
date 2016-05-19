<?php
session_start();
?>

<html>
    <head>
        <title>Online Shopping</title>
    </head>
    <body>
        <form action="onlineShopping.php" method="post">
            <input type="text" name="nama" required="required" placeholder="Nama Barang"/>
            <br>
            <input type="number" name="ukuran" required="required" placeholder="Ukuran" />
            <br>
            <input type="number" name="harga" required="required" placeholder="Harga" />
            <br>
            <input type="number" name="qty" required="required" placeholder="Jumlah" />
            <br>
            <input type="submit" value="Tambah ke Keranjang belanja" name="submit" />
        </form>

        <?php
        if (isset($_POST['submit'])) {
            if (!isset($_SESSION['pesanan'])) {
                $_SESSION['pesanan'] = array();
            }

            $pesanan['nama'] = $_POST['nama'];
            $pesanan['ukuran'] = $_POST['ukuran'];
            $pesanan['harga'] = $_POST['harga'];
            $pesanan['jumlah'] = $_POST['qty'];

            $_SESSION['pesanan'][] = $pesanan;
        }
        ?>

        <?php
        if (isset($_SESSION['pesanan'])) {
            ?>
            <table border="1">
                <thead>
                    <tr>
                        <th>nama</th>
                        <th>ukuran</th>
                        <th>harga</th>
                        <th>jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($_SESSION['pesanan'] as $value) {
                        ?>
                        <tr>
                            <td><?php echo $value['nama']; ?></td>
                            <td><?php echo $value['ukuran']; ?></td>
                            <td><?php echo $value['harga']; ?></td>
                            <td><?php echo $value['jumlah']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
        }
        ?>


    </body>
</html>
