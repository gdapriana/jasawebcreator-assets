<?php 
$route = '';
if ($data->type == 'blog') {
    $route = ROUTE_BLOG_VIEW;
}else{
    $route = ROUTE_PRODUCT_VIEW;
}

?>

<style>
    .side-text {
        text-transform: capitalize;
        font-size: 18px !important;
        font-weight: 600;
        color: #333;
    }
</style>

<?php if ($opsi == 'mainblog'): ?>
    <div class="side-blog">
        <h2><?= $data->title ?></h2>

    <?php foreach ($data->data as $items): ?>
        <div class="border-bawah" style="border-bottom: 1px solid #ccc; margin-bottom: 15px;">
        	<a href="<?= $func->link($route, $items->slug) ?>" style="text-decoration: none;">
            <div class="row">
                <div class="col-5">
                    <img class="img-fluid" alt="<?= $items->title ?>" src="<?= $items->img_cover_url ?>">
                </div>

                <div class="col-7 pad7">
                    <h3><?= substr($items->title, 0, 40) ?>...</h3>
                    <p><?= $func->trailer($items, 60) ?>...</p>
                </div>
            </div>
            </a>
        </div>
    <?php endforeach ?>

    </div>
<?php endif ?>

<?php if ($opsi == 'mainmain'): ?>

<ul>
    <h3 style="margin-bottom: 30px; font-size: 20px;"><?= $data->title ?></h3>
    <?php $i=1; foreach ($data->data as $items): ?>
        <li><i class="fas fa-arrow-right"></i><a href="<?= $func->link($route.$items->slug) ?>" style="color: black"><?= $items->title ?></a></li>
    <?php $i++; endforeach ?>
</ul>

<?php endif ?>

<?php if ($opsi == 'mainroom'): ?>

<ul>
    <h3 style="margin-bottom: 30px; font-size: 20px;"><?= $data->title ?></h3>
    <?php $i=1; foreach ($data->data as $items): ?>
        <li><i class="fas fa-arrow-right"></i><a href="<?= $func->link($route.$items->slug) ?>" style="color: black"><?= $items->title ?></a></li>
    <?php $i++; endforeach ?>
</ul>

<?php endif ?>

<?php if ($opsi == 'rec_product'): ?>

            <?php $i=1; foreach ($data->data as $items): ?>

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

<?php endif ?>



<?php if ($opsi == 'airport'): ?>

<style>
    .img-air.ss-arrow .prev-arrow {
        left: 3%;
        z-index: 1;
    }

    .img-air.ss-arrow .slide-arrow {
        position: absolute;
        top: 48% !important;
        margin-top: unset;
    }

    .img-air.ss-arrow button { transform: scale(1.0); }

    .img-air.ss-arrow .next-arrow {
        right: 3%;
        z-index: 1;
    }
    .btn-air.mob{display: none}
    @media screen and (max-width: 576px) {
        .btn-air.desk{display: none}

        .btn-air.mob{
            display: block;
            position: relative;
            right: 0;
        }
    }
