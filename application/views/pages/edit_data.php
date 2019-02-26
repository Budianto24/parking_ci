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
            <h3 class="box-title"></h3>
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
              <?php if($this->session->flashdata()):?>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  Data Parkir <strong>Berhasil!</strong> <?= $this->session->flashdata('flash')?>.
                </div>
              <?php endif; ?>
              
              <?= form_open('input/prosesEdit')?>
                <div class="row">
                  <div class="form-group">
                  <label class="control-label"><h3>Nomor Kendaraan</h3></label>
                    <input type="text" placeholder="Write here.." class="form-control input-lg"  name="no_kendaraan" autocomplete="off" value="<?= $databyid['no_kendaraan']?>" required>
                  </div>
                </div>
                <div class="row">
                <div class="form-group">
                    <label class="control-label"><h3>Jenis Kendaraan</h3></label>
                      <select class="form-control input-lg" name="jenis_kendaraan">
                        <option>--Pilih--</option>
                        <option value="Motor" <?php if($databyid['jenis_kendaraan'] == 'Motor'){echo "selected";} ?>>Motor</option>
                        <option value="Mobil" <?php if($databyid['jenis_kendaraan'] == 'Mobil'){echo "selected";} ?>>Mobil</option>
                      </select>
                </div>
                </div>
                <div class="row">
                <div class="form-group">
                  <label class="control-label"><h3>Kelengkapan</h3></label>
                    <h4>
                      <?php $checkbox = explode(', ',$databyid['kelengkapan'])?>
                      <input type="checkbox" name="kelengkapan[]" <?= in_array('SIM',$checkbox) ? "checked":"";?> value="SIM"> SIM
                        &nbsp; &nbsp; &nbsp;
                      <input type="checkbox" name="kelengkapan[]" <?= in_array('STNK',$checkbox) ? "checked":"";?> value="STNK"> STNK
                        &nbsp; &nbsp; &nbsp;
                      <input type="checkbox" name="kelengkapan[]" <?= in_array('Tidak Ada',$checkbox) ? "checked":"";?> value="Tidak Ada"> Tidak Ada
                    </h4>
                  </div>
                </div>
                <div class="row">
                <div class="form-group">
                  <label class="control-label"><h3>Pembayaran</h3></label>
                    <h4>
                      <input type="radio" name="pembayaran" value="Cash" <?php if($databyid['pembayaran'] == 'Cash'){echo "checked";} ?>> Cash
                        &nbsp; &nbsp; &nbsp;
                      <input type="radio" name="pembayaran" value="Transfer" <?php if($databyid['pembayaran'] == 'Transfer'){echo "checked";} ?>> Transfer
                    </h4>
                  </div>
                </div>
                <div class="row">
                <div class="form-group">
                    <label class="control-label"><h3>Status</h3></label>
                      <select class="form-control input-lg" name="status">
                        <option>--Pilih--</option>
                        <option value="Masuk" <?php if($databyid['status'] == 'Masuk'){echo "selected";} ?>>Masuk</option>
                        <option value="Keluar" <?php if($databyid['status'] == 'Keluar'){echo "selected";} ?>>Keluar</option>
                      </select>
                </div>
                </div>
                <div class="row">
                <div class="form-group">
                  <label class="control-label"><h3>Keterangan</h3></label>
                    <textarea class="form-control" rows="6" name="keterangan"><?= $databyid['keterangan'] ?></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <br>
                    <center><button class="btn btn-primary btn-lg" name="upload">Ubah</button></center>
                  </div>
                </div>
                <input type="hidden" name="tanggal" value="<?= $databyid['tanggal'] ?>">
                <input type="hidden" name="waktu_masuk"  value="<?= $databyid['waktu_masuk'] ?>">
                <input type="hidden" name="waktu_keluar"  value="<?= $databyid['waktu_keluar'] ?>">
                <input type="hidden" name="id_parkir"  value="<?= $databyid['id_parkir'] ?>">
              <?= form_close()?>
            </div>
          </div>
          </div>
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->