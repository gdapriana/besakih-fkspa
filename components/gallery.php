<?php
  $gallery_data = json_decode(json_encode([
    ['url'=> 'https://images.unsplash.com/photo-1593938637267-7d70420742a3?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
    ['url'=> 'https://images.unsplash.com/photo-1636549887083-5eb4bc623ef4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
    ['url'=> 'https://images.unsplash.com/photo-1593938637267-7d70420742a3?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
    ['url'=> 'https://images.unsplash.com/photo-1636549887083-5eb4bc623ef4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
    ['url'=> 'https://images.unsplash.com/photo-1593938637267-7d70420742a3?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
    ['url'=> 'https://images.unsplash.com/photo-1636549887083-5eb4bc623ef4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
    ['url'=> 'https://images.unsplash.com/photo-1593938637267-7d70420742a3?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
    ['url'=> 'https://images.unsplash.com/photo-1636549887083-5eb4bc623ef4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
    ['url'=> 'https://images.unsplash.com/photo-1593938637267-7d70420742a3?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
    ['url'=> 'https://images.unsplash.com/photo-1636549887083-5eb4bc623ef4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
    ['url'=> 'https://images.unsplash.com/photo-1593938637267-7d70420742a3?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
    ['url'=> 'https://images.unsplash.com/photo-1636549887083-5eb4bc623ef4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
  ]))
?>

<section id="gallery-root" class="gallery-slick">
  <?php foreach ($gallery_data as $item): ?>
    <div class="gallery-card">
      <img src="<?= $item->url ?>" alt="gallery-item">
    </div>
  <?php endforeach; ?>
  
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    $('#gallery-root.gallery-slick').slick({
      infinite: true,
      speed: 300,
      autoplay: true,
      autoplaySpeed: 1000,
      slidesToShow: 4,
      dots: false,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    })
  })
</script>
