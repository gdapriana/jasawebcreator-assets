<?php if ($data->cat_data->id == '6293'): ?>
<section class="pad6rem">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="title-product text-center mt-4">
            <span class="tag-atas"><?= $data->category_name ?></span>
            <h2><?= $data->cat_data->custom_field_2 ?></h2>
        </div>

        <div class="row mt-4 justify-content-center">

            <?php
            // Urutkan data berdasarkan custom_field_3 (tahun) secara descending (terbaru ke terlama)
            usort($data->result, function ($a, $b) {
                return $b->custom_field_3 <=> $a->custom_field_3; // Descending order
            });

            $i = 1;
            foreach ($data->result as $items): 
            ?>

                <div class="col-md-4 slide-fix pb-4">
                    <div class="wrap-mobil-b wrap-mobil-bpt2 h-100">
                        <img class="img-fluid" src="<?= $items->img_cover_url ?>" loading="lazy" alt="<?= $items->title ?>">

                        <div class="wraphar wraphar2 text-center">
                            <?php foreach ($data->category as $cate): ?>
                                <?php if ($cate->id == $items->package_id): ?>
                                    <span><?= $cate->name ?></span>
                                <?php endif ?>
                            <?php endforeach ?>
                            
                            <h3><?= $items->title ?></h3>   
                        </div>

                        <div class="wrap-mobil-b2 text-center">
                            <?= $items->content ?>
                        </div>
                        <div class="btn-wrmob">
                            <a class="btn btn-momo" href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>">More Detail</a>
                        </div>

                    </div>
                </div>
            <?php $i++; endforeach ?>
        </div>
    </div>
</section>


<?php else: ?>

<section class="pad6rem product">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="title-product text-center mt-1">
            <span class="tag-atas"><?= $data->category_name ?></span>
            <h2><?= $data->cat_data->custom_field_2 ?></h2>
        </div>
        
        <div class="row mt-4 justify-content-center">
        <?php $i=1; foreach ($data->result as $items): ?>
            <div class="col-sm-4 col-6 px-2 pb-md-4 pb-3">
                    <div class="card h-100 p-md-3 p-2">
                        <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />
                        <?php if (!empty($items->price)): ?>
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
                            /person
                        </div>
                        <?php endif ?>
                        <div class="card-body p-0">
                                <!--<div class="info-tag d-sm-block d-none">
                                    <div class="wrap-info d-flex justify-content-between align-item-center">
                                        <span class="day">
                                            <?php if (!empty($items->custom_field_1)): ?>
                                                <i class="fa-solid fa-calendar-days"></i> <?= $items->custom_field_1 ?>
                                            <?php else: ?>
                                                <i class="fa-solid fa-calendar-days"></i> 1 Day
                                            <?php endif ?>
                                        </span>
                                        <span class="people">
                                            <?php if (!empty($items->custom_field_2)): ?>
                                                <i class="fa-solid fa-user"></i> <?= $items->custom_field_2 ?>
                                            <?php else: ?>
                                                <i class="fa-solid fa-user"></i> 5 person
                                            <?php endif ?>
                                        </span>
                                        <span class="location">
                                            <?php if (!empty($items->custom_field_2)): ?>
                                                <i class="fa-solid fa-location-crosshairs"></i> <?= $items->custom_field_2 ?>
                                            <?php else: ?>
                                                <i class="fa-solid fa-location-crosshairs"></i> Bali
                                            <?php endif ?>
                                        </span>
                                    </div>
                                </div>-->
                            <div class="txt py-md-3 px-md-1 pb-2 pt-3">
                                <h3 class="card-title">
                                    <?php if (strlen($items->title) > 50): ?>
                                        <?= substr($items->title, 0, 50) . '...' ?>
                                    <?php else: ?>
                                        <?= $items->title ?>
                                    <?php endif ?>
                                </h3>
                                <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>(All guests are satisfied)</span>
                                </div>
                                <p class="d-sm-block d-none">
                                    <?= $func->trailer($items, 80) ?>...
                                </p>
                                
                                <!--<a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btnprofile">
                                    <div class="shadow"></div>
                                    <div class="tx">
                                        Read More
                                        <div class="icon">
                                        <i class="fa-solid fa-arrow-up"></i>
                                        </div>
                                    </div>
                                </a>-->
                            </div>
                            <div class="btnwr">
                                <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btnpr">
                                    Learn More <i class="fa-solid fa-arrow-right-long ml-2"></i>
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

<?= $func->load('home/home_paralax') ?>
<?= $func->load('home/home_why') ?>
<?= $func->load('home/home_faq') ?>
