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
                    <img class="img-fluid" src="<?= $items->img_cover_url ?>">
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

<?php if ($opsi == 'listtour'): ?>

<div class="wrap-sidebar-sing">
    <h3>Our <span>Services</span></h3>

    <?php foreach ($data->data as $items): ?>
        <a href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>"><p><?= $items->title ?><i class="fa-solid fa-chevron-right"></i></p></a>
    <?php endforeach ?>
</div>

<?php endif ?>

<?php if ($opsi == 'eswproduct'): ?>

<section class="pad6rem paducus" style="background: white;">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">
      <div class="title-product text-center">
        <span>Aesthetic Eswen</span>
        <h2><?= $data->title ?></span></h2>
      </div>
        
      <div class="row">
          <?php $i=1; foreach ($data->data as $items): ?>
                
              <div class="col-md-6 mb-5">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <div class="wrap-prod">
                            <img class="img-fluid" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">
                        </div>
                    </div>

                     <div class="col-md-6 align-self-center">
                        <div class="wrap-prod2 servi2">
                            <h3><?= $items->title ?></h3>
                            <p><?= strip_tags(substr($items->content, 0, 150)) ?>...</p>
                            <a class="btn" href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>"><i class="fas fa-arrow-right mr-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
              </div>

          <?php $i++; endforeach ?>
      </div>

    </div>
</section>

<?php endif ?>

<?php if ($opsi == 'eswtreatment'): ?>

<section class="pad6rem paducus">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">
      <div class="title-product text-center">
        <span>Aesthetic Eswen</span>
        <h2><?= $data->title ?></span></h2>
      </div>
        
      <div class="row">
          <?php $i=1; foreach ($data->data as $items): ?>
                
              <div class="col-md-6 mb-5">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <div class="wrap-prod">
                            <img class="img-fluid" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">
                        </div>
                    </div>

                     <div class="col-md-6 align-self-center">
                        <div class="wrap-prod2">
                            <h3><?= $items->title ?></h3>
                            <p><?= strip_tags(substr($items->content, 0, 150)) ?>...</p>
                            <a class="btn" href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>"><i class="fas fa-arrow-right mr-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
              </div>

          <?php $i++; endforeach ?>
      </div>

    </div>
</section>

<?php endif ?>

<?php if ($opsi == 'eswadd'): ?>

<section class="pad6rem paducus" style="background: white;">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">
      <div class="title-product text-center">
        <span>Aesthetic Eswen</span>
        <h2><?= $data->title ?></span></h2>
      </div>
        
      <div class="row">
          <?php $i=1; foreach ($data->data as $items): ?>
                
              <div class="col-md-6 mb-5">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <div class="wrap-prod">
                            <img class="img-fluid" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">
                        </div>
                    </div>

                     <div class="col-md-6 align-self-center">
                        <div class="wrap-prod2 servi2">
                            <h3><?= $items->title ?></h3>
                            <p><?= strip_tags(substr($items->content, 0, 150)) ?>...</p>
                            <a class="btn" href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>"><i class="fas fa-arrow-right mr-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
              </div>

          <?php $i++; endforeach ?>
      </div>

    </div>
</section>

<?php endif ?>


<?php if ($opsi == 'doctor'): ?>

<div class="smooth-slide" id="doctor"></div>
<section class="pad6rem paducus">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">
      <div class="title-product tipro text-center">
        <span>Doctor's Practice Schedule</span>
        <h2>Meet Our <span>Dedicated Doctors</span></h2>
      </div>

        <div class="tabs tabs-center tabs-doctor">
                <?php
                    $uniqueItems = [];
                ?>
                <ul class="nav nav-tabs">
                    <?php
                    $i = 1;
                    rsort($data->data);
                    foreach ($data->data as $items):
                        if (!in_array($items->custom_field_1, $uniqueItems)):
                            $uniqueItems[] = $items->custom_field_1;
                            $tabId = str_replace(' ', '-', $items->custom_field_1);
                    ?>
                            <li class="nav-item">
                                <a class="nav-link <?= $i == 1 ? 'active' : '' ?>" href="#<?= $tabId ?>" data-toggle="tab"><?= $items->custom_field_1 ?></a>
                            </li>
                    <?php
                            $i++;
                        endif;
                    endforeach;
                    ?>
                </ul>
                <div class="tab-content">
                    <?php
                    $i = 1;
                    rsort($data->data);
                    foreach ($uniqueItems as $uniqueItem):
                        $tabId = str_replace(' ', '-', $uniqueItem);
                    ?>
                        <div id="<?= $tabId ?>" class="tab-pane fade <?= $i == 1 ? 'show active' : '' ?>">
                            <div class="review-slide ss-arrow">
                                <?php foreach ($data->data as $items): ?>
                                    <?php if ($items->custom_field_1 == $uniqueItem): ?>
                                        <div class="px-2">
                                            <div class="doktor">
                                                <div style="position: relative;">
                                                    <img class="img-fluid" src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>">
                                                    <a href="<?= $func->link(ROUTE_PRODUCT_VIEW. $items->slug) ?>" class="span-ctct">View Schedule <i class="fa-solid fa-chevron-right ml-2"></i></a>
                                                </div>
                                                <div class="doktor2">
                                                    <p><?= $items->custom_field_1 ?></p>
                                                    <h3><?= $items->title ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </div>
                        </div>
                    <?php $i++; endforeach;?>
                </div>
            </div>

    </div>
</section>

<?php endif ?>