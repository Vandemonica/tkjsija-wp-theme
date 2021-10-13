<?php 
  get_header(); 

  $profil = [
    [
      'img' => '/assets/image/about/Rafli.jpeg',
      'nama' => 'Ahmad Rafli Al Adzani',
      'absen' => 3
    ],
    [
      'img' => '/assets/image/about/Christyan.jpeg',
      'nama' => 'Christyan Anugerah Pamungkas',
      'absen' => 10
    ],
    [
      'img' => '/assets/image/about/Ivan.jpeg',
      'nama' => 'Ivan Nircahya',
      'absen' => 19
    ]
  ];
?>


<div class="container px-lg-5 py-5">
  <div class="py-5 px-lg-5">
    <div class="mb-3">
      <h2 class="fw-light header-underline mx-auto pb-1 px-3">Guru Pengajar</h2>
    </div>   
    <div class="mx-auto text-center">
      <img class="rounded-circle" src="<?= get_stylesheet_directory_uri() ?>/assets/image/profil.jpeg">
      <h4>Kevin Patria, S.Pd</h4>
    </div>
  </div>

  <div class="px-lg-5">
    <div class="mt-5 mb-3">
      <h2 class="fw-light header-underline mx-auto pb-1 px-3">About</h2>
    </div>  
    <div class="indent">
      Assalammualaikum wr.wb Puji syukur kehadirat Tuhan Yang Maha Esa atas berkah 
      yang melimpah sehingga kami dapat membangun website profil SIJA ini.       
      <br>
      <br>
      Website <strong>TKJ-SIJA</strong> ini kami bangun dalam rangka mengerjakan tugas dari 
      <strong>Pak Kevin Patria, S.Pd</strong> mengenai pengenalan cara kerja dan konsep layanan komputasi awan
      dari mata pelajaran SAAS (Software as a Service).
      <br>
      <br>
      Kami harap website ini dapat memudahkan penyampaian informasi ke 
      warga sekolah dan masyarakat yang ingin mencari tahu informasi tentang SIJA.
    </div>
  </div>
</div>

<div class="container-md px-lg-5">
  <div class="mt-5 mb-3 px-lg-5">
    <h2 class="fw-light header-underline mx-auto pb-1 px-3">Tentang Kelompok</h2>
  </div>  
  <div class="px-lg-5">
    <div class="row px-0 mb-5">
      <div class="col-5 col-md-3 about-col px-0">
        <div class="w-100 h-100">
          <div class="swiper w-100 h-100 overflow-hidden">
            <div class="swiper-wrapper">
              <?php foreach($profil as $item): ?>
                <div class="swiper-slide position-relative overflow-hidden">
                  <img src="<?= get_stylesheet_directory_uri().$item['img'] ?>" class="w-100 h-100">
                  <div class="position-absolute w-100 bottom-0 p-1 bg-cover text-white">
                    <small><?= $item['nama'] ?></small>
                  </div>
                </div>
              <?php endforeach; ?>              
            </div>
          </div>
        </div>        
      </div>
      
      <div class="col-7 col-md-9 about-col py-2" style="overflow-y: auto;">              
        <h5 class="fw-light header-sideborder mb-0 pb-2 mb-2">Anggota kelompok</h5>
        <ul class="list-unstyled">
          <li class="mb-2">
            <strong>Kelas XII-SIJA</strong>          
          </li>
          <?php foreach($profil as $item): ?>
            <li class="mb-3">
              <div class="d-md-inline">Nama:</div>
              <div class="d-md-inline fw-bold"><?= $item['nama'] ?></div>
              <div>Absen: <strong><?= $item['absen'] ?></strong></div>                 
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>  
</div>


<script>
  const swiper = new Swiper('.swiper', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    centeredSlides: true,
    autoplay: {
      delay: 4500,
      disableOnInteraction: false,
    },
  });
</script>

<?php get_footer(); ?>