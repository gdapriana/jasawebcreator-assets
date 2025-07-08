<style type="text/css">

    .d-flex {
        display: flex;
        flex-wrap: wrap;
    }
    .justify-content-center {
        justify-content: center;
    }
    .align-item-center {
        align-items: center;
    }
@media (min-width: 768px) {
    #header.header-no-min-height .header-body { margin-top:-3px; }
}

</style>

<?php if ($data->category_name == 'all'): ?>

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1742144154-17-03-2025-3Fen71Q6YRmqyDKtoCldjJOaNSrPx04v.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <h1>Semua Artikel</h1>
        <p>Beranda - Semua Artikel</p>
    </div>
</section>
    
<?php else: ?>

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1742144154-17-03-2025-3Fen71Q6YRmqyDKtoCldjJOaNSrPx04v.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <div class="tx text-center w-100">
            <h1><?= $data->category_name ?></h1>
            <p>Home - <?= $data->category_name ?></p>
        </div>
    </div> 
</section>

<?php endif ?>

<?php if ($data->category_name == 'Popular Destination in Bali'): ?>
<section class="pad6rem nearby">
    <div class="container-global wow fadeIn" data-wow-duration="2s">
        <div class="row mt-4  px-0">
            <?php foreach ($data->result as $items): ?>
                <div class="col-md-3 pb-3 px-2 col-6">
                    <div class="card border-0">
                        <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />

                        <div class="card-img-overlay py-3 px-4">
                            <h3><?= $items->title ?></h3>
                            <!-- <span><i class="fa-solid fa-location-dot mr-2"></i> <?= $items->custom_field_1 ?></span> -->
                        </div>

                        <div class="desc py-3 px-4">
                            <h3><?= $items->title ?></h3>
                            <p><?= $func->trailer($items, 100) ?>...</p>
                            <a class="btn" href="<?= $func->link(ROUTE_BLOG_VIEW. $items->slug) ?>">Learn More <i class="fa-solid fa-arrow-right ml-2"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<?php else: ?>

<section class="pad6rem">
    <div class="container-global wow fadeIn" data-wow-duration="2s">


        <div class="row mt-4  px-0">

            <?php foreach ($data->result as $items): ?>

            <div class="col-md-4">
                <div class="blog">

                    <div style="position: relative;">
                        <img class="img-fluid w-100" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">

                        <div class="catcat text-center">
                            <span>
                                <?= date('d', strtotime($items->created_at)) ?>
                            </span> <br>
                            <?= date('M', strtotime($items->created_at)) ?>
                        </div>
                    </div>

                    <div class="blog2">
                        
                        <h3><?= $items->title ?></h3>
                        <p><?= $func->trailer($items, 90) ?>...</p>

                        <a class="btn" href="<?= $func->link(ROUTE_BLOG_VIEW, $items->slug) ?>">Read More<i class="fas fa-arrow-right ml-3"></i></a>
                    </div>

                </div>
            </div>

            <?php endforeach ?>

        </div>

    </div>
</section>

<?php endif ?>

    <?= $func->load('home/home_why') ?>

    <?= $func->load('home/home_faq') ?>