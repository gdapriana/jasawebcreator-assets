<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

  <link rel="stylesheet" href="./css/root.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/slider.css">
  <link rel="stylesheet" href="./css/features.css">
  <link rel="stylesheet" href="./css/template.css">
  <link rel="stylesheet" href="./css/team.css">
  <link rel="stylesheet" href="./css/app.css">
  <link rel="stylesheet" href="./css/faq.css">
  <link rel="stylesheet" href="./css/adore.css">
  <link rel="stylesheet" href="./css/any-app.css">
  <link rel="stylesheet" href="./css/film.css">
  <link rel="stylesheet" href="./css/love.css">
  <link rel="stylesheet" href="./css/minimal.css">
  <link rel="stylesheet" href="./css/pricing.css">
  <link rel="stylesheet" href="./css/reviews.css">
  <link rel="stylesheet" href="./css/stack.css">
  <link rel="stylesheet" href="./css/step.css">
  <link rel="stylesheet" href="./css/gallery.css">
  <link rel="stylesheet" href="./css/contact.css">
  <link rel="stylesheet" href="./css/footer.css">

</head>
<body>

<?php
$navs = json_decode(json_encode([
  ['name' => 'Home', 'url' => '/'],
  ['name' => 'Features', 'url' => '/'],
  ['name' => 'Pricing', 'url' => '/'],
  ['name' => 'Blog', 'url' => '/'],
  ['name' => 'Contact', 'url' => '/'],
]))
?>
<header id="_header">
  <div class="_header-wrapper">
    <a href="#" class="_brand">
      <img src="https://demo.web3canvas.com/themeforest/mobland/images/logo.png" alt="brand">
    </a>

    <div class="_navs">
      <?php foreach ($navs as $nav): ?>
        <a href="<?= $nav->url ?>" class="_nav"><?= $nav->name ?></a>
      <?php endforeach; ?>
    </div>
    <button class="_hamburger">
      <i class="fa-solid fa-bars"></i>
    </button>
  </div>
</header>
<div class="_hamburger-content">
  <div class="_navs">
    <?php foreach ($navs as $nav): ?>
      <a href="<?= $nav->url ?>" class="_nav"><?= $nav->name ?></a>
    <?php endforeach; ?>
  </div>
</div>

<section id="_slider">
  <div class="_slider-wrapper">
    <div class="_image">
      <div class="_phone-wrap">
        <img class="_hand" src="https://demo.web3canvas.com/themeforest/mobland/images/adult-hand-dark.png" alt="element">
        <div class="_screen-wrapper">
          <div class="_screen">
            <img src="https://demo.web3canvas.com/themeforest/mobland/images/screen3.jpg" alt="screen">
          </div>
          <div class="_screen">
            <img src="https://demo.web3canvas.com/themeforest/mobland/images/screen3.jpg" alt="screen">
          </div>
          <div class="_screen">
            <img src="https://demo.web3canvas.com/themeforest/mobland/images/screen3.jpg" alt="screen">
          </div>
        </div>
      </div>
    </div>
    <div class="_content">
      <h2 class="_title">Create an App Landing Page. No Coding required</h2>
      <p class="_description-1">You can create custom iOS and macOS apps for your business using Swift, our open source programming language. Apps that have the power to transform workflows, improve client relationships, and boost your productivity.</p>
      <div class="_cta-wrapper">
        <a href="" class="_cta-1"><i class="fa-brands fa-apple"></i> App Store</a>
        <a href="" class="_cta-2"><i class="fa-brands fa-android"></i> Play Store</a>
      </div>
      <p class="_description-2">Version required ios 10 or later, Android Kitkat or later</p>
    </div>
  </div>
  <div class="_company-wrapper">
    <div class="_company">
      <img src="https://demo.web3canvas.com/themeforest/mobland/images/client4.png" alt="company">
    </div>
    <div class="_company">
      <img src="https://demo.web3canvas.com/themeforest/mobland/images/client4.png" alt="company">
    </div>
    <div class="_company">
      <img src="https://demo.web3canvas.com/themeforest/mobland/images/client4.png" alt="company">
    </div>
    <div class="_company">
      <img src="https://demo.web3canvas.com/themeforest/mobland/images/client4.png" alt="company">
    </div>
    <div class="_company">
      <img src="https://demo.web3canvas.com/themeforest/mobland/images/client4.png" alt="company">
    </div>
    <div class="_company">
      <img src="https://demo.web3canvas.com/themeforest/mobland/images/client4.png" alt="company">
    </div>
  </div>
