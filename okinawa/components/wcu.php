<?php
  $wcuData = json_decode(json_encode([
    'title' => 'Latest Deals and Special Promotions',
    'pill' => 'Why Choose Us',
    'description' => 'Discover our wide range of premium products across all categories, carefully selected for quality and freshness',
    'items' => [
      [
        'icon' => 'fas fa-thumbs-up',
        'title' => 'Trusted by Thousands',
        'description' => 'Okinawa is trusted by thousands of customers across Bali for consistent quality and service.'
      ],
      [
        'icon' => 'fas fa-leaf',
        'title' => 'Fresh & Organic',
        'description' => 'We provide the freshest and organic produce directly from local farmers and suppliers.'
      ],
      [
        'icon' => 'fas fa-tags',
        'title' => 'Affordable Prices',
        'description' => 'Enjoy competitive prices on all products without compromising on quality.'
      ]
    ]
  ]));
?>

<section id="_wcu-root">
  <div class="_wrapper">
    <header class="_header">
      <span class="_pill"><?= $wcuData->pill ?></span>
      <h2 class="_title"><?= $wcuData->title ?></h2>
      <p class="_description"><?= $wcuData->description ?></p>
    </header>
    <?php foreach ($wcuData->items as $item): ?>
      <article class="_card">
        <div class="_icon">
          <i class="<?= $item->icon ?>"></i>
        </div>
        <h4 class="_title"><?= $item->title ?></h4>
        <p class="_description"><?= $item->description ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</section>
