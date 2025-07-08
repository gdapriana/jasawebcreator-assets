<style type="text/css">
  
.slideshow {
  position: relative;
  z-index: 1;
  height: 100vh;
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
    height: 250px;
    background: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
    opacity: 1;
} */

.slider .item:after {
    position: absolute;
    content: '';
    bottom: 0;
    left: 0;
    right: 0;
    height: 350px;
    transform: rotate(180deg);
    background: linear-gradient(180deg, rgb(0 0 0) 0%, rgba(0, 0, 0, 0) 100%);
    opacity: 0.5;
}    

.img-slide {
  width: 100%;
  height: 100vh;
  object-fit: cover;
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
   .slider-tt { padding-left: 5%; padding-right: 5% }
}

.slider-tt h2 {
    font-family: var(--subtext);
    color: #fff;
    font-weight: 900;
    letter-spacing: 1px;
    font-size: 45px;
    line-height: 60px;
    margin-bottom: 12px;
    text-transform: uppercase;
}

.slider-tt span {
    font-family: var(--subtext);
    display: block;
    margin-bottom: 15px;
    background: var(--colors);
    width: max-content;
    padding: 6px 23px;
    border-radius: 100px;
    color: white;
    font-weight: 600;
    font-size: 14px;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.slider-tt p {
    font-family: var(--subtext);
    font-size: 17px;
    color: #f1f1f1;
}


@media (max-width: 768px) {
  .img-slide {
        height: 50vh;
        opacity: 1;
        margin-bottom: 12px;
    }

  .slideshow { height: 100%; margin-top:69px; }

  .slider-tt {
    bottom: 10%;
    text-align: center;
  }

  .slider-tt p { font-size: 16px; font-weight:400 !important; display:none; }
}

.ss-slider button {
    margin: 0;
    padding: 0;
    background: white;
    border: 1px solid var(--colors);
    height: 30px;
    width: 30px;
    font-size: 12px;
    transform: scale(1.5);
    color: var(--colors);
    border-radius: 100px;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    transition: all ease 500ms;
}

.ss-slider button:hover {
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

    .slider .slider-tt h2 {
        font-size: 25px;
        line-height: 35px;
    }

    .slider .slider-tt span {
        padding: 4px 20px;
        font-size: 11px;
        margin: auto;
        margin-bottom: 8px;

}  
</style>

<h1 class="invisible d-none">We Aim to Make Your Life Better</h1>

<div class="slideshow wow fadeIn" data-wow-duration="2s">
  <div class="slider ss-slider">

    <?php foreach ($item->data as $slide): ?>
      <div class="item">
        <img alt="img-slider" class="img-slide" src="<?= $slide->img ?>"/>

       
          <div class="slider-tt wow fadeIn" data-wow-duration="2s" data-wow-delay='0.5s'>
            <span>Welcome to Eswen Medica</span>
            <h2>We Aim to Make Your<br>Life Better</h2>
            <p>We are ready 24/7 to provide the best health services</p>
          </div>
       
        
      </div>
    <?php endforeach ?>
  

  </div>
</div>

<style>

.wrap-inform h3 {
    font-weight: 700;
    font-size: 15px;
    letter-spacing: 1px;
    align-items: center;
    display: flex;
    margin-bottom: 23px;
}

.wrap-inform h3 i {
    font-size: 30px;
}

.wrap-inform p {
    color: #333;
    font-size: 16px;
    line-height: 30px;
}

.btn-inform {
    padding: 0;
    font-size: 15px;
    color: #000;
    font-weight: 500;
    position: absolute;
    bottom: 18%;
    transition: all ease 500ms;
}

.btn-inform:hover {
    transition: all ease 500ms;
    color: var(--colors);
    transform: translateY(-3px);
}

.wrap-inform {
    position: relative;
    padding: 50px;
    height: 288px;
    border-radius: 40px;
    font-family: var(--primtext);
}

@media (max-width: 768px) {
    .wrap-inform {
        padding: 30px;
        height: 230px;
        margin-bottom: 20px;
    }
}

</style>

<section class="pad6rem pb-0">
    <div class="container-global concus  wow fadeIn" data-wow-duration="2s">
        
        <div class="row">
            <div class="col-md-3">
                <div class="wrap-inform" style="background: #D6D2F1;">
                    <h3><i class="fa-solid fa-stethoscope mr-4"></i>Our Services</h3>
                    <p>Explore our comprehensive medical services and specialized treatments.</p>
                    <a class="btn btn-inform" href="<?= base_url() ?>category/our-services"><i class="fas fa-arrow-right mr-3"></i>Learn More</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="wrap-inform" style="background: #D7ECE4;">
                    <h3><i class="fa-solid fa-user-md mr-4"></i>Find a Doctor</h3>
                    <p>Search and connect with our experienced and specialized doctors.</p>
                    <a class="btn btn-inform" href="<?= base_url() ?>#doctor"><i class="fas fa-arrow-right mr-3"></i>Learn More</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="wrap-inform" style="background: #C4DCF3;">
                    <h3><i class="fa-solid fa-map-marker-alt mr-4"></i>Our Locations</h3>
                    <p>Find our clinic locations and get directions easily.</p>
                    <a class="btn btn-inform" href="https://maps.app.goo.gl/n11KoPhudqcPHSyx5"><i class="fas fa-arrow-right mr-3"></i>Learn More</a>
                </div>
            </div>

            <div class="col-md-3">
                <div class="wrap-inform" style="background: #F2DDD9;">
                    <h3><i class="fa-solid fa-phone-alt mr-4"></i>Connect With Us</h3>
                    <p>Reach out to us for appointments and inquiries.</p>
                    <a class="btn btn-inform" href="<?= base_url() ?>contact"><i class="fas fa-arrow-right mr-3"></i>Learn More</a>
                </div>
            </div>
        </div>


    </div>
</section>