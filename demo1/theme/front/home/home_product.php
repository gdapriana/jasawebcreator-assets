 <?php
    $title = $item->setting->title;
    $subtitle = $item->setting->subtitle;
    $subtitle_2 = $item->setting->subtitle2;
    $grid = $item->setting->grid;
    $route = ROUTE_PRODUCT_VIEW;
    ?>
 <style>
     /* Cate */

     * {
         scroll-behavior: smooth;
     }
 </style>
 <?php if ($grid == '1'): ?>
     <section class="pad6rem" id="category">
         <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">

             <div class="title-general text-center">
                 <span class="tag-ats"><?= $subtitle_2 ?></span>
                 <h2 class="title"><?= $title ?></h2>
             </div>

             <div class="_home-activity-wrapper activities-slick">
                 <?php foreach ($item->data as $activity): ?>
                     <div class="_activity-card">
                         <div class="_activity-desc-wrapper">
                             <h4 class="_activity-title"><?= $activity->title ?></h4>
                             <a class="_activity-cta" href="<?= $func->link(ROUTE_PRODUCT_VIEW, $activity->slug) ?>">Details <i class="fa-solid fa-chevron-right"></i></a>
                         </div>
                         <div class="_activity-cover-overlay"></div>
                         <img class="_activity-cover" src="<?= $activity->img_cover_url ?>" alt="cover">
                     </div>
                 <?php endforeach; ?>
             </div>

             <!-- <div class="row ss-arrow mt-5">

                 <?php $i = 1;
                    foreach ($data->category as $items): ?>
                     <?php if ($items->id != '5708' && $items->id != '5712'): ?>
                         <div class="col-md-6 col-6 px-md-2 px-1 text-md-left">
                             <div class="wrap-cate mb-md-4 mb-3">

                                 <img class="img-fluid" loading="lazy" src="<?= $items->image ?>" alt="<?= $items->name ?>">

                                 <div class="wrap-cate2">
                                     <h3><?= $items->name ?></h3>
                                     <p><?= strip_tags($items->content) ?></p>
                                     <a href="<?= $func->link(ROUTE_PRODUCT . $items->slug) ?>" class="btn btnprofile">
                                         <div class="shadow"></div>
                                         <div class="tx">
                                             Read More
                                             <div class="icon">
                                                 <i class="fa-solid fa-arrow-up"></i>
                                             </div>
                                         </div>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     <?php endif ?>
                 <?php $i++;
                    endforeach ?>

             </div> -->

         </div>
     </section>

     <script>
         document.addEventListener("DOMContentLoaded", () => {
             $('.activities-slick').slick({
                 slidesToShow: 2,
                 slidesToScroll: 1,
                 autoplay: true,
                 autoplaySpeed: 2000,
                 arrows: false,
                 dots: true,
                 arrows: true,
                 responsive: [{
                     breakpoint: 500,
                     settings: {
                         slidesToShow: 1,
                         slidesToScroll: 1,
                     }
                 }]
             });
         })
     </script>

 <?php elseif ($grid == '2'): ?>
     <section class="pad6rem packages">
         <div class="container-global wow fadeIn" wow-data-ruation="2s">

             <div class="title-general text-center">
                 <span class="tag-ats"><?= $subtitle ?></span>
                 <h2 class="title"><?= $title ?></h2>
             </div>

             <div class="_home-prod">
                 <?php foreach ($item->data as $product): ?>
                     <div class="_prod-card">
                         <img class="_prod-cover" src="<?= $product->img_cover_url ?>" alt="cover">
                         <div class="_prod-desc-wrapper">
                             <h3 class="_prod-title"><?= $product->title ?></h3>
                             <p class="_prod-location"><i class="fa-solid fa-location-dot"></i> Bali, Indonesia</p>
                             <hr>
                             <div class="_prod-actions">
                                 <div class="_prod-price">
                                     <span>from</span>
                                     <h4>
                                         <?php if ($product->price >= 10000): ?>
                                             IDR <?= number_format($product->price) ?>
                                         <?php else: ?>
                                             USD <?= number_format($product->price) ?>
                                         <?php endif ?>
                                     </h4>
                                 </div>
                                 <a class="_prod-btn" href="<?= $func->link(ROUTE_PRODUCT_VIEW, $product->slug) ?>">Detail</a>
                             </div>
                         </div>
                     </div>
                 <?php endforeach; ?>
             </div>

         </div>
     </section>

 <?php elseif ($grid == '3'): ?>

     <section class="pad6rem pt-md-5 product">
         <div class="container-global wow fadeIn" data-wow-duration="2s">

             <div class="title-general text-center">
                 <span class="tag-ats"><?= $subtitle ?></span>
                 <h2 class="title"><?= $title ?></h2>
             </div>

             <div class="row w-100 m-0 mt-5 ss-arrow">
                 <?php $i = 1;
                    foreach ($item->data as $items): ?>
                     <div class="col-6 px-md-3 px-2">
                         <div class="card">
                             <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" />
                             <div class="card-body pt-4 px-1" style="position: relative;">
                                 <div class="info-tag d-sm-block d-none">
                                     <div class="wrap-info d-flex justify-content-between align-item-center">
                                         <span class="day">
                                             10 Hours
                                         </span>
                                         <span class="people">
                                             Private Tour
                                         </span>
                                         <span class="people">
                                             Friendly Drivers
                                         </span>
                                         <span class="location">
                                             Mineral Water
                                         </span>
                                     </div>
                                 </div>
                                 <div class="row mx-0 px-0 w-100">
                                     <div class="col-md-7 p-0 pr-md-3">

                                         <?php if (strlen($items->title) > 30): ?>
                                             <h3 class="card-title d-md-none d-block"><?= substr($items->title, 0, 30) . '...' ?></h3>
                                             <h3 class="card-title d-md-block d-none"><?= substr($items->title, 0, 50) . '...' ?></h3>
                                         <?php else: ?>
                                             <h3 class="card-title"><?= $items->title ?></h3>
                                         <?php endif ?>


                                         <p class="text-card"><?= $func->trailer($items, 70) ?>...</p>
                                     </div>
                                     <div class="col-md-5">
                                         <div class="price">
                                             <span>
                                                 <?php if ($items->price >= 10000): ?>
                                                     <?php if ($items->price >= 1000): ?>
                                                         IDR <?= number_format($items->price / 1000, 0) . 'K '; ?>
                                                     <?php endif ?>
                                                 <?php else: ?>
                                                     USD <?= number_format($items->price) ?>
                                                 <?php endif ?>
                                             </span>
                                             /pax
                                         </div>
                                         <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>" class="btn btn-prd">
                                             <div class="shadow"></div>Read More <i class="fa-solid fa-arrow-right ml-3"></i>
                                         </a>

                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 <?php $i++;
                    endforeach ?>
             </div>

         </div>
     </section>
 <?php elseif ($grid == '4'): ?>

     <section class="pad6rem pt-md-5 product">
         <div class="container-global wow fadeIn" data-wow-duration="2s">

             <div class="title-general text-center">
                 <span class="tag-ats"><?= $subtitle ?></span>
                 <h2 class="title"><?= $title ?></h2>
             </div>

             <div class="row w-100 m-0 mt-5 ss-arrow">
                 <?php $i = 1;
                    foreach ($item->data as $items): ?>
                     <div class="col-md-3 col-6 px-2 mb-3">
                         <a style="text-decoration: none;" href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>">
                             <div class="wrap-tour">
                                 <img src="<?= $items->img_cover_url ?>" loading="lazy" alt="<?= $items->title ?>" class="img-fluid">

                                 <!-- <span class="nametag">Best Seller</span> -->

                                 <div class="wrap-tour2">
                                     <?php foreach ($data->category as $cate): ?>
                                         <?php if ($items->package_id == $cate->id): ?>
                                             <span class="cate"><?= $cate->name ?></span>
                                         <?php endif ?>
                                     <?php endforeach ?>
                                     <h3><?= $items->title ?></h3>

                                     <div class="list-star">
                                         <i class="fas fa-star mr-1"></i>
                                         <i class="fas fa-star mr-1"></i>
                                         <i class="fas fa-star mr-1"></i>
                                         <i class="fas fa-star mr-1"></i>
                                         <i class="fas fa-star mr-1"></i>
                                     </div>

                                     <!-- <p class="d-none d-md-block"><?= $func->trailer($items, 100) ?></p> -->

                                     <?php if (!empty($items->price)): ?>
                                         <div class="pricendiskon">
                                             <?php $pricead = explode('||', $items->content) ?>
                                             <p class="price"><span style="text-transform: capitalize;">From</span>

                                                 <?php if ($items->price >= 1000): ?>
                                                     IDR <?= number_format($items->price) ?>
                                                 <?php else: ?>
                                                     USD <?= number_format($items->price) ?>
                                                 <?php endif ?>
                                             </p>

                                         </div>

                                         <a class="btn btn-pronus" href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>">Read More</a>
                                     <?php else: ?>
                                         <a class="btn btn-pronus1" href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>">Read More</a>
                                     <?php endif ?>

                                 </div>
                             </div>
                         </a>
                     </div>
                 <?php $i++;
                    endforeach ?>
             </div>
         </div>


     </section>

 <?php endif ?>