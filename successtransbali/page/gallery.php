<style>
    .wrap-gallery {
        width: 100%;
        height: 300px;
        object-fit: cover;
        position: relative;
        border-radius: 5px;
    }

     @media (max-width: 768px) {
        .wrap-gallery { height: 160px; }
    }


@media (min-width: 768px) {
    #header.header-no-min-height .header-body { margin-top:-3px; }
}

</style>

<section class="section-allpage lazyload" data-bgset="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1735203517-26-12-2024-9gAREOBrFCk7Ds2m1UXMdwh0ZSn65Jcv.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <h1>Our Gallery</h1>
        <p>Home - Our Gallery</p>
    </div>
</section>

<section class="pad6rem">
     <div class="container-global">
        
        <div class="row pt-4">
            <?php foreach ($data->result as $items): ?>
            <div class="col-6 col-md-3" style="padding: 3px;">
                <a class="img-thumbnail img-thumbnail-no-borders d-block img-thumbnail-hover-icon lightbox" href="<?= $items->url_img ?>" data-plugin-options="{'type':'image'}">
                    <img class="wrap-gallery" loading="lazy" src="<?= $items->url_img ?>" alt="<?= $data->category_name ?>">
                </a>
            </div> 
            <?php endforeach ?>
        </div>

        <div class="text-center mt-4">
            <?= $func->load_pagination("pagination justify-content-center","page-item","page-link") ?>
        </div>
        
    </div>
</section>

<?= $func->load('home/home_faq') ?>
