<?php
  $dataProduct1 = json_decode(json_encode([
    'title' => 'Latest Deals and Special Promotions',
    'pill' => 'Don’t Miss Out',
    'description' => 'Discover our wide range of premium products across all categories, carefully selected for quality and freshness',
    'items' => [
      ['title' => 'Mutti Finely Chopped Tomatoes 400 Gr', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Food', 'price_before' => 33500, 'price_after' => 30500, 'discount' => 10, 'description' => 'Premium Italian tomatoes, finely chopped and ready for your favorite recipes', 'weight' => '400g'],
      ['title' => 'Organic Basmati Rice 1kg', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Grains', 'price_before' => 55000, 'price_after' => 49000, 'discount' => 11, 'description' => 'Aromatic organic basmati rice from the Himalayas', 'weight' => '1kg'],
      ['title' => 'Almond Milk Unsweetened 1L', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Beverages', 'price_before' => 45000, 'price_after' => 40000, 'discount' => 11, 'description' => 'Healthy plant-based almond milk, no sugar added', 'weight' => '1L'],
      ['title' => 'Free Range Eggs (12 pcs)', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Dairy', 'price_before' => 32000, 'price_after' => 30000, 'discount' => 6, 'description' => 'Farm-fresh free range eggs rich in nutrients', 'weight' => '12 pcs'],
      ['title' => 'Olive Oil Extra Virgin 500ml', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Oil', 'price_before' => 65000, 'price_after' => 59000, 'discount' => 9, 'description' => 'Cold-pressed olive oil, great for cooking and salads', 'weight' => '500ml'],
      ['title' => 'Whole Wheat Bread', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Bakery', 'price_before' => 28000, 'price_after' => 25000, 'discount' => 11, 'description' => 'Fresh whole wheat bread baked daily', 'weight' => '450g'],
      ['title' => 'Greek Yogurt Plain 500g', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Dairy', 'price_before' => 35000, 'price_after' => 33000, 'discount' => 6, 'description' => 'Creamy plain Greek yogurt with probiotics', 'weight' => '500g'],
      ['title' => 'Dark Chocolate 85% Cocoa', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1746428073-05-05-2025-NoCB5YTSxIsv0tjenDF4cUa82zdA7iyp.webp', 'category' => 'Snacks', 'price_before' => 29000, 'price_after' => 26000, 'discount' => 10, 'description' => 'Rich and intense dark chocolate, 85% cocoa', 'weight' => '100g'],
    ]
  ]))
?>

<section id="_product-1-root">
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
