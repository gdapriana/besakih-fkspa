<?php
  $kebijakan_section_1_data = json_decode(json_encode([
    'title' => 'BADAN PENGELOLA FKSPA BESAKIH',
    'subtitle' => 'Kebijakan',
    'items' =>  [
      ['date' => '16-10-2025', 'title' => 'Kebijakan 1', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur delectus dolores doloribus dolorum eligendi enim esse, neque nulla pariatur quia?', 'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1740725207-28-02-2025-DnThy0gLtPa3Com259j81kWGMKJzweAp.webp'],
      ['date' => '16-10-2025', 'title' => 'Kebijakan 2', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur delectus dolores doloribus dolorum eligendi enim esse, neque nulla pariatur quia?', 'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1740725207-28-02-2025-DnThy0gLtPa3Com259j81kWGMKJzweAp.webp'],
      ['date' => '16-10-2025', 'title' => 'Kebijakan 3', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur delectus dolores doloribus dolorum eligendi enim esse, neque nulla pariatur quia?', 'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1740725207-28-02-2025-DnThy0gLtPa3Com259j81kWGMKJzweAp.webp'],
      ['date' => '16-10-2025', 'title' => 'Kebijakan 4', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur delectus dolores doloribus dolorum eligendi enim esse, neque nulla pariatur quia?', 'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1740725207-28-02-2025-DnThy0gLtPa3Com259j81kWGMKJzweAp.webp'],
      ['date' => '16-10-2025', 'title' => 'Kebijakan 5', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur delectus dolores doloribus dolorum eligendi enim esse, neque nulla pariatur quia?', 'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1740725207-28-02-2025-DnThy0gLtPa3Com259j81kWGMKJzweAp.webp'],
      ['date' => '16-10-2025', 'title' => 'Kebijakan 6', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur delectus dolores doloribus dolorum eligendi enim esse, neque nulla pariatur quia?', 'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1740725207-28-02-2025-DnThy0gLtPa3Com259j81kWGMKJzweAp.webp'],
      ['date' => '16-10-2025', 'title' => 'Kebijakan 7', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur delectus dolores doloribus dolorum eligendi enim esse, neque nulla pariatur quia?', 'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1740725207-28-02-2025-DnThy0gLtPa3Com259j81kWGMKJzweAp.webp'],
      ['date' => '16-10-2025', 'title' => 'Kebijakan 8', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur delectus dolores doloribus dolorum eligendi enim esse, neque nulla pariatur quia?', 'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1740725207-28-02-2025-DnThy0gLtPa3Com259j81kWGMKJzweAp.webp'],
      ['date' => '16-10-2025', 'title' => 'Kebijakan 7', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur delectus dolores doloribus dolorum eligendi enim esse, neque nulla pariatur quia?', 'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1740725207-28-02-2025-DnThy0gLtPa3Com259j81kWGMKJzweAp.webp'],
      ['date' => '16-10-2025', 'title' => 'Kebijakan 10', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur delectus dolores doloribus dolorum eligendi enim esse, neque nulla pariatur quia?', 'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1740725207-28-02-2025-DnThy0gLtPa3Com259j81kWGMKJzweAp.webp'],
      ['date' => '16-10-2025', 'title' => 'Kebijakan 11', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur delectus dolores doloribus dolorum eligendi enim esse, neque nulla pariatur quia?', 'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1740725207-28-02-2025-DnThy0gLtPa3Com259j81kWGMKJzweAp.webp'],
      ['date' => '16-10-2025', 'title' => 'Kebijakan 12', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur delectus dolores doloribus dolorum eligendi enim esse, neque nulla pariatur quia?', 'img_cover_url' => 'https://jwc.gotra-resources.my.id/web-upload/1740725207-28-02-2025-DnThy0gLtPa3Com259j81kWGMKJzweAp.webp'],
    ]
  ]))
?>


<section id="kebijakan-section-1">
  <div class="wrapper">
    <header class="header">
      <p class="subtitle"><?= $kebijakan_section_1_data->subtitle ?></p>
      <h1 class="title"><?= $kebijakan_section_1_data->title ?></h1>
    </header>
    <main class="content">

      <!-- LOOPING DATA HERE -->
      <?php foreach($kebijakan_section_1_data->items as $item): ?>
        <div class="card">
          <div class="card-cover">
            <img src="<?= $item->img_cover_url ?>" alt="cover">
          </div>
          <div class="card-content">
            <header class="card-header">
              <h2 class="card-title"><?= $item->title ?></h2>
              <p class="card-date">
                <?php
                  $date = DateTime::createFromFormat('d-m-Y', $item->date);
                  echo $date->format('d M Y');
                ?>
              </p>
            </header>
            <p class="card-desc"><?= $item->description ?></p>
            <footer class="card-footer">
              <a href="#" class="card-cta">Selengkapnya <i class="fa-solid fa-file-pdf"></i></a>
            </footer>
          </div>
        </div>
      <?php endforeach; ?>

    </main>
  </div>
</section>
