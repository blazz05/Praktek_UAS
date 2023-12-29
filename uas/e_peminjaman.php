<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Peminjaman Buku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Peminjaman Buku</li>
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
                <a class="btn mt-2" style="background-color:#17a2b8; color:#ffffff" href="IndexPeminjaman.php"><i class="fa fa-arrow-left nav-icon mr-2"></i>Back</a>
              </div>
              <div class="card-header">
                <h3 class="card-title">Edit Data Peminjaman Buku </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <?php 
                    require_once 'controllers/class_peminjaman.php';
                    // ciptakan object dari class Buku
                    $ar_gender = ['Laki-Laki','Perempuan'];
                    $obj = new Peminjaman($dbh);
                     // panggil method tampilkan data buku
                     $rs = $obj->getAllBuku();
                    // tangkap request id, di url
                    $id = $_REQUEST['id'];
                    $data_edit = $obj->getPeminjaman($id);
                ?>
                <form class="container form mt-3" action="controllers/PeminjamanController.php" method="POST">
                        <div class="form-group row">
                            <label for="nama_peminjam" class="col-3 col-form-label">Nama</label> 
                            <div class="col-8">
                            <input id="nama_peminjam" name="nama_peminjam" value="<?= $data_edit->nama_peminjam; ?>" type="text" class="form-control" required="required">
                            </div>
                        </div>
                         
                        <div class="form-group row">
                            <label for="umur" class="col-3 col-form-label">Umur</label> 
                            <div class="col-8">
                            <input id="umur" name="umur" value="<?= $data_edit->umur; ?>" type="text" class="form-control" required="required">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-3">Gender</label> 
                            <div class="col-8">
                            <?php 
                                $no = 0;
                                foreach($ar_gender as $gender){
                                // edit gender
                                $cek = ($data_edit->gender == $gender) ? "checked" : "";
                             ?>
                                <div class="custom-control custom-radio custom-control-inline">
                                <input name="gender" id="gender_<?= $no ?>" type="radio" class="custom-control-input" value="<?= $gender ?>" <?= $cek ?> required="required"> 
                            <label for="gender_<?= $no ?>" class="custom-control-label"><?= $gender ?></label>
                                </div>
                            <?php 
                                $no++;
                                }
                            ?>
                            </div>
                              </div>
                        <div class="form-group row">
                            <label for="no_buku"  class="col-3 col-form-label">Nomor Buku</label> 
                            <div class="col-8">
                            <input id="no_buku" name="no_buku" value="<?= $data_edit->no_buku; ?>" type="text" required="required" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="buku" class="col-3 col-form-label">Judul Buku</label> 
                            <div class="col-8">
                            <select id="buku" name="buku" class="custom-select" required="required">
                                <option value="">-- Pilih buku --</option>
                                <?php 
                                    foreach($rs as $j){
                                    // edit buku
                                    $sel = ($data_edit->idbuku == $j->id) ? "selected" : "";
                                ?> 
                                <option value="<?= $j->id ?>" <?= $sel ?> ><?= $j->judul ?></option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="tgl_pengambilan" class="col-3 col-form-label">Tanggal Pengambilan</label> 
                            <div class="col-8">
                            <input id="tgl_pengambilan" name="tgl_pengambilan" value="<?= $data_edit->tgl_pengambilan; ?>" type="date" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_pengembalian" class="col-3 col-form-label">Tanggal Pengembalian</label> 
                            <div class="col-8">
                            <input id="tgl_pengembalian" name="tgl_pengembalian" value="<?= $data_edit->tgl_pengembalian; ?>" type="date" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-3 col-form-label">Keterangan</label> 
                            <div class="col-8">
                            <input id="keterangan" name="keterangan" value="<?= $data_edit->keterangan; ?>" type="text" class="form-control" required="required">
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