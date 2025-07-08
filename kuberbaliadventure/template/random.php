<?php if ($data->cat_data->id == '2628'): ?>
<style type="text/css">
.blogsing-style h1 {
    color: #111;
    font-family: var(--primtext);
    font-weight: 700;
    letter-spacing: 0.5px;
    font-size: 35px;
    line-height: 45px;
    margin-bottom: 25px;
}

.pad8 {
    padding-left: 0px;
    align-self: center;
}

.blogsing-style .title {
    margin-bottom: 0px;
    font-family: var(--primtext);
    color: #00001C;
    font-weight: 600;
    font-size: 15px;
}

.blogsing-style .date {
    margin-bottom: 0px;
    font-family: var(--primtext);
    font-weight: 300;
}

.pad8-kanan {
    text-align: right;
    align-self: center;
}

.image-cover {
    height: 500px;
    width: 100%;
    object-fit: cover;
    border-radius: 5px;
    margin-bottom: 30px;
}

.content-blog p {
    font-family: var(--primtext);
    color: #555;
    font-size: 14px;
    text-align: justify;
    font-weight: 400;
}

.content-blog li {
    font-family: var(--primtext);
    color: #555;
    font-size: 14px;
    text-align: justify;
    font-weight: 400;
    margin-bottom: 10px;
}

.content-blog img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 5px;
}

.side-blog h2 {
    font-family: var(--primtext);
    font-weight: 700;
    font-size: 24px;
    letter-spacing: 0.5px;
    color: #212121;
    padding-bottom: 10px;
    border-bottom: 3px solid #00001C;
}

.side-blog img {
    height: 105px;
    object-fit: cover;
    border-radius: 5px;
}

.side-blog h3 {
    font-family: var(--primtext);
    text-transform: capitalize;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 0.5px;
    line-height: 22px;
    margin-bottom: 10px;
}

.side-blog p {
    font-family: var(--primtext);
    font-size: 13px;
    line-height: 23px;
    margin-bottom: 20px;
}

.pad7 {
    padding-right: 0px;
    padding-left: 5px;
}

.header-body {
    background-color: white !important;
}

@media (max-width: 768px) {
    .blogsing-style h1 {
        color: #212121;
        font-family: var(--primtext);
        font-weight: 700;
        letter-spacing: -1px;
        font-size: 30px;
        line-height: 40px;
        margin-bottom: 20px;
    }

    .pad8-kanan {
        text-align: left;
        margin-bottom: 10px;
    }

    .image-cover,
    .content-blog img {
        height: 250px;
    }

    .pad7 {
        padding-right: 10px;
    }
}

.blogsing-style {
    margin-top: 80px;
}

html:not(.sticky-header-active) .header-body {
    margin-top: 0px !important;
    transition: all ease 1000ms !important;
    background: var(--color2) !important;
}
</style>

<section class="py-5 blogsing-style">
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <h1><?= $data->result->title ?></h1>

                <div class="row mb-3">
                    <div class="col-md-4 display-pc">
                        <div class="row">
                            <div class="col-md-4">
                                <img style="border-radius: 100px; border-radius: 100px; width: 60px; height: 60px; object-fit: cover;"
                                    class="img-fluid" src="<?= $data->web->site_logo ?>">
                            </div>

                            <div class="col-md-8 pad8">
                                <p class="title"><?= $data->web->site_name ?></p>
                                <p class="date"><?= date('d F Y', strtotime($data->result->created_at)) ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 pad8-kanan">

                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_inline_share_toolbox"></div>


                    </div>

                </div>

                <img class="img-fluid image-cover" src="<?= $data->result->img_cover_url ?>">

                <div class="content-blog">
                    <?= $data->result->content ?>
                </div>

            </div><!-- col-md-8 -->

            <div class="col-md-4">

                <?= $func->sidebar('mainblog') ?>

            </div>
        </div>

    </div>
</section>

<?php else: ?>

<style type="text/css">
#header.header-no-min-height .header-body {
    background: var(--color2) !important;
}

.bg-single {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    height: 400px;
}

.bg-single:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: black;
    opacity: 0.4;
}

.single-title {
    position: absolute;
    bottom: 8%;
    left: 0;
    right: 0;
    z-index: 1;
}

