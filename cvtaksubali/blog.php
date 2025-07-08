<style type="text/css">

@media (min-width: 768px) {
    #header.header-no-min-height .header-body { margin-top:-3px; }
}

</style>

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1742788760-24-03-2025-cy81hUEGeHqIjwkp7JiWMvQsZ0NbuCAO.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <h1><?= $data->category_name ?></h1>
        <p>Home - <?= $data->category_name ?></p>
    </div>
</section>

    
<?php if ($data->category_name == 'Nearby Attractions'): ?>
        
<section class="pad6rem rooms animate-items" style="">
    <div class="container-global wow fadeIn" data-wow-duration="2s">



        <div class="title-general text-left">
            <div class="row mx-0">
                <div class="col-md-5">
                    <span class="tag-ats">Nearby Attractions</span>
                    <h2 class="title ">Top Bali Attractions Near Us</h2>
                </div>
                <div class="col-md-5">
                    <p style="color: ;">Explore Bali’s top attractions near <b>Sense Canggu Beach</b>, including <b>Echo Beach, Tanah Lot Temple</b>, and the scenic <b>Ubud rice terraces.</b></p>
                </div>
            </div>
        </div>

        <div class="rooms-slick ss-arrow">
            <?php $i=1; foreach ($data->result as $items): ?>
                <div class="col-md-6">
                    <div class="card">
                        <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />
                        <div class="tag">
                            <i class="fa-solid fa-location-crosshairs mr-2"></i>
                            <?php if (!empty($items->custom_field_1)): ?>
                                <?= $items->custom_field_1 ?>
                            <?php else: ?>
                                3 Minute
                            <?php endif ?>
                        </div>
                        <div class="card-img-overlay">
                            <h3 class="mb-2"><?= $items->title ?></h3>
                            <p><?= $func->trailer($items, 100) ?>...</p>
                            <div class="button">
                                <a href="<?= $func->link(ROUTE_BLOG_VIEW, $items->slug) ?>" class="btn btn-room">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $i++; endforeach ?>
        </div>

    </div>
</section>

<?php else: ?>
    
<section class="pad6rem product-default1 animate-items">
    
    <div class="container-global">

        <div class="title-general text-center">    
            <span class="tag-ats">Blogs & News</span>
            <h2 class="title">Bali Travel Tips and Inspiration</h2>
            <p>Stay up-to-date with the latest travel tips, Bali guides, and insider information through our <b>Sense Canggu Beach</b> blog. Discover hidden gems, local experiences, and expert advice to make the most of your Bali getaway.</p>
        </div>

       <div class="row mt-5">

            <?php $i=1; foreach ($data->result as $items): ?>

            <div class="col-md-4">
                <div class="wrap-blog">

                    <div style="position: relative;">
                        <img class="img-fluid w-100" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">
                        <span class="catcat"><i class="far fa-clock mr-2"></i><?= date('d M Y', strtotime($items->created_at)) ?></span>
                    </div>

                    <div class="wrap-blog2">
                        
                        <h3><?= $items->title ?></h3>
                        <p><?= $func->trailer($items, 100) ?>...</p>

                        <a class="btn" href="<?= $func->link(ROUTE_BLOG_VIEW, $items->slug) ?>">Read More<i class="fas fa-arrow-right ml-3"></i></a>
                    </div>

                </div>
            </div>

            <?php endforeach ?>

        </div>

    </div>

    </div>
</section>
        

<?php endif ?>


        