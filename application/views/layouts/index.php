<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title .'-'.title()?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="<?= assets() ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= assets() ?>bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= assets() ?>bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= assets() ?>bower_components/icomoon/styles.css">
    <link rel="stylesheet" href="<?= assets() ?>dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= assets() ?>dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="<?= assets_css() ?>style.css">
    @provide(style)
</head>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">
        <?php $this->load->view('layouts/header') ?>
        <div class="content-wrapper">
            <section class="content-header">
                <h1><?= $title ?></h1>
                <ol class="breadcrumb">
                    <li><a href="<?= site_url('welcome') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <?= $links ?>
                </ol>
            </section>
            <section class="content">
                @provide(content)
            </section>
        </div>
        <?php $this->load->view('layouts/footer') ?>
    </div>

    <script src="<?= assets() ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?= assets() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= assets() ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= assets() ?>bower_components/fastclick/lib/fastclick.js"></script>
    <script src="<?= assets() ?>dist/js/adminlte.min.js"></script>
    <script src="<?= assets() ?>dist/js/demo.js"></script>
    @provide(script)
</body>

</html>
