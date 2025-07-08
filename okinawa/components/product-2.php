<?php
  $dataProduct1 = json_decode(json_encode([
    'title' => 'Top Picks Just for You',
    'pill' => 'Best Sellers',
    'description' => 'Discover our wide range of premium products across all categories, carefully selected for quality and freshness',
    'items' => [
      ['title' => 'Natural Honey 250g', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Condiments', 'price_before' => 42000, 'price_after' => 39000, 'discount' => 7, 'description' => 'Pure natural honey sourced from local farms', 'weight' => '250g'],
      ['title' => 'Cashew Nuts Roasted 200g', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Snacks', 'price_before' => 37000, 'price_after' => 34000, 'discount' => 8, 'description' => 'Lightly salted roasted cashew nuts', 'weight' => '200g'],
      ['title' => 'Tuna in Olive Oil 185g', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Canned Food', 'price_before' => 27000, 'price_after' => 25000, 'discount' => 7, 'description' => 'High-quality tuna preserved in olive oil', 'weight' => '185g'],
      ['title' => 'Pasta Spaghetti 500g', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Food', 'price_before' => 18000, 'price_after' => 16500, 'discount' => 8, 'description' => 'Classic Italian spaghetti made from durum wheat', 'weight' => '500g'],
      ['title' => 'Vegetable Broth Cubes (10 pcs)', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Spices', 'price_before' => 15000, 'price_after' => 13500, 'discount' => 10, 'description' => 'Flavored cubes to enhance your cooking', 'weight' => '10 pcs'],
      ['title' => 'Fresh Carrots 1kg', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Vegetables', 'price_before' => 20000, 'price_after' => 18000, 'discount' => 10, 'description' => 'Crunchy fresh carrots straight from the farm', 'weight' => '1kg'],
      ['title' => 'Natural Mineral Water 1.5L', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Beverages', 'price_before' => 12000, 'price_after' => 10000, 'discount' => 17, 'description' => 'Clean and safe natural mineral drinking water', 'weight' => '1.5L'],
      ['title' => 'Cheddar Cheese Slices 200g', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Dairy', 'price_before' => 35000, 'price_after' => 32000, 'discount' => 9, 'description' => 'Mild and creamy cheddar cheese slices', 'weight' => '200g'],
    ]
  ]))
?>

<section id="_product-2-root">
  <div class="_wrapper">
    <header class="_header">
      <span class="_pill"><?= $dataProduct1->pill ?></span>
      <h2 class="_title"><?= $dataProduct1->title ?></h2>
      <p class="_description"><?= $dataProduct1->description ?></p>
    </header>

    <div class="_content">
      <?php foreach ($dataProduct1->items as $item): ?>
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
  </div>
</section>