</section>

<section id="_template">
  <div class="_template-wrapper">
    <header class="_header">
      <h3 class="_title">Beautiful Landing Page Template</h3>
      <p class="_desc">You can create custom iOS and macOS apps for your business using Swift, our open source programming language. Apps that have the power to transform workflows, improve client relationships, and boost your productivity.</p>
    </header>
    <div class="_image">
      <img src="http://demo.web3canvas.com/themeforest/mobland/images/isometric-view.png" alt="element">
    </div>
  </div>
</section>


<section id="_any-app">
  <div class="_any-app-wrapper">
    <header class="_header">
      <h3 class="_title">Perfect landing page for any App</h3>
      <p class="_desc">You can create custom iOS and macOS apps for your business using Swift, our open source programming language. Apps that have the power to transform workflows, improve client relationships, and boost your productivity.</p>
      <a href="#" class="_cta">Learn more <i class="fa-solid fa-chevron-right"></i></a>
    </header>
    <main class="_images">
      <img class="_phone-back-1" src="https://jwc.gotra-resources.my.id/web-upload/1747972041-23-05-2025-1Rl8bwQJ9TVpkxc6zqXjvrLtG4a32yEg.webp" alt="element">
      <img class="_phone-front" src="https://jwc.gotra-resources.my.id/web-upload/1747972041-23-05-2025-zkNPqj1mGbJ4yXghTl6WA8EQZVxRLwYB.webp" alt="element">
      <img class="_phone-back-2" src="https://jwc.gotra-resources.my.id/web-upload/1747972041-23-05-2025-3vJk0Em1gxtyWCVhfbMQ56OojNYlGPs7.webp" alt="element">
    </main>
  </div>
</section>

<?php
$features = json_decode(json_encode([
  ['title' => 'Simple & Powerful', 'desc' => 'Apps that have the power to transform workflows, improve client relationships, and boost your productivity.', 'icon' => 'fa-solid fa-chart-line'],
  ['title' => 'Simple & Powerful', 'desc' => 'Apps that have the power to transform workflows, improve client relationships, and boost your productivity.', 'icon' => 'fa-solid fa-chart-line'],
  ['title' => 'Simple & Powerful', 'desc' => 'Apps that have the power to transform workflows, improve client relationships, and boost your productivity.', 'icon' => 'fa-solid fa-chart-line'],
  ['title' => 'Simple & Powerful', 'desc' => 'Apps that have the power to transform workflows, improve client relationships, and boost your productivity.', 'icon' => 'fa-solid fa-chart-line'],
  ['title' => 'Simple & Powerful', 'desc' => 'Apps that have the power to transform workflows, improve client relationships, and boost your productivity.', 'icon' => 'fa-solid fa-chart-line'],
  ['title' => 'Simple & Powerful', 'desc' => 'Apps that have the power to transform workflows, improve client relationships, and boost your productivity.', 'icon' => 'fa-solid fa-chart-line'],
]))
?>
<section id="_features">
  <div class="_features-wrapper">
    <header class="_header">
      <h3 class="_title">Main Features</h3>
      <p class="_desc">Shocase main features of your app or tell them how the app works using a three step process. Its easy. You may also add some descriptions to this section</p>
    </header>
    <main class="_content">
      <?php foreach ($features as $feature): ?>
        <div class="_content-card">
          <i class="<?= $feature->icon ?> _card-icon"></i>
          <h4 class="_card-title"><?= $feature->title ?></h4>
          <p class="_card-desc"><?= $feature->desc ?></p>
        </div>
      <?php endforeach; ?>
    </main>
  </div>
</section>


<section id="_team">
  <div class="_team-wrapper">
    <header class="_header">
      <h2 class="_title">Meet the team</h2>
      <p class="_desc">Conveniently coordinate cross-platform data after emerging internal or organic sources. Authoritatively productivate fully tested niches.</p>
    </header>
    <main class="_content">
      <div class="_card">
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/team1.jpg" alt="profile" class="_profile">
        <p class="_card-title">Steven Rios</p>
        <p class="_card-desc">Founder and CEO</p>
      </div>
      <div class="_card">
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/team1.jpg" alt="profile" class="_profile">
        <p class="_card-title">Steven Rios</p>
        <p class="_card-desc">Founder and CEO</p>
      </div>
      <div class="_card">
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/team1.jpg" alt="profile" class="_profile">
        <p class="_card-title">Steven Rios</p>
        <p class="_card-desc">Founder and CEO</p>
      </div>
      <div class="_card">
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/team1.jpg" alt="profile" class="_profile">
        <p class="_card-title">Steven Rios</p>
        <p class="_card-desc">Founder and CEO</p>
      </div>
    </main>
  </div>
