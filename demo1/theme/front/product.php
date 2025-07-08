<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1746499786-product_image-06-05-2025-7wzOlUjfSrabpv8M.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <h1><?= $data->category_name ?></h1>
        <p>Home - <?= $data->category_name ?></p>
    </div>
</section>

<section class="pad6rem packages">
    <div class="container-global wow fadeIn" wow-data-ruation="2s">

        <?php if ($data->category_name == 'Bali Tour Packages'): ?>
            <div class="_home-prod">
                <?php
                foreach ($data->result as $product): ?>
                    <div class="_prod-card">
                        <img class="_prod-cover" src="<?= $product->img_cover_url ?>" alt="cover">
                        <div class="_prod-desc-wrapper">
                            <h3 class="_prod-title"><?= $product->title ?></h3>
                            <p class="_prod-location"><i class="fa-solid fa-location-dot"></i> Bali, Indonesia</p>
                            <hr>
                            <div class="_prod-actions">
                                <div class="_prod-price">
                                    <span>from</span>
                                    <h4>
                                        <?php if ($product->price >= 10000): ?>
                                            IDR <?= number_format($product->price) ?>
                                        <?php else: ?>
                                            USD <?= number_format($product->price) ?>
                                        <?php endif ?>
                                    </h4>
                                </div>
                                <a class="_prod-btn" href="<?= $func->link(ROUTE_PRODUCT_VIEW, $product->slug) ?>">Detail</a>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if ($data->category_name == "Best Activity Bali "): ?>
            <div class="_home-activity-wrapper" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1rem;">
                <?php foreach ($data->result as $activity): ?>
                    <div class="_activity-card">
                        <div class="_activity-desc-wrapper">
                            <h4 class="_activity-title"><?= $activity->title ?></h4>
                            <a class="_activity-cta" href="<?= $func->link(ROUTE_PRODUCT_VIEW, $activity->slug) ?>">Details <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                        <div class="_activity-cover-overlay"></div>
                        <img class="_activity-cover" src="<?= $activity->img_cover_url ?>" alt="cover">
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<?= $func->load('home/home_why') ?>
<?= $func->load('home/home_faq') ?>