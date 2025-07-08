<style type="text/css">
    

    .desc-cate-prd .logo img {
        height: 70px;
        border-radius: 50%;
    }
    .desc-cate-prd .logo h2 {
        font-family: var(--primtext);
        font-size: 30px;
        line-height: 48px;
        font-weight: 600;
        color: var(--colors);
        letter-spacing: .5px;
    }
    .desc-cate-prd  p {
        font-family: var(--primtext);
        font-size: 15px;
        line-height: 28px;
        margin-bottom: 1.3rem;
        letter-spacing: .3px;
        max-width: 1000px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
    }
    
    @media (max-width: 768px) {
        .desc-cate-prd .logo img {
            height: 60px;
            border-radius: 50%;
        }
        .desc-cate-prd .logo h2 {
            font-size: 25px;
            line-height: 38px;
        }
        .desc-cate-prd p {
            font-size: 13px;
            line-height: 25px;
        }
    }
/* ===================================== */
/* ===================================== */
/* ===================================== */



</style>


<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1742280464-product_image-18-03-2025-2fQL7mg8ctS0wPoR.jpg">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <div class="tx text-center w-100">
            <h1><?= $data->category_name ?></h1>
            <p>Home - <?= $data->category_name ?></p>
        </div>
    </div> 
</section>


<section class="pad6rem product" id="populer" >
    <div class="background" ></div>
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="row ss-arrow justify-content-start">
            <?php $i=1; foreach ($data->result as $items): ?>
                <div class="col-md-4 col-6 pb-4 px-md-3 px-2">
                    <div class="card h-100">
                        <div class="img w-100">
                            <img src="<?= $items->img_cover_url ?>" alt="<?= $items->title ?>" class="w-100"/>
                        </div>
                        <div class="card-body px-md-4 pt-2 px-1">
                            <div class="location"><i class="fa-solid fa-location-crosshairs mr-2"></i>Bali, Indonesia</div>
                            <h3><?= $items->title ?></h3>
                            <div class="day">
                                <?= $func->trailer($items, 90) ?>...
                            </div>
                            <div class="btm px-md-4 py-md-3 py-2 px-1 d-flex justify-content-between align-items-end">
                                <div class="price">
                                    <span>
                                        <?php if ($items->price >= 10000): ?>
                                            IDR <?= number_format($items->price) ?>
                                        <?php else: ?>
                                            USD <?= number_format($items->price) ?>
                                        <?php endif ?>
                                    </span>
                                    /person
                                </div>
                                <a class="btn" href="<?= $func->link(ROUTE_PRODUCT_VIEW, $items->slug) ?>">
                                    Learn More
                                    <i class="fa-solid fa-circle-right ml-md-2 ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $i++; endforeach ?>
        </div>


    </div>
</section>


    <?= $func->load('home/home_why') ?>

    <?= $func->load('home/home_faq') ?>

