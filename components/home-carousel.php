<?php
$image = [
  'slide1.jpg',
  'slide2.jpg',
  'slide3.jpg'
];

?>


<div class="swiper-container full-swiper position-relative">
  <div class="swiper-wrapper mainfull-wrap">
    <?php foreach($image as $item): ?>
      <div class="swiper-slide main-cell">
        <img src="<?= $baseDir ?>/assets/image/<?= $item ;?>">
      </div>
    <?php endforeach; ?>
  </div>
  <div class="position-absolute top-0 start-0 w-100 h-100 bg-cover" style="z-index: 20;">
    <div class="container pt-5 mt-3 mt-md-0 mt-lg-5">
      <div class="row py-3 text-center text-lg-start">
        <div class="col-12 col-lg-auto">
          <img src="<?= $baseDir ?>/assets/image/smekda.png" style="width: 160px; height: auto;">
        </div>
        <div class="col-12 col-lg text-light">
          <div class="knm-fs-2 fw-light mb-3">
            Web Profil jurusan SIJA <small class="d-block d-lg-inline">(Sistem Informasi Jaringan & Aplikasi)</small>
          </div>
          <h1 class="pb-0 knm-fs-1 text-nowrap" style="color: yellow; line-height: 0.7em;">SMK Negeri 2 Surabaya</h1>
          <div class="knm-fs-3 fw-light">Jalan Tentara Genie Pelajar No 26</div>
        </div>
      </div>        
    </div>
  </div>  
</div>