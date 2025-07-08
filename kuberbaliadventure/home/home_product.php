 <?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$grid = $item->setting->grid;
$route = ROUTE_PRODUCT_VIEW;
?>

<style type="text/css">



.tirev {
    margin: 10vh;
}

.wrap-profil h2 {
    font-weight: 700;
    font-family: var(--titletext);
    color: #fff;
    letter-spacing: 1px;
    font-size: 50px;
    line-height: 55px;
    text-transform: none;
    margin-bottom: 35px;
    margin-top: 30px;
    position: relative;
    z-index: 3;
}

 .tirev .tit {
    color: #000 !important;
    text-shadow: 1.5px 1.5px 0 white, 
                 -1.5px -1.5px 0 white, 
                 1.5px -1.5px 0 white, 
                 -1.5px 1.5px 0 white, 
                 1.5px 1.5px 0 white !important;
    -webkit-text-fill-color: #000 !important;
} 




</style>

<?php if ($grid == '1'): ?>

<section class="pad6rem">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">
      <div class="title-product text-center">
        <span>Kategori Katalog Hewan</span>
        <h2><?= $title ?></h2>
      </div>
        
      <div class="row">
          <?php $i=1; foreach ($data->category as $items): ?>
            <?php if ($items->id == '5905' || $items->id == '5906'): ?>
                
              <div class="col-md-6 mb-5">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <div class="wrap-prod">
                            <img class="img-fluid" src="<?= $items->image ?>" alt="<?= $items->name ?>">
                        </div>
                    </div>

                     <div class="col-md-6 align-self-center">
                        <div class="wrap-prod2">
                            <h3><?= $items->name ?></h3>
                            <p><?= $items->custom_field_1 ?></p>
                            <a class="btn" href="<?= $func->link(ROUTE_PRODUCT, $items->slug) ?>"><i class="fas fa-arrow-right mr-3"></i>Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
              </div>

            <?php elseif($items->id == '5907' ||  $items->id == '5911'): ?>

            <div class="col-md-6 mb-5">
                <div class="row">
                    <div class="col-md-6 order-md-2 align-self-center">
                        <div class="wrap-prod">
                            <img class="img-fluid" src="<?= $items->image ?>" alt="<?= $items->name ?>">
                        </div>
                    </div>

                     <div class="col-md-6 order-md-1 align-self-center">
                        <div class="wrap-prod2">
                            <h3><?= $items->name ?></h3>
                            <p><?= $items->custom_field_1 ?></p>
                            <a class="btn" href="<?= $func->link(ROUTE_PRODUCT, $items->slug) ?>"><i class="fas fa-arrow-right mr-3"></i>Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php endif ?>
          <?php $i++; endforeach ?>
      </div>

    </div>
</section>

<?php elseif ($grid == '2'): ?>

<section class="pad6rem product back-patt" style="position:relative">
    <img class="patern w-100 top" src="https://jwc.gotra-resources.my.id/web-upload/1725527048-05-09-2024-patc0TP4528VGhEq1MH9dWNbnIzurigU.png" alt="Patern">
    <img class="patern w-100 bottom" src="https://jwc.gotra-resources.my.id/web-upload/1725527048-05-09-2024-patc0TP4528VGhEq1MH9dWNbnIzurigU.png" alt="Patern">
    <div class="background w-100"></div>
    <div class="container-global wow fadeIn" wow-data-ruation="2s" style="position: relative; z-index: 3">
        <div class="text-center wrap-profil tirev">
            <div class="tipro text-center">
               <span class="tit">Our Adventures</span>
            </div>

            <h2><?= $title ?></h2>
        </div>
        <div class="serve-slide ss-arrow mb-4" >

            <?php foreach ($item->data as $items): ?>
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
            <?php $i++; endforeach ?>

        </div>

    </div>
</section>

<?php elseif ($grid == '3'): ?>
<div class="smooth-slide" id="services"></div>
<section class="pad6rem paducus mt-5">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">
      <div class="title-product text-center">
        <span>Hewan Tersedia</span>
        <h2><?= $title ?></h2>
      </div>
        
      <div class="row">
          <?php foreach ($item->data as $items): ?>
              <div class="col-md-3">
                  <div class="wrap-tersedia">
                      <img class="img-fluid" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">

                    <?php if ($items->tags == 'Available'): ?>
                        <span class="available">Available</span>
                    <?php else: ?>
                        <span class="sold">Sold Out</span>
                    <?php endif ?>

                      <span><?= $items->custom_field_1 ?></span>
                      <h3><?= $items->title ?></h3>
                      <p>IDR <?= number_format($items->price) ?></p>

                    <div class="bb-hwn">
                      <a class="btn btn-hewan" href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Halo%2C%0D%0ASaya%20lihat%20iklan%20Anda%20di%20<?= base_url() ?>%0D%0A%0D%0AJual%20<?= $items->title ?>%0D%0A<?= base_url() ?>view/<?= $items->slug ?>">Buy Now</a>
                      <a class="btn btn-hewan1" href="<?= $func->link(ROUTE_PRODUCT_VIEW. $items->slug) ?>">Details</a>
                    </div>
                  </div>
              </div>
          <?php endforeach ?>
      </div>


      <div class="mt-4 text-center">
          <a class="btn btn-katalog" href="#">Lihat Katalog Hewan Kami <i class="fa-solid fa-arrow-right ml-2"></i></a>
      </div>

    </div>
</section>


<?php elseif ($grid == '4'): ?>

<section class="pad6rem product back-patt" style="position:relative">
    <img class="patern w-100 top" src="https://jwc.gotra-resources.my.id/web-upload/1725527048-05-09-2024-patc0TP4528VGhEq1MH9dWNbnIzurigU.png" alt="Patern">
    <img class="patern w-100 bottom" src="https://jwc.gotra-resources.my.id/web-upload/1725527048-05-09-2024-patc0TP4528VGhEq1MH9dWNbnIzurigU.png" alt="Patern">
    <div class="background w-100"></div>
    <div class="container-global wow fadeIn" wow-data-ruation="2s" style="position: relative; z-index: 3">
        <div class="text-center wrap-profil tirev">
            <div class="tipro text-center">
               <span class="tit">Transfers & Tours</span>
            </div>

            <h2><?= $title ?></h2>
        </div>
        <div class="serve-slide ss-arrow mb-4" >

        <?php $i=1; foreach ($data->category as $items): ?>
            <?php if ($items->id == '6658' || $items->id == '6659'): ?>
                <div class="content-card p-2">
                <a href="<?= $func->link(ROUTE_PRODUCT, $items->slug) ?>">
                    <div class="card border-0 mb-3" style="position: relative">
                        <div class="shadow"></div>
                        <img src="<?= $items->image ?>" alt="<?= $items->name ?>" class="w-100"/>
                        <div class="card-img-overlay ">
                            <h5 class="card-title"><?= $items->name ?></h5>
                            <p class="card-text"><?= $items->content ?></p>
                            
                            <!-- <a href="<?= $func->link(ROUTE_PRODUCT, $items->slug) ?>" class="btn">
                                View More <i class="fa-solid fa-arrow-right ml-2"></i>
                            </a> -->
                        </div>
                    </div>
                </a>
                </div>
            <?php endif ?>
        <?php $i++; endforeach ?>

        </div>

    </div>
</section>

<?php endif ?>