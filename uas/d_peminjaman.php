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
                <a class="btn mt-2" style="background-color:#17a2b8; color:#ffffff" href="IndexPeminjaman.php"><i class="fa fa-arrow-left nav-icon mr-2"></i>Back</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Detail Peminjaman Buku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Peminjaman Buku</li>
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
                <h3 class="card-title">Detail Data Peminjaman Buku</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php 
                    include_once 'controllers/class_peminjaman.php';
                    // ciptakan object dari class Peminjaman
                    $id = $_REQUEST['id'];
                    $obj = new Peminjaman($dbh);
                    // panggil method tampilkan data Peminjaman
                    $rs = $obj->getPeminjaman($id);
                  ?>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">                
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $rs->no_buku; ?></h5>
                                <p class="card-text">
                                    Nama : <?= $rs->nama_peminjam; ?>
                                    <br/>Umur : <?= $rs->umur; ?>
                                    <br/>Gender : <?= $rs->gender; ?>
                                    <br/>Tanggal Pengambilan : <?= $rs->tgl_pengambilan; ?>
                                    <br/>Tanggal Pengembalian : <?= $rs->tgl_pengembalian; ?>
                                    <br/>Keterangan : <?= $rs->keterangan; ?>
                                    <br/>Kategori : <?= $rs->kategori; ?>
                                </p>
                                <a href="IndexPeminjaman.php" class="btn btn-primary">Go Back</a>
                            </div>
                        </div>
                     </div>
                </div>
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