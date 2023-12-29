<?php 
    class Peminjaman{
        private $dbh;
        public function __construct($dbh){
            $this->dbh = $dbh;
        }
        
        public function getAllPeminjaman(){
            $sql = "SELECT * FROM peminjaman";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute();
            $rs = $ps->fetchAll();
            return $rs;
        }

      
        public function getAllBuku(){
            $sql="SELECT * FROM buku";
            // prepare statement PDO
            $rs = $this->dbh->query($sql);
            return $rs;
        }

        public function simpan($data){
            $sql = "INSERT INTO peminjaman(no_buku,nama_peminjam,umur,gender,tgl_pengambilan,tgl_pengembalian,keterangan,idbuku)
                    VALUES (?,?,?,?,?,?,?,?)";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($data);
        }

        public function getPeminjaman($id){
            $sql = "SELECT peminjaman.*, buku.judul AS kategori FROM peminjaman INNER JOIN buku ON buku.id = peminjaman.idbuku WHERE peminjaman.id = ?";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute([$id]);
            $rs = $ps->fetch();
            return $rs;
        }

        public function ubah($data){
            $sql = "UPDATE peminjaman SET no_buku=?, nama_peminjam=?, umur=?, gender=?, tgl_pengambilan=?, tgl_pengembalian=?, keterangan=?, idbuku=? WHERE id=?";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($data);
        }

        public function hapus($id){
            $sql = "DELETE FROM peminjaman WHERE id=?";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($id);
        }

    }
?>