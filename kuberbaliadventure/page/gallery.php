<style>

.galcat-wrap img {
    object-fit: cover;
    height: 400px;
    width: 100%;
    opacity: 0.8;
    transition: all ease 500ms;
}

.galcat-wrap {
    position: relative;
    overflow: hidden;
    background: #222;
    transition: all ease 500ms;
}

.galcat-wrap .img-galc { opacity:unset; height:300px; }

.galcat-wrap:hover img {
    transform: scale(1.1);
    opacity: 0.5;
    transition: all ease 500ms;
}

.pad-gal { padding:2px; }

.wrap-galcat-title {
    position: absolute;
    bottom: 8%;
    z-index: 1;
    left: 0;
    right: 0;
    padding: 0px 30px;
}

.wrap-galcat-title h3 {
    font-family: var(--primarytext);
    color: white;
    text-transform: capitalize;
    font-weight: 500;
    letter-spacing: 0px;
    font-size: 21px;
    line-height: 30px;
    margin-bottom: 10px;
}
.wrap-galcat-title span {
    font-family: var(--primarytext);
    color: #eee;
    margin-bottom: 3px;
    display: block;
}

.btn-galcat {
    background: white;
    color: var(--colors);
    font-family: var(--primtext);
    border: 1px solid;
    text-transform: uppercase;
    border-radius: 100px;
    padding: 10px 28px;
    font-size: 11px;
    letter-spacing: 1px;
    font-weight: 600;
    margin-top: 15px;
    transition: all ease 500ms;
}

@media (max-width: 768px) {
    .bg-primarypage { margin-top:-83px; }

    .galcat-wrap img { height:200px !important; }

    .mar0 { margin:0; }
}


</style>

<?php if ($data->category_name == 'all'): ?>
    
<section class="section-allpage lazyload back-patt">
    <img class="patern w-100 bottom" src="https://jwc.gotra-resources.my.id/web-upload/1725527048-05-09-2024-patc0TP4528VGhEq1MH9dWNbnIzurigU.png" alt="Patern">
    <div class="background w-100" style="fillter: brightness(1); background-image: url(https://jwc.gotra-resources.my.id/web-upload/1724661938-26-08-2024-7RrwxcP0elhoEnTMGaN93XAKkUjzSJiY.png);"></div>
    <div class="text wow fadeIn" data-wow-duration="2s" style="position:relative; z-index: 10">
        <h1>Photo Gallery</h1>
        <p>Home - Photo Gallery</p>
    </div>
</section>

<?php else: ?>

<section class="section-allpage lazyload back-patt">
    <img class="patern w-100 bottom" src="https://jwc.gotra-resources.my.id/web-upload/1725527048-05-09-2024-patc0TP4528VGhEq1MH9dWNbnIzurigU.png" alt="Patern">
    <div class="background w-100" style="fillter: brightness(1); background-image: url(https://jwc.gotra-resources.my.id/web-upload/1724661938-26-08-2024-7RrwxcP0elhoEnTMGaN93XAKkUjzSJiY.png);"></div>
    <div class="text wow fadeIn" data-wow-duration="2s" style="position:relative; z-index: 10">
        <h1><?= $data->category_name ?></h1>
        <p>Home - <?= $data->category_name ?></p>
    </div>
</section>

<?php endif ?>

<section class="pad6rem wow fadeIn" data-wow-duration="2s">
<div class="container-global">

<!--     <div class="container">
        <div class="title-product text-center" style="position: relative;">
            <span><?= $data->web->site_name ?></span>
            <h2 style="color: var(--colors);"><?= $data->category_name ?></h2>
            <p style="color: #999;">Selamat datang di Galeri Foto Yayasan Karuna Bali! Temukan momen-momen berharga dan aktivitas unik yang menunjukkan dedikasi kami dalam pendidikan dan pemberdayaan masyarakat Bali.</p>
        </div>
    </div> -->

    <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
        <div class="row mar0">
            <?php $i=1; foreach ($data->result as $items): ?>
                    
                <div class="col-md-3 col-6 pad-gal">
                    <a class="img-thumbnail img-thumbnail-no-borders lightbox" href="<?= $items->url_img ?>">
                    <div class="galcat-wrap">
                        <img class="img-fluid img-galc" loading="lazy" alt="<?= $data->category_name ?>" src="<?= $items->url_img ?>">
                    </div>
                    </a>
                </div>

            <?php $i++; endforeach ?>
        </div>
    </div>

</div>
</section>


<?= $func->load('home/home_why2') ?>

<?= $func->load('home/home_faq') ?>