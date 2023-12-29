<?php 
    include_once 'header.php';
    include_once 'sidebar.php';
?>
<?php 
    require_once 'models/dbkoneksi.php';
    include_once 'd_peminjaman.php';
     //tangkap request menu di url (IndexPeminjaman.php?hal=.....)
     $hal = $_REQUEST['hal'];
     //jika ada request dari menu di url tampilkan hal sesuai request
     if(!empty($hal)){
         include_once $hal.'.php';
     }
     else{//jika tidak ada request dari menu di url tampilkan hal peminjaman.php
         include_once 'peminjaman.php';
     }
?>
<?php 
    include_once 'footer.php';
?>
