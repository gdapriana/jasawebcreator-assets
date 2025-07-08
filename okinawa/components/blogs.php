<?php
  $dataBlogs = json_decode(json_encode([
    'title' => 'Tips for Better Shopping',
    'pill' => 'Updates on Our Blog',
    'description' => 'Discover our wide range of premium products across all categories, carefully selected for quality and freshness',
    'items' => [
      ['title' => 'Uncle Jo Supermarket: Your Trusted Partner for Premium Quality and Convenience', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi debitis dolore dolores eius excepturi nihil quis ratione, sint tempora.', 'created_at' => '16/10/2012', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1737619970-23-01-2025-eFx0Trb83qoKlRBwvDHC1khpat4YcAuj.webp'],
      ['title' => 'Uncle Jo Supermarket: Your Trusted Partner for Premium Quality and Convenience', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi debitis dolore dolores eius excepturi nihil quis ratione, sint tempora.', 'created_at' => '16/10/2012', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1737619970-23-01-2025-eFx0Trb83qoKlRBwvDHC1khpat4YcAuj.webp'],
      ['title' => 'Uncle Jo Supermarket: Your Trusted Partner for Premium Quality and Convenience', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis commodi debitis dolore dolores eius excepturi nihil quis ratione, sint tempora.', 'created_at' => '16/10/2012', 'img' => 'https://jwc.gotra-resources.my.id/web-upload/1737619970-23-01-2025-eFx0Trb83qoKlRBwvDHC1khpat4YcAuj.webp'],
    ]
  ]))
?>

<section id="_blogs-root">
  <div class="_wrapper">
    <header class="_header">
      <span class="_pill"><?= $dataBlogs->pill ?></span>
      <h2 class="_title"><?= $dataBlogs->title ?></h2>
      <p class="_description"><?= $dataBlogs->description ?></p>
    </header>

    <main class="_content slick-blogs ss-arrow">
      <?php foreach ($dataBlogs->items as $key => $item) : ?>
          <article class="_card">
            <img src="<?= $item->img ?>" alt="cover" class="_cover">
            <span class="_uploaded">Uploaded <?= date('D M, Y', strtotime($item->created_at)) ?></span>
            <h5 class="_title"><?= $item->title ?></h5>
            <p class="_description"><?= $item->description ?></p>
            <a href="/pages/blog.php" class="_cta">Read More</a>
          </article>
      <?php endforeach; ?>
    </main>

  </div>
</section>
