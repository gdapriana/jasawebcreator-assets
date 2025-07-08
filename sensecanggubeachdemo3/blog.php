<style type="text/css">

@media (min-width: 768px) {
    #header.header-no-min-height .header-body { margin-top:-3px; }
}

</style>

<section class="section-allpage lazyload" data-bgset="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1733304509-04-12-2024-ljcrxHaLRM9VEYiDeT0qItpPKZSzoU6f.png
">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <h1><?= $data->category_name ?></h1>
        <p>Home - <?= $data->category_name ?></p>
    </div>
</section>

<section class="pad6rem">
    <div class="container-global">
    
    <?php if ($data->category_name == 'Nearby Attractions'): ?>
        <div class="title-general text-center">
            <span class="tag-ats">Water Blow Huts</span>
            <h2 class="title">Explore the stunning <span>destinations</span> just minutes away</h2>
        </div>
    <?php else: ?>
        <div class="title-general text-center">
            <span class="tag-ats">Water Blow Huts</span>
            <h2 class="title">Our Latest Articles for <span>Travelers</span> Tips and Bali Insights</h2>
        </div>
    <?php endif ?>

        <div class="row mt-5">

            <?php foreach ($data->result as $items): ?>

            <div class="col-md-4 px-2">
                <div class="wrap-blog">

                    <div style="position: relative;">
                        <img class="img-fluid w-100" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">

                        <?php foreach ($data->blog_category as $cate): ?>
                            <?php if ($items->category_id == $cate->id): ?>
                                <span class="catcat"><?= $cate->name ?></span>
                            <?php endif ?>
                        <?php endforeach ?>
                    </div>

                    <div class="wrap-blog2">
                        
                        <span><i class="far fa-clock mr-2"></i><?= date('d M Y', strtotime($items->created_at)) ?></span>

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

<?= $func->load('home/home_paralax') ?>