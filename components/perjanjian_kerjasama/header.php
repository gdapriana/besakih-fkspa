<?php
  $hero_data = json_decode(json_encode([
    'logo' => '../../assets/besakih.png',
    'background' => 'https://images.unsplash.com/photo-1655289112205-d3b56c6b61f8?q=80&w=2105&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    'navigations' => [
      ['title' => 'Kebijakan', 'link' => './kebijakan.php', 'active' => false],
      ['title' => 'Standar Operasional dan Prosedur', 'link' => './standar_operasional_dan_prosedur.php', 'active' => false],
      ['title' => 'Struktur Organisasi', 'link' => './struktur_organisasi.php', 'active' => false],
      ['title' => 'Job Description', 'link' => './job_description.php', 'active' => false],
      ['title' => 'Perjanjian Kerja Sama', 'link' => './perjanjian_kerjasama.php', 'active' => true],
    ],
  ]))
?>

<main id="perjanjian-header-root" style="background-image: url(<?= $hero_data->background; ?>)">
  <header class="hero-header">
    <a href="/" class="logo">
      <img src="<?= $hero_data->logo ?>" alt="brand">
      <h1 class="logo-text">Badan Pengelola <br>Fasilitas Kawasan Suci <br> Pura Agung Besakih</h1>
    </a>
    <button class="hamburger-btn">
      <i class="fa-solid fa-bars"></i>
    </button>

<!--    <a class="hero-email">-->
<!--      <i class="fa-solid fa-envelope"></i>-->
<!--      Email-->
<!--    </a>-->
  </header>
  <main class="hero-content">
    <div class="hero-left">
<!--      <form action="" class="hero-form">-->
<!--        <label for="" class="input-label">-->
<!--          <input type="text" placeholder="Login">-->
<!--        </label>-->
<!--        <label for="" class="input-label">-->
<!--          <input type="text" placeholder="Password">-->
<!--        </label>-->
<!--      </form>-->
    </div>
    <div class="hero-right">
      <div class="navigation-list">
        <?php foreach ($hero_data->navigations as $navigation) : ?>
          <a href="<?= $navigation->link; ?>" style="<?php if($navigation->active): ?>color: var(--colors); border-bottom: 1px solid var(--colors);<?php endif; ?>" class="navigation-item">
            <?= $navigation->title; ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
  </main>

  <div class="hero-overlay"></div>
</main>

<div id="perjanjian-hamburger-content">
  <header class="hamburger-header">
    <a href="#" class="logo">
      <img src="<?= $hero_data->logo ?>" alt="brand">
    </a>
    <button class="hamburger-btn-close">
      <i class="fa-solid fa-close"></i>
    </button>
  </header>
  <main class="hamburger-list">
    <?php foreach ($hero_data->navigations as $navigation) : ?>
      <a class="hamburger-link" href="<?= $navigation->link ?>">
        <?= $navigation->title ?>
      </a>
    <?php endforeach; ?>
  </main>

  <a class="hamburger-email">
    <i class="fa-solid fa-envelope"></i>
    Email
  </a>
</div>

<script defer>
  document.addEventListener('DOMContentLoaded', () => {
    const heroHamburgerBtn = document.querySelector('#perjanjian-header-root .hamburger-btn')
    const heroHamburgerBtnClose = document.querySelector('#perjanjian-hamburger-content .hamburger-btn-close')
    const heroHamburgerContent = document.querySelector('#perjanjian-hamburger-content')

    heroHamburgerBtn.addEventListener('click', () => {
      heroHamburgerContent.style.right = "0"
      heroHamburgerContent.style.opacity = "1"
    })

    heroHamburgerBtnClose.addEventListener('click', () => {
      heroHamburgerContent.style.right = "-100%"
      heroHamburgerContent.style.opacity = "0"
    })

  })
</script>
