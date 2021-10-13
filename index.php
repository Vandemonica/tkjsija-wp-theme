<?php get_header(); 


$block = [
  [
    'header' => 'Apa itu SIJA?',
    'body' => 'Sistem Informatika, Jaringan, dan Aplikasi (SIJA) merupakan kompetensi keahlian baru berbasis 
                Teknologi Informasi dan Komunikasi pada program keahlian Teknik Komputer dan Informatika'
  ],
  [
    'header' => 'Keunggulan SIJA',
    'body' => 'Jurusan ini gabungan dari Rekayasa Perangkat Lunak (RPL) dan Teknik Komputer Jaringan (TKJ). 
                Jurusan SIJA merupakan jurusan yang lengkap dan menarik, jurusan ini sangat mendukung perkembangan Teknologi, 
                dan perkembangan Industri 4.0 yang akan menuju 5.0. Pembelajaran jurusan SIJA di SMK berlangsung selama 4 tahun yang 
                terbagi menjadi dua 2 model belajar, yaitu belajar di sekolah selama 3 tahun dan belajar di industri selama 1 tahun. 
                Dengan program study 4 tahun ini, lulusan SIJA bisa setara dengan D1'
  ],
  [
    'header' => 'Visi dan Misi',
    'visi' => 'Menjadi jurusan terdepan dalam bidang ilmu teknologi informasi',
    'misi' => [
      'Mendorong kompetensi keahlian yang mandiri berbasis teknologi informasi',
      'Mencetak peserta didik berbudi pekerti, berjiwa mandiri, dan memiliki daya saing',
      'Menjadikan tamatan memiliki kompetensi bertaraf internasional',
    ]
  ],
];

$kalimat_pembuka = "
    Assalammualaikum wr.wb Puji syukur kehadirat Tuhan Yang Maha Esa atas berkah yang melimpah
    sehingga kami dapat membangun website profil SIJA ini. <br><br>
    Kami harap website ini dapat memudahkan penyampaian informasi 
    ke warga sekolah dan masyarakat yang ingin mencari tahu tentang SIJA
";



// Base Sistem url dimulai dari folder tema anda
$baseDir = get_stylesheet_directory_uri() ?>

<!-- Carousel utama -->
<div class="pt-4 pt-md-5">
  <div class="bg-dark shadow" style="height: 70px;"></div>
  <?php include 'components/home-carousel.php' ?>
</div>

<div class="bg-dark shadow text-light py-1">
  <?php include 'components/marquee.php' ?>
</div>

<div class="container mb-5 pb-5">
  <div class="row my-5">
    <!-- Bagian kiri -->
    <div class="col-12 col-lg-8">
      <?php foreach($block as $item): ?>
        <?php if(isset($item['visi'])): ?>
          <div class="mb-5">
            <div class="mb-3">
              <h2 class="fw-light header-underline mx-auto pb-1 px-3"><?= $item['header'] ?></h2>
            </div>          
            <div class="mb-3">
              <h3 class="fs-4 fw-light header-underline-sm pb-1 pe-3">Visi SIJA</h3>  
              <div class="shadow p-2 fst-italic fw-bold cursor-none text-light bg-gradient-theme">
                <?= $item['visi'] ?>
              </div>
            </div>
            <div class="mb-5">
              <h3 class="fs-4 fw-light header-underline-sm ms-auto pb-1 ps-3">Misi SIJA</h3>  
              <ul class="list-unstyled">
                <?php foreach($item['misi'] as $misi): ?>
                  <li class="header-sideborder shadow-sm mb-3"><?= $misi ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        <?php else: ?>
          <div class="mb-5">
            <div class="mb-2">
              <h3 class="fw-light header-underline mx-auto mx-lg-0 pb-1 px-2 px-lg-0 pe-lg-4"><?= $item['header'] ?></h3>
            </div>          
            <div class="indent">
              <?= $item['body'] ?>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>

      <div class="mb-5">
        <div class="mb-2">
          <h3 class="fw-light header-underline mx-auto mx-lg-0 pb-1 px-2 px-lg-0 pe-lg-4">Berita dan Blog</h3>
        </div>          
        <?php include 'components/berita-blog.php' ?>
      </div>

      <div style="height: 100px;"></div>

      <div class="pt-5 mt-5">
        <h2 class="mb-2 fw-light header-sideborder">Lokasi Sekolah</h2>
        <div class="google-maps p-1">
          <iframe src="https://maps.google.com/maps?q=smkn-2-surabaya&z=17&output=embed" allowfullscreen></iframe>  
        </div>
      </div>
    </div>


    <!-- Bagian kanan -->
    <div class="col-12 col-lg-4 pt-5 pt-lg-0 mt-5 mt-lg-0">
      <div class="mb-5">
        <h4 class="fw-light mb-3 header-sideborder">Profil sekolah</h4>
        <div class="youtube">
          <iframe src="https://www.youtube.com/embed/rvh19U1PsLI" style="width: 100%;"></iframe>
        </div>        
      </div>

      <div class="bg-light shadow-sm mb-5 mb-lg-0" x-data="{ open: true }">
        <div class="d-flex cursor-pointer pb-0" x-on:click="open = !open">
          <h4 class="fw-light header-sideborder mb-0 pb-2">Kata Sambutan</h4>
          <div class="ms-auto pe-2"><i class="las fs-3 pt-1" :class="{'la-sort-down': open === true, 'la-sort-up': open === false}"></i></div>
        </div>
        <div x-show="open">
          <div class="text-center border-bottom py-2">
            <img src="<?=$baseDir?>/assets/image/smekda.png">
          </div>
          <div class="p-3">
            <div class="indent">
              <?= $kalimat_pembuka ?>
            </div>                
          </div>
        </div>          
      </div>

      <div class="sticky-lg-top sticky-padding" style="z-index: 10;">
        <div class="bg-light shadow-sm mb-5" x-data="{ open: true }">
          <div class="d-flex cursor-pointer pb-0" x-on:click="open = !open">
            <h4 class="fw-light header-sideborder mb-0 pb-2">Tautan</h4>
            <div class="ms-auto pe-2"><i class="las fs-3 pt-1" :class="{'la-sort-down': open === true, 'la-sort-up': open === false}"></i></div>
          </div>
          <div x-show="open">
            <div class="list-group rounded-0">
              <a href="http://smk.kemdikbud.go.id/" class="list-group-item list-group-item-action border-top-0 border-start-0 border-end-0">Direktorat Pembinaan SMK</a>
              <a href="https://www.smkn2sby.sch.id" class="list-group-item list-group-item-action border-start-0 border-end-0">Web SMKN 2 Surabaya</a>
              <a href="http://elearning.smkn2sby.sch.id/" class="list-group-item list-group-item-action border-start-0 border-end-0">Elearning SMKN 2 Surabaya</a>
            </div>
          </div>          
        </div>  
        <div class="bg-light border shadow-sm p-3 mb-5">
          <small>Dapatkan notifikasi ketika ada pengumuman atau postingan baru</small>
          <form>
            <div class="input-group mt-2">
              <input type="text" class="form-control" placeholder="Alamat Email">
              <button class="btn btn-outline-primary" type="button"><i class="las la-envelope"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>



  </div>
</div>



<script>
  const mainc = new Swiper('.full-swiper', {
    loop: true,
    autoplay: {
      delay: 4000,
    },
  });

  const berita = new Swiper('.berita-swiper', {
    loop: true,

    navigation: {
      nextEl: '#b-next',
      prevEl: '#b-prev',
    },
  });
</script>

<?php get_footer(); ?>