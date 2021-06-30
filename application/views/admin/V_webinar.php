            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <h3>Daftar Webinar</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <a style="float: right;" href="<?= base_url('admin/Webinar/v_tambah_webinar') ?>" class="btn btn-primary">Buat Webinar</a>
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
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th>ID Webinar</th>
                                                    <th>Nama</th>
                                                    <th>Jenis</th>
                                                    <th>Harga</th>
                                                    <th>Tanggal</th>
                                                    <th>Jam</th>
                                                    <th>Pembicara</th>
                                                    <th>Cp</th>
                                                    <th>Sertif</th>
                                                    <th>Peserta</th>
                                                    <th>Materi</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($webinar as $w) : ?>
                                                    <tr>
                                                        <td><?= $w['webinar_id'] ?></td>
                                                        <td><a style="cursor: pointer;" href="" data-toggle="modal" data-target="#pamflet_webinar<?= $w['webinar_id'] ?>" type="button"><?= $w['webinar_nama'] ?></a></td>
                                                        <td>
                                                            <?php if ($w['webinar_free'] == 1) : ?>
                                                                Free
                                                            <?php else : ?>
                                                                Berbayar
                                                            <?php endif ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($w['webinar_free'] == 1) : ?>
                                                                -
                                                            <?php else : ?>
                                                                Rp. <?= number_format($w['webinar_htm']) ?>
                                                            <?php endif ?>
                                                        </td>
                                                        <td><?= $w['webinar_tanggal'] ?></td>
                                                        <td><?= $w['webinar_jam_mulai'] . ' - ' . $w['webinar_jam_selesai'] ?></td>
                                                        <td>
                                                            <a style="color: white;" href="<?= base_url('admin/Webinar/v_pembicara/' . $w['webinar_id']) ?>" class="btn btn-primary"><i class="fa fa-user"></i></a>
                                                        </td>
                                                        <td>
                                                            <a style="color: white;" href="<?= base_url('admin/Webinar/v_cp/' . $w['webinar_id']) ?>" class="btn-sm btn btn-info"><i class="fa fa-phone"></i></a>
                                                        </td>
                                                        <td>
                                                            <a style="color: white;" href="<?= base_url('admin/Webinar/setup/' . $w['webinar_id']) ?>" class="btn-sm btn btn-warning"><i class="fa fa-certificate"></i></a>
                                                        </td>
                                                        <td>
                                                            <a style="color: white;" href="<?= base_url('admin/Webinar/peserta/' . $w['webinar_id']) ?>" class="btn-sm btn btn-info"><i class="fa fa-users"></i></a>
                                                        </td>
                                                        <td>
                                                            <a style="color: white;" href="<?= base_url('admin/Uploads?id=' . $w['webinar_id']) ?>" class="btn-sm btn btn-info"><i class="fa fa-book"></i></a>
                                                        </td>
                                                        <td class="datatable-ct">
                                                            <a style="color: white;" href="<?= base_url('admin/Webinar/v_edit_webinar/' . $w['webinar_id']) ?>" class="btn-sm btn btn-primary"><i class="fa fa-pencil"></i></a>
                                                            <button data-toggle="modal" data-target="#hapus_webinar<?= $w['webinar_id'] ?>" class="btn-sm btn btn-danger"><i class="fa fa-trash"></i></button>
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
                <!-- Modal hapus webinar -->
                <?php foreach ($webinar as $w) : ?>
                    <div class="modal fade" id="hapus_webinar<?= $w['webinar_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?= base_url('admin/Webinar/hapus_webinar') ?>" method="post">
                                        <h4>Apakah Anda Yakin Ingin Menghapus <br><?= $w['webinar_nama'] ?> ?</h4>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    <input type="hidden" name="id" value="<?= $w['webinar_id'] ?>">
                                    <button type="submit" class="btn btn-danger">Iya</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

                <?php foreach ($webinar as $w) : ?>
                    <div class="modal fade" id="pamflet_webinar<?= $w['webinar_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <b>Kode</b>
                                            <p><?= $w['webinar_id'] ?></p>
                                            <b>Nama</b>
                                            <p><?= $w['webinar_nama'] ?></p>
                                            <b>Tanggal</b>
                                            <p><?= $w['webinar_tanggal'] ?></p>
                                            <b>Jam</b>
                                            <p><?= $w['webinar_jam_mulai'] . ' - ' . $w['webinar_jam_selesai'] ?></p>
                                            <b>Jenis</b>
                                            <?php if ($w['webinar_free'] == '0') : ?>
                                                <p>Gratis</p>
                                            <?php else : ?>
                                                <p><?= $w['webinar_htm'] ?></p>
                                            <?php endif; ?>
                                            <b>Pembayaran</b>
                                            <p><?= $w['webinar_method'] ?></p>
                                            <b>Deskripsi</b>
                                            <p><?= $w['webinar_deskripsi'] ?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="<?= base_url('pamflet/' . $w['webinar_pamflet']) ?>" alt="">
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