<style type="text/css">



</style>

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1742788760-24-03-2025-cy81hUEGeHqIjwkp7JiWMvQsZ0NbuCAO.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <h1><?= $data->category_name ?></h1>
        <p>Home - <?= $data->category_name ?></p>
    </div>
</section>

<?php if ($data->category_name == 'Rooms & Suites'): ?>
<section class="pad6rem rooms animate-items" style="">
    <div class="container-global wow fadeIn" data-wow-duration="2s">
        <div class="title-general text-left">
            <div class="row mx-0">
            <div class="col-md-4">
                <span class="tag-ats">Stylish Suites & Penthouse</span>
                <h2 class="title ">Suites & Penthouse</h2>
            </div>
            <div class="col-md-5">
                <p style="">Stay in style at Sense Canggu Beach with elegant suites and penthouses, just steps from Echo Beach and Batu Bolong Beach.</p>
            </div>
        </div>

        <div class="rooms-slick ss-arrow">
            <?php $i=1; foreach ($data->result as $items): ?>
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

<?= $func->load('home/home_reviewcut') ?>


<?= $func->load('home/home_faq') ?>


<?php else: ?>

<section id="__unique-root">
  <div class="container-global wrapper">

        <div class="title-general text-center">    
            <span class="tag-ats">Sense Experiences</span>
            <h2 class="title" style="max-width: 900px;">Unforgettable Experiences at Sense Canggu Beach</h2>
            <p>Enjoy vibrant dining, rejuvenating spa treatments, and exclusive tours at Sense Canggu Beach for an unforgettable Bali experience</p>
        </div>

    <!-- DESKTOP -->

    <main class="items-wrapper items-wrapper-tablet">
      <?php $active = 0; ?>
      <?php foreach ($data->result as $key=>$unique): ?>
        <article class="item <?= ($active == $key) ? 'active' : '' ?>" data-index="<?= $key ?>">
          <div class="item-desc-wrapper" style="z-index: 2;">
            <div class="logo-wrapper">
              <!-- <div class="logo">
                <i class="<?= $unique->icon ?>"></i> 
              </div> -->
            </div>
            <h3 class="title"><?= $unique->title ?></h3>
            <!--<p class="desc"><?= $unique->description ?></p>-->
            <a href="<?= $func->link(ROUTE_PRODUCT_VIEW. $unique->slug) ?>" class="btn btn-exp" >See Detail <i class="fa-solid fa-arrow-right-long ml-3"></i></a>
          </div>

          <div class="gradient-overlay" style="z-index: 1; position: absolute; bottom: 0; left:0; width: 100%; height: 70%;"></div>
          <img src="<?= $unique->img_cover_url ?>" class="item-img" alt="cover">
        </article>
      <?php endforeach; ?>
    </main>

    <!-- MOBILE -->
    <main class="items-wrapper unique-slick ss-arrow items-wrapper-mobile">
      <?php foreach ($data->result as $key=>$unique): ?>
        <article class="item" data-index="<?= $key ?>">
          <div style="z-index: 2;" class="item-desc-wrapper">
            <!-- <div class="logo">
              <i class="<?= $unique->icon ?>"></i> 
            </div>-->
            <h3 class="title">
              <?= $unique->title ?>
            </h3>
            <!--<p class="desc"><?= $unique->description ?></p>-->
            <a href="<?= $func->link(ROUTE_PRODUCT_VIEW. $unique->slug) ?>" class="btn btn-exp">See Detail <i class="fa-solid fa-arrow-right-long ml-3"></i></a>
   
          </div>

        <div class="gradient-overlay" style="z-index: 1; position: absolute; bottom: 0; left:0; width: 100%; height: 70%;"></div>

          <img src="<?= $unique->img_cover_url ?>" class="item-img" alt="cover">
        </article>
      <?php endforeach; ?>
    </main>
  </div>
</section>

<?= $func->load('home/home_reviewcut') ?>

<?php endif ?>