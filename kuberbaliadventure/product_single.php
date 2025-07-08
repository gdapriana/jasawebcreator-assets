<?php if($data->result->id == '67569'): ?>










<?php else: ?>

<style>
    
@media (min-width: 768px) {
    

    #header .header-nav.header-nav-stripe nav>ul>li>a { text-shadow:unset !important; }

    .conrom { max-width: 1240px; }

    html #header.header-transparent { position:relative; }

    .btn-book-atas { background:black; }
}

/*Slick*/

.wrap-resort.slick-slide .wrap-resort2  { 
    transition: opacity 1s ease-out;
    opacity: 0;
    height: 0;
    overflow: hidden;
}

.wrap-resort.slick-slide.slick-current.slick-active.slick-center .wrap-resort2  { 
    opacity: 1;
    height: auto; 
}

.slick-cent22 .slick-list {
    padding:0 25% 0 !important;
}

.slick-slide.wrap-resort {
  margin: 0 10px;
}


.slick-slide.wrap-resort img { opacity: 0.6; transition: opacity 500ms ease-in-out; }

.slick-slide.wrap-resort img {
    height: 500px;
    object-fit: cover;
    opacity: 1;
    transition: opacity 500ms ease-in-out;
}

.slick-margin { margin-top: 10px; }

@media (max-width: 768px) {
    .slick-cent22 .slick-list, .slick-list.draggable { padding: unset !important; }

    .slick-slide.wrap-resort img { height: 300px; margin-top:85px }

    .slick-margin { margin-top: 0px; }
}

.wrap-conrom {
    position: relative;
    padding-right: 3%;
}

.wrap-conrom .title {
    position: relative;
    padding-bottom: 25px;
    border-bottom: 1px solid #ddd;
    margin-bottom: 25px;
}

.wrap-conrom .title span {
    font-family: var(--subtext);
    letter-spacing: 0.1px;
    font-size: 15px;
    color: var(--colors);
    display: block;
    margin-bottom: 10px;
}

.wrap-conrom h1 {
    font-family: var(--primtext);
    font-weight: 700;
    letter-spacing: 1px;
    font-size: 35px;
    line-height: 45px;
    margin-bottom: 20px;
}

.wrap-conrom h2 {
    font-family: var(--subtext);
    font-weight: 400;
    letter-spacing: 0px;
    font-size: 35px;
    line-height: 45px;
    margin-bottom: 25px;
}

.wrap-conrom .title p {
    font-family: var(--subtext);
    margin-bottom: 0px;
    font-size: 18px;
    color: #333;
}

.wrap-conrom .content li i {
   color: var(--color2);
}

.wrap-conrom .content {
    position: relative;
    padding-bottom: 25px;
    border-bottom: 1px solid #ddd;
    margin-bottom: 25px;
}

.wrap-conrom .content p {
    font-family: var(--subtext);
    line-height: 30px;
    font-size: 16px;
    color: #575757;
    font-weight: 300;
    letter-spacing: .3px;
}

.wrap-conrom .content li {
    font-family: var(--subtext);
    margin-bottom: 5px;
    line-height: 40px;
    color: #333;
    font-size: 16px;
}

/* Book */

.wrap-booking {
    position: relative;
    border: 1px solid #ddd;
    padding: 40px 45px;
}

.wrap-booking .price-main {

}
.wrap-booking .price-atas {
    font-family: var(--subtext);
    display: block;
    margin-bottom: 10px;
    font-size: 13px;
}

.wrap-booking .pricemain span {
    font-weight: 400;
    font-size: 13px;
}
.wrap-booking .pricemain {
    border-bottom: 1px solid #ddd;
    padding-bottom: 20px;
    margin-bottom: 25px;
    font-weight: 600;
    font-family: var(--primtext);
    letter-spacing: 1px;
    font-size: 32px;
}

.wrap-booking label {
    font-family: var(--subtext);
}