.single-title span {
    font-size: 13px;
    text-transform: capitalize;
    background: var(--colors);
    color: white;
    padding: 5px 15px;
    border-radius: 100px;
    font-family: var(--primtext);
}

.single-title h1 {
    margin-top: 20px;
    font-family: var(--primtext);
    color: white;
    font-weight: 700;
    letter-spacing: 0px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    padding-bottom: 20px;
    font-size: 46px;
    line-height: 56px;
    margin-bottom: 5px;
}

.single-title p {
    font-size: 19px;
    font-family: var(--primtext);
    line-height: 25px;
    color: #f1f1f1;
    font-weight: 300;
    margin-top: 20px;
}

@media (max-width: 768px) {
    .single-title h1 {
        font-size: 36px;
        line-height: 36px;
    }
}

.primarykonsing {
    font-family: var(--primtext);
    color: black;
    font-weight: 700;
    letter-spacing: 0px;
    font-size: 25px;
    margin-bottom: 20px;
    line-height: 30px;
    text-transform: unset;
    font-style: normal;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: var(--primtext);
    letter-spacing: 0px;
    color: black;
    margin-bottom: 25px;
    text-transform: unset;
}

.desc-single p {
    font-family: var(--primtext);
    font-size: 15px;
    color: #777;
    line-height: 30px;
    text-align: justify;
}

.desc-single h3 {
    font-size: 17px;
    font-family: var(--primtext);
    letter-spacing: .3px;
    font-weight: 900;
    color: var(--colors);
    line-height: 30px;
}

.desc-single p strong,
.desc-single p b {
    font-family: var(--primtext);
    letter-spacing: 0px;
    font-weight: 700;
    color: var(--colors);
    line-height: 30px;
}

.desc-single li {
    line-height: 24px;
    font-family: var(--primtext);
    font-size: 15px;
    margin-bottom: 10px;
    color: #555;
    text-align: justify;
}

.desc-single {
    padding: 25px 10px;
    border-top: 2px solid #EAEEF3;
    position: relative;
}

.desc-single table {
    margin-bottom: 20px;
    width: 100% !important;
}

.desc-single th {
    text-align: center;
    font-family: var(--primtext);
    padding: 10px;
    background: var(--colors);
    color: white;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    font-size: 12px;
}

.desc-single td {
    padding: 5px;
    font-family: var(--primtext);
    font-size: 14px;
    color: #555;
    text-align: center;
}

.wrap-booking-sing {
    text-align: center;
    padding: 0px;
    overflow: hidden;
    border-bottom: 4px solid var(--color2);
    border-top: 4px solid var(--color2);
    border-right: 1px solid #EAEEF3;
    border-left: 1px solid #EAEEF3;
}

.wrap-booking-sing .price {
    background: var(--color2);
    color: white;
    padding: 10px;
    font-size: 13px;
    font-family: var(--primtext);
}

.wrap-booking-sing b {
    font-size: 17px;
}

.wrap-booking-sing form#contactForm {
    padding: 0px 15px;
}

.wrap-booking-sing form#contactForm label {
    font-family: var(--primtext);
    color: black;
    font-weight: 600 !important;
    letter-spacing: 0.5px;
    font-size: 13px;
}

.main {
    background: white !important;
}

.detail-tour {
    border-top: 2px solid #EAEEF3;
    padding: 15px 0px 25px;
}

.wrap-detailtour i {
    font-size: 36px;
    color: var(--colors);
}

.wrap-detailtour p {
    margin-bottom: 0px;
    color: black;
    font-weight: 600;
    font-family: var(--primtext);
}

.wrap-detailtour span {
    font-family: var(--primtext);
}

.wrap-detailtour .col-md-3 {
    padding-right: 0;
    align-self: center;
}

.desc-tour {
    padding: 40px 10px 25px;
}

section.toggle.active {
    border: 1px solid #ccc;
    border-left: 5px solid var(--colors);
    border-radius: 5px;
    margin-bottom: 10px !important;
}

html .toggle-primary .toggle label {
    border-top-left-radius: 0;
}

html .toggle-primary .toggle.active>label {
    border-top-left-radius: 0;
    border-color: var(--colors) !important;
}

