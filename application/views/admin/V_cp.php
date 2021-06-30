<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                        <h3>Daftar Contact Person</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                        <a href="<?= base_url('admin/Webinar') ?>" style="float: right;" class="btn btn-danger">Kembali</a>
                                        <button style="float: right;" data-toggle="modal" data-target="#tambah_cp" class="btn btn-primary">Tambah Contact</button>
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
                                                <th>Nomor</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $n=1; foreach($cp as $c): ?>
                                            <tr>
                                                <td><?= $n++ ?></td>
                                                <td><?= $c['cp_nama'] ?></td>
                                                <td><?= $c['cp_number'] ?></td>
                                                <td class="datatable-ct">
                                                    <button  data-toggle="modal" data-target="#edit_cp<?= $c['cp_id'] ?>" class="btn btn-info"><i class="fa fa-pencil"></i></button>
                                                    <button  data-toggle="modal" data-target="#hapus_cp<?= $c['cp_id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
<div class="modal fade" id="tambah_cp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/Webinar/tambah_cp') ?>" method="post">
        <input type="hidden" value="<?= $this->uri->segment(4) ?>" name="id">
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">Nama</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" required name="nama" class="form-control" />
                </div>
            </div>
        </div>
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">Nomor</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="number" required name="nomor" class="form-control" />
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
<?php foreach($cp as $c): ?>
    <div class="modal fade" id="edit_cp<?= $c['cp_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/Webinar/edit_cp') ?>" method="post">
        <input type="hidden" value="<?= $this->uri->segment(4) ?>" name="id">
        <input type="hidden" value="<?= $c['cp_id'] ?>" name="id_cp">
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">Nama</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" value="<?= $c['cp_nama'] ?>" required name="nama" class="form-control" />
                </div>
            </div>
        </div>
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">Nomor</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="number" value="<?= $c['cp_number'] ?>" required name="nomor" class="form-control" />
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
<!-- Modal hapus cp -->
<?php foreach ($cp as $c) : ?>
<div class="modal fade" id="hapus_cp<?= $c['cp_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="<?= base_url('admin/Webinar/hapus_cp') ?>" method="post">
        <h4>Apakah Anda Yakin Ingin Menghapus ?</h4>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
		<input type="hidden" name="id" value="<?= $this->uri->segment(4) ?>">	
		<input type="hidden" name="id_cp" value="<?= $c['cp_id'] ?>">	
		<button type="submit" class="btn btn-danger">Iya</button>
		</form>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>