</style>

    <section class="packages pad6rem">
    <div class="container-global">
        <div class="title-product text-center">
            <span class="tag-atas">Pick Up Area</span>
            <h2>Explore Our Transparent & <span>Competitive Pricing</span></h2>
        </div>
        <!-- ===== card ===== -->

    <?php $i=1; rsort($data->data); foreach ($data->data as $items): ?>
        <?php if ($items->title != 'Zone 12'): ?>
        <?php if ($i % 2 == '1'): ?>

        <div class="card py-3 mb-4">
            <div class="row mx-0 px-0 w-100">
                <div class="col-md-4">
                    <div class="img-air ss-arrow">
                        <?php $imagesproduct = $func->get_product_images($items->id); ?>
                        <?php foreach ($imagesproduct as $imgpro): ?>
                            <div class="px-1"><img src="<?= $imgpro->url ?>" alt="<?= $items->title ?>" class="w-100 " /></div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="col-md-8 d-md-flex align-items-center">
                    <div class="card-body w-100 px-md-0 py-md-3 py-2 px-2">

                        <a class="btn btn-air desk" href="<?= base_url() ?>book-airport-transfer">Booking Now!</a>

                        <!-- Title -->
                        <h3><?= $items->title ?></h3>
                        <!-- Cover Area -->
                        <h4>Coverage Area</h4>
                        <p><?= strip_tags($items->content) ?></p>
                        <!-- Include -->
                        <div class="d-sm-flex">
                            <div class="txt mr-5">
                                <h4>Include</h4>
                                <p>Driver, Gasoline, Airport Parking Fee</p>
                            </div>
                            <div class="txt">
                                <h4>Exclude</h4>
                                <p>Tol Fee, Meal, Destination Parking Fee</p>
                            </div>
                        </div>
                        <!-- ========= col ========= -->
                        <?php $addon_content = $func->get_addon_content($items->id) ?>
                        <div class="row px-0 mx-0 mt-3 w-100">
                        <?php $siu=1; foreach ($addon_content as $add): ?>
                            <div class="col-cust colust-<?= $siu ?>">

                                <img class="img-fluid img-car" src="<?= $add->img_cover_url ?>" alt="<?= $add->name ?>">

                                <div class="price">
                                    <?= $add->name ?> <br />
                                    <span>IDR <?= number_format($add->custom_field_1) ?></span>
                                </div>
                                <div class="include">
                                    <?php if (!empty($add->custom_field_2)): ?>
                                        <div class="ls-inc"><i class="fa-solid fa-users"></i> <?= $add->custom_field_2 ?></div>
                                    <?php else: ?>
                                        <div class="ls-inc"><i class="fa-solid fa-users"></i> 4 Pax</div>
                                    <?php endif ?>
                                    
                                    <?php if (!empty($add->custom_field_3)): ?>
                                        <div class="ls-inc"><i class="fa-solid fa-suitcase-rolling"></i> <?= $add->custom_field_3 ?></div>
                                    <?php else: ?>
                                        <div class="ls-inc"><i class="fa-solid fa-suitcase-rolling"></i> 2</div>
                                    <?php endif ?>
                                </div>
                            </div>
                        <?php $siu++; endforeach ?>
                        </div>
                        <a class="btn btn-air mob" href="<?= base_url() ?>book-airport-transfer">Booking Now!</a>
                    </div>
                </div>
            </div>
        </div>

        <?php else: ?>
        <!-- ==== card end ==== -->
        <!-- ===== card flip ===== -->
        <div class="card py-3 mb-3">
            <div class="row mx-0 px-0 w-100">
                <div class="col-md-4 order-md-2 order-1">
                   <div class="img-air ss-arrow">
                        <?php $imagesproduct = $func->get_product_images($items->id); ?>
                        <?php foreach ($imagesproduct as $imgpro): ?>
                            <div class="px-1"><img src="<?= $imgpro->url ?>" alt="<?= $items->title ?>" class="w-100 " /></div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="col-md-8 order-md-1 order-1 d-md-flex align-items-center">
                    <div class="card-body w-100 pr-md-0 pl-md-3 py-md-3 py-2 px-2">

                        <a class="btn btn-air desk" href="<?= base_url() ?>book-airport-transfer">Booking Now!</a>

                        <!-- Title -->
                        <h3><?= $items->title ?></h3>
                        <!-- Cover Area -->
                        <h4>Coverage Area</h4>
                        <p><?= strip_tags($items->content) ?></p>
                        <!-- Include -->
                        <div class="d-sm-flex">
                            <div class="txt mr-5">
                                <h4>Include</h4>
                                <p>Driver, Gasoline, Airport Parking Fee</p>
                            </div>
                            <div class="txt">
                                <h4>Exclude</h4>
                                <p>Tol Fee, Meal, Destination Parking Fee</p>
                            </div>
                        </div>
                        <!-- ========= col ========= -->
                        <?php $addon_content = $func->get_addon_content($items->id) ?>
                        <div class="row px-0 mx-0 mt-3 w-100">
                        <?php $siu=1; foreach ($addon_content as $add): ?>
                            <div class="col-cust colust-<?= $siu ?>">

                                <img class="img-fluid img-car" src="<?= $add->img_cover_url ?>" alt="<?= $add->name ?>">

                                <div class="price">
                                    <?= $add->name ?> <br />
                                    <span>IDR <?= number_format($add->custom_field_1) ?></span>
                                </div>
                                <div class="include">
                                    <?php if (!empty($add->custom_field_2)): ?>
                                        <div class="ls-inc"><i class="fa-solid fa-users"></i> <?= $add->custom_field_2 ?></div>
                                    <?php else: ?>
                                        <div class="ls-inc"><i class="fa-solid fa-users"></i> 4 Pax</div>
                                    <?php endif ?>

                                    <?php if (!empty($add->custom_field_3)): ?>
                                        <div class="ls-inc"><i class="fa-solid fa-suitcase-rolling"></i> <?= $add->custom_field_3 ?></div>
                                    <?php else: ?>
                                        <div class="ls-inc"><i class="fa-solid fa-suitcase-rolling"></i> 2</div>
                                    <?php endif ?>
                                    
                                    <!-- <div class="ls-inc"><i class="fa-solid fa-suitcase-rolling"></i> 2 30" Luggage</div> -->
                                </div>
                            </div>
                        <?php $siu++; endforeach ?>
                        </div>
                        <a class="btn btn-air mob" href="<?= base_url() ?>book-airport-transfer">Booking Now!</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>
        <?php endif ?>
        <?php $i++; endforeach ?>

        <!-- ==== card flip end ==== -->

    <?php $i=1; foreach ($data->data as $items): ?>
        <?php if ($items->title == 'Zone 12'): ?>

        <div class="card py-3 mb-4">
            <div class="row mx-0 px-0 w-100">
                <div class="col-md-4">
                    <div class="img-air ss-arrow">
                        <?php $imagesproduct = $func->get_product_images($items->id); ?>
                        <?php foreach ($imagesproduct as $imgpro): ?>
                            <div class="px-1"><img src="<?= $imgpro->url ?>" alt="<?= $items->title ?>" class="w-100 " /></div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="col-md-8 d-md-flex align-items-center">
                    <div class="card-body w-100 px-md-0 py-md-3 py-2 px-2">

                        <a class="btn btn-air desk" href="<?= base_url() ?>book-airport-transfer">Booking Now!</a>

                        <!-- Title -->
                        <h3><?= $items->title ?></h3>
                        <!-- Cover Area -->
                        <h4>Coverage Area</h4>
                        <p><?= strip_tags($items->content) ?></p>
                        <!-- Include -->
                        <div class="d-sm-flex">
                            <div class="txt mr-5">
                                <h4>Include</h4>
                                <p>Driver, Gasoline, Airport Parking Fee</p>
                            </div>
                            <div class="txt">
                                <h4>Exclude</h4>
                                <p>Tol Fee, Meal, Destination Parking Fee</p>
                            </div>
                        </div>
                        <!-- ========= col ========= -->
                        <?php $addon_content = $func->get_addon_content($items->id) ?>
                        <div class="row px-0 mx-0 mt-3 w-100">
                        <?php $siu=1; foreach ($addon_content as $add): ?>
                            <div class="col-cust colust-<?= $siu ?>">

                                <img class="img-fluid img-car" src="<?= $add->img_cover_url ?>" alt="<?= $add->name ?>">

                                <div class="price">
                                    <?= $add->name ?> <br />
                                    <span>IDR <?= number_format($add->custom_field_1) ?></span>
                                </div>
                                <div class="include">
                                    <?php if (!empty($add->custom_field_2)): ?>
                                        <div class="ls-inc"><i class="fa-solid fa-users"></i> <?= $add->custom_field_2 ?></div>
                                    <?php else: ?>
                                        <div class="ls-inc"><i class="fa-solid fa-users"></i> 4 Pax</div>
                                    <?php endif ?>
                                    
                                    <?php if (!empty($add->custom_field_3)): ?>
                                        <div class="ls-inc"><i class="fa-solid fa-suitcase-rolling"></i> <?= $add->custom_field_3 ?></div>
                                    <?php else: ?>
                                        <div class="ls-inc"><i class="fa-solid fa-suitcase-rolling"></i> 2</div>
                                    <?php endif ?>
                                </div>
                            </div>
                        <?php $siu++; endforeach ?>
                        </div>
                        <a class="btn btn-air mob" href="<?= base_url() ?>book-airport-transfer">Booking Now!</a>
                    </div>
                </div>
            </div>
        </div>

        <?php endif ?>
    <?php $i++; endforeach ?>

    </div>
</section>
    
<?php endif ?>
