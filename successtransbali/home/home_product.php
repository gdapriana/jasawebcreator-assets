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
    height: 450px;
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
    text-transform: uppercase;
    font-weight: 600;
    font-size: 25px;
    line-height: 35px;
    letter-spacing: 1px;
    margin-bottom: 10px;
}

.wrap-cate2 p {
    color: #f1f1f1;
    font-size: 15px;
    line-height: 25px;
    font-weight: 400;
    padding: 0px;
    margin: 0;
    margin-bottom: 25px;
    font-family: var(--subtext);
}

.wrap-cate2 .price {
    font-size: 21px;
    margin-bottom: 20px;
}

.wrap-cate:hover img {
    transform: scale(1.1);
}


/* ========= cate btn ======= */
.wrap-cate .btnprofile {font-size: 13px;}
.wrap-cate .btnprofile .icon {
    width: 2rem;
    height: 2rem;
}
.wrap-cate .btnprofile .icon i {
    font-size: 1rem;
    line-height: 1rem;
}
/* ========= cate btn ======= */

.btnprofile {
    color: #222;
    position: relative;
    background: var(--colors);
    font-family: var(--subtext);
    font-size: 15px;
    font-weight: 600;
    line-height: 25px;
    border: .5px solid #00000050;
    margin-top: 10px;
    padding: 5px 5px 5px 1.6rem;
    letter-spacing: .4px;
    width: max-content;
    border-radius: 50px;
    text-transform: uppercase;
    transition: ease-in-out .25s;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.btnprofile .tx {
  position: relative; 
  z-index: 2; 
  display: flex;
  justify-content: center;
  align-items: center;
}
.btnprofile .icon {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 3rem;
    width: 3rem;
    background: #00000020;
    margin-left: 15px;
    border-radius: 50%;
    transition: all ease-in-out .3s;
    transform: rotate(45deg);
}
.btnprofile:hover .icon {transform: rotate(90deg);}
.btnprofile i {
    height: fit-content;
    line-height: 1.1rem;
    font-size: 1.2rem;
}
.btnprofile .shadow {
    position: absolute;
    right: 5px;
    top: 5px;
    width: 3rem;
    height: 3rem;
    opacity: .8;
    transition-delay: .2s;
    border-radius: 50%;
    z-index: 1;
    background-color: #fff;
    /* filter: blur(20px); */
    transform: scale(.0) translateX(-202%);
    transition: all ease-in-out .6s;
}
.btnprofile:hover .shadow {
    transform: scale(11) ;

}
.btnprofile:hover {
    background: var(--colors);
    color: var(--color2);
}
@media screen and (max-width: 576px) {
    .btnprofile .icon {
        margin-left: 15px;
        height: 2.5rem;
        width: 2.5rem;
    }
}

@media (min-width: 768px) {

    .rowdes { margin:0; }
}

@media (max-width : 768px) {
    .col-cate { padding:0px 5px; }

    .wrap-cate { margin-bottom: 5px; }

    .wrap-cate2 {
        bottom: 4%;
        padding: 10px;
        text-align: center;
    }

    .wrap-cate img {
        height: 220px !important;
    }

    .wrap-cate2 h3 {
        font-size: 13px;
        line-height: 30px;
        margin-bottom: 7px;
    }

    .catcat { margin-bottom:0px; }

    .wrap-cate2 p {
        display: none;
    }

    .wrap-cate2 .price {
        font-size: 18px;
        margin-bottom: 11px;
    }

    .wrap-cate .btnprofile {
        padding: 3px 8px 3px 15px;
        font-size: 9px;
        border-radius: 7px;
        margin: 0 auto;
    }
    .wrap-cate .btnprofile .icon {margin-left: 5px;}

    .wrap-cate .btnprofile .icon i {
        font-size: 10px;
        line-height: 1rem;
    }

    .wrap-cate .btnprofile .icon {
        width: 1rem;
        height: 1rem;
    }

    .wrap-cate:before {
        background: transparent linear-gradient(180deg, rgb(13 28 52 / 0) 0, #000000 100%) 0 0 no-repeat padding-box;
    }

    .propro .slick-list { width:140%; }
}

</style>
<?php if ($grid == '1'): ?>

<section class="pad6rem" id="category">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">

        <div class="title-product text-center">
            <span class="tag-atas"><?= $subtitle ?></span>
            <h2><?= $title ?></h2>
        </div>

        <div class="propro ss-arrow">

            <?php $i=1; foreach ($data->category as $items): ?>
            
              <div class="col-md-4 col-6 text-md-left px-2">
                   <div class="wrap-cate mb-4">

                       <img class="img-fluid" loading="lazy" src="<?= $items->image ?>" alt="<?= $items->name ?>">

                       <div class="wrap-cate2">
                            <h3><?= $items->name ?></h3>
                            <p><?= $items->custom_field_1 ?></p>

                        <?php if (!empty($items->custom_field_3)): ?>

                            <a href="<?= $items->custom_field_3 ?>" class="btn btnprofile">
                                <div class="shadow"></div>
                                <div class="tx">
                                    Read More
                                    <div class="icon">
                                    <i class="fa-solid fa-arrow-up"></i>
                                    </div>
                                </div>
                            </a>

                        <?php else: ?>

                            <a href="<?= $func->link(ROUTE_PRODUCT. $items->slug) ?>" class="btn btnprofile">
                                <div class="shadow"></div>
                                <div class="tx">
                                    Read More
                                    <div class="icon">
                                    <i class="fa-solid fa-arrow-up"></i>
                                    </div>
                                </div>
                            </a>
                            
                        <?php endif ?>

                       </div>
                   </div>
              </div>

            <?php $i++; endforeach ?>
        </div>

    </div>
</section>

<?php elseif ($grid == '2'): ?>

<section class="pad6rem product-1">
    <div class="container-global wow fadeIn" wow-data-ruation="2s">
        <div class="title-general text-center">
            <span class="tag-ats"><?= $subtitle_2 ?></span>
            <h2 class="title"><?= $title ?></h2>
        </div>

        <div class="product-slick ss-arrow mt-4">

            <?php $i=1; foreach ($item->data as $items): ?>
                        
                <div class="col-md-4 px-2 pb-4">
                    <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>">
                    <div class="card">
                        <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />
                        <div class="card-img-overlay">
                            <div class="box">
                                 <div class="sp-tag">From</div>
                                <div class="sp-price">
                                    <?php if ($items->price >= 10000): ?>
                                        <?php if ($items->price >= 1000): ?>
                                            IDR <?= number_format($items->price / 1000, 0) . 'K ';?>
                                        <?php endif ?>
                                    <?php else: ?>
                                        USD <?= number_format($items->price) ?>
                                    <?php endif ?>
                                </div>
                                <h3 class="card-title"><?= $items->title ?></h3>
                                <div class="info-card d-flex justify-content-start">
                                    <div class="list-info">
                                        <i class="fa-solid fa-user-shield"></i>
                                        
                                        <?php if (!empty($items->custom_field_1)): ?>
                                            <?= $items->custom_field_1 ?>
                                        <?php else: ?>
                                            5 Pax
                                        <?php endif ?>
                                    </div>
                                    <div class="list-info">
                                        <i class="fa-solid fa-shield"></i>
                                        <?php if (!empty($items->custom_field_2)): ?>
                                            <?= $items->custom_field_2 ?>
                                        <?php else: ?>
                                            5 Pax
                                        <?php endif ?>
                                    </div>
                                    <div class="list-info">
                                        <i class="fa-solid fa-utensils"></i>
                                        <?php if (!empty($items->custom_field_3)): ?>
                                            <?= $items->custom_field_3 ?>
                                        <?php else: ?>
                                            5 Pax
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>

            <?php $i++; endforeach ?>
          
        </div>

    </div>
</section>

<?php elseif ($grid == '4'): ?>

<section class="pad6rem product">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="title-general text-center">
            <span class="tag-ats"><?= $subtitle_2 ?></span>
            <h2 class="title"><?= $title ?></h2>
        </div>
        
        <div class="row w-100 m-0 mt-5 ss-arrow">
            <?php $i=1; foreach ($item->data as $items): ?>
                <div class="col-sm-6">
                    <div class="card">
                        <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />
                        <div class="card-body pt-4 px-1">
                            <div class="row mx-0 px-0 w-100">
                                <div class="col-md-7 p-0 pr-md-3">
                                    <h3 class="card-title">
                                        <?php if (strlen($items->title) > 50): ?>
                                            <?= substr($items->title, 0, 50) . '...' ?>
                                        <?php else: ?>
                                            <?= $items->title ?>
                                        <?php endif ?>
                                    </h3>
                                    
                                    <p class="text-card">This packages include insurance and complete riding gear and lunch.</p>
                                </div>
                                <div class="col-md-5">
                                    <div class="price">
                                        
                                        <span>
                                            <?php if ($items->price >= 10000): ?>
                                                <?php if ($items->price >= 1000): ?>
                                                    IDR <?= number_format($items->price / 1000, 0) . 'K ';?>
                                                <?php endif ?>
                                            <?php else: ?>
                                                USD <?= number_format($items->price) ?>
                                            <?php endif ?>
                                        </span>
                                        /pax
                                    </div>
                                    <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btn-prd"><div class="shadow"></div>Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $i++; endforeach ?>
        </div>
    </div>
   
    
</section>

<?php endif ?>