</section>

<section id="_app">
  <div class="_app-wrapper">
    <h3 class="_title">Perfect landing page for any App</h3>
    <p class="_desc">You can create custom iOS and macOS apps for your business using Swift, our open source programming language. Apps that have the power to transform workflows, improve client relationships, and boost your productivity.</p>
    <div class="_cta-wrapper">
      <a href="#" class="_cta">
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/app-store.png" alt="element">
      </a>
      <a href="#" class="_cta">
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/play-store.png" alt="element">
      </a>
    </div>
  </div>
</section>

<?php
  $faq_data = json_decode(json_encode([
    ['title' => 'How does the free trial work?', 'desc' => 'Our 10 day trial is 100% free and does not require credit card information to start. If at the end of your trial you would like to upgrade, great. If not, you can cancel your account altogether, or let us mark it as inactive for you to come back to later.'],
    ['title' => 'How does the free trial work?', 'desc' => 'Our 10 day trial is 100% free and does not require credit card information to start. If at the end of your trial you would like to upgrade, great. If not, you can cancel your account altogether, or let us mark it as inactive for you to come back to later.'],
    ['title' => 'How does the free trial work?', 'desc' => 'Our 10 day trial is 100% free and does not require credit card information to start. If at the end of your trial you would like to upgrade, great. If not, you can cancel your account altogether, or let us mark it as inactive for you to come back to later.'],
    ['title' => 'How does the free trial work?', 'desc' => 'Our 10 day trial is 100% free and does not require credit card information to start. If at the end of your trial you would like to upgrade, great. If not, you can cancel your account altogether, or let us mark it as inactive for you to come back to later.'],
  ]))
?>
<section id="_faq">
  <div class="_faq-wrapper">
    <header class="_header">
      <h3 class="_title">FAQ</h3>
      <p class="_desc">Got questions? We’ve got answers.</p>
    </header>
    <main class="_content">
      <?php foreach ($faq_data as $faq): ?>
        <div class="_content-card">
          <h4 class="_card-title"><?= $faq->title ?></h4>
          <p class="_card-desc"><?= $faq->desc ?></p>
        </div>
      <?php endforeach; ?>
    </main>
  </div>
</section>

<section id="_adore">
  <div class="_adore-wrapper">
    <div class="_header">
      <i class="fa-solid fa-arrow-right _icon"></i>
      <h3 class="_title">Style that you’ll adore</h3>
      <h4 class="_subtitle">what you can ask more?</h4>
      <p class="_desc">You can create custom iOS and macOS apps for your business using Swift, our open source programming language. Apps that have the power to transform workflows.</p>

      <div class="_add">
        <div class="_add-card">
          <i class="fa-solid _card-icon fa-arrow-right"></i>
          <div class="_card-title-desc">
            <h4 class="_card-title">Fully functional template</h4>
            <p class="_card-desc">Apps that have the power to transform workflows.</p>
          </div>
        </div>
        <div class="_add-card">
          <i class="fa-solid _card-icon fa-arrow-right"></i>
          <div class="_card-title-desc">
            <h4 class="_card-title">Fully functional template</h4>
            <p class="_card-desc">Apps that have the power to transform workflows.</p>
          </div>
        </div>
        <div class="_add-card">
          <i class="fa-solid _card-icon fa-arrow-right"></i>
          <div class="_card-title-desc">
            <h4 class="_card-title">Fully functional template</h4>
            <p class="_card-desc">Apps that have the power to transform workflows.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="_image">
      <img src="https://demo.web3canvas.com/themeforest/mobland/images/stylish-screen.png" alt="element">
    </div>
  </div>
</section>

<section id="_film">
  <div class="_film-wrapper">
    <header class="_header">
      <i class="fa-solid fa-film _icon"></i>
      <h3 class="_title">Watch the film</h3>
      <h4 class="_subtitle">A video is worth thousand words</h4>
      <p class="_desc">Apps that have the power to transform workflows, improve client relationships, and boost your productivity.</p>
    </header>

    <main class="_content">
      <a href="#" class="_ytb-wrapper">
        <button class="_play"><i class="fa-solid fa-play"></i></button>
        <div class="_overlay"></div>
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/video-img.jpg" alt="element" class="_thumb">
      </a>
    </main>
  </div>
