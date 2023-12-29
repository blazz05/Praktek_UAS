<?php 
    class Buku{
        private $dbh;
        public function __construct($dbh){
            $this->dbh = $dbh;
        }
        
        public function getAllBuku(){
            $sql = "SELECT * FROM buku";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute();
            $rs = $ps->fetchAll();
            return $rs;
        }

        public function getAllJenis(){
            $sql="SELECT * FROM jenis";
            // prepare statement PDO
            $rs = $this->dbh->query($sql);
            return $rs;
        }

        public function simpan($data){
            $sql = "INSERT INTO buku(judul,pengarang,penerbit,thn_terbit,idjenis,foto,no_buku)
                    VALUES (?,?,?,?,?,?,?)";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($data);
        }

        public function getBuku($id){
            $sql = "SELECT buku.*, jenis.nama AS kategori FROM buku INNER JOIN jenis ON jenis.id = buku.idjenis WHERE buku.id = ?";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute([$id]);
            $rs = $ps->fetch();
            return $rs;
        }

        public function ubah($data){
            $sql = "UPDATE buku SET judul=?, pengarang=?, penerbit=?, thn_terbit=?, idjenis=?, foto=?, no_buku=? WHERE id=?";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($data);
        }

        public function hapus($id){
            $sql = "DELETE FROM buku WHERE id=?";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($id);
        }

    }
?>