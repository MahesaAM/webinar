<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                        <h3>Daftar pembicara</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                        <a href="<?= base_url('admin/Webinar') ?>" style="float: right;" class="btn btn-danger">Kembali</a>
                                        <button style="float: right;" data-toggle="modal" data-target="#tambah_pembicara" class="btn btn-primary">Tambah Pembicara</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contacts-area mg-b-15">
            <div class="container-fluid">
                <div class="row">

                    <?php foreach($pembicara as $p): ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
                            <div class="panel-body custom-panel-jw">
                                <div class="social-media-in">
                                </div>
                                <img alt="logo" class="img-circle m-b" src="<?= base_url('pembicara/'.$p['pembicara_foto']) ?>">
                                <h3><a href=""><?= $p['pembicara_nama'] ?></a></h3>
                                <p class="all-pro-ad"><?= $p['pembicara_dari'] ?></p>
                            </div>
                            <div class="panel-footer contact-footer">
                                <div class="professor-stds-int">
                                    <div class="row">
                                        <div class="col-md-7">
                                        <div class="contact-stat"><button data-toggle="modal" data-target="#edit_pembicara<?= $p['pembicara_id'] ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i> Edit</button></div>
                                        </div>
                                        <div class="col-md-5">
                                        <div class="contact-stat"><button data-toggle="modal" data-target="#hapus_pembicara<?= $p['pembicara_id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>
<div class="modal fade" id="tambah_pembicara" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/Webinar/tambah_pembicara') ?>" method="post"  enctype="multipart/form-data">
        <input type="hidden" value="<?= $this->uri->segment(4) ?>" name="id_webinar">
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">Nama</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" required  name="nama" class="form-control" />
                </div>
            </div>
        </div>
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">Dari</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" required name="dari" class="form-control" />
                </div>
            </div>
        </div>
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">Foto</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="file" required name="foto" class="form-control" />
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
<?php foreach($pembicara as $p): ?>
    <div class="modal fade" id="edit_pembicara<?= $p['pembicara_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/Webinar/edit_pembicara') ?>" method="post"  enctype="multipart/form-data">
        <input type="hidden" value="<?= $p['pembicara_id'] ?>" name="id">
        <input type="hidden" value="<?= $this->uri->segment(4) ?>" name="id_webinar">
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">Nama</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" required value="<?= $p['pembicara_nama'] ?>"  name="nama" class="form-control" />
                </div>
            </div>
        </div>
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">Dari</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="text" required value="<?= $p['pembicara_dari'] ?>" name="dari" class="form-control" />
                </div>
            </div>
        </div>
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <label class="login2 pull-right pull-right-pro">Foto</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <input type="file" name="foto" class="form-control" />
                    <input type="hidden" value="<?= $p['pembicara_foto'] ?>" required name="foto_lama" class="form-control" />
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
<!-- Modal hapus pembicara -->
<?php foreach($pembicara as $p): ?>
    <div class="modal fade" id="hapus_pembicara<?= $p['pembicara_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('admin/Webinar/hapus_pembicara') ?>" method="post">
        <input type="hidden" value="<?= $this->uri->segment(4) ?>" name="id_webinar">
        <h4>Apakah Anda Yakin Ingin Menghapus ?</h4>
      </div>
      <div class="modal-footer">
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
		<input type="hidden" name="id" value="<?= $p['pembicara_id'] ?>">	
		<button type="submit" class="btn btn-danger">Iya</button>
		</form>
      </div>
    </div>
  </div>
</div>
<?php endforeach ?>