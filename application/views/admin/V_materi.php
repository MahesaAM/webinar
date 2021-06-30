<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
    <!-- Custom fonts for this template -->
    <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <style>
        .showcase .container {
            min-height: 350px;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .call-to-action {
            position: relative;
            background-color: #343a40;
            background: url("../img/bg-masthead.jpg") no-repeat center center;
            background-size: cover;
            padding-top: 7rem;
            padding-bottom: 7rem;
        }

        .call-to-action .overlay {
            position: absolute;
            background-color: #212529;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            opacity: 0.3;
        }

        .padall {
            padding: 3px;
        }


        .list-inline {
            list-style-type: none;
        }

        .list-inline-item a {
            color: #FFFFFF;
        }




        #event-calendar table {
            width: 100%;
        }

        #event-calendar table tr th {
            border: 1px solid #ddd;
            width: 80px;
            height: 30px;
            text-align: center;
            color: gray;
            font-size: 14px;
            font-weight: 400;
        }

        #event-calendar table tr td {
            border: 1px solid #ddd;
            width: 80px;
            text-align: center;
        }

        #event-calendar .calendar tr td:last-child>a {
            color: #C4C4C4;
        }

        #event-calendar .calendar td>a {
            position: relative;
            z-index: 2;
            font-size: 20px;
            font-weight: 300;
        }

        #event-calendar .calendar td div.highlight {
            background-color: #EEEEEE;
            color: red;
            width: 100%;
            left: 0;
            right: 1px;
            position: absolute;
            top: 0;
            bottom: 1px;
            z-index: 0;
        }

        #event-calendar .calendar td {
            position: relative;
        }

        #event-calendar table tr td {
            height: 90px;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-6">
            <section class="showcase">
                <div class="container">
                    <div class="pb-2 mt-4 mb-2 border-bottom">
                        <b>Upload video materi</b>
                    </div>
                    <form id="upload-form" class="upload-form" method="post">
                        <div class="row align-items-center">
                            <div class="form-group col-md-9">
                                <div class="custom-file">
                                    <input type="hidden" value="<?= $_GET['id'] ?>" name="id">
                                    <input type="file" class="custom-file-input" id="customFile" name="upl_file">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                                <span id="chk-error"></span>
                            </div>
                            <div class="form-group col-md-3">
                                <button type="submit" class="btn btn-primary float-left" id="upload-file"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
                            </div>
                        </div>
                    </form>
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="progress" style="display: none;">
                                <div id="file-progress-bar" class="progress-bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <div id="uploaded_file"></div>
                        </div>
                    </div>
                    <div id="video">
                        <?php foreach ($video as $v) : ?>
                            <div id="r<?= $v['materi_id'] ?>" class="card mb-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div class="col-md-7">
                                        <video width="300" controls>
                                            <source src="<?= base_url('video/' . $v['materi_nama']) ?>" type="video/mp4">
                                            Your browser does not support HTML video.
                                        </video>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-body">
                                            <p class="card-title"><?= $v['materi_nama'] ?></p>
                                            <hr>
                                            <button id-materi="<?= $v['materi_id'] ?>" data-toggle="modal" data-target="#hapus_materi" class="btn btn-danger btn-sm float-right del"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-6">
            <section class="showcase">
                <div class="container">
                    <div class="pb-2 mt-4 mb-2 border-bottom">
                        <b>Upload document materi</b>
                    </div>
                    <form id="upload-doc" class="upload-doc" method="post">
                        <div class="row align-items-center">
                            <div class="form-group col-md-9">
                                <div class="custom-file">
                                    <input type="hidden" value="<?= $_GET['id'] ?>" name="id">
                                    <input type="file" class="custom-file-doc" id="document" name="document">
                                    <label class="custom-file-label" for="document">Choose file</label>
                                </div>
                                <span id="doc-error"></span>
                            </div>
                            <div class="form-group col-md-3">
                                <button type="submit" class="btn btn-primary float-left" id="upload-document"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
                            </div>
                        </div>
                    </form>
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="progress-doc" style="display: none;">
                                <div id="file-progress-bar" class="progress-doc-bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <div id="uploaded_file"></div>
                        </div>
                    </div>
                    <div id="materi">
                        <?php foreach ($materi as $m) : ?>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                    <div style="padding-left:30px;padding-top:20px;" class="col-md-2">
                                        <span class="fa fa-file fa-2x"></span>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <a href="<?= base_url('materi/' . $m['materi_nama']) ?>" class="card-title"><?= $m['materi_nama'] ?></a>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <a style="float: right;" href="" class="btn btn-sm"><i class="fa fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="modal fade" id="hapus_materi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Apakah Anda Yakin Ingin Menghapus ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                    <input type="hidden" id="id-materi">
                    <button type="submit" id="hapus" class="btn btn-danger" data-dismiss="modal">Iya</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<script>
    $(document).on('click', '.del', function() {
        var id = $(this).attr('id-materi');
        $('#id-materi').val(id);
    });
    $('#hapus').click(function() {
        var id = $('#id-materi').val();
        $.ajax({
            type: 'post',
            url: '<?= base_url('admin/Uploads/hapus_materi') ?>',
            data: {
                id: id
            },
            success: function(data) {
                $("#r" + id).hide();
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).on('submit', '#upload-form', function(e) {
        $("#chk-error").html('');
        $('.progress').show();
        e.preventDefault();
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress", function(element) {
                    if (element.lengthComputable) {
                        var percentComplete = ((element.loaded / element.total) * 100);
                        $("#file-progress-bar").width(percentComplete + '%');
                        $("#file-progress-bar").html(percentComplete + '%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: "<?php echo base_url(); ?>admin/Uploads/upl",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
            beforeSend: function() {
                $("#file-progress-bar").width('0%');
            },

            success: function(json) {

                if (json[0] == 'success') {
                    $('#upload-form')[0].reset();
                    $('#video').append('<div class="card mb-3" style="max-width: 540px;"><div class="row no-gutters"><div class="col-md-7"><video width="300" controls><source src="<?= base_url('video/') ?>' + json[1] + '" type="video/mp4">Your browser does not support HTML video.</video></div><div class="col-md-5"><div class="card-body"><p class="card-title">' + json[1] + '</p><hr><button id-materi="' + json[2] + '" data-toggle="modal" data-target="#hapus_materi" class="btn btn-danger btn-sm float-right del"><i class="fa fa-trash"></i></button></div></div></div></div>');
                } else if (json[0] == 'failed') {
                    $('#uploaded_file').html('<p style="color:#EA4335;">Please select a valid file to upload.</p>');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    });

    // Check File type validation
    $("#upl-file").change(function() {
        var allowedTypes = ['video/mp4', 'video/3gp', 'video/mkv'];
        var file = this.files[0];
        var fileType = file.type;
        if (!allowedTypes.includes(fileType)) {
            jQuery("#chk-error").html('<small class="text-danger">Please choose a valid file (JPEG/JPG/PNG/GIF/PDF/DOC/DOCX)</small>');
            $("#upl-file").val('');
            return false;
        } else {
            jQuery("#chk-error").html('');
        }
    });
</script>

<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

<script type="text/javascript">
    $(document).on('submit', '#upload-doc', function(e) {
        $("#doc-error").html('');
        $('.progress-doc').show();
        e.preventDefault();
        $.ajax({
            xhr: function() {
                var xhr = new window.XMLHttpRequest();
                xhr.upload.addEventListener("progress-doc", function(element) {
                    if (element.lengthComputable) {
                        var percentComplete = ((element.loaded / element.total) * 100);
                        $("#file-progress-doc-bar").width(percentComplete + '%');
                        $("#file-progress-doc-bar").html(percentComplete + '%');
                    }
                }, false);
                return xhr;
            },
            type: 'POST',
            url: "<?php echo base_url(); ?>admin/Uploads/doc",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
            beforeSend: function() {
                $("#file-progress-doc-bar").width('0%');
            },

            success: function(json) {

                if (json[0] == 'success') {
                    $('#upload-form')[0].reset();
                    $('#materi').append('<div class="card mb-3" style="max-width: 540px;"><div class="row no-gutters"><div style="padding-left:30px;padding-top:20px;" class="col-md-2"><span class="fa fa-file fa-2x"></span></div><div class="col-md-8"><div class="card-body"><p class="card-title">' + json[1] + '</p></div></div></div></div>');
                } else if (json[0] == 'failed') {
                    $('#uploaded_file').html('<p style="color:#EA4335;">Please select a valid file to upload.</p>');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    });

    // Check File type validation
    $("#document").change(function() {
        var allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.ms-office'];
        var file = this.files[0];
        var fileType = file.type;
        if (!allowedTypes.includes(fileType)) {
            jQuery("#doc-error").html('<small class="text-danger">Please choose a valid file (JPEG/JPG/PNG/GIF/PDF/DOC/DOCX)</small>');
            $("#document").val('');
            return false;
        } else {
            jQuery("#doc-error").html('');
        }
    });
</script>

<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-doc").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>