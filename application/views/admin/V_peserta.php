<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                        <h3>Daftar peserta</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                        <a style="float: right;" href="<?= base_url('admin/Peserta/v_tambah_peserta') ?>" class="btn btn-primary">Tambah peserta</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
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
                                                <th>Active</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $n=1; foreach($peserta as $p): ?>
                                            <tr>
                                                <td><?= $n++ ?></td>
                                                <td><?= $p['users_nama'] ?></td>
                                                <td><?= $p['users_email'] ?></td>
                                                <td><?= $p['users_phone'] ?></td>
                                                <td><?= $p['users_profesi'] ?></td>
                                                <td><?= $p['users_instansi'] ?></td>
                                                <td><?= $p['users_provinsi'] ?></td>
                                                <td><?= $p['users_active'] ?></td>
                                                <td class="datatable-ct">
                                                    <a style="color: white;" href="<?= base_url('admin/Peserta/v_edit_peserta/'.$p['users_id']) ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                                    <button  data-toggle="modal" data-target="#hapus_peserta<?= $p['users_id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
<div class="modal fade" id="hapus_peserta<?= $p['users_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="<?= base_url('admin/peserta/hapus_peserta') ?>" method="post">
        <h4>Apakah Anda Yakin Ingin Menghapus <br><?= $p['users_nama'] ?> ?</h4>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
		<input type="hidden" name="id" value="<?= $p['users_id'] ?>">	
		<button type="submit" class="btn btn-danger">Iya</button>
		</form>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>