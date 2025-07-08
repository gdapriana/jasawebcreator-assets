<style type="text/css">
  
.slideshow {
  position: relative;
  z-index: 1;
  height: auto;
  overflow: hidden;
}


.slider .item {
  height: auto;
  position: relative;
  z-index: 1;
  background: #000;
}

.slider .item:before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    right: 0;
    height: 250px;
    background: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
    opacity: 0.4;
}

.slider .item:after {
    position: absolute;
    content: '';
    bottom: 0;
    left: 0;
    right: 0;
    height: 350px;
    transform: rotate(180deg);
    background: linear-gradient(180deg, rgb(0 0 0) 0%, rgba(0, 0, 0, 0) 100%);
    opacity: 0.7;
}      

/* Default height for 100% zoom */
.img-slide {
    height: 100vh;
    width: 100%;
    object-fit: cover;
    object-position: center;
    transition: height 0.3s ease; /* Smooth transition for height changes */
}

/* Zoom detection - Adjust height based on width */
@media (min-width: 1024px) {
    .img-slide {
        height: 120vh; /* Increase height for 110% zoom */
    }
}

@media (min-width: 1300px) {
    .img-slide {
        height: 105vh; /* Increase height for 120% zoom */
    }
}

@media (min-width: 1400px) {
    .img-slide {
        height: 100vh; /* Increase height for higher zoom levels */
    }
}



.slider-tt {
    position: absolute;
    bottom: 5%;
    left: 0;
    right: 0;
    text-align: left;
    margin: auto;
    z-index: 100;
}

@media (min-width: 768px) {
    .slider-tt { padding-left: 7%; padding-right: 7% }
}

@media ( max-width: 768px ) {
   .slider-tt { padding-left: 5%; padding-right: 5%; display:none; }
}

.slider-tt h1 {
    font-family: var(--primtext);
    color: #fff;
    font-weight: 600;
    letter-spacing: 0px;
    font-size: 45px;
    line-height: 55px;
    margin-bottom: 12px;
    text-transform: uppercase;
    position: relative;
}

.slider-tt h1 span { position:relative; }

.slider-tt h1 span:before {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    bottom: 10%;
    height: 15px;
    width: 100%;
    z-index: -1;
    background: #dfb704fa;
}

.slider-tt .span-atas {
    font-family: var(--subtext);
    display: block;
    width: max-content;
    border-radius: 100px;
    color: white;
    font-weight: 400;
    font-size: 15px;
    letter-spacing: 1px;
    margin-bottom: 15px;
    text-transform: uppercase;
}

.slider-tt p {
    font-family: var(--subtext);
    font-size: 16px;
    line-height: 30px;
    font-weight: 400;
    color: #f1f1f1;
}

.slider .w-md-80 { width:50%; }

.slider .form-air { width:40%; }


@media (max-width: 768px) {
  .img-slide {
        height: 25vh;
        opacity: 1;
        margin-top: 90px;
    }

    .slider .item:after { height:250px; }

    .slider .item:before { height:250px; }

  .slideshow {
        height: 100%;
        margin-top: 0px;
        padding-top: 0;
    }

  .slider-tt {
    bottom: 10%;
    text-align: center;
  }

  .slider-tt p { font-size: 16px; font-weight:400 !important; }
}
.slider .btn-slide {
    color: var(--color2);
    background-color: white;
    padding: 10px 30px;
    font-weight: 600;
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 1px;
    border-radius: 100px;
    overflow: hidden;
    font-family: var(--primtext);
    transition: all ease 500ms;
}

.slider .btn-slide:hover {
    background: var(--colors);
    color: white;
}
    
.ss-slider .slide-arrow {
  position: absolute;
  bottom: 10% !important;
  margin-top: -15px;
}
.ss-slider .prev-arrow {
    right: 11%;
    z-index: 1;
}

.ss-slider .next-arrow {
    right: 7%;
    z-index: 1;
}

@media (max-width: 768px) {

  .ss-slider button { transform: scale(1.2); }

  .ss-slider .slide-arrow { top: 45%; }

  .ss-slider .prev-arrow{
      left: 4%;
      z-index: 1;
    }

    .ss-slider .next-arrow {
        right: 4%;
        z-index: 1;
    }
}
    
@media (max-width: 768px) {

    .slider .slider-tt h1 {
        font-size: 28px;
        line-height: 40px;
        margin-top: 20px;
        margin-bottom: 5px;
        width: auto;
    }

    .slider .btn-slide {
        padding: 7px 20px;
        font-size: 14px;
    }

    .slider .slider-tt span {
       display: none;
   }

   .slider .item:before, .slider .item:after {
        display:none;
    }

}  
</style>

<!--<h1 class="invisible d-none">Kewirausahaan Muda di Kota Seni Gianyar</h1>-->

<div class="slideshow wow fadeIn" data-wow-duration="2s">
  <div class="slider ss-slider">

    <?php foreach ($item->data as $slide): ?>
      <div class="item">
        <img alt="img-slider" class="img-slide" src="<?= $slide->img ?>"/>

       
          <div class="slider-tt wow fadeIn" data-wow-duration="2s" data-wow-delay='0.5s'>
            <div class="d-sm-flex justify-content-between align-items-end">
              <div class="left-txt w-md-80">
                <span class="span-atas">Succes Trans Bali</span>
                <h1>Reliable Bali Airport Transfer Services <span>Since 2002</span></h1>
                <p>Book your hassle-free airport transfer with Success Trans Bali. Safe, affordable, and premium service at your fingertips.</p>
              </div>
              <div class="form-air">
                <div class="form-style">
                    <?= $func->load('booking_form2') ?>
                </div>
              </div>
            </div>
          </div>
       
        
      </div>
    <?php endforeach ?>
  

  </div>
</div>

<section class="d-block d-md-none d-formandro">
    <h1>Reliable Bali Airport Transfer Services <span>Since 2002</span></h1>
    <p>Book your hassle-free airport transfer with Success Trans Bali. Safe, affordable, and premium service at your fingertips.</p>

    <?= $func->load('booking_form3') ?>
</section>