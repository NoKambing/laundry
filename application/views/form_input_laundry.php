  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">FORM INPUT PEMESANAN LAUNDRY</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PEMESANAN</a></li>
              <li class="breadcrumb-item active">INPUT</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
      <div class="card">
      <div class="card-header">
            PEMESANAN
        </div>
        <form action="<?= base_url('claundry/simpan_data')?>" method="post">
            <div class="card-body">
              <?php
                  $message =$this->session->flashdata('message');

                  if($message == "success"){
                    ?>
                    <script>alert('berhasil memasukkan data')</script>
                  <?php
                  };
              ?>
                <label for="">Nama Pelanggan</label>
                <input required type="text" class="form-control" name="nama_pelanggan">
                <label for="">Berat Barang</label>
                <input required type="text" class="form-control" name="berat_barang">
                <label for="">Jenis Pelayanan</label>
                <select class="form-control" name="jenis_pelayanan" id="">
                    <option value="">Pilih Jenis Pelayanan</option>
                    <option value="Setrika">cuci setrika</option>
                    <option value="Kering">cuci kering</option>
                    <option value="basah">cuci basah</option>
                    <option value="Setrika">setrika</option>
                 </select>
                <label for="">Tanggal pemesanan</label>
                <input required type="DATE" class="form-control" name="tanggal_pemesanan">
                <label for="">Jam pemesanan</label>
                <input required type="TIME" class="form-control" name="jam_pemesanan">
            </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary" >SIMPAN</button>
            </div>
    </form>  
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  