<!-- Basic Form Start -->
<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                        <h3>Tambah Peserta</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="basic-form-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                <form action="<?= base_url('admin/Peserta/v_tambah_peserta') ?>" method="post" enctype="multipart/form-data">
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Nama</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" value="<?= set_value('nama') ?>" placeholder="Masukan Nama" name="nama" class="form-control" />
                                                                <?= form_error('nama', '<small class="text-danger" pl-3>', '</small>' ); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Email</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" value="<?= set_value('email') ?>" placeholder="Masukan Email" name="email" class="form-control" />
                                                                <?= form_error('email', '<small class="text-danger" pl-3>', '</small>' ); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Phone</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="number" value="<?= set_value('phone') ?>" placeholder="Masukan No phone" name="phone" class="form-control" />
                                                                <?= form_error('phone', '<small class="text-danger" pl-3>', '</small>' ); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Instansi</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input placeholder="Masukan Instansi" value="<?= set_value('instansi') ?>" type="text" name="instansi" class="form-control" />
                                                                <?= form_error('instansi', '<small class="text-danger" pl-3>', '</small>' ); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Provesi</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <select class="form-control" name="profesi">
                                                                    <option value="">-Pilih Profesi-</option>
                                                                    <?php foreach($profesi as $p): ?>
                                                                        <option value="<?= $p['profesi_nama'] ?>" <?php echo set_select('profesi',$p['profesi_nama'], ( !empty($_POST['profesi']) && $_POST['profesi'] == $p['profesi_nama'] ? TRUE : FALSE )); ?>><?= $p['profesi_nama'] ?></option>
                                                                    <?php endforeach ?>
                                                                </select>   
                                                                <?= form_error('profesi', '<small class="text-danger" pl-3>', '</small>' ); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Provinsi</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <select class="form-control" name="provinsi">
                                                                    <option value="">-Pilih Provinsi-</option>
                                                                    <?php foreach($provinsi as $p): ?>
                                                                        <option value="<?= $p['provinsi_nama'] ?>" <?php echo set_select('provinsi',$p['provinsi_nama'], ( !empty($_POST['provinsi']) && $_POST['provinsi'] == $p['provinsi_nama'] ? TRUE : FALSE )); ?>><?= $p['provinsi_nama'] ?></option>
                                                                    <?php endforeach ?>
                                                                </select>
                                                                <?= form_error('provinsi', '<small class="text-danger" pl-3>', '</small>' ); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Password</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input  type="password" id="password" placeholder="Masukan Password" name="password" class="form-control" />
                                                                <?= form_error('password', '<small class="text-danger" pl-3>', '</small>' ); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Ulangi Password</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="password" id="password_c" placeholder="Konfirmasi Password" name="password_c" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2"></div>
                                                                    <div class="col-lg-9">  
                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                        <a href="<?= base_url('admin/Peserta') ?>" class="btn btn-white" type="submit">Cancel</a>
                                                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
