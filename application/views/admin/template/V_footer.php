        </div>
        <!-- jquery
		============================================ -->
        <script src="<?= base_url('assets/admin/js/vendor/jquery-1.12.4.min.js') ?> "></script>
        <!-- bootstrap JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/bootstrap.min.js') ?> "></script>
        <!-- wow JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/wow.min.js') ?> "></script>
        <!-- price-slider JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/jquery-price-slider.js') ?> "></script>
        <!-- meanmenu JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/jquery.meanmenu.js') ?> "></script>
        <!-- owl.carousel JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/owl.carousel.min.js') ?> "></script>
        <!-- sticky JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/jquery.sticky.js') ?> "></script>
        <!-- scrollUp JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/jquery.scrollUp.min.js') ?> "></script>
        <!-- mCustomScrollbar JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') ?> "></script>
        <script src="<?= base_url('assets/admin/js/scrollbar/mCustomScrollbar-active.js') ?> "></script>
        <!-- metisMenu JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/metisMenu/metisMenu.min.js') ?> "></script>
        <script src="<?= base_url('assets/admin/js/metisMenu/metisMenu-active.js') ?> "></script>
        <!-- touchspin JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/touchspin/jquery.bootstrap-touchspin.min.js') ?> "></script>
        <script src="<?= base_url('assets/admin/js/touchspin/touchspin-active.js') ?> "></script>
        <!-- colorpicker JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/colorpicker/jquery.spectrum.min.js') ?> "></script>
        <script src="<?= base_url('assets/admin/js/colorpicker/color-picker-active.js') ?> "></script>
        <!-- datapicker JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/datapicker/bootstrap-datepicker.js') ?> "></script>
        <script src="<?= base_url('assets/admin/js/datapicker/datepicker-active.js') ?> "></script>
        <!-- input-mask JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/input-mask/jasny-bootstrap.min.js') ?> "></script>
        <!-- chosen JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/chosen/chosen.jquery.js') ?> "></script>
        <script src="<?= base_url('assets/admin/js/chosen/chosen-active.js') ?> "></script>
        <!-- select2 JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/select2/select2.full.min.js') ?> "></script>
        <script src="<?= base_url('assets/admin/js/select2/select2-active.js') ?> "></script>
        <!-- ionRangeSlider JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/ionRangeSlider/ion.rangeSlider.min.js') ?> "></script>
        <script src="<?= base_url('assets/admin/js/ionRangeSlider/ion.rangeSlider.active.js') ?> "></script>
        <!-- rangle-slider JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/rangle-slider/jquery-ui-1.10.4.custom.min.js') ?> "></script>
        <script src="<?= base_url('assets/admin/js/rangle-slider/jquery-ui-touch-punch.min.js') ?> "></script>
        <script src="<?= base_url('assets/admin/js/rangle-slider/rangle-active.js') ?> "></script>
        <!-- knob JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/knob/jquery.knob.js') ?> "></script>
        <script src="<?= base_url('assets/admin/js/knob/knob-active.js') ?> "></script>
        <!-- tab JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/tab.js') ?> "></script>
        <!-- plugins JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/plugins.js') ?> "></script>
        <!-- main JS
		============================================ -->
        <script src="<?= base_url('assets/admin/js/main.js') ?> "></script>
        <script src="<?= base_url('assets/admin/js/data-table/bootstrap-table.js') ?>"></script>
        <script src="<?= base_url('assets/admin/js/data-table/tableExport.js') ?>"></script>
        <script src="<?= base_url('assets/admin/js/data-table/data-table-active.js') ?>"></script>
        <script src="<?= base_url('assets/admin/js/data-table/bootstrap-table-editable.js') ?>"></script>
        <script src="<?= base_url('assets/admin/js/data-table/bootstrap-editable.js') ?>"></script>
        <script src="<?= base_url('assets/admin/js/data-table/bootstrap-table-resizable.js') ?>"></script>
        <script src="<?= base_url('assets/admin/js/data-table/colResizable-1.5.source.js') ?>"></script>
        <script src="<?= base_url('assets/admin/js/data-table/bootstrap-table-export.js') ?>"></script>
        </body>

        </html>
        <script>
          $(document).ready(function() {
            $('#free').click(function() {
              if ($(this).prop("checked") == true) {
                $('#htm').remove();
              } else if ($(this).prop("checked") == false) {
                $('#wadah').append('<li id="htm"><div class="form-group-inner"><div class="row"><div class="col-lg-2 col-md-3 col-sm-3 col-xs-12"><label class="login2 pull-right pull-right-pro">Method Pembayaran</label></div><div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"><select name="method" required="" class="form-control"><option value="">-Pilih Method Pembayaran-</option><?php foreach ($method as $m) : ?><option value="<?= $m['method_nama'] ?>"><?= $m['method_nama'] ?></option><?php endforeach ?></select></div></div></div><div class="form-group-inner"><div class="row"><div class="col-lg-2 col-md-3 col-sm-3 col-xs-12"><label class="login2 pull-right pull-right-pro">Atas Nama</label></div><div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"><input type="text" required="" name="atas_nama" class="form-control" /></div></div></div><div class="form-group-inner"><div class="row"><div class="col-lg-2 col-md-3 col-sm-3 col-xs-12"><label class="login2 pull-right pull-right-pro">No Rek</label></div><div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"><input type="number" required="" name="no_rek" class="form-control" /></div></div></div><div class="form-group-inner"><div class="row"><div class="col-lg-2 col-md-3 col-sm-3 col-xs-12"><label class="login2 pull-right pull-right-pro">HTM</label></div><div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"><input type="number" required="" name="htm" class="form-control" /></div></div></div></li>');
              }
            });
          });
        </script>
        <script>
          $(document).ready(function() {
            $('#ukuran').change(function() {
              value = $('#ukuran').val();
              $('.nama_peserta').css("font-size", value + '%');
            });
            $('#vertikal').change(function() {
              value = $('#vertikal').val();
              $('.nama_peserta').css("top", value + '%');
            });
            $('#horizontal').change(function() {
              value = $('#horizontal').val();
              $('.nama_peserta').css("left", value + '%');
            });
            $('#hex').change(function() {
              value = $('#hex').val();
              $('.nama_peserta').css("color", value);
            });
          });
        </script>