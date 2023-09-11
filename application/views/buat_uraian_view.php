<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Soal</title>
    <link rel="stylesheet" href="styles.css"> <!-- Sesuaikan dengan nama file CSS Anda -->
    <style>
        /* CSS untuk tampilan */
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        header nav ul {
            list-style-type: none;
            padding: 0;
        }

        header nav ul li {
            display: inline;
            margin-right: 20px;
        }

        .container {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 20px auto;
            max-width: 800px;
            padding: 20px;
        }

        .page-title {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-group {
            text-align: right;
        }

        .btn {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-cancel {
            background-color: #ccc;
            margin-right: 10px;
        }

        /* Gaya tambahan untuk elemen file input */
        input[type="file"] {
            display: block;
            margin-top: 5px;
        }

        /* Gaya tambahan untuk elemen textarea */
        textarea {
            resize: none;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Tentang Kami</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h1 class="page-title">Buat Soal</h1>
        <form action="<?= base_url('soal/simpan_uraian') ?>" method="post" enctype="multipart/form-data">
            <!-- ... Form untuk soal uraian ... -->
        </form>

        <hr> <!-- Garis pemisah -->

        <?=form_open_multipart('soal/save', array('id'=>'formsoal'), array('method'=>'add'));?>
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?=$subjudul?></h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="box-body">
                <!-- ... Form untuk soal pilihan ganda ... -->
            </div>
        </div>
        <!-- Tombol Submit -->
        <div class="form-group col-sm-12">
            <a href="<?=base_url('soal')?>" class="btn btn-flat btn-default"><i class="fa fa-arrow-left"></i> Batal</a>
            <button type="submit" id="submit" class="btn btn-flat bg-purple"><i class="fa fa-save"></i> Simpan</button>
        </div>
        <?=form_close();?>
    </div>
</body>
</html>
