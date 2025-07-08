<?php
  $dataCategories = json_decode(json_encode([
    'title' => 'Shop by Category',
    'pill' => 'Our Categories',
    'description' => 'Discover our wide range of premium products across all categories, carefully selected for quality and freshness',
    'items' => [
      ['title' => 'Organic Fruits', 'url' => '/category/fruits', 'total_items' => 85, 'icon' => '🍎', 'description' => 'A selection of juicy organic fruits from trusted orchards'],
      ['title' => 'Dairy Products', 'url' => '/category/dairy', 'total_items' => 60, 'icon' => '🧀', 'description' => 'Fresh milk, cheese, and butter from local dairies'],
      ['title' => 'Bakery Goods', 'url' => '/category/bakery', 'total_items' => 45, 'icon' => '🥖', 'description' => 'Daily baked bread, pastries, and cakes'],
      ['title' => 'Seafood Specials', 'url' => '/category/seafood', 'total_items' => 30, 'icon' => '🐟', 'description' => 'Catch of the day: Fresh fish and shellfish sourced responsibly'],
      ['title' => 'Meat & Poultry', 'url' => '/category/meat', 'total_items' => 50, 'icon' => '🥩', 'description' => 'Premium cuts of meat and poultry with farm-to-table quality'],
      ['title' => 'Beverages', 'url' => '/category/beverages', 'total_items' => 100, 'icon' => '🥤', 'description' => 'Soft drinks, juices, and healthy drink options'],
      ['title' => 'Pantry Essentials', 'url' => '/category/pantry', 'total_items' => 150, 'icon' => '🛒', 'description' => 'All your kitchen staples: oils, spices, canned goods, and more'],
      ['title' => 'Snacks & Treats', 'url' => '/category/snacks', 'total_items' => 75, 'icon' => '🍪', 'description' => 'Chips, cookies, and everything in between to satisfy cravings'],
    ]
  ]))
?>

<section id="_categories-root">
  <div class="_wrapper">
    <header class="_header">
      <span class="_pill"><?= $dataCategories->pill ?></span>
      <h2 class="_title"><?= $dataCategories->title ?></h2>
      <p class="_description"><?= $dataCategories->description ?></p>
    </header>

    <main class="_content-desktop">

      <!-- LOOPING FOR CATEGORIES-->
      <?php foreach($dataCategories->items as $item): ?>
        <a href="/pages/products.php" class="_card">
          <div class="_icon"><?= $item->icon ?></div>
          <h5 class="_title"><?= $item->title ?></h5>
          <p class="_description"><?= $item->description ?></p>
          <span class="_total"><?= $item->total_items ?>+ items</span>
        </a>
      <?php endforeach; ?>

    </main>

    <main class="_content-mobile slick-center ss-arrow">
      <?php foreach($dataCategories->items as $item): ?>
        <a href="#" class="_card">
          <div class="_icon"><?= $item->icon ?></div>
          <h5 class="_title"><?= $item->title ?></h5>
          <p class="_description"><?= $item->description ?></p>
          <span class="_total"><?= $item->total_items ?>+ items</span>
        </a>
      <?php endforeach; ?>
    </main>
  </div>
</section>
