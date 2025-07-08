<style type="text/css">

@media (min-width: 768px) {
    #header.header-no-min-height .header-body { margin-top:-3px; }
}

.wrap-blog2 {
    height: 300px;
}

</style>
<section class="section-allpage lazyload back-patt">
    <img class="patern w-100 bottom" src="https://jwc.gotra-resources.my.id/web-upload/1725527048-05-09-2024-patc0TP4528VGhEq1MH9dWNbnIzurigU.png" alt="Patern">
    <div class="background w-100" style="filter: brightness(1); background-image: url(https://jwc.gotra-resources.my.id/web-upload/1724661938-26-08-2024-7RrwxcP0elhoEnTMGaN93XAKkUjzSJiY.png);"></div>
    <div class="text wow fadeIn" data-wow-duration="2s" style="position:relative; z-index: 10">
        <h1><?= $data->category_name ?></h1>
        <p>Home - <?= $data->category_name ?></p>
    </div>
</section>


<section class="py-5 blog-sec">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

       <div class="row mt-4">

            <?php foreach ($data->result as $items): ?>

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