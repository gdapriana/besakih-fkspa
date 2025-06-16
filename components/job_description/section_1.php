<?php
  $job_section_1_data = json_decode(json_encode([
    'title' => 'BADAN PENGELOLA FKSPA BESAKIH',
    'subtitle' => 'Job Description',
  ]))
?>

<section id="job-section-1">
  <div class="wrapper">
    <header class="header">
      <p class="subtitle"><?= $job_section_1_data->subtitle ?></p>
      <h1 class="title"><?= $job_section_1_data->title ?></h1>
    </header>
    <main class="content">
      <div class="content-1 typography">
        <h4><strong>BADAN PENGELOLA FKSPA BESAKIH</strong></h4>
        <p><strong>&ldquo;Membawa Badan Pengelola Mencapai Visi &amp; Misi Organisasi&rdquo;</strong></p>
        <p>&nbsp;</p>
        <p><strong>VISI</strong>: Penerapan Konsep Tri Hita Karana dalam semua aspek kehidupan di Kawasan Suci Pura Agung Besakih<br />demi tercapainya kesejahteraan umat manusia secara sekala maupun niskala.</p>
        <p>&nbsp;</p>
        <p><strong>MISI</strong>: Menjadikan Pura Agung Besakih sebagai destinasi yang memiliki nilai-nilai spiritual, budaya, serta<br />kearifan lokal Bali yang sesungguhnya, yang dilengkapi dengan berbagai layanan &amp; fasilitas premium yang<br />modern, ramah lingkungan &amp; berstandar internasional.</p>
      </div>
      <div class="content-2">
        <img src="https://images.unsplash.com/photo-1655289112205-d3b56c6b61f8?q=80&w=3005&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="figure">
      </div>
    </main>
  </div>
</section>
