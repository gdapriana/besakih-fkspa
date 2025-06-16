<?php
  $job_section_1_data = json_decode(json_encode([
    'title' => 'BADAN PENGELOLA FKSPA BESAKIH',
    'subtitle' => 'Upload SOP',
  ]))
?>

<section id="form-section-1">
  <div class="wrapper">
    <header class="header">
      <p class="subtitle"><?= $job_section_1_data->subtitle ?></p>
      <h1 class="title"><?= $job_section_1_data->title ?></h1>
    </header>
    <form class="content">
      <label for="form-judul" class="form-judul form-text">
        <span>Judul SOP</span>
        <input placeholder="Masukkan judul SOP" type="text" id="form-judul" name="judul">
      </label>
      <label for="form-tanggal" class="form-tanggal">
        <span>Tanggal Publikasi</span>
        <input type="date" id="form-tanggal" name="tanggal">
      </label>
      <label for="form-deskripsi" class="form-deskripsi">
        <span>Deskripsi Singkat</span>
        <textarea placeholder="Masukkan deskripsi singkat" id="form-deskripsi" name="deskripsi"></textarea>
      </label>
      <label for="form-upload-image" class="form-gambar form-file">
        <span>Upload Gambar Thumbnail</span>
        <input type="file" id="form-upload-image" accept="image/*">
      </label>
      <label for="form-upload-pdf" class="form-pdf form-file">
        <span>Upload File SOP</span>
        <input type="file" id="form-upload-pdf" accept="application/pdf">
      </label>
      <div class="cta">
        <button type="submit">Upload</button>
      </div>
    </form>
  </div>
</section>
