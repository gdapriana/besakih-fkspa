<?php
  $struktur_section_1_data = json_decode(json_encode([
    'title' => 'BADAN PENGELOLA FKSPA BESAKIH',
    'subtitle' => 'Struktur Organisasi',
  ]))
?>


<section id="struktur-section-1">
  <div class="wrapper">
    <header class="header">
      <p class="subtitle"><?= $struktur_section_1_data->subtitle ?></p>
      <h1 class="title"><?= $struktur_section_1_data->title ?></h1>
    </header>
    <main class="content">
      <img src="https://jwc.gotra-resources.my.id/web-upload/1750044877-16-06-2025-0XzTVvkZyQrSReLCiM6AlKOqaFBd4p5c.webp" alt="struktur">
    </main>
  </div>
</section>
