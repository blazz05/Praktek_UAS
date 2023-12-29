<?php 
    require_once '../models/dbkoneksi.php';
    require_once 'class_buku.php';

    // tangkap request element form
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $thn_terbit = $_POST['thn_terbit'];
    $idjenis = $_POST['jenis'];
    $foto = $_POST['foto'];
    $no_buku = $_POST['no_buku'];
    $tombol = $_POST['submit'];

    // Menyimpan data diatas ke sebuah array
    $data = [
        $judul,      // ? 1
        $pengarang,   // ? 2
        $penerbit,     // ? 3
        $thn_terbit,      // ? 4
        $idjenis,      // 5
        $foto,      // ? 7
        $no_buku    // 8
    ];

    // proses
    $obj = new Buku($dbh);
    // $obj->simpan($data);

     //proses edit & hapus
     switch ($tombol) {
        case 'simpan';
            $obj->simpan($data);
            break;
        case 'ubah';
            $data[] = $_POST['idx']; //tangkap hidden field u/ ? ke-8
            $obj->ubah($data);
            break;
        case 'hapus';
        $id[] = $_POST['idx']; //tangkap ke-1 where id=?
        $obj->hapus($id);
        break;  
        default://tombol batal
        header('Location:http://localhost/Latihan_PHP/uas/index.php?hal=DataBuku');
            break;
    }

    // Landing Page
    header('Location://localhost/Latihan_PHP/uas/index.php');

?>