<?php if($w['webinar_free']==0): ?>
<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                        <h3>Pengajuan Pendaftaran</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif ?>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                    </div>
                                    <?php if($w['webinar_free']==0): ?>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Profesi</th>
                                                <th>Instansi</th>
                                                <th>Provinsi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $n=1; foreach($peserta_pengajuan as $p): 
                                                $id = $p['peserta_users_id'];
                                                $u = $this->db->query("SELECT * FROM tbl_users WHERE users_id = '$id' ")->row_array();
                                            ?>
                                            <tr>
                                                <td><?= $n++ ?></td>
                                                <td><?= $u['users_nama'] ?></td>
                                                <td><?= $u['users_email'] ?></td>
                                                <td><?= $u['users_phone'] ?></td>
                                                <td><?= $u['users_profesi'] ?></td>
                                                <td><?= $u['users_instansi'] ?></td>
                                                <td><?= $u['users_provinsi'] ?></td>
                                                <td class="datatable-ct">
                                                <button style="color: white;"  data-toggle="modal" data-target="#lihat_peserta<?= $p['peserta_id'] ?>" class="btn btn-info"><i class="fa fa-eye"></i></button>
                                                    <button  data-toggle="modal" data-target="#hapus_peserta<?= $p['peserta_id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                        <h3>Peserta Terdaftar</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Profesi</th>
                                                <th>Instansi</th>
                                                <th>Provinsi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $n=1; foreach($peserta as $p): 
                                                $id = $p['peserta_users_id'];
                                                $u = $this->db->query("SELECT * FROM tbl_users WHERE users_id = '$id' ")->row_array();
                                            ?>
                                            <tr>
                                                <td><?= $n++ ?></td>
                                                <td><?= $u['users_nama'] ?></td>
                                                <td><?= $u['users_email'] ?></td>
                                                <td><?= $u['users_phone'] ?></td>
                                                <td><?= $u['users_profesi'] ?></td>
                                                <td><?= $u['users_instansi'] ?></td>
                                                <td><?= $u['users_provinsi'] ?></td>
                                                <td class="datatable-ct">
                                                <!-- <button style="color: white;"  data-toggle="modal" data-target="#lihat_peserta<?= $p['peserta_id'] ?>" class="btn btn-info"><i class="fa fa-eye"></i></button> -->
                                                    <button  data-toggle="modal" data-target="#hapus_peserta<?= $p['peserta_id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- Modal hapus peserta -->
<?php foreach ($peserta as $p) : ?>
<div class="modal fade" id="hapus_peserta<?= $p['peserta_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="<?= base_url('peserta/peserta/hapus_peserta') ?>" method="post">
        <h4>Apakah Anda Yakin Ingin Menghapus <br><?= $p['peserta_users_id'] ?> ?</h4>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
		<input type="hidden" name="id" value="<?= $p['peserta_id'] ?>">	
		<button type="submit" class="btn btn-danger">Iya</button>
		</form>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>

<?php foreach ($peserta_pengajuan as $p) : ?>
<div class="modal fade" id="lihat_peserta<?= $p['peserta_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-5">
            <img width="400px" src="<?= base_url('bukti_pembayaran/'.$p['peserta_bukti_pembayaran']) ?>" alt="">
            </div>
            <div class="col-md-7">
                <div style="margin-left:20%;margin-top:40%;">
                <div class="row">
                <div class="col-md-5">
                <form action="<?= base_url('admin/Webinar/tolak') ?>" method="post">
                <input type="hidden" value="<?= $p['peserta_id'] ?>" name="id">
                <input type="hidden" value="<?= $this->uri->segment(4) ?>" name="id_webinar">
                <button class="btn btn-danger btn-lg"><i class="fa fa-times"></i> Tolak</button>
            </form>
                </div>
                <div class="col-md-5">
                <form action="<?= base_url('admin/Webinar/terima') ?>" method="post">
                <input type="hidden" value="<?= $p['peserta_id'] ?>" name="id">
                <input type="hidden" value="<?= $this->uri->segment(4) ?>" name="id_webinar">
                <button class="btn btn-success btn-lg"><i class="fa fa-check"></i> Terima</button>
            </form>
                </div>
                </div>
                </div>
                <br>
                <p>Pastikan Peserta Mentransfer Sesuai dengan ketentuan Yang di berikan</p>
            </div>
        </div>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>