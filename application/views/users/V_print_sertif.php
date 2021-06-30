<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Sertif</title>
    <style>
        @media print {
            @page {
                margin: 0;
                size: A5, landscape;
            }
        }

        .sertif {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
        }

        .nama_peserta {
            position: absolute;
            font-size: <?= $sertif['sertif_ukuran'] + 10 . '%' ?>;
            color: <?= $sertif['sertif_warna'] ?>;
            top: <?= $sertif['sertif_vertical'] + 7 . '%' ?>;
            left: <?= $sertif['sertif_horizontal'] . '%' ?>;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>
    <div class="container">
        <img class="sertif" src="<?= base_url('sertif/' . $sertif['sertif_template']) ?>" alt="">
        <b class="nama_peserta"><?= $users['users_nama'] ?></b>
    </div>
</body>

</html>
<script>
    window.print();
</script>