<?php $title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle_2 = $item->setting->subtitle2; ?>

<style type="text/css">
.wrap-profil {
    position: relative;
    font-family: var(--primtext);
}

.ss-arrow .slide-arrow {cursor: pointer;}

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
    text-transform: uppercase;
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

.tipro hr {
    height: 1.4px;
    background: var(--color2);
    width: 400px;
    margin: auto;
    margin-top: -11px;
}

.wrap-profil p {
    font-size: 16px;
    text-align: justify;
    font-family: var(--subtext);
    line-height: 30px;
    color: #555;
    margin-bottom: 20px;
}
@media (max-width: 768px) {
    .wrap-profil h2 {
        font-size: 30px;
        line-height: 38px;
        margin-bottom: 20px;
        margin-top: 27px;
    }

    .tipro .tit {
        font-size: 13px;
    }

    .wrap-profil p {
        font-size: 14px;
        line-height: 27px;
        text-align: center;
    }

    .tipro hr { width:300px; }

    .pad6rem { padding:3rem 0px; }

    .wrap-profil { padding:0px 25px; }

    .product { padding:0px 10px }
}
/* Review */

.wrap-review {
    padding: 3rem;
    position: relative;
    text-align: center;
    background-color: white;
    border-radius: 0px;
    height: 410px;
    margin: 10px;
    background: white;
    clip-path: polygon(7% 0%, 100% 0, 100% 90%, 92% 100%, 0 100%, 0% 10%);
}

.wrap-review p {
    font-family: var(--subtext);
    color: #000;
    font-size: 16px;
    line-height: 32px;
    font-weight: 400;
    letter-spacing: 0.1px;
}



.slide-fix {
    padding-top: 10px;
}

.wrap-why {
    padding: 35px 18px 28px;
    background: white;
    box-shadow: 0 0 87px 5px rgb(220 230 237 / 75%);
    border-radius: 5px;
    margin-bottom: 15px;
}

.list-stars i {
    color: #ffe000;
    margin: 5px;
    font-size: 15px;
}

.list-stars {
    position: relative;
    margin-bottom: 30px;
}

.from-reveiw a {
    color: var(--colors);
    font-weight: 600;
}
.from-reveiw p {
    font-size: 14px;
}
.from-reveiw img {
    height: 50px;
    margin: auto;
    margin-bottom: 13px;
}

.from-reveiw .gole {
    height: 40px;
}

.from-reveiw {
    position: absolute;
    font-family: var(--text);
    text-align: center;
    left: 0;
    right: 0;
    bottom: 3%;
}

.btn-full {
    background: var(--colors);
    color: white;
    font-family: var(--primtext);
    padding: 10px 25px;
    font-size: 15px;
    border-radius: 0;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    transition: all ease 500ms;
}
.btn-full:hover {
    background: var(--color2);
    color: #fff;
}

@media (max-width: 768px) {

  .wrap-review p {
    color: #555;
    font-size: 13px;
    line-height: 27px;
    font-weight: 400;
    letter-spacing: 0.1px;
  }

  .wrap-review { padding:2rem; }

  

}

.revrev .slick-list { overflow:unset !important; }

.patern {
    position: absolute;
    left: 0;
    z-index: 3;
}
.patern.top {
    top: -1px;
    transform: rotate(180deg);
}
.patern.bottom {
    bottom: -1px;
}
.background {
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    /* opacity: .7; */
    filter: brightness(.7);
    position: absolute;
    background-size: cover;
    background-position: center;
    background-image: url(https://jwc.gotra-resources.my.id/web-upload/1724664904-26-08-2024-N3Bb0nLmP4TuDhoWRUtkpdJfyzlvHaOI.webp);
}
</style>

<section class="pad6rem" style="position:relative">
    <img class="patern w-100 top" src="https://jwc.gotra-resources.my.id/web-upload/1725527048-05-09-2024-patc0TP4528VGhEq1MH9dWNbnIzurigU.png" alt="Patern">
    <img class="patern w-100 bottom" src="https://jwc.gotra-resources.my.id/web-upload/1725527048-05-09-2024-patc0TP4528VGhEq1MH9dWNbnIzurigU.png" alt="Patern">
    <div class="background w-100"></div>
    <div class="container-global wow fadeIn" wow-data-ruation="2s" style="position: relative; z-index: 3">

        <div class="text-center wrap-profil tirev">

            <div class="tipro text-center">
               <span class="tit">Testimonials</span>
            </div>

            <h2>See What Our Customer Say</h2>
        </div>


        <div class="review-slide revrev ss-arrow">
        <?php sort($item->data); foreach ($item->data as $items): ?>
            <div class="wrap-slidelide">
                
                <div class="wrap-review">
                    <p>“<?= $items->message ?>”</p>

                    <div class="list-stars">
                        <i class="fas fa-star mr-1"></i>
                        <i class="fas fa-star mr-1"></i>
                        <i class="fas fa-star mr-1"></i>
                        <i class="fas fa-star mr-1"></i>
                        <i class="fas fa-star mr-1"></i>
                    </div>

                    <div class="from-reveiw">
                        <img class="img-fluid" src="https://jwc.gotra-resources.my.id/web-upload/1720689610-11-07-2024-EPbzukNpwDAvCQXFHLl0Te1sJdfc5MO7.webp" alt="Tripadvisor Logo">
                        <p><b><?= $items->guest ?></b> - Review from <a href="https://www.tripadvisor.com/Attraction_Review-g608492-d28026639-Reviews-Kuber_Bali_Adventure-Payangan_Gianyar_Regency_Bali.html">Google</a></p>

                    </div>

                </div>

            </div>
        <?php endforeach ?>
        </div>

        <div class="text-center mt-5 mb-3 rmr">
            <p style="font-family: var(--subtext); color: #fff;">Read more review about us on :</p>

            <a class="btn btn-full mr-2" href="https://www.tripadvisor.com/Attraction_Review-g608492-d28026639-Reviews-Kuber_Bali_Adventure-Payangan_Gianyar_Regency_Bali.html">Our Tripadvisor</a>

            <a class="btn btn-full" href="https://maps.app.goo.gl/K768EfmjoBffbTEE8">Our Google Review</a>
        </div>

    </div>
</section>