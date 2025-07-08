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
  <link rel="stylesheet" href="../components/css/pages/products.css">

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
    <h2 class="_title">Promo</h2>
    <p class="_description">Home - Promo</p>
  </div>
</section>

<?php
$products = json_decode(json_encode([
  ['title' => 'Mutti Finely Chopped Tomatoes 400 Gr', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Food', 'price_before' => 33500, 'price_after' => 30500, 'discount' => 10, 'description' => 'Premium Italian tomatoes, finely chopped and ready for your favorite recipes', 'weight' => '400g'],
  ['title' => 'Organic Basmati Rice 1kg', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Grains', 'price_before' => 55000, 'price_after' => 49000, 'discount' => 11, 'description' => 'Aromatic organic basmati rice from the Himalayas', 'weight' => '1kg'],
  ['title' => 'Almond Milk Unsweetened 1L', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Beverages', 'price_before' => 45000, 'price_after' => 40000, 'discount' => 11, 'description' => 'Healthy plant-based almond milk, no sugar added', 'weight' => '1L'],
  ['title' => 'Free Range Eggs (12 pcs)', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Dairy', 'price_before' => 32000, 'price_after' => 30000, 'discount' => 6, 'description' => 'Farm-fresh free range eggs rich in nutrients', 'weight' => '12 pcs'],
  ['title' => 'Olive Oil Extra Virgin 500ml', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Oil', 'price_before' => 65000, 'price_after' => 59000, 'discount' => 9, 'description' => 'Cold-pressed olive oil, great for cooking and salads', 'weight' => '500ml'],
  ['title' => 'Whole Wheat Bread', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Bakery', 'price_before' => 28000, 'price_after' => 25000, 'discount' => 11, 'description' => 'Fresh whole wheat bread baked daily', 'weight' => '450g'],
  ['title' => 'Greek Yogurt Plain 500g', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Dairy', 'price_before' => 35000, 'price_after' => 33000, 'discount' => 6, 'description' => 'Creamy plain Greek yogurt with probiotics', 'weight' => '500g'],
  ['title' => 'Dark Chocolate 85% Cocoa', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Snacks', 'price_before' => 29000, 'price_after' => 26000, 'discount' => 10, 'description' => 'Rich and intense dark chocolate, 85% cocoa', 'weight' => '100g'],
  ['title' => 'Mutti Finely Chopped Tomatoes 400 Gr', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Food', 'price_before' => 33500, 'price_after' => 30500, 'discount' => 10, 'description' => 'Premium Italian tomatoes, finely chopped and ready for your favorite recipes', 'weight' => '400g'],
  ['title' => 'Organic Basmati Rice 1kg', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Grains', 'price_before' => 55000, 'price_after' => 49000, 'discount' => 11, 'description' => 'Aromatic organic basmati rice from the Himalayas', 'weight' => '1kg'],
  ['title' => 'Almond Milk Unsweetened 1L', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Beverages', 'price_before' => 45000, 'price_after' => 40000, 'discount' => 11, 'description' => 'Healthy plant-based almond milk, no sugar added', 'weight' => '1L'],
  ['title' => 'Free Range Eggs (12 pcs)', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Dairy', 'price_before' => 32000, 'price_after' => 30000, 'discount' => 6, 'description' => 'Farm-fresh free range eggs rich in nutrients', 'weight' => '12 pcs'],
  ['title' => 'Olive Oil Extra Virgin 500ml', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Oil', 'price_before' => 65000, 'price_after' => 59000, 'discount' => 9, 'description' => 'Cold-pressed olive oil, great for cooking and salads', 'weight' => '500ml'],
  ['title' => 'Whole Wheat Bread', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Bakery', 'price_before' => 28000, 'price_after' => 25000, 'discount' => 11, 'description' => 'Fresh whole wheat bread baked daily', 'weight' => '450g'],
  ['title' => 'Greek Yogurt Plain 500g', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Dairy', 'price_before' => 35000, 'price_after' => 33000, 'discount' => 6, 'description' => 'Creamy plain Greek yogurt with probiotics', 'weight' => '500g'],
  ['title' => 'Dark Chocolate 85% Cocoa', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Snacks', 'price_before' => 29000, 'price_after' => 26000, 'discount' => 10, 'description' => 'Rich and intense dark chocolate, 85% cocoa', 'weight' => '100g'],
]))
?>

<section id="_products-root">
  <div class="_wrapper">
    <div class="_categories">
      <div class="_wrapper">
        <header class="_cate-header">
          <h4 class="_title">
            <i class="fa-solid fa-cart-shopping"></i>
            Product Categories
          </h4>
        </header>
        <main class="_cate-content">
          <!-- LOOP FOR CATEGORIES HERE -->
          <?php
            for ($i = 0; $i < 20; $i++) {
              echo "<a href='#'><i class='fa-solid fa-chevron-right'></i> Category " . ($i + 1) . "</a><br>";
            }
          ?>
        </main>
      </div>
    </div>
    <div class="_headbar">
      <h4 class="_title">
        <i class="fa-solid fa-box"></i>
        Available Products
      </h4>


      <form action="" class="_searchbar">
        <label for="_search">
          <input type="text" id="_search" placeholder="Search for anything, anywhere, anytime!">
        </label>
        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
      </form>

    </div>
    <div class="_product-list">
      <?php foreach ($products as $item): ?>
        <div class="_card">
          <div class="_top">
            <span class="_discount">Save <?= $item->discount ?>%</span>
            <img src="<?= $item->img ?>" alt="product-image">
          </div>
          <div class="_bottom">
            <span class="_category"><?= $item->category ?> <i class="fa-solid fa-tag"></i></span>
            <h5 class="_title"><?= $item->title ?></h5>
            <p class="_description"><?= $item->description ?></p>
            <h5 class="_price">Rp. <?= number_format($item->price_after) ?><span><s>Rp. <?= number_format($item->price_before) ?></s></span></h5>
            <span class="_weight"><?= $item->weight ?></span>
            <a href="/pages/product.php" class="_cta">Buy Now</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="_pagination">
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item"><a class="page-link" href="#">6</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
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