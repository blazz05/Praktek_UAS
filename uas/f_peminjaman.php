<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Peminjaman Buku</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- /.row -->
        <!-- Main row -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tambah Data Peminjaman Buku</h3>
                <br>
                <a class="btn mt-2" style="background-color:#17a2b8; color:#ffffff" href="IndexPeminjaman.php"><i class="fa fa-arrow-left nav-icon mr-2"></i>Back</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php 
                        require_once 'controllers/class_peminjaman.php';
                        // ciptakan object dari class Peminjaman
                        $ar_gender = ['Laki-Laki','Perempuan'];
                        $obj = new Peminjaman($dbh);
                        // panggil method tampilkan data Peminjaman
                        $rs = $obj->getAllBuku();
                ?>
                <form method="POST" action="controllers/PeminjamanController.php">
                <div class="form-group row">
                    <label for="nama_peminjam" class="col-4 col-form-label">Nama</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-bars"></i>
                            </div>
                            </div> 
                            <input id="nama_peminjam" name="nama_peminjam" type="text" class="form-control">
                            </div>
                            </div>
                    </div>
                    <div class="form-group row">
                    <label for="umur" class="col-4 col-form-label">Umur</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-bars"></i>
                            </div>
                            </div> 
                            <input id="umur" name="umur" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Gender</label> 
                        <div class="col-8">
                        <?php 
                            $no = 0;
                            foreach($ar_gender as $gender){
                        ?>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="gender" id="gender<?= $no ?>" type="radio" class="custom-control-input" value="<?= $gender ?>" required="required"> 
                                <label for="gender<?= $no ?>" class="custom-control-label"><?= $gender ?></label>
                            </div>
                        <?php 
                            $no++;
                            }
                        ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_buku" class="col-4 col-form-label">Nomor Buku</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-american-sign-language-interpreting"></i>
                            </div>
                            </div> 
                            <input id="no_buku" name="no_buku" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="buku" class="col-4 col-form-label">Judul Buku</label> 
                        <div class="col-8">
                        <select id="buku" name="buku" class="custom-select">
                        <option value="">-- Pilih buku --</option>
                            <?php 
                            foreach($rs as $j){
                            ?>
                            <option value="<?= $j->id; ?>"><?= $j->judul; ?></option>
                            <?php } ?>
                        </select>
                        </div>
                    </div>

                    <div class="form-group row">
                    <label for="tgl_pengambilan" class="col-4 col-form-label">Tanggal Pengambilan</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-bars"></i>
                            </div>
                            </div> 
                            <input id="tgl_pengambilan" name="tgl_pengambilan" type="date" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="tgl_pengembalian" class="col-4 col-form-label">Tanggal Pengembalian</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-bars"></i>
                            </div>
                            </div> 
                            <input id="tgl_pengembalian" name="tgl_pengembalian" type="date" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="keterangan" class="col-4 col-form-label">Keterangan</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-bars"></i>
                            </div>
                            </div> 
                            <input id="keterangan" name="keterangan" type="text" class="form-control">
                            </div>
                            </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" value="simpan" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>             
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->