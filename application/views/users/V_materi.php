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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />
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
                        <b>Video materi</b>
                    </div>
                    <div id="video">
                        <?php foreach ($video as $v) : ?>
                            <div class="card mb-3" style="max-width: 540px;">
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
                        <b>Document materi</b>
                    </div>
                    <?php foreach ($materi as $m) : ?>
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div style="padding-left:30px;padding-top:20px;" class="col-md-2">
                                    <span class="fa fa-file fa-2x"></span>
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <a href="<?= base_url('materi/' . $m['materi_nama']) ?>" class="card-title"><?= $m['materi_nama'] ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </section>
        </div>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>