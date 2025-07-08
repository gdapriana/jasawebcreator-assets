<style type="text/css">
  
.slideshow {
  position: relative;
  font-family: var(--primtext);
  z-index: 1;
  overflow: hidden;
}

.slider .item {
  height: 100%;
  position: relative;
  z-index: 1;
  background: #000;
}

.slider .item:after {
    position: absolute;
    content: '';
    bottom: 0;
    left: 0;
    right: 0;
    height: 30%;
    transform: rotate(180deg);
    background: linear-gradient(180deg, #000000 -50%, rgba(0, 0, 0, 0) 100%);
}

.slider .item:before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    right: 0;
    height: 30%;
    z-index: 10;
    background: linear-gradient(180deg, #000000 -50%, rgba(0, 0, 0, 0) 100%);
}

.img-slide {
  width: 100%;
  height: 100vh;
  filter: brightness(.8);
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
    padding: 0 8%;
    z-index: 100;
}

.slider-tt h1 {
    font-family: var(--primtext);
    color: white;
    font-weight: 500;
    letter-spacing: 0px;
    text-align: left;
    text-transform: capitalize;
}

.slider-tt .sp-slide {
    text-transform: uppercase;
    font-family: var(--subtext);
    color: #fff;
    text-align: center;
    display: inline-block;
    font-weight: 300;
}

@media (min-width: 768px) {
  .slider-tt h1 {
      font-size: 50px;
      line-height: 60px;
      margin-bottom: 15px;
  }

  .slider-tt .sp-slide {
      font-size: 16px;
      letter-spacing: 1px;
      margin-bottom: 15px;
  }
}

@media (min-width: 1280px) {
  .slider-tt h1 {
      font-size: 55px;
      line-height: 65px;
      margin-bottom: 15px;
  }

  .slider-tt .sp-slide {
      font-size: 16px;
      letter-spacing: 1px;
      margin-bottom: 15px;
  }
}

@media (max-width: 768px) {
  .img-slide {
    height: 38vh;
    opacity: 1;

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
        text-align: center;
        font-size: 30px;
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

<!-- <div class="slideshow">
  <div class="slider">

    <?php foreach ($item->data as $slide): ?>
      <div class="item">
        <img alt="img-slider" class="img-slide" src="<?= $slide->img ?>"/>
      </div>
    <?php endforeach ?>
  </div>

    <div class="slider-tt animate-items wow fadeIn d-none d-md-block" data-wow-duration="2s" data-wow-delay='0.5s'>
      <span class="sp-slide">4-Star Resort</span>
      <h1>
        Luxury Escape at <br>Sense Canggu Beach
      </h1>
    
    </div>

</div> -->


<style>
    ._slider-root {
        height: 100vh;
        width: 100%;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
    }

    ._slider-root ._slider-content {
        z-index: 3;
        height: 100%;
        width: 100%;
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 2rem;
    }

     ._slider-root ._slider-content * {
        padding: 0;
        margin: 0;
        font-family: var(--primtext);
        color: white;
        text-align: center;        
        letter-spacing: 0;
     }

    ._slider-root ._slider-content ._slider-title-box, ._slider-root ._slider-content ._slider-span-box {
        margin-top: 2rem;
        overflow: hidden;
        padding: 1px 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    ._slider-root ._slider-content ._slider-title {
        text-transform: uppercase;
        font-size: 2rem;
        font-weight: 700;
        transform: translateY(120%);
     }

    ._slider-root ._slider-content ._slider-span {
        font-size: 1.4rem;
        transform: translateY(140%);
     }

    ._slider-root ._slider-content ._slider-cta {
        font-size: 1.4rem;
        margin-top: 3rem;
        background-color: var(--colors);
        font-family: var(--subtext);
        padding: 1.2rem 2rem;
     }

     @media (min-width: 768px) {
        ._slider-root ._slider-content ._slider-title {
            font-size: 4rem;
        }
        ._slider-root ._slider-content ._slider-span {
            font-size: 2rem;
        }
     }

    ._slider-root ._slider-overlay {
        z-index: 2;
        height: 100%;
        width: 100%;
        position: absolute;
        object-fit: cover;
        background-color: rgba(0, 0, 0, 0.5)
    }
    ._slider-root ._slider-background {
        z-index: 1;
        height: 100%;
        width: 100%;
        position: absolute;
        object-fit: cover;
    }

</style>


<div class="_slider-root">
    <div class="_slider-content">
        <div class="_slider-span-box">
            <span class="_slider-span">CV Taksu Bali</span>
        </div>
        <div class="_slider-title-box">
            <h1 class="_slider-title">Bringing Balinese Art to Life</h1>
        </div>
        <a class="_slider-cta" href="#">Explore Our Projects</a>
    </div>
    <div class="_slider-overlay"></div>
    <?php foreach ($item->data as $slide): ?>
        <img alt="img-slider" class="_slider-background" src="<?= $slide->img ?>"/>
    <?php endforeach ?>
</div>


<script>
document.addEventListener("DOMContentLoaded", () => {
    const easing = [0.19, 1, 0.22, 1]
    const sliderRoot = document.querySelector("._slider-root")
    const sliderOverlay = document.querySelector("._slider-root ._slider-overlay")
    const sliderBackground = document.querySelector("._slider-root ._slider-background")
    const sliderContent = document.querySelector("._slider-root ._slider-content")
    const sliderTitleBox = document.querySelector("._slider-root ._slider-title-box")
    const sliderTitle = document.querySelector("._slider-root ._slider-title")
    const sliderSpanBox = document.querySelector("._slider-root ._slider-span-box")
    const sliderSpan = document.querySelector("._slider-root ._slider-span")
    const sliderCta = document.querySelector("._slider-root ._slider-cta")

    animate(sliderTitle, { y: ["120%", 0] }, { delay: 1.2, duration: 1.5, ease: easing })
    animate(sliderSpan, { y: ["140%", 0] }, { delay: 1, duration: 1.5, ease: easing })
    animate(sliderOverlay, { opacity: [0, 1] }, { duration: 2, ease: easing })

    scroll(animate(sliderTitleBox, { y: [-100, 100] }, { ease: "linear" }), {
        target: sliderTitleBox,
    })
    scroll(animate(sliderSpanBox, { y: [-150, 150] }, { ease: "linear" }), {
        target: sliderSpanBox,
    })
    scroll(animate(sliderCta, { y: [-75, 75] }, { ease: "linear" }), {
        target: sliderCta,
    })
    scroll(animate(sliderBackground, { y: [0, 500] }, { ease: "linear" }))
})
</script>
