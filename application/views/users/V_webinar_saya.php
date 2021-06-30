<div class="breadcome-area">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcome-list single-page-breadcome">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="breadcome-heading">
                <h3>Daftar Webinar Saya</h3>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="breadcome-heading">
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
              </div>
              <table id="table" data-toggle="table" data-pagination="true" data-show-pagination-switch="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                <thead>
                  <tr>
                    <th>ID Webinar</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                    <th>Harga</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Pembicara</th>
                    <th>Materi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($webinar as $w) :
                    $id_user = $w['peserta_users_id'];
                    $id_webinar = $w['peserta_webinar_id'];
                    $wbr = $this->db->query("SELECT * FROM tbl_webinar WHERE webinar_id = '$id_webinar' ")->row_array();
                  ?>
                    <tr>
                      <td rowspan="2"><?= $w['peserta_webinar_id'] ?></td>
                      <td>
                        <a class="cursor: pointer;" href="" data-toggle="modal" data-target="#pamflet_webinar<?= $wbr['webinar_id'] ?>"><?= $wbr['webinar_nama'] ?> </a>
                      </td>
                      <td>
                        <?php if ($wbr['webinar_free'] == 1) : ?>
                          Free
                        <?php else : ?>
                          Berbayar
                        <?php endif ?>
                      </td>
                      <td>
                        <?php if ($wbr['webinar_free'] == 1) : ?>
                          -
                        <?php else : ?>
                          Rp. <?= number_format($wbr['webinar_htm']) ?>
                        <?php endif ?>
                      </td>
                      <td><?= date('d - m - Y', strtotime($wbr['webinar_tanggal'])) ?></td>
                      <td><?= $wbr['webinar_jam_mulai'] . ' - ' . $wbr['webinar_jam_selesai'] ?></td>
                      <td>
                        <a style="color: white;" href="<?= base_url('users/Webinar/V_pembicara/' . $w['peserta_webinar_id'] . '/2') ?>" class="btn btn-info"><i class="fa fa-users"></i></a>
                      </td>
                      <td>
                        <a style="color: white;" href="<?= base_url('users/Materi?id=' . $wbr['webinar_id']) ?>" class="btn-sm btn btn-info"><i class="fa fa-book"></i></a>
                      </td>
                      <td class="datatable-ct">
                        <?php if ($wbr) : ?>
                          <button data-toggle="modal" data-target="#link_webinar<?= $w['peserta_id'] ?>" class="btn btn-info"><i class="fa fa-link"></i> Link</button>
                        <?php else : ?>
                          <button data-toggle="modal" data-target="#daftar_webinar<?= $w['peserta_webinar_id'] ?>" class="btn btn-primary"><i class="fa fa-book"></i> Daftar</button>
                        <?php endif ?>
                      </td>
                    </tr>
                    <?php
                    if ($w['peserta_status'] == 0 and $wbr) : ?>
                      <tr>
                        <td colspan="7">
                          <span style="background-color: green;" class="badge">Dalam Proses</span> <i class="fa fa-arrow-right"></i> <span class="badge">Terdaftar</span> <i class="fa fa-arrow-right"></i> <span class="badge">Absensi</span>
                        </td>
                        <td></td>
                      </tr>
                    <?php elseif ($w['peserta_status'] == 4 and $wbr) : ?>
                      <tr>
                        <td colspan="7">
                          <span style="background-color: green;" class="badge">Dalam Proses</span> <i class="fa fa-arrow-right"></i> <span style="background-color: red;" class="badge">Ditolak</span> <i class="fa fa-arrow-right"></i> <span class="badge">Absensi</span>
                        </td>
                        <td>
                          <?php if (date('Y-d-m', strtotime($wbr['webinar_tanggal'])) <= date('Y-d-m')) : ?>
                            <button data-toggle="modal" data-target="#absen_webinar<?= $w['peserta_webinar_id'] ?>" class="btn btn-default"><i class="fa fa-w"></i> Absen</button>
                          <?php else : ?>
                            <button disabled class="btn btn-default"><i class="fa fa-check"></i> Absen</button>
                          <?php endif ?>
                        </td>
                      </tr>
                    <?php elseif ($w['peserta_status'] == 1 and $w['peserta_absen'] == 0 and $wbr) : ?>
                      <tr>
                        <td colspan="7">
                          <span style="background-color: green;" class="badge">Dalam Proses</span> <i class="fa fa-arrow-right"></i> <span style="background-color: green;" class="badge">Terdaftar</span> <i class="fa fa-arrow-right"></i> <span class="badge">Absensi</span>
                        </td>
                        <td>
                          <?php if (date('Y-d-m', strtotime($wbr['webinar_tanggal'])) == date('Y-d-m')) : ?>
                            <button data-toggle="modal" data-target="#absen_webinar<?= $w['peserta_webinar_id'] ?>" class="btn btn-default"><i class="fa fa-w"></i> Absen</button>
                          <?php else : ?>
                            <button disabled class="btn btn-default"><i class="fa fa-check"></i> Absen</button>
                          <?php endif ?>
                        </td>
                      </tr>
                    <?php elseif ($w['peserta_status'] == 1 and $w['peserta_absen'] == 1 and $wbr) : ?>
                      <tr>
                        <td colspan="7">
                          <span style="background-color: green;" class="badge">Dalam Proses</span> <i class="fa fa-arrow-right"></i> <span style="background-color: green;" class="badge">Terdaftar</span> <i class="fa fa-arrow-right"></i> <span style="background-color: green;" class="badge">Absensi</span>
                        </td>
                        <td>
                          <?php if (date('Y-m-d', strtotime($wbr['webinar_tanggal'])) >= date('Y-m-d')) : ?>
                            <a target="_blank" href="<?= base_url('users/Webinar_saya/print_sertif/' . $w['peserta_webinar_id']) . '/' . $w['peserta_users_id'] ?>" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                          <?php else : ?>
                            <button disabled class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                          <?php endif ?>
                        </td>
                      </tr>
                    <?php endif ?>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php foreach ($webinar as $w) : ?>
    <div class="modal fade" id="absen_webinar<?= $w['peserta_webinar_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h4>Absen Sekarang</h4>
          </div>
          <div class="modal-footer">
            <form action="<?= base_url('users/Webinar_saya/absen') ?>" method="post">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
              <input type="hidden" value="<?= $w['peserta_webinar_id'] ?>" name="id_webinar">
              <input type="hidden" value="<?= $_SESSION['users_id'] ?>" name="id_users">
              <button type="submit" class="btn btn-primary">Iya</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach ?>

  <?php foreach ($webinar as $w) : ?>
    <div class="modal fade" id="link_webinar<?= $w['peserta_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php
            $id_user = $w['peserta_users_id'];
            $id_webinar = $w['peserta_webinar_id'];
            $wbr = $this->db->query("SELECT * FROM tbl_webinar WHERE webinar_id = '$id_webinar' ")->row_array();
            if ($w['peserta_status'] == 4) : ?>
              <p>Anda Tidak Terdaftar</p>
            <?php elseif (empty($wbr['webinar_link'])) : ?>
              <P>Link Belum Tersedia</P>
            <?php elseif ($w['peserta_status'] == 0) : ?>
              <P>Anda Belum Terdaftar</P>
            <?php elseif (!empty($wbr['webinar_link'])) : ?>
              <a href="<?= $wbr['webinar_link'] ?>"><?= $wbr['webinar_link'] ?></a>
            <?php endif ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach ?>

  <?php foreach ($webinar as $w) :
    $id_user = $w['peserta_users_id'];
    $id_webinar = $w['peserta_webinar_id'];
    $wbr = $this->db->query("SELECT * FROM tbl_webinar WHERE webinar_id = '$id_webinar' ")->row_array();
  ?>
    <div class="modal fade" id="pamflet_webinar<?= $wbr['webinar_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="<?= base_url('pamflet/' . $wbr['webinar_pamflet']) ?>" alt="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach ?>