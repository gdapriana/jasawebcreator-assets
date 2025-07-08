 <?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle_2 = $item->setting->subtitle2;
$grid = $item->setting->grid;
$route = ROUTE_PRODUCT_VIEW;
?>
<style>


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
                                    <i class="fa-solid fa-panorama mr-2"></i>
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

<section id="__unique-root">
  <div class="container-global wrapper">

        <div class="title-general text-center">    
            <span class="tag-ats"><?= $subtitle_2 ?></span>
            <h2 class="title" style="max-width: 900px;"><?= $title ?></h2>
            <p><?= $subtitle ?></p>
        </div>


    <!-- DESKTOP -->

    <main class="items-wrapper items-wrapper-tablet">
      <?php $active = 0; ?>
      <?php foreach ($item->data as $key=>$unique): ?>
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
      <?php foreach ($item->data as $key=>$unique): ?>
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

<?php endif ?>