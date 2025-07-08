<style>
    .wrap-gallery {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 200px;
        position: relative;
        border-radius: 0px;
    }

     @media (max-width: 768px) {
        .wrap-gallery { height: 160px; }
    }

.wrap-titfood p {
    font-family: var(--subtext);
    letter-spacing: 0px;
    font-size: 16px;
    line-height: 30px;
    color: #f1f1f1;
    margin-bottom: 25px;
}

.bg-foods { background: var(--colors); }

.wrap-titfood {
    padding: 0 8%;
}

.wrap-titfood h3 {
    font-family: var(--primtext);
    color: white;
    font-weight: 700;
    text-transform: capitalize;
    letter-spacing: 0px;
    font-size: 35px;
    line-height: 50px;
    margin-bottom: 20px;
}

.bg-foods .row { margin:0; }

.btn-food {
    background: transparent;
    color: white;
    border: 1px solid #fff;
    border-radius: 100px;
    text-transform: uppercase;
    padding: 10px 15px;
    font-weight: 500;
    font-family: var(--primtext);
    font-size: 12px;
    letter-spacing: 1px;
    transition: all ease 500ms;
}

.btn-food:hover {
    background: #fff;
    color: var(--colors);
}

@media (max-width: 768px) {

    .bg-foods { background:white; }

    .btn-food {
        font-size: 9px;
        background: var(--colors);
        color: white;
    }

    .wrap-titfood {
        padding: 0 0%;
        text-align: center;
        margin-bottom: 30px;
    }

    .wrap-titfood h3 {
        font-size: 30px;
        line-height: 40px;
        margin-bottom: 20px;
        color: var(--colors);
        margin-top: 40px;
    }

    .wrap-titfood p {
        font-size: 14px;
        line-height: 27px;
        margin-bottom: 30px;
        color: #555;
    }
}

</style>
<?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$grid = $item->setting->grid;
$route = ROUTE_PRODUCT_VIEW;
?>

<?php if ( $grid == 1): ?>

<section class="py-5">
    <div class="container">

        <div class="text-center title-product mb-5 wow fadeIn" data-wow-duration="2s">
            <h2><?= $title ?></h2>
            <p><?= $subtitle ?></p>
        </div>
        
        <div class="row wow fadeInUp" data-wow-duration="2s">
            <?php $i=1; foreach ($item->data as $items): ?>
                <?php if ($i == '1'): ?>
                    <div class="col-12 col-md-6" style="padding: 3px;">
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="<?= $items->url_img ?>" data-plugin-options="{'type':'image'}">
                            <div class="wrap-gallery lazyload" data-bgset="<?= $items->url_img ?>"></div>
                        </a>
                    </div>
                <?php else: ?>
                    <div class="col-6 col-md-3" style="padding: 3px;">
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="<?= $items->url_img ?>" data-plugin-options="{'type':'image'}">
                            <div class="wrap-gallery lazyload" data-bgset="<?= $items->url_img ?>"></div>
                        </a>
                    </div>
                <?php endif ?>
            <?php $i++; endforeach ?>
        </div>

        <div class="mt-5 text-center">
            <a class="btn btn-contact1" href="<?= base_url() ?>gallery/gallery">View All Gallery</a>
        </div>

    </div>
</section>

<?php elseif ( $grid == 2): ?>

<section class="bg-foods">
    <div class="row wow fadeIn" data-wow-duration="2s">
        <div class="col-md-5 align-self-center">
            <div class="wrap-titfood">
                <h3><?= $title ?></h3>
                <p><?= $subtitle ?></p>
                
                <a class="btn btn-food mr-2" href="https://www.instagram.com/akpardenpasar/"><i class="fab fa-instagram mr-2"></i>@akpardenpasar</a>
                <a class="btn btn-food" href="https://www.instagram.com/humasakpardenpasar/"><i class="fab fa-instagram mr-2"></i>@humasakpardenpasar</a>

            </div>
        </div>

        <div class="col-md-7">
            <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                <div class="row">
                <?php $i=1; foreach ($item->data as $items): ?>
                    <div class="col-6 col-md-3" style="padding: 1px;">
                        <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="<?= $items->url_img ?>">
                            <div class="wrap-gallery lazyload" data-bgset="<?= $items->url_img ?>"></div>
                        </a>
                    </div>
                <?php $i++; endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php else : ?>
<section class="mt-5">
    <div class="container" style="max-width: 1240px;">
        <div class="row mb-3">
            <div class="col-md-10 justify-content-start wow fadeInRight">
                <h3 class="title-gallery" style="margin-bottom: 5px;"><?= $item->setting->title ?></h3>
                <p><?= $item->setting->subtitle ?></p>
            </div>

            <div class="col-md-2 col-cus wow fadeInRight">
                <a class="btn btn-primary-cus" href="http://thedesaubud.com/gallery/all">View All</a>
            </div>
        </div>

        <div class="row">
            <?php foreach ($item->data as $items): ?>
            <div class="col-md-4 mb-2 wow fadeInUp" style="padding: 0; padding-right: 10px;">
                <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="<?= $items->url_img ?>" data-plugin-options="{'type':'image'}">
                    <img class="img-fluid" style="width: 100%; height: 250px;" src="<?= $items->url_img_thumb ?>" alt="<?= $items->title ?>">
                </a>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<?php endif ?>