</section>


<section id="_love">
  <div class="_love-wrapper">
    <header class="_header">
      <i class="fa-solid fa-heart _icon"></i>
      <h3 class="_title">Features you’ll love</h3>
      <p class="_desc">Apps that have the power to transform workflows, improve client relationships, and boost your productivity.</p>
    </header>

    <main class="_content">
      <img
        src="https://jwc.gotra-resources.my.id/web-upload/1747972041-23-05-2025-1Rl8bwQJ9TVpkxc6zqXjvrLtG4a32yEg.webp"
        alt="element" class="_phone">
    </main>

  </div>
</section>

<section id="_minimal">
  <div class="_minimal-wrapper">
    <header class="_header">
      <i class="fa-solid fa-heart _icon"></i>
      <h3 class="_title">Modern and Minimal</h3>
      <p class="_desc">Apps that have the power to transform workflows, improve client relationships, and boost your productivity</p>
    </header>

    <main class="_content">
      <img
        src="https://jwc.gotra-resources.my.id/web-upload/1747972041-23-05-2025-1Rl8bwQJ9TVpkxc6zqXjvrLtG4a32yEg.webp"
        alt="element" class="_phone">
    </main>
  </div>
</section>

<?php
  $pricing_data = json_decode(json_encode([
    ['title' => 'Standard', 'for' => 'individuals', 'price' => 9, 'list' => ['up to 3 projects', 'Basic Analytics', 'Knowledgebase']],
    ['title' => 'Standard', 'for' => 'individuals', 'price' => 9, 'list' => ['up to 3 projects', 'Basic Analytics', 'Knowledgebase']],
    ['title' => 'Standard', 'for' => 'individuals', 'price' => 9, 'list' => ['up to 3 projects', 'Basic Analytics', 'Knowledgebase']]
  ]))

?>

<section id="_pricing">
  <div class="_pricing-wrapper">
    <header class="_header">
      <h3 class="_title">Pricing plans</h3>
      <p class="_desc">Conveniently coordinate cross-platform data after emerging internal or organic sources. Authoritatively productivate fully tested niches.</p>
    </header>
    <main class="_content">
      <?php foreach ($pricing_data as $key=>$pricing): ?>
        <div class="_card">
          <?php if ($key == 1): ?>
            <p class="_label">MOST POPULAR</p>
          <?php endif; ?>
          <header class="_card-header">
            <h4 class="_card-title"><?= $pricing->title ?></h4>
            <p class="_for">for <?= $pricing->for ?></p>
          </header>
          <p class="_price">$ <span><?= $pricing->price ?></span></p>
          <div class="_list">
            <?php foreach ($pricing->list as $list): ?>
              <p><?= $list ?></p>
            <?php endforeach; ?>
          </div>
          <a href="#" class="_cta">
            Buy this plan <i class="fa-solid fa-chevron-right"></i>
          </a>
        </div>
      <?php endforeach; ?>
    </main>
  </div>
</section>

<?php
  $review_data = json_decode(json_encode([
    ['name' => 'Roger Cooper', 'location' => 'usa', 'title' => 'Keeps getting better!', 'desc' => 'The more recent updates have turned this app into one of the best app I`ve seen! It deserves more than 5 stars. I absolutely love this app and i couldn’t recommend it more. Keep up the good work guys.', 'profile' => 'https://demo.web3canvas.com/themeforest/mobland/images/testi-img1.jpg'],
    ['name' => 'Roger Cooper', 'location' => 'usa', 'title' => 'Keeps getting better!', 'desc' => 'The more recent updates have turned this app into one of the best app I`ve seen! It deserves more than 5 stars. I absolutely love this app and i couldn’t recommend it more. Keep up the good work guys.', 'profile' => 'https://demo.web3canvas.com/themeforest/mobland/images/testi-img1.jpg'],
    ['name' => 'Roger Cooper', 'location' => 'usa', 'title' => 'Keeps getting better!', 'desc' => 'The more recent updates have turned this app into one of the best app I`ve seen! It deserves more than 5 stars. I absolutely love this app and i couldn’t recommend it more. Keep up the good work guys.', 'profile' => 'https://demo.web3canvas.com/themeforest/mobland/images/testi-img1.jpg'],
    ['name' => 'Roger Cooper', 'location' => 'usa', 'title' => 'Keeps getting better!', 'desc' => 'The more recent updates have turned this app into one of the best app I`ve seen! It deserves more than 5 stars. I absolutely love this app and i couldn’t recommend it more. Keep up the good work guys.', 'profile' => 'https://demo.web3canvas.com/themeforest/mobland/images/testi-img1.jpg'],
    ['name' => 'Roger Cooper', 'location' => 'usa', 'title' => 'Keeps getting better!', 'desc' => 'The more recent updates have turned this app into one of the best app I`ve seen! It deserves more than 5 stars. I absolutely love this app and i couldn’t recommend it more. Keep up the good work guys.', 'profile' => 'https://demo.web3canvas.com/themeforest/mobland/images/testi-img1.jpg'],
  ]))
