<?php 
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$grid = $item->setting->grid;
$route = ROUTE_BLOG_VIEW; ?>

<style type="text/css">
	.product-default1 .owl-dots {
	    display: none !important;
	}
</style>

<?php if ($grid == '1'): ?>

<section class="pad6rem blog-sec">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index: 4; position: relative;">
      <div class="title-product text-center" style="position: relative">
        <div class="tipro text-center">
            <span class="tit">News & Insight</span>
        </div>
        <h2><?= $title ?></h2>
      </div>
        
      <div class="row mt-5">

            <?php foreach ($item->data as $items): ?>

            <div class="col-sm-4 pb-3">
              <div class="card border-0">
                <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" class="w-100" />
                <div class="card-body p-0 pt-3">
                <div class="info d-flex">
                    <div class="date"><?= date('d M Y', strtotime($items->created_at)) ?></div>

                    <?php foreach ($data->blog_category as $cate): ?>
                        <?php if ($items->category_id == $cate->id): ?>
                            <div class="cate-blog ml-4"><?= $cate->name ?></div>
                        <?php endif ?>
                    <?php endforeach ?>
                    
                </div>
                <h5 class="card-title mt-3"><?= $items->title ?></h5>
                <a href="<?= $func->link(ROUTE_BLOG_VIEW, $items->slug) ?>" class="btn pl-0">
                    Read More
                    <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
                </div>
              </div>
            </div>


            <?php endforeach ?>

        </div>

    </div>
</section>
<?php endif ?>