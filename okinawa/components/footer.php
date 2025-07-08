<?php
  $dataFooter = json_decode(json_encode([
    'logo' => 'https://jwc.gotra-resources.my.id/web-upload/1749012923-04-06-2025-ktFH0D4YyhdI2V3BGwM7iZT8URLNPq6z.png',
    'description' => 'Shop fresh groceries, household essentials, and imported goods at Uncle Jo Marketplace Gatsu Barat.',
    'socials' => [
      ['name' => 'Facebook', 'url' => '', 'icon' => 'fa-brands fa-facebook'],
      ['name' => 'Instagram', 'url' => '', 'icon' => 'fa-brands fa-instagram'],
      ['name' => 'Whatsapp', 'url' => '', 'icon' => 'fa-brands fa-whatsapp'],
    ],
    'navigations' => [
      ['name' => 'Home', 'url' => '/'],
      ['name' => 'Latest Promo', 'url' => '/'],
      ['name' => 'Best Seller Product', 'url' => '/'],
      ['name' => 'Our Products', 'url' => '', 'childs' => [
        ['name' => 'Product A', 'url' => '/'],
        ['name' => 'Product B', 'url' => '/'],
        ['name' => 'Product C', 'url' => '/'],
      ]],
      ['name' => 'Store Location', 'url' => '/'],
      ['name' => 'Blogs', 'url' => '/'],
      ['name' => 'Career', 'url' => '/'],
    ]
  ]))
?>

<footer id="_footer-root">
  <div class="_wrapper">
    <header class="_header">
      <a href="<?= $dataFooter->logo ?>" class="_brand">
        <img src="<?= $dataFooter->logo ?>" alt="cover">
      </a>

      <p class="_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A dolore exercitationem facilis harum iusto libero necessitatibus, praesentium quod ratione vel.</p>
      <div class="_socials">
        <?php foreach ($dataFooter->socials as $social): ?>
          <a href="#" class="_social">
            <i class="<?= $social->icon ?>"></i>
          </a>
        <?php endforeach; ?>
      </div>
    </header>
    <div class="_section">
      <h4 class="_title">Company</h4>
      <div class="_navs">
        <a href="#" class="_nav"><i class="fa-solid fa-arrow-right"></i> About Us</a>
        <a href="#" class="_nav"><i class="fa-solid fa-arrow-right"></i> About Us</a>
        <a href="#" class="_nav"><i class="fa-solid fa-arrow-right"></i> About Us</a>
        <a href="#" class="_nav"><i class="fa-solid fa-arrow-right"></i> About Us</a>
      </div>
    </div>
    <div class="_section">
      <h4 class="_title">Customer Care</h4>
      <div class="_navs">
        <a href="#" class="_nav"><i class="fa-solid fa-arrow-right"></i> About Us</a>
        <a href="#" class="_nav"><i class="fa-solid fa-arrow-right"></i> About Us</a>
        <a href="#" class="_nav"><i class="fa-solid fa-arrow-right"></i> About Us</a>
        <a href="#" class="_nav"><i class="fa-solid fa-arrow-right"></i> About Us</a>
      </div>
    </div>
    <div class="_section">
      <h4 class="_title">Contact</h4>
      <p class="_address">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, tempore?</p>
    </div>
  </div>
</footer>

<section class="_copyright">
  <p class="_copyright-text">
    © Copyright 2025 Okinawa. All Rights Reserved.
  </p>
</section>