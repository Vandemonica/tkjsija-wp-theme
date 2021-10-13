<?php
  // low budget ENV var
  $online = false;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistem Informatika, Jaringan, dan Aplikasi (SIJA) merupakan kompetensi keahlian baru berbasis Teknologi Informasi dan Komunikasi pada program keahlian Teknik Komputer dan Informatika">
  <meta name="keywords" content="SIJA, SMKN 2 Surabaya, profil SIJA, smekda, SIJA smekda">
  <meta name="author" content="SIJA SMEKDA">
  <link rel="shortcut icon" type="image/jpg" href="<?= get_stylesheet_directory_uri(); ?>/assets/image/smekda.png"/>

  <?php if($online): ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/css/swiper.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.6/js/swiper.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <?php else: ?>
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/_framework/bootsrap.css" type="text/css">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/_framework/swiper.css" type="text/css">
    <script src="<?= get_stylesheet_directory_uri(); ?>/_framework/bootsrap.js"></script>
    <script src="<?= get_stylesheet_directory_uri(); ?>/_framework/swiper.js"></script>
    <script src="<?= get_stylesheet_directory_uri(); ?>/_framework/alpine.js"></script>
  <?php endif; ?>
   
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/style.css">

  <title><?= isset($pageTitle) ? $pageTitle.' |' : '' ?> TKJ-SIJA</title>
</head>
<body>
  <?php include 'components/navbar.php'; ?>