.toggle.toggle-minimal .toggle.active>label {
    background: transparent;
    border: none;
    font-family: var(--primtext);
    padding: 17px 30px;
    color: #1A2B48;
    font-size: 16px;
    letter-spacing: 0.3px;
    font-weight: 700;
    padding-bottom: 17px;
}

.toggle.toggle-minimal .toggle>label {
    background: transparent;
    border: none;
    font-family: var(--primtext);
    padding: 17px 30px;
    color: #1A2B48;
    font-size: 16px;
    letter-spacing: 0.3px;
    font-weight: 700;
}

section.toggle {
    border: 1px solid #ccc;
    border-left: 5px solid var(--colors);
    border-radius: 5px;
    margin-bottom: 10px !important;
}

.toggle>.toggle-content {
    padding: 17px 30px;
    border: none;
    margin-bottom: 0;
}

.toggle-content img {
    height: 220px;
    width: 100%;
    object-fit: cover;
    border-radius: 3px;
}

.img-singlee {
    width: 100%;
    height: 500px;
    object-fit: cover;
    margin-bottom: 40px;
    border-radius: 5px;
}

@media (max-width: 768px) {
    .img-singlee {
        height: auto;
    }
}

.wrap-addons h4 {
    font-family: var(--primtext);
    letter-spacing: 0px;
    font-weight: 700;
    color: var(--colors);
}

.wrap-addons {
    padding: 35px;
    box-shadow: 0px 11px 53px 0px rgb(89 59 36 / 14%);
    border-radius: 20px;
    margin-bottom: 30px;
}

.side-blog h2 {
    font-family: var(--primtext);
    font-weight: 700;
    font-size: 24px;
    letter-spacing: 0.5px;
    color: #212121;
    padding-bottom: 10px;
    border-bottom: 3px solid var(--colors);
}

.side-blog img {
    height: 105px;
    object-fit: cover;
    border-radius: 5px;
    margin-bottom: 20px;
}

.side-blog h3 {
    font-family: var(--primtext);
    text-transform: capitalize;
    font-size: 16px;
    font-weight: 600;
    letter-spacing: 0.5px;
    line-height: 22px;
    margin-bottom: 10px;
}

.side-blog p {
    font-family: var(--primtext);
    font-size: 13px;
    line-height: 23px;
    margin-bottom: 20px;
}

.pad7 {
    padding-right: 0px;
    padding-left: 5px;
}

.btn-whatsapp {
    width: 100%;
    background: var(--colors);
    color: white;
    font-family: var(--primtext);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.1px;
    padding: 20px;
    font-size: 20px;
    margin-bottom: 25px;
    transition: all ease 500ms;
}

.btn-whatsapp:hover {
    transition: all ease 500ms;
    background: black;
    color: white;
}

.wrap-addons img {
    width: 100%;
    height: 150px;
    object-fit: cover;
}

.wrap-addons p {
    font-family: var(--primtext);
    font-size: 13.5px;
    color: #555;
    text-align: justify;
}

@media (max-width: 768px) {
    .slide-fix {
        position: relative;
        z-index: 99;
        overflow-y: scroll;
    }

    .desc-single img {
        width: 100%;
        height: 300px;
        margin-bottom: 10px;
    }

    .wrap-addons img {
        height: 180px;
        margin-bottom: 20px;
    }

    .wrap-addons .img-bawa {
        height: 140px;
        width: 100%;
        margin-bottom: 3px;
    }

    .wrap-addons {
        padding: 20px 25px;
    }

    .wrap-addons h4 {
        margin-bottom: 10px;
    }
}

header#header {
    position: relative !important;
}

#header.header-no-min-height .header-body {
    min-height: 0 !important;
}

@media (min-width: 768px) {

    html:not(.sticky-header-active) .header-body {
        margin-top: 0px !important;
        transition: all ease 1000ms !important;
    }
}

.wrap-sidebar h3 {
    font-family: var(--primtext);
    color: var(--colors);
    text-transform: capitalize;
    letter-spacing: 0px;
    font-weight: 600;
    font-size: 22px !important;
    margin-bottom: 30px !important;
}

.wrap-sidebar ul {
    padding-left: 0;
    list-style: none;
}

