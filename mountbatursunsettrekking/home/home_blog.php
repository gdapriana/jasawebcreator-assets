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

<?php if ( $grid == 1): ?>
<section class="pad6rem " style="background: #fffbf8">
    <div class="container-global">

    <div class="title-product text-center">
            <span class="tag-atas"><?= $subtitle ?></span>
            <h2 style=""><?= $title ?></h2>
    </div>

        <div class="row ss-arrow">

            <?php $i=1; foreach ($item->data as $items): ?>
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
        <?php $i++; endforeach ?>

        </div>
    </div>
</section>
<?php elseif ( $grid == 2): ?>
<section class="pad6rem nearby" style="background: #fffbf8">
    <div class="container-global">

    <div class="title-product text-center">
            <span class="tag-atas"><?= $subtitle ?></span>
            <h2 style=""><?= $title ?></h2>
    </div>

        <div class="row nearby-slick ss-arrow">

            <?php $i=1; foreach ($item->data as $items): ?>
            <div class="px-2 col-3">
                <div class="card border-0">
                    <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />

                    <div class="card-img-overlay py-3 px-4">
                        <h3><?= $items->title ?></h3>
                        <!-- <span><i class="fa-solid fa-location-dot mr-2"></i> <?= $items->custom_field_1 ?></span> -->
                    </div>

                    <div class="desc py-md-3 px-4 py-1">
                        <h3><?= $items->title ?></h3>
                        <p><?= $func->trailer($items, 100) ?>...</p>
                        <a class="btn" href="<?= $func->link(ROUTE_BLOG_VIEW. $items->slug) ?>">Learn More <i class="fa-solid fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <?php $i++; endforeach ?>

        </div>
    </div>
</section>
<?php endif ?>