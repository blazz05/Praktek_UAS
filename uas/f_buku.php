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
              <li class="breadcrumb-item active">Tambah Buku</li>
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
                <h3 class="card-title">Tambah Data Buku</h3>
                <br>
                <a class="btn mt-2" style="background-color:#17a2b8; color:#ffffff" href="index.php"><i class="fa fa-arrow-left nav-icon mr-2"></i>Back</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php 
                        require_once 'controllers/class_buku.php';
                        // ciptakan object dari class Buku
                        $obj = new Buku($dbh);
                        // panggil method tampilkan data buku
                        $rs = $obj->getAllJenis();
                
                ?>
                <form method="POST" action="controllers/BukuController.php">
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
                        <label for="judul" class="col-4 col-form-label">Judul Buku</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-american-sign-language-interpreting"></i>
                            </div>
                            </div> 
                            <input id="judul" name="judul" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pengarang" class="col-4 col-form-label">Pengarang</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-archive"></i>
                            </div>
                            </div> 
                            <input id="pengarang" name="pengarang" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="penerbit" class="col-4 col-form-label">Penerbit</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-bars"></i>
                            </div>
                            </div> 
                            <input id="penerbit" name="penerbit" type="text" class="form-control">
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="thn_terbit" class="col-4 col-form-label">Tahun Terbit</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-bars"></i>
                            </div>
                            </div> 
                            <input id="thn_terbit" name="thn_terbit" type="date" class="form-control">
                            </div>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-4 col-form-label">Jenis Buku</label> 
                        <div class="col-8">
                        <select id="jenis" name="jenis" class="custom-select">
                        <option value="">-- Pilih Jenis --</option>
                            <?php 
                            foreach($rs as $j){
                            ?>
                            <option value="<?= $j->id; ?>"><?= $j->nama; ?></option>
                            <?php } ?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-4 col-form-label">Foto</label> 
                        <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-image"></i>
                            </div>
                            </div> 
                            <input id="foto" name="foto" type="text" class="form-control">
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