.wrap-sidebar {
    padding: 30px;
    box-shadow: 10px 10px 30px #00000029;
    border-radius: 10px;
    background: white;
    font-family: var(--primtext);
}

.wrap-sidebar li {
    letter-spacing: 0.5px;
    font-weight: 500;
    margin-bottom: 15px;
    padding-left: 40px;
    font-size: 14px;
    position: relative;
}

.wrap-sidebar li a {
    color: #444 !important;
}

.wrap-sidebar li a:hover {
    color: var(--colors) !important;
}

.wrap-sidebar ul li i {
    position: absolute;
    left: 10px;
    font-size: 15px;
    top: 4px;
    color: var(--colors);
}

.btn-bok {
    background: var(--colors);
    color: white;
    padding: 10px 30px;
    border-radius: 5px;
    font-family: var(--primtext);
    transition: all ease 500ms;
    text-transform: uppercase;
    font-size: 17px;
    font-weight: 600;
    margin-top: 30px;
}

.btn-bok:hover {
    background: black;
    color: white;
}
</style>


<section class="single-accomodation py-5">
    <div class="container">
        <?php $cutkonten = explode('||', $data->result->content); ?>
        <div class="row">
            <div class="col-md-8">

                <div class="wrap-single">
                    <div class="desc-single pt-0" style="border-top: none;">

                        <img class="img-fluid w-100 img-singlee" src="<?= $data->result->img_cover_url ?>"
                            alt="<?= $data->result->title ?>">

                        <h2 class="primarykonsing mt-3 mt-md-0"><?= $data->result->title ?></h2>
                        <?= $cutkonten[0]; ?>

                        <a class="btn btn-bok d-block d-md-none" href="#book">Book This Packages!</a>
                    </div>

                    <?php if (!empty($data->addon_contents)): ?>

                    <h2 style="primarykonsing">Destination Details</h2>

                    <?php $i=1; foreach ($data->addon_contents as $items): ?>
                    <div class="wrap-addons">

                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-fluid" src="<?= $items->img_cover_url ?>" alt="<?= $items->name ?>">
                            </div>

                            <div class="col-md-9" style="align-self: center;">
                                <h4><?= $items->name ?></h4>
                                <?= $items->content ?>
                            </div>
                        </div>
                    </div>
                    <?php $i++; endforeach ?>

                    <?php endif ?>

                </div>

                <?php if (!empty($data->images)): ?>
                <div class="desc-single pt-0" style="border-top: none;">
                    <div class="wrap-addons">
                        <h2 class="primarykonsing">Tour Gallery</h2>

                        <div class="row product-gallery">
                            <?php $i=1; foreach ($data->images as $img): ?>
                            <div class="col-md-4 col-6 progall" style="padding: 3px;">
                                <a class="img-thumbnail img-thumbnail-no-borders lightbox" href="<?= $img->url ?>"
                                    data-plugin-options="{'type':'image'}">
                                    <img class="img-fluid img-bawa" src="<?= $img->url ?>">
                                </a>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
                <?php endif ?>

            </div>


            <div class="col-md-4">
                <!-- <aside class="sidebar" id="sidebar" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 100}}">
  -->
                <div class="smooth-slide" id="book"></div>
                <div class="wrap-booking-sing mb-3">
                    <p class="price"><b>Booking Form</b></p>
                    <?= $func->load('booking_form') ?>
                </div>
                <!-- </aside> -->

                <div class="wrap-sidebar mt-4">
                    <?= $func->sidebar('main') ?>
                </div>

                <div class="wrap-sidebar mt-4">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><i class="fas fa-phone"></i><a style="color: black;"
                                href="<?= $func->dm_telphone() ?>"><?= $data->company->company_telp ?></a></li>
                        <li><i class="fab fa-whatsapp"></i><a style="color: var(--colors);"
                                href="<?= $func->dm_whatsapp() ?>"><?= $data->social->whatsapp ?></a></li>
                        <li><i class="fas fa-envelope"></i><a style="color: black;"
                                href="<?= $func->dm_email() ?>"><?= $data->company->company_email ?></a></li>
                    </ul>

                </div>

            </div>
        </div>

    </div>
</section>

<?php endif ?>