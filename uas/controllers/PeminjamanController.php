<?php 
    require_once '../models/dbkoneksi.php';
    require_once 'class_peminjaman.php';

    // tangkap request element form
    $no_buku = $_POST['no_buku'];
    $nama_peminjam = $_POST['nama_peminjam'];
    $umur = $_POST['umur'];
    $gender = $_POST['gender'];
    $tgl_pengambilan = $_POST['tgl_pengambilan'];
    $tgl_pengembalian = $_POST['tgl_pengembalian'];
    $keterangan = $_POST['keterangan'];
    $idbuku = $_POST['buku'];
    $tombol = $_POST['submit'];

    // Menyimpan data diatas ke sebuah array
    $data = [
        $no_buku,      // ? 1
        $nama_peminjam,      // ? 2
        $umur,       // ? 3
        $gender,     // ? 4
        $tgl_pengambilan,      // ? 5
        $tgl_pengembalian,  // 6
        $keterangan,    // ? 7
        $idbuku     // ? 8
    ];

    // proses
    $obj = new Peminjaman($dbh);
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
        header('Location:http://localhost/Latihan_PHP/uas/IndexPeminjaman.php?hal=DataPeminjaman');
            break;
    }

    // Landing Page
    header('Location://localhost/Latihan_PHP/uas/IndexPeminjaman.php');

?>