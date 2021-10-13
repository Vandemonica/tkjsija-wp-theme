<?php

// Panduan mengisi array navbar:
// setiap satu object akan diecho menjadi satu menu navbar
// icon dan label wajib diisi
// sub opsional untuk diisi (jika sub diisi maka menu navbar akan jadi dropdown)
$array_menu = [
  [
    'label' => 'Home', 
    'icon' => '<i class="las la-home"></i>',
    'link' => '/'
  ],
  [
    'label' => 'Media Belajar', 
    'icon' => '<i class="las la-school"></i>', 
    'link' => 'http://elearning.smkn2sby.sch.id/'
  ],
  [
    'label' => 'Jurusan', 
    'icon' => '<i class="las la-users"></i>', 
    'sub' => [
      ['label' => 'Gallery', 'link' => '/gallery'],
      ['label' => 'Berita dan Blog', 'link' => '/berita-blog'],
      ['label' => 'Tentang', 'link' => '/about'],
      [],      
      ['label' => 'Halaman admin', 'link' => '/admin'],
    ] 
  ],
  [
    'label' => 'PPDB Surabaya', 
    'icon' => '<i class="las la-calendar-check"></i>', 
    'link' => 'https://surabaya.siap-ppdb.com/'
  ],
];

?>


<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-theme position-fixed top-0 w-100 shadow" style="z-index: 50;" id="navbar">
  <div class="container">
    <a class="navbar-brand" href="/">
      <!-- Logo -->
      <img src="<?= get_stylesheet_directory_uri(); ;?>/assets/image/sija-putih.png" width="110">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBody" aria-controls="navbarBody" aria-expanded="false" aria-label="Navbar Button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarBody">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll">
        <?php foreach($array_menu as $key => $menu): ?>
          <?php if(!empty($menu['sub'])): ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="<?= $menu['link'] ?>" id="navBody-<?= $key ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $menu['icon'] ?> <?= $menu['label'] ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navBody-<?= $key ?>">
                <?php foreach($menu['sub'] as $submenu): ?>
                  <?php if(empty($submenu)): ?>
                    <li><hr class="dropdown-divider"></li>
                  <?php else: ?>
                    <li><a class="dropdown-item" href="<?= $submenu['link'] ?>"><?= $submenu['label'] ?></a></li>
                  <?php endif; ?>
                <?php endforeach; ?>
              </ul>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link text-light" href="<?= $menu['link'] ?>"><?= $menu['icon'] ?> <?= $menu['label'] ?></a>
            </li>
          <?php endif?>
        <?php endforeach; ?>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pencarian.." aria-label="Search">
        <button class="btn btn-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>