<style type="text/css">
  
.slideshow {
  position: relative;
  font-family: var(--primtext);
  z-index: 1;
  min-height: 100vh;
  overflow: hidden;
}

.slider .item {
  height: 100%;
  position: relative;
  z-index: 1;
  background: #000;
}

/* .slider .item:before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    right: 0;
    height: 180px;
    background: linear-gradient(180deg, var(--color2) 0%, rgba(0, 0, 0, 0) 100%);
    z-index: 2;
} */

.slider .item:after {
    position: absolute;
    content: '';
    bottom: 0;
    left: 0;
    right: 0;
    height: 25%;
    transform: rotate(180deg);
    background: linear-gradient(180deg, #000000 -50%, rgba(0, 0, 0, 0) 100%);
}

.img-slide {
  width: 100%;
  height: 100vh;
  filter: brightness(.6);
  object-fit: cover;
}

.slider-tt {
    position: absolute;
    top: 45%;
    transform: translateY(-50%);
    width: 100%;
    left: 0;
    right: 0;
    text-align: left;
    padding: 0 10%;
    z-index: 100;
}

.slider-tt h1 {
    font-family: var(--primtext);
    color: white;
    font-weight: 500;
    letter-spacing: 0.5px;
    font-size: 50px;
    line-height: 60px;
    margin-bottom: 15px;
    text-align: left;
    text-transform: uppercase;
}

.slider-tt .sp-slide {
    text-transform: uppercase;
    font-family: var(--subtext);
    color: var(--colors);
    font-size: 16px;
    text-align: center;
    display: inline-block;
    letter-spacing: 1px;
    font-weight: 300;
    margin-bottom: 15px;
}


@media (max-width: 768px) {
  .img-slide {
    height: 100vh;
    opacity: 1;
    filter: brightness(.5);

  }
  .slideshow { height: 100%; margin-top:0; }

    .slider-tt {
        bottom: 0%;
        padding: 0 5%;
        text-align: center;
    }

  .slider-tt h1 span {
        font-size: 33px;
        line-height: 33px;
    }

    .slider-tt h1 {
        font-size: 25px;
        line-height: 35px;
        margin-bottom: 15px;
    }

      .slider-tt p {
        font-size: 14px;
        font-weight: 400 !important;
        padding: 0px 40px;
    }
}

.slick-dots {
    display: flex;
    justify-content: center;
    margin: 0;
    position: absolute;
    bottom: 8%;
    right: 10%;
    z-index: 10;
    padding: 1rem 0;
    list-style-type: none;
}
    
.slick-dots li {
    margin: 0 12px;
}

.slick-dots button {
    display: block;
    width: 11px;
    height: 11px;
    padding: 0;
    
    border: none;
    border-radius: 100%;
    background-color: #ffffff66;
    
    text-indent: -9999px;
}

.slick-dots li.slick-active button {
    background-color: #fff;
}
    
  .slider .col-custom {
    width: 20%;
  }
  
@media (max-width: 768px) {
    .slick-dots { display:none !important; }
    .slider.col-custom {
      width: 100%;
    }
}  
</style>

<!--<h1 class="invisible d-none"><?= $data->web->site_name ?></h1>-->

<div class="slideshow">
  <div class="slider">

    <?php foreach ($item->data as $slide): ?>
      <div class="item">
        <img alt="img-slider" class="img-slide" src="<?= $slide->img ?>"/>
      </div>
    <?php endforeach ?>
  </div>

    <div class="slider-tt animate-items wow fadeIn" data-wow-duration="2s" data-wow-delay='0.5s'>
        <span class="sp-slide">4-Star Resort</span>
        <h1>
          Luxury Escape at <br><span>Sense Canggu Beach</span>
        </h1>

    </div>
    <?= $func->load('home/home_book') ?>

</div>
