<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title><?= $judul ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="<?= base_url() ?>assets/template_frontend/css/bootstrap.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/template_frontend/css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/template_frontend/css/flexslider.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/template_frontend/css/prettyPhoto.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/template_frontend/css/camera.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/template_frontend/css/jquery.bxslider.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/template_frontend/css/style.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/tabel.css" rel="stylesheet" />
  <link rel="icon" type="image/png" href="<?= base_url() ?>assets/bg/logo.png" />

  <!-- <link href="<?= base_url() ?>assets/datatable/css/dataTables.bootstrap.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/datatable/css/dataTables.bootstrap.min.css" rel="stylesheet" /> -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
  <style>
    .table-container {
      overflow: auto;
    }
  </style>
  <script>
    $(document).ready(function() {
      $('a.more').click(function() {
        $tr = $(this).parent().parent();
        $tr = toggleClass('expanded');

        $i = $(this).children('i');
        $i.removeClass('fa-chevron-down', 'fa-chevron-up');
        var arrow = $tr.hasClass('expanded') ? 'fa-chevron-up' : 'fa-chevron-down';
        $i.addClass(arrow);

        return false;
      });
    });
  </script>

  <!-- Theme skin -->
  <link href="<?= base_url() ?>assets/template_frontend/color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url() ?>assets/template_frontend/ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url() ?>assets/template_frontend/ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url() ?>assets/template_frontend/ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="<?= base_url() ?>assets/template_frontend/ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="<?= base_url() ?>assets/template_frontend/ico/favicon.png" /> -->
  <link rel="stylesheet" href="<?php echo base_url('assets/jquery-ui/jquery-ui.min.css'); ?>" /> <!-- Load file css jquery-ui -->

  <!-- =======================================================
    Theme Name: Eterna
    Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>