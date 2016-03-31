<?php

    $npm = $_GET['npm'];
    
    require_once 'koneksi.php';
    
    $sql = "DELETE FROM pengguna WHERE npm='$npm'";
    
    $db->query($sql);
    
?>

<script>
    alert("Data Dihapus");
</script>

<?php
    
    header("location:ListData.php");

?>

