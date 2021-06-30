<!-- Basic Form Start -->
<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                        <h3>Check Out</h3>
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
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <p style="font-size: 20px;"><?= $w['webinar_nama'] ?></p>
                                                        <ul>
                                                            <li><i class="fa fa-key"></i> <?= $w['webinar_id'] ?></li>
                                                            <li><i class="fa fa-calendar"></i> <?= date('d-m-Y', strtotime($w['webinar_tanggal'])) ?></li>
                                                            <li><i class="fa fa-clock-o"></i> <?= $w['webinar_jam_mulai'].' - '.$w['webinar_jam_selesai'] ?></li>
                                                        </ul>
                                                        <br>
                                                        <br>
                                                        <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Nama</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" disabled value="<?= $_SESSION['users_nama'] ?>" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Email</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input type="text" disabled value="<?= $_SESSION['users_email'] ?>" class="form-control" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <form action="<?= base_url('users/Webinar/daftar_webinar_berbayar') ?>" method="post" enctype="multipart/form-data">
                                                        <div class="form-group-inner">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Bukti Pembayaran</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                <input required type="file" name="bukti" class="form-control" />
                                                                <input type="hidden" name="id_users" value="<?= $_SESSION['users_id'] ?>">
                                                                <input type="hidden" name="id_webinar" value="<?= $w['webinar_id'] ?>">
                                                                <?= form_error('file', '<small class="text-danger" pl-3>', '</small>' ); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br><br><br>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <?php if($w['webinar_free']==1): ?>
                                                            <h3>Harga : Rp. 0</h3>
                                                            <?php else: ?>
                                                                <h3>Rp. <?= number_format($w['webinar_htm']) ?></h3>
                                                                <p style="font-size: 20px;"><?= $w['webinar_method'] ?></p>
                                                                <p style="font-size: 20px;"><?= $w['webinar_atas_nama'].' - '.$w['webinar_no_rek'] ?></p>
                                                                <hr>
                                                                <p>Silahkan Melakukan Pembayaran Dengan Melakukan Transfer Ke rekening Yang Sudah Sudah Di sediakan Dan Kirim Bukti Pembayaran</p>
                                                            <?php endif ?>
                                                            <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-2"></div>
                                                                    <div class="col-lg-9">  
                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                        <a href="<?= base_url('users/Webinar') ?>" class="btn btn-white" type="submit">Cancel</a>
                                                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Daftar</button>
                                                                    </div>
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
        </div>
