<?php 
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle_2 = $item->setting->subtitle2;
$grid = $item->setting->grid;
$route = ROUTE_BLOG_VIEW; ?>

<style type="text/css">
    .product-default1 .owl-dots {
        display: none !important;
    }

</style>


<section class="pad6rem pt-md-5 product-default1">
    
    <div class="container-global">

        <div class="title-general text-center">
            <span class="tag-ats"><?= $subtitle ?></span>
            <h2 class="title"><?= $title ?></h2>
        </div>

        <div class="row mt-5">

            <?php foreach ($item->data as $items): ?>

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
                        <p><?= $func->trailer($items, 100) ?>...</p>

                        <a class="btn" href="<?= $func->link(ROUTE_BLOG_VIEW, $items->slug) ?>">Read More<i class="fas fa-arrow-right ml-3"></i></a>
                    </div>

                </div>
            </div>

            <?php endforeach ?>

        </div>

    </div>
</section>
