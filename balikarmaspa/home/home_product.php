 <?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle2 = $item->setting->subtitle2;
$grid = $item->setting->grid;
$route = ROUTE_PRODUCT_VIEW;
?>

<style type="text/css">

/* Cate */

* { scroll-behavior:smooth; }

.wrap-cate {
    font-family: var(--primtext);
    position: relative;
    border-radius: 0px;
    overflow: hidden;
    margin-bottom: 3px;
    transition: all ease 500ms;
    background: black;
    border-radius: 20px;
    /* box-shadow: 2px 4px 20px #00000047; */
}

.wrap-cate img {
    height: 400px;
    width: 100%;
    object-fit: cover;
    transition: all ease 500ms !important;
}

.wrap-cate:before {
    position: absolute;
    content: '';
    top: 20%;
    left: 0;
    transition: all ease 500ms;
    right: 0;
    bottom: 0;
    z-index: 1;
    background: transparent linear-gradient(180deg, rgb(13 28 52 / 0) 0, var(--colors) 100%) 0 0 no-repeat padding-box;
}
.blog-dest .wrap-cate:before {
    background: transparent linear-gradient(180deg, rgb(13 28 52 / 0) 0, #000000 100%) 0 0 no-repeat padding-box;
}

.wrap-cate2 {
    position: absolute;
    z-index: 2;
    left: 0;
    right: 0;
    bottom: 8%;
    padding: 0px 35px;
}

.wrap-cate2 h3 {
    color: white;
    text-transform: capitalize;
    font-weight: 500;
    font-size: 20px;
    line-height: 35px;
    letter-spacing: 0px;
    margin-bottom: 10px;
}

.wrap-cate2 p {
    color: #f1f1f1;
    font-size: 13px;
    line-height: 25px;
    font-weight: 400;
    padding: 0px;
    margin: 0;
    margin-bottom: 20px;
    font-family: var(--primtext);
}

.wrap-cate2 .price {
    font-size: 21px;
    margin-bottom: 20px;
}

.wrap-cate2 .btn-cate {
    background: var(--color2);
    color: white;
    border: 1px solid;
    text-transform: uppercase;
    border-radius: 100px;
    padding: 10px 28px;
    font-size: 11px;
    letter-spacing: 1px;
    font-weight: 600;
    transition: all ease 500ms;
}

.wrap-cate2 .btn-cate:hover {
    transition: all ease 500ms;
    background: #111;
    color: #fff;
    border-color: #111;
}

.wrap-cate:hover img {
    transform: scale(1.1);
}

@media (min-width: 768px) {

    .rowdes { margin:0; }
}

@media (max-width : 768px) {
    .col-cate { padding:0px 5px; }

    .wrap-cate { margin-bottom: 5px; }

    .wrap-cate2 {
        bottom: 3%;
        padding: 20px 5px;
        text-align: center;
    }

    .wrap-cate img {
        height: 220px !important;
    }

    .wrap-cate2 h3 {
        font-size: 15px;
        line-height: 30px;
        margin-bottom: 9px;
    }

    .catcat { margin-bottom:0px; }

    .wrap-cate2 p {
        font-size: 13px;
        display: none;
    }

    .wrap-cate2 .price {
        font-size: 18px;
        margin-bottom: 11px;
    }

    .wrap-cate2 .btn-cate {
        padding: 5px 14px;
        font-size: 8px;
    }
}
/* ======== car ========== */
.car .title-carm {
    position: relative;
    height: 60vh;
}
.car .background {
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    filter: brightness(.6);
    position: absolute;
    background-size: cover;
    background-position: center;
    background-image: url(https://gotra.sgp1.digitaloceanspaces.com/web-upload/1734787768-product_image-21-12-2024-28CebMUnZDLXgu7I.webp);
}
.car .title-product {
    position: relative;
    z-index: 4;
}
.car .title-product h2 {
    margin-bottom: 20px;
    font-weight: 600;
    text-transform: capitalize;
}
.car .title-product p {
    margin-bottom: 30px;
    font-size: 18px;
}
.car .title-product i {font-size: 2rem; color: #fff; transition: all ease 500ms;}
.car .title-product a:hover i {color: var(--color2)}
@media (max-width : 768px) {
    .car .title-carm {
        height: 50vh;
    }
}


</style>

<?php if ($grid == '1'): ?>

<section class="pad6rem bg-prodct category-wr" id="category" style="background: #00688617">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">

        <div class="title-product text-center">
            <span class="tag-atas"><?= $subtitle ?></span>
            <h2><?= $title ?></h2>
        </div>

        <div class="row ss-arrow justify-content-center">

            <?php $i=1; foreach ($data->category as $items): ?>
            <?php if ($items->id != '6230' && $items->id != '6236'): ?>
                
              <div class="col-md-3 col-6 text-md-left px-2 pb-3">
                   <div class="wrap-cate">

                       <img class="img-fluid" loading="lazy" src="<?= $items->image ?>" alt="<?= $items->name ?>">

                       <div class="wrap-cate2">
                            <h3><?= $items->name ?></h3>
                            <p><?= strip_tags($items->content) ?></p>
                            <a class="btn btn-cate" href="<?= $func->link(ROUTE_PRODUCT. $items->slug) ?>">View More <i class="fa-solid fa-chevron-right ml-2"></i></a>
                       </div>
                   </div>
              </div>
            <?php endif ?>
            <?php $i++; endforeach ?>
        </div>

    </div>
</section>

<?php elseif ($grid == '2'): ?>


<section class="pad6rem " id="populer" >
    <div class="container-global wow fadeIn" data-wow-duration="2s">
        <div class="title-product text-center">
            <span class="tag-atas"><?= $subtitle ?></span>
            <h2><?= $title ?></h2>
        </div>
        <div class="row ss-arrow justify-content-center">
            <?php $i=1; foreach ($item->data as $items): ?>
                <div class="col-md-4 mb-3" style="padding: 0px 5px;">
                    <div class="wprod car-rent">
                        <div class="bg-wprod lazyload" data-bgset="<?= $items->img_cover_url ?>"></div>

                        <div class="wprod2 text-center" style="padding: 0px 20px 30px;">
                            <h2 class="mb-3"><?= $items->title ?></h2>

                        <?php if (!empty($items->price)): ?>
                            <div class="wrap-price-mobil text-center">
                                <span class="start-idr">USD</span>
                                <p class="price-mobil"><?= number_format($items->price) ?></p>
                                <span class="pax"> / Day</span>
                            </div>
                        <?php endif ?>
                            <p class="srv">10 hours service</p>
                            <a class="btn button-read" href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%20admin%20<?= $data->web->site_name ?>%2C%20I%20would%20like%20to%20rent%20a%20car%20%2A<?= $items->title ?>%2A%2C%20can%20you%20assist%20me%3F">Reserve it Now</a>

                            

                            <div class="content-car">
                                <p class="cr">No credit card required!</p>
                                <?= str_replace('Sewa Mobil ', '', $items->content) ?>
                            </div>

                        </div>
                    </div><!-- wprod -->
                </div><!-- col-md-4 -->
            <?php $i++; endforeach ?>
        </div>

    </div>
</section>

<?php elseif ($grid == '3'): ?>


<section class="pad6rem product" id="populer">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="title-product text-center">
            <span class="tag-atas"><i class="fa-solid fa-star-of-life mr-3"></i><?= $subtitle ?></span>
            <h2><?= $title ?></h2>
        </div>

        <div class="row ss-arrow justify-content-start">
            <?php $i=1; sort($item->data); foreach ($item->data as $items): ?>
                <?php if ( $i == 1 ): ?>
                <div class="col-md-4 col-sm-6 pb-4 px-md-3 px-2 mob">
                    <div class="card h-100">
                        <div class="img w-100">
                            <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" class="w-100"/>
                        </div>
                        <div class="card-body px-md-4 pt-2 px-sm-1 px-4">
                            <div class="location"><i class="fa-solid fa-location-crosshairs mr-2"></i>Bali, Indonesia</div>
                            <h3><?= $items->title ?></h3>
                            <div class="day">
                                <?= $func->trailer($items, 90) ?>...
                            </div>
                            <div class="btm px-md-4 py-md-3 py-sm-2 px-sm-1 py-3 px-4 d-flex justify-content-between align-items-end">
                                <div class="price">
                                    <span>
                                        <?php if ($items->price >= 10000): ?>
                                            IDR <?= number_format($items->price) ?>
                                        <?php else: ?>
                                            USD <?= number_format($items->price) ?>
                                        <?php endif ?>
                                    </span>
                                    /person
                                </div>
                                <a class="btn" href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>">
                                    Learn More
                                    <i class="fa-solid fa-circle-right ml-md-2 ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                <div class="col-md-4 col-6 pb-4 px-md-3 px-2">
                    <div class="card h-100">
                        <div class="img w-100">
                            <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" class="w-100"/>
                        </div>
                        <div class="card-body px-md-4 pt-2 px-1">
                            <div class="location"><i class="fa-solid fa-location-crosshairs mr-2"></i>Bali, Indonesia</div>
                            <h3><?= $items->title ?></h3>
                            <div class="day">
                                <?= $func->trailer($items, 90) ?>...
                            </div>
                            <div class="btm px-md-4 py-md-3 py-2 px-1 d-flex justify-content-between align-items-end">
                                <div class="price">
                                    <span>
                                        <?php if ($items->price >= 10000): ?>
                                            IDR <?= number_format($items->price) ?>
                                        <?php else: ?>
                                            USD <?= number_format($items->price) ?>
                                        <?php endif ?>
                                    </span>
                                    /person
                                </div>
                                <a class="btn" href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>">
                                    Learn More
                                    <i class="fa-solid fa-circle-right ml-md-2 ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif ?>
            <?php $i++; endforeach ?>
        </div>
        <!--<div class="d-flex pt-5 justify-content-center align-items-center">
            <a href="<?= $subtitle2 ?>" class="btn btn-contact1">
                Lihat Daftar Mobil
            </a>
        </div>-->

    </div>
</section>

<?php elseif ($grid == '4'): ?>

<section class="pad6rem simcard" id="populer" >
    <div class="background" ></div>
    <div class="container-global px-md-5 px-3 wow fadeIn" data-wow-duration="2s">

        <div class="title-product text-center">
            <span class="tag-atas "><?= $subtitle ?></span>
            <h2 class=""><?= $title ?></h2>
        </div>

        <div class="slide-sim ss-arrow justify-content-start">
            <?php $i=1; sort($item->data); foreach ($item->data as $items): ?>
                <div class=" px-2 h-100">
                    <div class="card h-100">
                        <div class="head-card">
                            <div class="head">
                                <p class="cate-prd">Bali eSIM Plans</p>
                                <h3><?= $items->title ?></h3>
                            </div>
                        </div>
                        <div class="feature pt-0">
                            <div class="icon mx-auto mb-3">
                                <i class="fa-solid fa-wifi"></i>
                            </div>
                            <?= $items->content ?>
                        </div>
                        <div class="price">
                            <span>
                                <?php if ($items->price >= 10000): ?>
                                    IDR <?= number_format($items->price) ?>
                                <?php else: ?>
                                    USD <?= number_format($items->price) ?>
                                <?php endif ?>
                            </span>
                            | <?= $items->custom_field_1 ?>
                        </div>
                        <div class="button d-flex align-items-center justify-content-center py-3 mb-3" style="flex-wrap: wrap;">
                            <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btn-prd mr-1 mb-1">Buy Now!</a>
                            <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btn-prd btn-det mb-1">View Detail</a>
                        </div>
                    </div>
                </div>

            <?php $i++; endforeach ?>
        </div>


    </div>
</section>

<?php elseif ($grid == '6'): ?>

<section class="pad6rem simcard" id="populer" style="background: #fff7f8;">
    <div class="background" ></div>
    <div class="container-global px-md-5 px-3 wow fadeIn" data-wow-duration="2s">

        <div class="title-product text-center">
            <span class="tag-atas "><?= $subtitle ?></span>
            <h2 class=""><?= $title ?></h2>
        </div>

        <div class="slide-sim ss-arrow justify-content-start">
            <?php $i=1; sort($item->data); foreach ($item->data as $items): ?>
                <div class=" px-2 h-100">
                    <div class="card h-100">
                        <div class="head-card">
                            <div class="head">
                                <p class="cate-prd">Bali eSIM Top Up</p>
                                <h3><?= $items->title ?></h3>
                            </div>
                        </div>
                        <div class="feature pt-0">
                            <div class="icon mx-auto mb-3">
                                <i class="fa-solid fa-wifi"></i>
                            </div>
                            <?= $items->content ?>
                        </div>
                        <div class="price">
                            <span>
                                <?php if ($items->price >= 10000): ?>
                                    IDR <?= number_format($items->price) ?>
                                <?php else: ?>
                                    USD <?= number_format($items->price) ?>
                                <?php endif ?>
                            </span>
                            | <?= $items->custom_field_1 ?>
                        </div>
                        <div class="button d-flex align-items-center justify-content-center py-3 mb-3" style="flex-wrap: wrap;">
                            <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btn-prd mr-1 mb-1">Buy Now!</a>
                            <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btn-prd btn-det mb-1">View Detail</a>
                        </div>
                    </div>
                </div>

            <?php $i++; endforeach ?>
        </div>


    </div>
</section>

<?php endif ?>