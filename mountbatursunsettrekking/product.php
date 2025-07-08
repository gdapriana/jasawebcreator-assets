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


<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1742144154-17-03-2025-3Fen71Q6YRmqyDKtoCldjJOaNSrPx04v.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <div class="tx text-center w-100">
            <h1><?= $data->category_name ?></h1>
            <p>Home - <?= $data->category_name ?></p>
        </div>
    </div> 
</section>


<section class="pad6rem " id="populer" >
    <div class="background" ></div>
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="row ss-arrow justify-content-start">
            <?php $i=1; foreach ($data->result as $items): ?>
                <div class="col-md-4 mb-3" style="padding: 0px 5px;">
                    <div class="wprod car-rent">
                        <div class="bg-wprod lazyload" data-bgset="<?= $items->img_cover_url ?>"></div>

                        <div class="wprod2 text-center" style="padding: 0px 20px 30px;">
                            <h2 class="mb-3"><?= $items->title ?></h2>

                        <?php if (!empty($items->price)): ?>
                            <div class="wrap-price-mobil text-center">
                                <span class="start-idr">USD</span>
                                <p class="price-mobil"><?= number_format($items->price) ?></p>
                                <span class="pax"> / Day</span>
                            </div>
                        <?php endif ?>
                            <p class="srv">10 hours service</p>
                            <a class="btn button-read" href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%20admin%20<?= $data->web->site_name ?>%2C%20I%20would%20like%20to%20rent%20a%20car%20%2A<?= $items->title ?>%2A%2C%20can%20you%20assist%20me%3F">Reserve it Now</a>

                            

                            <div class="content-car">
                                <p class="cr">No credit card required!</p>
                                <?= str_replace('Sewa Mobil ', '', $items->content) ?>
                            </div>

                        </div>
                    </div><!-- wprod -->
                </div><!-- col-md-4 -->
            <?php $i++; endforeach ?>
        </div>


    </div>
</section>


    <?= $func->load('home/home_why') ?>

    <?= $func->load('home/home_faq') ?>

