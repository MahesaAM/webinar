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
                    <th>Deskripsi</th>
                    <th>Pembicara</th>
                    <th>Pamflet</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($webinar as $w) :
                    $id_user = $_SESSION['users_id'];
                    $id_webinar = $w['webinar_id'];
                    $check = $this->db->query("SELECT * FROM tbl_webinar_peserta WHERE peserta_users_id = '$id_user' AND peserta_webinar_id = '$id_webinar' ")->row_array();
                    $chk = $this->db->query("SELECT * FROM tbl_webinar_peserta WHERE peserta_users_id = '$id_user' AND peserta_webinar_id = '$id_webinar' ")->num_rows();
                  ?>
                    <tr>
                      <td><?= $w['webinar_id'] ?></td>
                      <td><?= $w['webinar_nama'] ?> </td>
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
                      <td><?= date('d - m - Y', strtotime($w['webinar_tanggal'])) ?></td>
                      <td><?= $w['webinar_jam_mulai'] . ' - ' . $w['webinar_jam_selesai'] ?></td>
                      <td><?= $w['webinar_deskripsi'] ?></td>
                      <td>
                        <a style="color: white;" href="<?= base_url('users/Webinar/V_pembicara/' . $w['webinar_id'] . '/1') ?>" class="btn btn-info"><i class="fa fa-users"></i></a>
                      </td>
                      <td>
                        <button data-toggle="modal" data-target="#pamflet_webinar<?= $w['webinar_id'] ?>" class="btn btn-primary"><i class="fa fa-newspaper-o"></i> Pamflet</button>
                      </td>
                      <td class="datatable-ct">
                        <?php if ($chk > 0) : ?>
                          <button data-toggle="modal" data-target="#link_webinar<?= $w['webinar_id'] ?>" class="btn btn-info"><i class="fa fa-link"></i> Link</button>
                        <?php elseif ($chk > 0) : ?>
                          <?php if ($check['peserta_status'] == 4) : ?>
                            <button data-toggle="modal" data-target="#daftar_webinar<?= $w['webinar_id'] ?>" class="btn btn-primary"><i class="fa fa-book"></i> Daftar</button>
                          <?php endif; ?>
                        <?php else : ?>
                          <button data-toggle="modal" data-target="#daftar_webinar<?= $w['webinar_id'] ?>" class="btn btn-primary"><i class="fa fa-book"></i> Daftar</button>
                        <?php endif ?>
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

  <?php foreach ($webinar as $w) : ?>
    <div class="modal fade" id="daftar_webinar<?= $w['webinar_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h4>Apakah Anda Yakin ?</h4>
          </div>
          <div class="modal-footer">
            <form action="<?= base_url('users/Webinar/daftar_webinar_free') ?>" method="post">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
              <?php if ($w['webinar_free'] == 1) : ?>
                <input type="hidden" value="<?= $w['webinar_id'] ?>" name="id_webinar">
                <input type="hidden" value="<?= $_SESSION['users_id'] ?>" name="id_users">
                <button type="submit" class="btn btn-primary">Iya</button>
              <?php else : ?>
                <a href="<?= base_url('users/Webinar/V_checkout/' . $w['webinar_id']) ?>" class="btn btn-primary">Iya</a>
              <?php endif ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach ?>

  <?php foreach ($webinar as $w) : ?>
    <div class="modal fade" id="absen_webinar<?= $w['webinar_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <form action="<?= base_url('users/Webinar/absen') ?>" method="post">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
              <input type="hidden" value="<?= $w['webinar_id'] ?>" name="id_webinar">
              <input type="hidden" value="<?= $_SESSION['users_id'] ?>" name="id_users">
              <button type="submit" class="btn btn-primary">Iya</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach ?>

  <?php foreach ($webinar as $w) :
    $id_user = $_SESSION['users_id'];
    $id_webinar = $w['webinar_id'];
    $check = $this->db->query("SELECT * FROM tbl_webinar_peserta WHERE peserta_users_id = '$id_user' AND peserta_webinar_id = '$id_webinar' ")->row_array();
    $chk = $this->db->query("SELECT * FROM tbl_webinar_peserta WHERE peserta_users_id = '$id_user' AND peserta_webinar_id = '$id_webinar' ")->num_rows();
  ?>
    <div class="modal fade" id="link_webinar<?= $w['webinar_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php if ($check['peserta_status'] == 0) : ?>
              <p>Anda Belum Terdaftar</p>
            <?php elseif ($check['peserta_status'] == 4) : ?>
              <p>Anda Tidak Terdaftar</p>
            <?php elseif (empty($w['webinar_link'])) : ?>
              <P>Link Belum Tersedia</P>
            <?php else : ?>
              <a href="<?= $w['webinar_link'] ?>"><?= $w['webinar_link'] ?></a>
            <?php endif ?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach ?>
  <?php foreach ($webinar as $w) : ?>
    <div class="modal fade" id="pamflet_webinar<?= $w['webinar_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="<?= base_url('pamflet/' . $w['webinar_pamflet']) ?>" alt="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach ?>