 <?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle_2 = $item->setting->subtitle2;
$grid = $item->setting->grid;
$route = ROUTE_PRODUCT_VIEW;
?>
<style>


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
    opacity: .8;
    background: transparent linear-gradient(180deg, rgb(13 28 52 / 0) 0, #000 100%) 0 0 no-repeat padding-box;
}

.wrap-cate2 {
    position: absolute;
    z-index: 2;
    left: 0;
    right: 0;
    bottom: 8%;
    padding: 0px 20px;
}

.wrap-cate2 h3 {
    color: white;
    text-transform: capitalize;
    font-weight: 600;
    font-size: 19px;
    font-family: var(--subtext);
    line-height: 35px;
    letter-spacing: 0px;
    margin-bottom: 6px;
}

.wrap-cate2 p {
    color: #f1f1f1;
    font-size: 14px;
    line-height: 25px;
    font-weight: 400;
    padding: 0px;
    margin: 0;
    margin-bottom: 20px;
    font-family: var(--subtext);
}

.wrap-cate2 .price {
    font-size: 21px;
    margin-bottom: 20px;
}

.wrap-cate2 .btn-cate {
    background: var(--colors);
    color: #fff;
    text-transform: uppercase;
    border-radius: 100px;
    padding: 6px 20px !important;
    font-size: 10px !important;
    letter-spacing: 1px;
    font-weight: 600;
    transition: all ease 500ms;
     font-family: var(--subtext);
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

</style>
<?php if ($grid == '1'): ?>

<section class="pad6rem" id="category">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">

        <div class="title-general text-center">
            <span class="tag-ats"><?= $subtitle_2 ?></span>
            <h2 class="title"><?= $title ?></h2>
        </div>

        <div class="row ss-arrow mt-5">

            <?php $i=1; foreach ($data->category as $items): ?>
            <?php if ($items->id != '6130'): ?>
              <div class="col-md-3 col-6 text-md-left px-2">
                   <div class="wrap-cate mb-4">

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

<section class="pad6rem">
    <div class="container-global wow fadeIn" wow-data-ruation="2s">
        
        <div class="row">
            <div class="col-md-5 align-self-center">
                <div class="title-blog">
                    <span>Experiences</span>
                    <h2><?= $title ?></h2>
                    <p><?= $subtitle ?></p>
                    <a class="btn btn-lpm" href="">View All Experiences<i class="fa-solid fa-arrow-right-long ml-3"></i></a>
                </div>
            </div>

            <div class="col-md-7">
                
                <div class="rowdes2 ss-arrow justify-content-center">

                    <?php $i=1; foreach ($item->data as $items): ?>
                        
                          <div class="col-md-6 text-md-left">
                               <div class="wrap-cate">

                                   <img class="img-fluid" loading="lazy" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">

                                   <div class="wrap-cate2">
                                        <h3><?= $items->title ?></h3>
                                        <?php if (!empty($items->content)): ?>
                                            <p><?= $func->trailer($items, 70) ?></p>
                                        <?php else: ?>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam eligendi unde minima.</p>
                                        <?php endif ?>
                                        <a class="btn btn-cate" href="<?= $func->link(ROUTE_PRODUCT_VIEW. $items->slug) ?>">Read More<i class="fa-solid fa-arrow-right-long ml-3"></i></a>
                                   </div>
                               </div>
                          </div>

                    <?php $i++; endforeach ?>

                </div>

            </div>
          
        </div>

    </div>
</section>

<?php elseif ($grid == '3'): ?>
<section class="pad6rem rooms animate-items" style="background: var(--color2);">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="title-general text-left">
            <div class="row mx-0">
            <div class="col-md-4">
                <span class="tag-ats"><?= $subtitle_2 ?></span>
                <h2 class="title text-light"><?= $title ?></h2>
            </div>
            <div class="col-md-5">
                <p style="color: #ccc;"><?= $subtitle ?></p>
            </div>
        </div>

        <div class="rooms-slick ss-arrow">
            <?php $i=1; foreach ($item->data as $items): ?>
                <div class="col-md-6">
                    <div class="card">
                        <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />
                        <!--<div class="tag">
                            <i class="fa-regular fa-clock mr-2"></i>5 Minute
                        </div>-->
                        <div class="card-img-overlay">
                            <div class="price">
                                <?php if ($items->price >= 10000): ?>
                                    IDR <?= number_format($items->price) ?>
                                <?php else: ?>
                                    USD <?= number_format($items->price) ?>
                                <?php endif ?>
                                / Night
                            </div>
                            <h3><?= $items->title ?></h3>
                            <div class="facility d-flex align-items-center">
                                <div class="facility-items">
                                    <i class="fa-solid fa-bed mr-2"></i>
                                    <?php if (!empty($items->custom_field_1)): ?>
                                        <?= $items->custom_field_1 ?>
                                    <?php else: ?>
                                        2 Bed
                                    <?php endif ?>
                                </div>
                                <div class="facility-items">
                                    <i class="fa-solid fa-bed mr-2"></i>
                                    <?php if (!empty($items->custom_field_2)): ?>
                                        <?= $items->custom_field_2 ?>
                                    <?php else: ?>
                                        2 Bed
                                    <?php endif ?>
                                </div>
                                <div class="facility-items">
                                    <i class="fa-solid fa-bed mr-2"></i>
                                    <?php if (!empty($items->custom_field_3)): ?>
                                        <?= $items->custom_field_3 ?>
                                    <?php else: ?>
                                        2 Bed
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="button">
                                <a href="<?= $func->link(ROUTE_PRODUCT_VIEW. $items->slug) ?>" class="btn btn-room">
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
<?php elseif ($grid == '4'): ?>

<section class="pad6rem pt-0 room">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="title-general text-center">
            <span class="tag-ats"><?= $subtitle_2 ?></span>
            <h2 class="title"><?= $title ?></h2>
        </div>

    </div>
        
    <div class="row w-100 m-0 mt-5 slick-center ss-arrow">
            <?php $i=1; foreach ($item->data as $items): ?>
                <div class="card border-0">
                    <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />
                    <div class="card-body px-2 d-flex row justify-content-between align-items-center">
                        <div class="txt-card col-sm-8">
                            <h3><?= $items->title ?></h3>

                            <?php if (empty($items->custom_field_1)): ?>
                                
                                <div class="included">
                                    <i class="fa-solid fa-bed"></i> 1 King Bedroom
                                    <i class="fa-solid fa-tags mx-3"></i> Rice field and Garden view
                                </div>

                            <?php else: ?>

                                <div class="included">
                                    <i class="fa-solid fa-bed"></i> <?= $items->custom_field_2 ?>
                                    <i class="fa-solid fa-tags mx-3"></i> <?= $items->custom_field_1 ?>
                                </div>

                             <?php endif ?>
                        </div>

                        <div class="col-sm-4 text-right">
                            <a href="<?= $func->link(ROUTE_PRODUCT_VIEW. $items->slug) ?>" class="btn">See Detail <i class="fa-solid fa-arrow-right-long ml-3"></i></a>
                        </div>
                    </div>
                </div>
            <?php $i++; endforeach ?>
    </div>

   
    
</section>

<?php endif ?>