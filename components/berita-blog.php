<div class="swiper-container berita-swiper">

  <div class="swiper-wrapper">
    <?php $postCount = 0; if (have_posts()): while (have_posts()): 
      if($postCount > 2){
        break;
      }
        the_post(); 
        $getThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbail-'.$post->ID ); 
        $thumbnail = $getThumbnail[0] !== null ? $getThumbnail[0] : $baseDir.'/assets/image/ph-berita.jpg';
        $postCount += 1;
    ?>
      <div class="swiper-slide knm-slide position-relative">
        <img src="<?= $thumbnail ?>" class="position-absolute start-0 top-0 w-100 h-100">
        <div class="bg-cover position-absolute start-0 top-0 w-100 h-100">
          <div class="knm-slide-card p-3 m-5 shadow">
            <div class="d-flex flex-column h-100">
              <div class="mb-auto">
                <h3 class="fw-light text-theme border-bottom border-primary pb-2"><?= Truncate(the_title(), 20) ?></h3>
                <small><?= get_the_date('d M Y');?></small>
                <p class="text-muted"><?= Truncate(get_the_content(), 40) ?></p>
              </div>
              <div class="mt-auto">
                <a href="<?= get_permalink() ?>" class="btn btn-sm btn-primary">
                  Baca Selengkapnya
                </a>
              </div>
            </div>            
          </div>          
        </div>        
      </div>
    <?php endwhile; endif; ?>
    <div class="swiper-slide knm-slide position-relative">
      <img src="<?= $baseDir ?>/assets/image/wave.png" class="position-absolute start-0 top-0 w-100 h-100">
      <div class="bg-cover position-absolute start-0 top-0 w-100 h-100">
        <div class="knm-slide-card p-3 m-5 shadow">
          <div class="d-flex flex-column h-100">
            <div class="mb-auto">
              <h3 class="fw-light text-theme border-bottom border-primary pb-2">Cari lebih banyak</h3>
              <p class="text-muted">Lihat lebih banyak Berita dan Blog tentang Jurusan SIJA</p>
            </div>
            <div class="mt-auto">
              <a href="/berita-blog" class="btn btn-sm btn-primary">
                Lihat Sekarang
              </a>
            </div>
          </div>            
        </div>          
      </div>        
    </div>
  </div>

  <div id="b-prev" class="swiper-button-prev"></div>
  <div id="b-next" class="swiper-button-next"></div>

</div>