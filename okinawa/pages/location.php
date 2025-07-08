<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Promo</title>
  <link rel="stylesheet" href="../components/css/root.css">
  <link rel="stylesheet" href="../components/css/header.css">
  <link rel="stylesheet" href="../components/css/footer.css">
  <link rel="stylesheet" href="../components/css/pages/hero.css">
  <link rel="stylesheet" href="../components/css/pages/location.css">

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

  <!-- SLICK JS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- FONT POPPINS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

<?php include("../components/header.php"); ?>

<section id="_hero-root">
  <div class="_wrapper">
    <h2 class="_title">Locations</h2>
    <p class="_description">Home - Our Location</p>
  </div>
</section>

<?php
  $locations = json_decode(json_encode([
    ['title'=>'Store A', 'address'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, laboriosam.'],
    ['title'=>'Store B', 'address'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, laboriosam.'],
  ]))
?>



<section id="_location-root">
  <div class="_wrapper">

    <!-- LOOP FOR LOCATIONS  -->
    <?php foreach ($locations as $key => $item) : ?>
      <article class="_card">
        <img
          class="_image"
          src="https://images.unsplash.com/photo-1534723452862-4c874018d66d?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          alt="store">

        <div class="_content">
          <h3 class="_title"><?= $item->title ?></h3>
          <div class="_location-pin">
            <i class="fa-solid fa-location-dot"></i>
            <p class="_location"><?= $item->address ?></p>
          </div>
          <a class="_cta" href="#">Store Location</a>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<?php include("../components/footer.php"); ?>

<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>

<!-- SLICK -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- BOOTSTRAP 5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