?>

<div id="_reviews">
  <div class="_reviews-wrapper">
    <header class="_header">
      <h3 class="_title">User reviews</h3>
      <p class="_desc">Conveniently coordinate cross-platform data after emerging internal or organic sources. Authoritatively productivate fully tested niches and 2.0 vortals.</p>
    </header>
    <main class="_content">
      <?php foreach ($review_data as $review): ?>
        <div class="_card">
          <div class="_profile">
            <img src="<?= $review->profile ?>" alt="profile">
          </div>
          <div class="_stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>
          <p class="_title"><?= $review->title ?></p>
          <p class="_desc"><?= $review->desc ?></p>
          <p class="_name">-<?= $review->name ?>, <span><?= $review->location ?></span></p>
        </div>
      <?php endforeach; ?>
    </main>
  </div>
</div>


<?php
$stack_data_left = json_decode(json_encode([
  ['title' => 'Powerful Stack', 'icon' => 'fa-solid fa-database', 'desc' => 'Conveniently redefine transparent results vis-a-vis inexpensive best practices of the tech'],
  ['title' => 'Powerful Stack', 'icon' => 'fa-solid fa-database', 'desc' => 'Conveniently redefine transparent results vis-a-vis inexpensive best practices of the tech'],
  ['title' => 'Powerful Stack', 'icon' => 'fa-solid fa-database', 'desc' => 'Conveniently redefine transparent results vis-a-vis inexpensive best practices of the tech'],
]));
$stack_data_right = json_decode(json_encode([
  ['title' => 'Powerful Stack', 'icon' => 'fa-solid fa-database', 'desc' => 'Conveniently redefine transparent results vis-a-vis inexpensive best practices of the tech'],
  ['title' => 'Powerful Stack', 'icon' => 'fa-solid fa-database', 'desc' => 'Conveniently redefine transparent results vis-a-vis inexpensive best practices of the tech'],
  ['title' => 'Powerful Stack', 'icon' => 'fa-solid fa-database', 'desc' => 'Conveniently redefine transparent results vis-a-vis inexpensive best practices of the tech'],
]));
?>

<section id="_stack">
  <div class="_stack-wrapper">
    <div class="_left">
      <?php foreach ($stack_data_left as $stack): ?>
        <div class="_card">
          <i class="_icon <?= $stack->icon ?>"></i>
          <div class="_title-desc">
            <h3 class="_title"><?= $stack->title ?></h3>
            <p class="_desc"><?= $stack->desc ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="_middle">
      <div class="_screens">
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/screen5.jpg" alt="screen" class="_screen">
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/screen5.jpg" alt="screen" class="_screen">
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/screen5.jpg" alt="screen" class="_screen">
      </div>
      <img src="https://demo.web3canvas.com/themeforest/mobland/images/detailed-screen.png" alt="element" class="_phone">
    </div>
    <div class="_right">
      <?php foreach ($stack_data_left as $stack): ?>
        <div class="_card">
          <i class="_icon <?= $stack->icon ?>"></i>
          <div class="_title-desc">
            <h3 class="_title"><?= $stack->title ?></h3>
            <p class="_desc"><?= $stack->desc ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php
$step_data = json_decode(json_encode([
  ['title' => 'Login with Touch ID', 'desc' => 'Apps that have the power to transform workflows.', 'screen' => 'https://demo.web3canvas.com/themeforest/mobland/images/tab-screen.png'],
  ['title' => 'Login with Touch ID', 'desc' => 'Apps that have the power to transform workflows.', 'screen' => 'https://demo.web3canvas.com/themeforest/mobland/images/tab-screen.png'],
  ['title' => 'Login with Touch ID', 'desc' => 'Apps that have the power to transform workflows.', 'screen' => 'https://demo.web3canvas.com/themeforest/mobland/images/tab-screen.png'],
]));
?>

