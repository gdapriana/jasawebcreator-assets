<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Why Choose Us?</title>
  <link rel="stylesheet" href="css/why.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>

<section id="_why-root">
  <?php
    $_why = json_decode(json_encode([
      "span" => "Why Choose Us?",
      "title" => "The Ultimate Travel Experience Feature That Set  Our Agency Apart",
      "items" => [
        'left' => [
          [
            "title" => "Experienced Guides",
            "description" => "Our professional guides ensure a safe and enjoyable trekking experience.",
            "icon" => "fa-solid fa-person-hiking"
          ],
          [
            "title" => "Breathtaking Views",
            "description" => "Enjoy the mesmerizing sunset from the peak of Mount Batur.",
            "icon" => "fa-solid fa-mountain-sun"
          ],
        ],
        'right' => [
        [
          "title" => "Adventure & Thrill",
          "description" => "Experience the thrill of hiking a volcano with stunning landscapes.",
          "icon" => "fa-solid fa-fire"
        ],
        [
          "title" => "Delicious Breakfast",
          "description" => "Relish a warm meal at the top while witnessing the sunrise.",
          "icon" => "fa-solid fa-mug-hot"
        ]
      ]
        ]
    ]));
  ?>
  <div class="_why-wrapper container-global">
    <div class="_why-title-wrapper">
      <div class="product-title _why-title-header">
        <span><?= $_why->span ?></span>
        <h2><?= $_why->title ?></h2>
      </div>
      
      <div class="_why-title-images-wrapper">
        <img class="_why_title-image" src="https://jwc.gotra-resources.my.id/web-upload/1742280464-product_image-18-03-2025-OAmKEHq25XbRUN6a.jpg" alt="why choose us image">
        <div class="_why-title-user-desc">
          <div class="_why-users-wrapper">
            <img style="z-index: 1" src="https://jwc.gotra-resources.my.id/web-upload/1742280485-18-03-2025-4lW5FUMA8zVuLm1tchpoX6erTNsKEnj0.jpg" class="_why-user" alt="user">
            <img style="z-index: 2; transform: translateX(-15px)" src="https://jwc.gotra-resources.my.id/web-upload/1742280485-18-03-2025-4lW5FUMA8zVuLm1tchpoX6erTNsKEnj0.jpg" class="_why-user" alt="user">
            <img style="z-index: 3; transform: translateX(-30px)" src="https://jwc.gotra-resources.my.id/web-upload/1742280485-18-03-2025-4lW5FUMA8zVuLm1tchpoX6erTNsKEnj0.jpg" class="_why-user" alt="user">
            <div style="z-index: 4; transform: translateX(-45px)"  class="_why-user">8k+</div>
          </div>
          <p class="_why-title-desc">850K+ Happy Costumers</p>
        </div>
      </div>
    </div>
    <div class="_why-card-wrapper">
      <div class="_why-card-wrapper-left">
        <?php foreach ($_why->items->left as $item): ?>
          <div class="_why-card">
            <i class="fa-solid fa-bookmark _why-bookmark"></i>
            <i class="_why-card-icon <?= $item->icon ?>"></i>
            <p class="_why-card-title"><?= $item->title ?></p>
            <p class="_why-card-description"><?= $item->description ?></p>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="_why-card-wrapper-right">
        <?php foreach ($_why->items->right as $item): ?>
          <div class="_why-card">
            <i class="fa-solid fa-bookmark _why-bookmark"></i>
            <i class="_why-card-icon <?= $item->icon ?>"></i>
            <p class="_why-card-title"><?= $item->title ?></p>
            <p class="_why-card-description"><?= $item->description ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

</body>
</html>