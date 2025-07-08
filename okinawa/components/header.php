<?php
$dataHeader = json_decode(json_encode([
  'logo' => 'https://jwc.gotra-resources.my.id/web-upload/1749012923-04-06-2025-ktFH0D4YyhdI2V3BGwM7iZT8URLNPq6z.png',
  'socials' => [
    ['name' => 'Facebook', 'url' => '', 'icon' => 'fa-brands fa-facebook'],
    ['name' => 'Instagram', 'url' => '', 'icon' => 'fa-brands fa-instagram'],
    ['name' => 'Whatsapp', 'url' => '', 'icon' => 'fa-brands fa-whatsapp'],
  ],
  'navigations' => [
    ['name' => 'Home', 'url' => '/'],
    ['name' => 'Latest products', 'url' => '/pages/products.php'],
    ['name' => 'Best Seller Product', 'url' => '/pages/products.php'],
    ['name' => 'Our Products', 'url' => '/pages/products.php', 'childs' => [
      ['name' => 'Product A', 'url' => '/pages/products.php'],
      ['name' => 'Product B', 'url' => '/pages/products.php'],
      ['name' => 'Product C', 'url' => '/pages/products.php'],
    ]],
    ['name' => 'Store Location', 'url' => '/pages/location.php'],
    ['name' => 'Blogs', 'url' => '/pages/blogs.php'],
    ['name' => 'Career', 'url' => '#'],
  ]
]))
?>

<header id="_header-root">

  <div class="_top">
    <div class="_wrapper">
      <a href="#" class="_brand">
        <img
          src="<?= $dataHeader->logo ?>"
          alt="brand">
      </a>

      <form action="" class="_searchbar">
        <label for="_search">
          <input type="text" id="_search" placeholder="Search for anything, anywhere, anytime!">
        </label>
        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
      </form>

      <div class="_socials">
        <!-- LOOPING FOR SOCIALS -->
        <?php foreach($dataHeader->socials as $social): ?>
          <a href="<?= $social->url ?>" class="_social">
            <i class="<?= $social->icon ?>"></i>
          </a>
        <?php endforeach; ?>

      </div>

      <button class="btn _hamburger-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div class="offcanvas p-3 offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
          <a href="#" class="offcanvas-title" id="offcanvasRightLabel">
            <img class="_canvas-logo" src="<?= $dataHeader->logo ?>" alt="brand">
          </a>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="_navigations navbar-nav">

            <!-- LOOPING FOR NAVIGATIONS -->
            <?php foreach ($dataHeader->navigations as $navigation): ?>

              <?php if (!empty($navigation->childs)): ?>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="<?= $navigation->url ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $navigation->name ?>
                  </a>
                  <ul class="dropdown-menu">
                    <?php foreach ($navigation->childs as $child): ?>
                      <li><a class="dropdown-item" href="#"><?= $child->name ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </li>
              <?php else: ?>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?= $navigation->url ?>"><?= $navigation->name ?></a>
                </li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>

          <div class="_cart-cta">
            <a href="#" class="_cart">
              <i class="fa-solid fa-cart-shopping"></i>
              Cart
            </a>
            <a href="#" class="_cta">
              <i class="fa-solid fa-user"></i>
              Sign in
            </a>
          </div>
        </div>
      </div>


    </div>
  </div>

  <div class="_bottom">
    <div class="_wrapper">
      <ul class="_navigations navbar-nav">

        <!-- LOOPING FOR NAVIGATIONS -->
        <?php foreach ($dataHeader->navigations as $navigation): ?>

          <?php if (!empty($navigation->childs)): ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?= $navigation->url ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $navigation->name ?>
              </a>
              <ul class="dropdown-menu">
                <?php foreach ($navigation->childs as $child): ?>
                  <li><a class="dropdown-item" href="#"><?= $child->name ?></a></li>
                <?php endforeach; ?>
              </ul>
            </li>          <?php else: ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= $navigation->url ?>"><?= $navigation->name ?></a>
            </li>
          <?php endif; ?>
        <?php endforeach; ?>
      </ul>

      <div class="_cart-cta">
        <a href="#" class="_cart">
          <i class="fa-solid fa-cart-shopping"></i>
        </a>
        <a href="#" class="_cta">
          <i class="fa-solid fa-user"></i>
          Sign in
        </a>
      </div>
    </div>
  </div>

</header>