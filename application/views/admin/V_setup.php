<style>
    .nama_peserta {
        position: absolute;
        font-size: <?= $sertif['sertif_ukuran'] . '%' ?>;
        color: <?= $sertif['sertif_warna'] ?>;
        top: <?= $sertif['sertif_vertical'] . '%' ?>;
        left: <?= $sertif['sertif_horizontal'] . '%' ?>;
        transform: translate(-50%, -50%);
    }
</style>
<!-- Basic Form Start -->
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h3>Setup Webinar</h3>
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
                <div class="sparkline15-list mg-t-30">
                    <div class="sparkline15-graph">
                        <div class="row">
                            <form action="<?= base_url('admin/Webinar/simpan_setup') ?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" value="<?= $this->uri->segment(4) ?>" name="id">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="touchspin-inner">
                                        <label>Ukuran</label>
                                        <input class="form-control" value="<?= $sertif['sertif_ukuran'] ?>" max="500" type="number" id="ukuran" name="ukuran">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="touchspin-inner">
                                        <label>Vertikal</label>
                                        <input class="touchspin2" value="<?= $sertif['sertif_vertical'] ?>" type="text" value="50" id="vertikal" name="vertikal">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="touchspin-inner">
                                        <label>Horizontal</label>
                                        <input class="touchspin2" value="<?= $sertif['sertif_horizontal'] ?>" type="text" value="50" id="horizontal" name="horizontal">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="touchspin-inner">
                                        <label>Warna</label>
                                        <input type="text" value="<?= $sertif['sertif_warna'] ?>" class="form-control" placeholder="#ff0000" id="hex" name="warna">
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                            <div class="col-md-7">
                                                <?php if (empty($sertif['sertif_template'])) :
                                                ?>

                                                    <div class="form-group">
                                                        <label>Upload Design Sertifikat</label>
                                                        <input type="file" name="sertif" class="form-control">
                                                    </div>
                                                <?php else :
                                                ?>
                                                    <div style="background-color: black;">
                                                        <img src="<?= base_url('sertif/' . $sertif['sertif_template']) ?>" alt="">
                                                        <input type="hidden" value="<?= $sertif['sertif_template'] ?>" name="sertif">
                                                        <b class="nama_peserta">Nama Peserta</b>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Upload Design Sertifikat</label>
                                                        <input type="file" name="sertif" class="form-control">
                                                    </div>
                                                <?php endif
                                                ?>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Link</label>
                                                    <textarea name="link" cols="30" rows="10"><?= $link['webinar_link'] ?></textarea>
                                                </div>
                                                <a href="<?= base_url('admin/Webinar') ?>" class="btn btn-danger">Kembali</a>
                                                <button class="btn btn-primary">Simpan Semua Perubahan</button>
                                            </div>
                                            </form>
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="sparkline15-list mg-t-30">
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
                </div>
            </div>
        </div>

    </div>
</div>