<?php
  $dataReviews = json_decode(json_encode([
    'title' => 'Hear What Our Customers Are Saying',
    'pill' => 'Customer Reviews',
    'description' => 'Discover our wide range of premium products across all categories, carefully selected for quality and freshness',
    'items' => [
      ['message' => 'Good selection of fruit and veggies. Good quality meat at a reasonable price.', 'user' => ['name' => 'Marici McMaster', 'img' => 'https://static.vecteezy.com/system/resources/thumbnails/000/439/863/small_2x/Basic_Ui__28186_29.jpg']],
      ['message' => 'Good selection of fruit and veggies. Good quality meat at a reasonable price.', 'user' => ['name' => 'Marici McMaster', 'img' => 'https://static.vecteezy.com/system/resources/thumbnails/000/439/863/small_2x/Basic_Ui__28186_29.jpg']],
      ['message' => 'Good selection of fruit and veggies. Good quality meat at a reasonable price.', 'user' => ['name' => 'Marici McMaster', 'img' => 'https://static.vecteezy.com/system/resources/thumbnails/000/439/863/small_2x/Basic_Ui__28186_29.jpg']],
      ['message' => 'Good selection of fruit and veggies. Good quality meat at a reasonable price.', 'user' => ['name' => 'Marici McMaster', 'img' => 'https://static.vecteezy.com/system/resources/thumbnails/000/439/863/small_2x/Basic_Ui__28186_29.jpg']],
      ['message' => 'Good selection of fruit and veggies. Good quality meat at a reasonable price.', 'user' => ['name' => 'Marici McMaster', 'img' => 'https://static.vecteezy.com/system/resources/thumbnails/000/439/863/small_2x/Basic_Ui__28186_29.jpg']],
      ['message' => 'Good selection of fruit and veggies. Good quality meat at a reasonable price.', 'user' => ['name' => 'Marici McMaster', 'img' => 'https://static.vecteezy.com/system/resources/thumbnails/000/439/863/small_2x/Basic_Ui__28186_29.jpg']],
      ['message' => 'Good selection of fruit and veggies. Good quality meat at a reasonable price.', 'user' => ['name' => 'Marici McMaster', 'img' => 'https://static.vecteezy.com/system/resources/thumbnails/000/439/863/small_2x/Basic_Ui__28186_29.jpg']],
      ['message' => 'Good selection of fruit and veggies. Good quality meat at a reasonable price.', 'user' => ['name' => 'Marici McMaster', 'img' => 'https://static.vecteezy.com/system/resources/thumbnails/000/439/863/small_2x/Basic_Ui__28186_29.jpg']],
    ]
  ]))
?>



<section id="_reviews-root">
  <div class="_wrapper">
    <header class="_header">
      <span class="_pill"><?= $dataReviews->pill ?></span>
      <h2 class="_title"><?= $dataReviews->title ?></h2>
      <p class="_description"><?= $dataReviews->description ?></p>
    </header>

    <div class="_content slick-reviews">
      <?php foreach($dataReviews->items as $item): ?>
        <article class="_card">
          <div class="_user">
            <img class="_img-profile" src="<?= $item->user->img ?>" alt="profile">
            <div class="_name-rating">
              <h5 class="_name"><?= $item->user->name ?></h5>
              <div class="_rating">
                <?php
                  for ($i = 0; $i < 5; $i++) {
                    echo '<i class="fas fa-star"></i>';
                  }
                ?>
              </div>
            </div>
          </div>
          <p class="_message"><?= $item->message ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

