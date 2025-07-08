<style type="text/css">



</style>

<section class="section-allpage lazyload" data-bgset="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1733304509-04-12-2024-ljcrxHaLRM9VEYiDeT0qItpPKZSzoU6f.png
">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <h1><?= $data->category_name ?></h1>
        <p>Home - <?= $data->category_name ?></p>
    </div>
</section>

<?php if ($data->category_name == 'Rooms & Suites'): ?>

<section class="pad6rem room">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="title-general text-center">
            <span class="tag-ats">Water Blow Huts</span>
            <h2 class="title">Experience Serenity and Comfort in Our <span>Exclusive</span> Rooms</h2>
        </div>

    </div>
        
    <div class="row w-100 m-0 mt-5 slick-center ss-arrow">
            <?php $i=1; foreach ($data->result as $items): ?>
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

<?= $func->load('home/home_why') ?>

<?= $func->load('home/home_faq') ?>

<?= $func->load('home/home_paralax') ?>

<?php else: ?>

<section class="pad6rem product">
    <div class="container-global wow fadeIn" wow-data-ruation="2s">
        
        <div class="row ss-arrow justify-content-center">
        <?php $i=1; foreach ($data->result as $items): ?>
            <div class="col-sm-4 col-6 px-2 pb-4">
                    <div class="card h-100 ">
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
                            
                            <div class="txt p-4 pt-0">
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
                                    <?= $func->trailer($items, 70) ?>...
                                </p>
                            </div>
                            <div class="btn-wraper d-flex justify-content-between">
                                <a href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp?>&text=Hello%2C%20I%20found%20information%20on%20your%20website%20https%3A%2F%2Fwaterblowhuts.com%2F%20and%20I%20would%20like%20to%20book%20%2A<?= $items->title ?>%2A.%20Could%20you%20assist%20me%20with%20that%3F" class="btn btn-book d-sm-block d-none">
                                    Book Now <i class="fa-solid fa-arrow-right-long ml-2"></i>
                                </a>

                                <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btn-read">
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