.make-me-sticky {
      position: -webkit-sticky;
      position: sticky;
      top: 10%;
      padding: 0 15px;
}

@media (min-width: 768px) {
    .sidebar-item {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
}

@media (max-width: 768px) {
    .make-me-sticky { position: relative; }

    .sidebar-item { margin-bottom: 40px; }

    .header-body { background: var(--color2) !important; }
}

.facilities ul {
    list-style: none;
    padding-left: 0;
}

.facilities ul li {
    display: inline-flex;
    margin-right: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    align-items: center;
    padding: 10px 20px;

    margin-bottom: 13px !important;
    font-size: 17px;
}

.include {
    flex-wrap: wrap;
    color: #333;
    font-weight: 300;
    font-family: var(--subtext);
    letter-spacing: .3px;
}
.include i {
    color: var(--colors);
}

.facilities ul li i { color:var(--colors); }

h1,h2,h3,h4,h5,h6 { font-family: var(--subtext); letter-spacing:0px; }

.row.amenfa p {
    font-size: 16px;
}

.row.amenfa i {
    color: var(--color2);
}

@media (max-width: 768px) {
    .row.amenfa p {
        font-size: 15px;
        margin-bottom: 10px;
    }

    .wrap-booking {
        padding: 40px 25px;
    }
}

</style>

<section class="slick-margin">
    <div class="slick-cent22">
        <div class="wrap-resort wow fadeIn" data-wow-duration="2s">
            <img class="img-fluid" alt="<?= $data->result->title ?>" src="<?= $data->result->img_cover_url ?>">
        </div>
        <?php $i=1; foreach ($data->images as $img): ?>
            <div class="wrap-resort wow fadeIn" data-wow-duration="2s">
                <img class="img-fluid" alt="<?= $data->result->title ?>" src="<?= $img->url ?>">
            </div>
        <?php $i++; endforeach ?>
    </div>
</section>

<section class="py-5 wow fadeIn" data-wow-duration='2s'>
    <div class="container conrom">
        <div class="row">
            <div class="col-md-8">
                <div class="wrap-conrom">
                    <div class="title">
                        <span>Kuber Bali Adventure</span>
                        <h1><?= $data->result->title ?></h1>

                        <?php if ($data->cat_data->id != '6658' && $data->cat_data->id != '6659' ): ?>
                        <div class="d-flex include amenfa">
                            <div class="box mx-3">
                                <i class="fa-solid fa-user mr-1"></i> Instruction
                            </div>
                            <div class="box mx-3">
                                <i class="fa-solid fa-utensils mr-1"></i> Lunch
                            </div>
                            <div class="box mx-3">
                                <i class="fa-solid fa-wine-glass mr-1"></i> Drinks
                            </div>
                            <div class="box mx-3">
                                <i class="fa-solid fa-user-shield mr-1"></i> Equipment
                            </div>
                            <div class="box mx-3">
                                <i class="fa-solid fa-shower mr-1"></i> Towel & Shower
                            </div>
                        </div>
                        <?php endif ?>

                    </div>

                    <div class="content">
                        <?= $data->result->content ?>
                    </div>

               <!--  <?php if (!empty($data->addon_contents)): ?>
                    <?php $i=1; foreach ($data->addon_contents as $items): ?>
                        <div class="content facilities">
                            <h2><?= $items->name ?></h2>
                            <?= $items->content ?>
                        </div>
                    <?php $i++; endforeach ?>
                <?php endif ?> -->
                   
                </div>
            </div>

            <div class="col-md-4">
                 <div class="sidebar-item">
                    <div class="make-me-sticky">

                        <div class="wrap-booking">
                            <span class="price-atas">Explore Bali, Pure Adrenaline</span>
                            <h3 class="pricemain">Reservation Form</h3>

                            <?= $func->load('booking_form2') ?>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php endif; ?>

<?= $func->load('home/home_why2') ?>

<?= $func->load('home/home_faq') ?>