<div id="_step">
  <div class="_step-wrapper">
    <main class="_content">
      <?php foreach ($step_data as $key=>$step): ?>
        <div class="_card <?= $key == 0 ? '_active' : '' ?>" style="<?= $key == 0 ? 'background-color: rgba(255,255,255,1)' : '' ?>">
          <div class="_arrow"></div>
          <h3 class="_number">0<?= $key + 1 ?></h3>
          <div class="_title-desc">
            <h3 class="_title"><?= $step->title ?></h3>
            <p class="_desc"><?= $step->desc ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </main>
    <div class="_images">
      <div class="_screens">
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/screen5.jpg" alt="screen" class="_screen _screen-1">
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/screen6.jpg" alt="screen" class="_screen _dnone _screen-2">
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/screen7.jpg" alt="screen" class="_screen _dnone _screen-3">
      </div>
      <img src="https://demo.web3canvas.com/themeforest/mobland/images/tab-screen.png" alt="element" class="_phone">
    </div>
  </div>
</div>

<section id="_gallery">
  <header class="_header">
    <h3 class="_title">Gallery</h3>
    <p class="_desc">Showcase the screenshots of your application for a better understanding of your app and it helps to increase app downloads and purchases. Always make sure its great.</p>
  </header>
  <main class="_content">
    <img src="https://demo.web3canvas.com/themeforest/mobland/images/gallery-slide-bg.png" alt="element" class="_phone">
    <div class="_content-slide">
      <div class="_screen-card">
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/screen5.jpg" alt="element" class="_screen">
      </div>
      <div class="_screen-card">
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/screen5.jpg" alt="element" class="_screen">
      </div>
      <div class="_screen-card">
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/screen5.jpg" alt="element" class="_screen">
      </div>
      <div class="_screen-card">
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/screen5.jpg" alt="element" class="_screen">
      </div>
      <div class="_screen-card">
        <img src="https://demo.web3canvas.com/themeforest/mobland/images/screen5.jpg" alt="element" class="_screen">
      </div>
    </div>
  </main>
</section>


<section id="_contact">
  <div class="_map"></div>
  <div class="_contact-wrapper">
    <form action="#" class="_form">
      <h3 class="_title">Contact us</h3>
      <input type="text" placeholder="Name" class="_name-input">
      <input type="email" placeholder="Email" class="_email-input">
      <textarea name="message" placeholder="Message" class="_message-input"></textarea>
      <div class="_cta">
        <button type="submit">Send Message <i class="fa-solid fa-chevron-right"></i></button>
      </div>
    </form>
    <main class="_content">
      <div class="_add">
        <i class="fa-solid fa-location-dot"></i>
        <p class="_desc">481 Boston St.<br>Mountain View, CA 94043</p>
      </div>
      <div class="_add">
        <i class="fa-solid fa-envelope"></i>
        <p class="_desc">sales@appland.com<br>support@appland.com</p>
      </div>
      <div class="_add">
        <i class="fa-solid fa-phone"></i>
        <p class="_desc"> +1 (223) 243 1208<br>+1 (351) 561 7041</p>
      </div>
      <div class="_socials">
        <a href="#" class="_social">
          <i class="fa-brands fa-facebook"></i>
        </a>
        <a href="#" class="_social">
          <i class="fa-brands fa-twitter"></i>
        </a>
        <a href="#" class="_social">
          <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="#" class="_social">
          <i class="fa-brands fa-linkedin"></i>
        </a>
      </div>
    </main>
  </div>
</section>

<footer id="_footer">
  <div class="_footer-wrapper">
    <p class="_desc">Copyright © 2017. All rights reserved. Appland Inc</p>
    <div class="_links">
      <a href="#" class="_link">PRESS</a>
      <a href="#" class="_link">TERM</a>
      <a href="#" class="_link">PRIVACY</a>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
  const {
    animate,
    scroll
  } = Motion
</script>
<script src="./script/header.js"></script>
<script src="./script/slider.js"></script>
<script src="./script/reviews.js"></script>
<script src="./script/stack.js"></script>
<script src="./script/step.js"></script>
<script src="./script/gallery.js"></script>
</body>
</html>