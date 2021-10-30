<?php 
  get_header(); 
  $baseDir = get_stylesheet_directory_uri();
  $thumbnail = get_the_post_thumbnail_url() != '' ? get_the_post_thumbnail_url() : $baseDir."/assets/image/slide1.jpg";
?>


<div class="position-absolute w-100 d-none d-md-block" style="height: 500px;">
  <img src="<?= $thumbnail ?>" class="w-100 h-100" style="object-fit: cover;">
  <div class="position-absolute top-0 left-0 bg-cover w-100 h-100"></div>
</div>

<div class="container position-relative py-5 px-md-5 mb-5" style="z-index: 20;">
  <div class="post-card pt-5 p-md-5 mx-lg-5">    
    <img src="<?= $thumbnail ?>" class="w-100 h-auto border shadow d-md-none">
    
    <div class="mt-3">
      <h1 class="fs-2 header-underline pb-1 pe-4"><?= the_title() ?></h1>      
      <div class="text-muted">
        <div class="fw-bold">Diposting pada tanggal:</div>
        <div><?= get_the_date( 'd M Y' ) ?></div>
      </div>      
    </div>
    <div class="mt-3">
      <?php the_content() ?>       
    </div>
  </div>    
</div>

<?php get_footer(); ?>