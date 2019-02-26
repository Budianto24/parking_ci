<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= $title?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">ID Parkir: <?= $parkir['id_parkir']?></h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
            <div class="box-body">            
            <div class="col-md-3"></div>
            <div class="col-md-6">

            <table class="table table-bordered table-condensed table-striped">
              <tr>
                <th width="180px" colspan="2"><h4 class="text-center"><b>Rincian</b></h4></th>
              </tr>
              <tr>
                <th width="180px"><h4>Nomor Kendaraan</h4></th>
                <td><h4><b><?= $parkir['no_kendaraan']?></b></h4></td>
              </tr>
              <tr>
                <th><h4>Jenis Kendaraan</h4></th>
                <td><h4><b><?= $parkir['jenis_kendaraan']?></b></h4></td>
              </tr>
              <tr>
                <th><h4>Kelengkapan</h4></th>
                <td><h4><b><?= $parkir['kelengkapan']?></b></h4></td>
              </tr>
              <tr>
                <th><h4>Tanggal</h4></th>
                <td><h4><b><?= $parkir['tanggal']?></b></h4></td>
              </tr>
              <tr rowspan="2">
                <th>
                  <h4>Waktu Masuk</h4>
                  <h4>Waktu Keluar</h4>
                </th>
                <td>
                  <h4><b><?= $parkir['waktu_masuk']?> WIB</b></h4>
                  <h4><b><?= $parkir['waktu_keluar']?> WIB</b></h4>
                </td>
              </tr>
              <tr>
                <th><h4>Pembayaran</h4></th>
                <td><h4><b><?= $parkir['pembayaran']?></b></h4></td>
              </tr>
              <tr>
                <th><h4>Biaya Parkir</h4></th>
                <td>
                  <h4><b>Rp <?= number_format($parkir['biaya'],0,'.','.')?>,-</b></h4>
                </td>
              </tr>
              <tr>
                <th><h4>Keterangan</h4></th>
                <td><h4><b><?= $parkir['keterangan']?></b></h4></td>
              </tr>
            </table>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->