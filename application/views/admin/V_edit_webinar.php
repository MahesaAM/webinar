<!-- Basic Form Start -->
<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                        <h3>Buat Webinar</h3>
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
                                                <form action="<?= base_url('admin/Webinar/edit_webinar') ?>" method="post" enctype="multipart/form-data">
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Kode Webinar</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <?php $id = $w['webinar_id'] ?>
                                                                <input type="text" disabled="" value="<?= $id ?>" class="form-control" />
                                                                <input type="hidden" name="id" value="<?= $id ?>" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Judul</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" value="<?= $w['webinar_nama'] ?>" name="judul" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Tanggal</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="date" value="<?= $w['webinar_tanggal'] ?>" name="tanggal" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Jam</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                            <div class="input-daterange input-group" id="datepicker">
                                                                <input type="time" value="<?= $w['webinar_jam_mulai'] ?>" name="jam_mulai" class="form-control" name="start" value="05/14/2014" />
                                                                <span class="input-group-addon">Sampai</span>
                                                                <input type="time" value="<?= $w['webinar_jam_selesai'] ?>" name="jam_selesai" class="form-control" name="end" value="05/22/2014" />
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Deskripsi</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <textarea name="deskripsi" class="form-control" cols="30" rows="5"><?= $w['webinar_nama'] ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Pamflet</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="file" name="pamflet" class="form-control" />
                                                                <input type="hidden" name="pamflet_lama" value="<?= $w['webinar_pamflet'] ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-3">
                                                                <label class="login2 pull-right pull-right-pro">Free</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                                                <div class="bt-df-checkbox">
                                                                    <?php if($w['webinar_free']==1): ?>
                                                                        <input id="free" name="free" value="1" checked class="pull-left" type="checkbox">
                                                                    <?php else: ?>
                                                                        <input id="free" name="free" value="1" class="pull-left" type="checkbox">
                                                                    <?php endif ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <ul id="wadah">
                                                        <?php if($w['webinar_free']==0): ?>
                                                            <li id="htm">
                                                        <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Method Pembayaran</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <select name="method" required="" class="form-control">
                                                                    <option value="">-Pilih Method Pembayaran-</option>
                                                                    <?php foreach($method as $m): ?>
                                                                        <?php if($w['webinar_method']==$m['method_nama']): ?>
                                                                            <option value="<?= $m['method_nama'] ?>" selected><?= $m['method_nama'] ?></option>
                                                                        <?php else: ?>
                                                                            <option value="<?= $m['method_nama'] ?>"><?= $m['method_nama'] ?></option>
                                                                        <?php endif ?>
                                                                    <?php endforeach ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Atas Nama</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" value="<?= $w['webinar_atas_nama'] ?>" required="" name="atas_nama" class="form-control" />
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">No Rek</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="number" value="<?= $w['webinar_no_rek'] ?>" required="" name="no_rek" class="form-control" />
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">HTM</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="number" value="<?= $w['webinar_htm'] ?>" required="" name="htm" class="form-control" />
                                                            </div>
                                                        </div>
                                                        </div>
                                                        </li>
                                                        <?php endif ?>
                                                    </ul>
                                                    <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2"></div>
                                                                    <div class="col-lg-9">  
                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                        <a href="<?= base_url('admin/Webinar') ?>" class="btn btn-white" type="submit">Cancel</a>
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
