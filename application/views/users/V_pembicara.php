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
                                        <?php if($this->uri->segment(5)==2): ?>
                                            <a href="<?= base_url('users/Webinar_saya') ?>" style="float: right;" class="btn btn-danger">Kembali</a>
                                        <?php else: ?>
                                            <a href="<?= base_url('users/Webinar') ?>" style="float: right;" class="btn btn-danger">Kembali</a>
                                        <?php endif ?>
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
                        </div>
                    </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>