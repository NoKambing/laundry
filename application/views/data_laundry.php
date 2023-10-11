

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Pemesanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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
            <h3>Data Laundry</h3>
            <?php
                  $message =$this->session->flashdata('message');

                  if($message == "success"){
                    ?>
                    <script>alert('berhasil memasukkan data')</script>
                  <?php
                  }else if($message =="success update"){
                    ?>
                    <script>alert('berhasil merubah data')</script>
                    <?php
                  }else if($message == "success delete"){
              ?>
                  <script>alert('berhasil menghapus data')</script>
                <?php
                  };
                ?>
          </div>
          <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama pelanggan</th>
                    <th>berat barang</th>
                    <th>Tanggal & Jam</th>
                    <th>Jenis pelayanan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                    foreach ($data as $d) :
                  ?>
                  <tr>
                     <td><?= $i ?></td>
                    <td><?= $d->nama_pelanggan ?></td>
                    <td><?= $d->berat_barang ?></td>
                    <td><?= $d->Tanggal_pemesanan."JAM".$d->jam_pemesanan ?></td>
                    <td><?= $d->jenis_pelayanan ?></td>
                    <td>
                      <a href="<?=base_url()?>claundry/update_laundry?id=<?=$d->id_laundry?>" type="button" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                      <a href="<?=base_url()?>claundry/delete_laundry?id=<?=$d->id_laundry?>" type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php
                  $i++;
                    endforeach;
                  ?>
                </tbody>
            </table>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
  <!-- /.content-wrapper -->


  
