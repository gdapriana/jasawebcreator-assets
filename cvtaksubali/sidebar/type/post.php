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
    <div class="side-blog mb-md-4 mb-3">
        <div class="title-sd">
            <h2><?= $data->title ?></h2>
        </div>

    <?php foreach ($data->data as $items): ?>
        <div class="border-bawah" style="border-bottom: 1px solid #ccc; margin-bottom: 15px;">
        	<a href="<?= $func->link($route, $items->slug) ?>" style="text-decoration: none;">
            <div class="row">
                <div class="col-5">
                    <img class="img-fluid" alt="<?= $items->title ?>" src="<?= $items->img_cover_url ?>">
                </div>

                <div class="col-7 pad7 d-flex align-items-center">
                    <div class="wr-sidebg">
                        <h3><?= substr($items->title, 0, 40) ?>...</h3>
                        <p>
                            <i class="fa-regular fa-calendar mr-2"></i>
                            <?= date('d F Y', strtotime($data->result->created_at)) ?>
                        </p>
                    </div>
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

<section class="pad6rem rooms animate-items" style="">
    <div class="container-global wow fadeIn" data-wow-duration="2s">
        <div class="title-general text-left">
            <div class="row mx-0">
            <div class="col-md-4">
                <span class="tag-ats">Stylish Suites & Penthouse</span>
                <h2 class="title t">Suites & Penthouse</h2>
            </div>
            <div class="col-md-5">
                <p style="">Stay in style at Sense Canggu Beach with elegant suites and penthouses, just steps from Echo Beach and Batu Bolong Beach.</p>
            </div>
        </div>

        <div class="rooms-slick ss-arrow">
            <?php $i=1; foreach ($data->data as $items): ?>
                <div class="col-md-6">
                    <div class="card">
                        <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />
                        <!--<div class="tag">
                            <i class="fa-regular fa-clock mr-2"></i>5 Minute
                        </div>-->
                        <div class="card-img-overlay">
                            <?php if (!empty($items->price)): ?>
                                <div class="price">
                                    <?php if ($items->price >= 10000): ?>
                                        IDR <?= number_format($items->price) ?>
                                    <?php else: ?>
                                        USD <?= number_format($items->price) ?>
                                    <?php endif ?>
                                    / Night
                                </div>
                            <?php endif ?>
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
                                    <i class="fa-solid fa-expand mr-2"></i>
                                    <?php if (!empty($items->custom_field_2)): ?>
                                        <?= $items->custom_field_2 ?>
                                    <?php else: ?>
                                        2 Bed
                                    <?php endif ?>
                                </div>
                                <div class="facility-items">
                                    <i class="fa-solid fa-mountain mr-2"></i>
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

<?php endif ?>

<?php if ($opsi == 'specialoffer'): ?>

<?php $i=1; foreach ($data->data as $items): ?>
<div class="row">
    <div class="col-md-6 order-2 order-lg-1" style="align-self: center;">
        <div class="wrap-popup-first">
            <span>Special Offers</span>
            <h3>Take Advantage of Exclusive Deals and Packages</h3>
            <p>Discover unmatched value and luxury with our exclusive deals at Mahagiri Villas Dreamland. Enjoy special packages designed to enhance your stay, from romantic escapes to family adventures. Book now and experience the best of Bali with our limited-time offers.</p>
            <a class="btn" href="https://mahagirivillasdreamland.com/category/special-offers">Reservation Now</a>
        </div>
    </div>

    <div class="col-md-6 order-1 order-lg-2">
        <img class="img-fluid" loading="lazy" alt="Promo & Offers" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1718872836-20-06-2024-fLbyqKhUOQpG9JucEzBAV4iraSFP07Mm.webp">

        <span class="close-popup" id="closeBtn">&times;</span>
    </div>
</div>
<?php $i++; endforeach ?>

<?php endif ?>
