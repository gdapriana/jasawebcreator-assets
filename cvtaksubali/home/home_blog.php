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

<?php if ($grid == 1): ?>


<section class="pad6rem product-default1 animate-items">
    
    <div class="container-global">

        <div class="title-general text-center">    
            <span class="tag-ats"><?= $subtitle_2 ?></span>
            <h2 class="title"><?= $title ?></h2>
            <p><?= $subtitle ?></p>
        </div>

       <div class="row mt-5">

            <?php foreach ($item->data as $items): ?>

            <div class="col-md-4">
                <a href="<?= $func->link(ROUTE_BLOG_VIEW, $items->slug) ?>">
                <div class="wrap-blog">

                    <div style="position: relative;">
                        <img class="img-fluid w-100" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">
                        <span class="catcat"><i class="far fa-clock mr-2"> Blog</i></span>
                    </div>

                    <div class="wrap-blog2">
                        
                        <h3><?= $items->title ?></h3>
                        <p><?= date('d M Y', strtotime($items->created_at)) ?></p>


                    </div>

                </div>
                </a>
            </div>

            <?php endforeach ?>

        </div>

    </div>

    </div>
</section>

<?php elseif ($grid == 3): ?>
<section class="pad6rem rooms animate-items" style="background: var(--color2);">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="title-general text-left">
            <div class="row mx-0">
                <div class="col-md-5">
                    <span class="tag-ats"><?= $subtitle_2 ?></span>
                    <h2 class="title text-light"><?= $title ?></h2>
                </div>
                <div class="col-md-5">
                    <p style="color: #ccc;"><?= $subtitle ?></p>
                </div>
            </div>
        </div>

        <div class="rooms-slick ss-arrow">
            <?php $i=1; foreach ($item->data as $items): ?>
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
<?php endif ?>