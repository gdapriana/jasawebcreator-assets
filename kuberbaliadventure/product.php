


<section class="section-allpage lazyload back-patt">
    <img class="patern w-100 bottom" src="https://jwc.gotra-resources.my.id/web-upload/1725527048-05-09-2024-patc0TP4528VGhEq1MH9dWNbnIzurigU.png" alt="Patern">
    <div class="background w-100" style="filter: brightness(1);background-image: url(https://jwc.gotra-resources.my.id/web-upload/1724661938-26-08-2024-7RrwxcP0elhoEnTMGaN93XAKkUjzSJiY.png) !important;"></div>
    <div class="text wow fadeIn" data-wow-duration="2s" style="position:relative; z-index: 10">
        <h1><?= $data->category_name ?></h1>
        <p>Home - <?= $data->category_name ?></p>
    </div>
</section>

</style>

<div class="smooth-slide" id="services"></div>

<?php if ($data->cat_data->id == '6658' || $data->cat_data->id == '6659' ): ?>
<section class="pad6rem product">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">
        
      <div class="serve-slide ss-arrow ">
          <?php foreach ($data->result as $items): ?>
            <div class="content-card p-2">
              <a href="<?= $func->link(ROUTE_PRODUCT_VIEW. $items->slug) ?>">
                <div class="card border-0 mb-3" style="position: relative">
                    <div class="shadow"></div>
                    <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" class="w-100"/>
                    <div class="tag-price">IDR <?= number_format($items->price) ?> / Pax</div>
                    <div class="card-img-overlay mb-md-0 mb-3">
                        <h5 class="card-title mb-3"><?= $items->title ?></h5>

                        <p><?= $func->trailer($items, 130) ?>...</p>
                        
                        <!--<a href="<?= $func->link(ROUTE_PRODUCT_VIEW. $items->slug) ?>" class="btn pl-0">
                            Read More <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>-->
                    </div>
                </div>
              </a>
            </div>
          <?php endforeach ?>
      </div>

    </div>
</section>

<?php else: ?>

<section class="pad6rem product">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">
        
      <div class="serve-slide ss-arrow ">
          <?php foreach ($data->result as $items): ?>
            <div class="content-card p-2">
              <a href="<?= $func->link(ROUTE_PRODUCT_VIEW. $items->slug) ?>">
                <div class="card border-0 mb-3" style="position: relative">
                    <div class="shadow"></div>
                    <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" class="w-100"/>
                    <div class="tag-price">IDR <?= number_format($items->price) ?> / Pax</div>
                    <div class="card-img-overlay mb-3">
                        <h5 class="card-title"><?= $items->title ?></h5>
                        <div class="include d-flex">
                            <div class="box mx-2">
                                <i class="fa-solid fa-user mr-1"></i> Instruction
                            </div>
                            <div class="box mx-2">
                                <i class="fa-solid fa-utensils mr-1"></i> Lunch
                            </div>
                            <div class="box mr-2">
                                <i class="fa-solid fa-wine-glass mr-1"></i> Drinks
                            </div>
                            <div class="box mx-2">
                                <i class="fa-solid fa-user-shield mr-1"></i> Equipment
                            </div>
                            <div class="box mx-2">
                                <i class="fa-solid fa-shower mr-1"></i> Towel & Shower
                            </div>
                        </div>
                        <!--<a href="<?= $func->link(ROUTE_PRODUCT_VIEW. $items->slug) ?>" class="btn pl-0">
                            Read More <i class="fa-solid fa-arrow-right ml-2"></i>
                        </a>-->
                    </div>
                </div>
              </a>
            </div>
          <?php endforeach ?>
      </div>

    </div>
</section>

<?php endif ?>



<?= $func->load('home/home_why2') ?>
<?= $func->load('home/home_faq') ?>