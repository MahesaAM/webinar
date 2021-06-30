<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                        <h3>Daftar provinsi</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                        <button style="float: right;" data-toggle="modal" data-target="#tambah_provinsi" class="btn btn-primary">Tambah provinsi</button>
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
                                                <th>Provinsi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $n=1; foreach($provinsi as $p): ?>
                                            <tr>
                                                <td><?= $n++ ?></td>
                                                <td><?= $p['provinsi_nama'] ?></td>
                                                <td class="datatable-ct">
                                                <button  data-toggle="modal" data-target="#edit_provinsi<?= $p['provinsi_id'] ?>" class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                                    <button  data-toggle="modal" data-target="#hapus_provinsi<?= $p['provinsi_id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
<div class="modal fade" id="tambah_provinsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="<?= base_url('admin/Provinsi/tambah_provinsi') ?>" method="post">
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">provinsi</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" required placeholder="Masukan provinsi" name="provinsi" class="form-control" />
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
		<button type="submit" class="btn btn-primary">Tambah</button>
    </form>
      </div>
    </div>
  </div>
</div>
<?php foreach($provinsi as $p): ?>
    <div class="modal fade" id="edit_provinsi<?= $p['provinsi_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/Provinsi/edit_provinsi') ?>" method="post">
        <input type="hidden" value="<?= $p['provinsi_id'] ?>" name="id">
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">provinsi</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" value="<?= $p['provinsi_nama'] ?>" required placeholder="Masukan provinsi" name="provinsi" class="form-control" />
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
		<button type="submit" class="btn btn-primary">Edit</button>
    </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>
<!-- Modal hapus provinsi -->
<?php foreach ($provinsi as $p) : ?>
<div class="modal fade" id="hapus_provinsi<?= $p['provinsi_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="<?= base_url('admin/Provinsi/hapus_provinsi') ?>" method="post">
        <h4>Apakah Anda Yakin Ingin Menghapus <br><?= $p['provinsi_nama'] ?> ?</h4>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
		<input type="hidden" name="id" value="<?= $p['provinsi_id'] ?>">	
		<button type="submit" class="btn btn-danger">Iya</button>
		</form>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>