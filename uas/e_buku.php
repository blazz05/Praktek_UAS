<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Buku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Buku</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card-header">
                <a class="btn mt-2" style="background-color:#17a2b8; color:#ffffff" href="index.php"><i class="fa fa-arrow-left nav-icon mr-2"></i>Back</a>
              </div>
              <div class="card-header">
                <h3 class="card-title">Edit Data Buku </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php 
                    require_once 'controllers/class_buku.php';
                    // ciptakan object dari class Buku
                    $obj = new Buku($dbh);
                    // panggil method tampilkan data buku
                    $rs = $obj->getAllJenis();
                    // tangkap request id, di url
                    $id = $_REQUEST['id'];
                    $data_edit = $obj->getBuku($id);
                ?>
                <form class="container form mt-3" action="controllers/BukuController.php" method="POST">
                        <div class="form-group row">
                            <label for="no_buku"  class="col-3 col-form-label">Nomor Buku</label> 
                            <div class="col-8">
                            <input id="no_buku" name="no_buku" value="<?= $data_edit->no_buku; ?>" type="text" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_buku"  class="col-3 col-form-label">no_buku Buku</label> 
                            <div class="col-8">
                            <input id="judul" name="judul" value="<?= $data_edit->judul; ?>" type="text" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pengarang" class="col-3 col-form-label">Pengarang</label> 
                            <div class="col-8">
                            <input id="pengarang" name="pengarang" value="<?= $data_edit->pengarang; ?>" type="text" class="form-control" required="required">
                            </div>
                        </div>
                  
                        <div class="form-group row">
                            <label for="penerbit" class="col-3 col-form-label">Penerbit</label> 
                            <div class="col-8">
                            <input id="penerbit" name="penerbit" value="<?= $data_edit->penerbit; ?>" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="thn_terbit" class="col-3 col-form-label">Tahun Terbit</label> 
                            <div class="col-8">
                            <input id="thn_terbit" name="thn_terbit" value="<?= $data_edit->thn_terbit; ?>" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis" class="col-3 col-form-label">Jenis Buku</label> 
                            <div class="col-8">
                            <select id="jenis" name="jenis" class="custom-select" required="required">
                                <option value="">-- Pilih Jenis --</option>
                                <?php 
                                    foreach($rs as $j){
                                    // edit jenis
                                    $sel = ($data_edit->idjenis == $j->id) ? "selected" : "";
                                ?> 
                                <option value="<?= $j->id ?>" <?= $sel ?> ><?= $j->nama ?></option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="foto" class="col-3 col-form-label">Foto</label> 
                            <div class="col-8">
                            <input id="foto" name="foto" value="<?= $data_edit->foto; ?>" type="text" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-3 col-8">
                            <button name="submit" type="submit" value="ubah" class="btn btn-primary">Update</button>
                            <input type="hidden" name="idx" value="<?= $id ?>" />
                        </div>
                        </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- 834 - 1746 -->