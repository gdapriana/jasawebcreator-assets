<style type="text/css">
  .slider {
    overflow-x: hidden;
    position: relative;
    font-family: var(--primtext) !important;
  }

  .slider .background {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 1;
    object-fit: cover;
    filter: brightness(.5);
  }

  .slider .container-global {
    z-index: 10;
    min-height: 110vh;
    position: relative;
    height: 100%;
    width: 100%;
  }

  .slider h1 {
    font-size: 45px;
    line-height: 55px;
    font-weight: 800;
    margin-bottom: 1.5rem;
    letter-spacing: .5px;
    text-transform: uppercase;
  }

  .slider p {
    font-size: 16px;
    margin-bottom: 25px;
  }

  .slider h5 {
    font-size: 16px;
    margin-bottom: 2rem;
    font-weight: 600;
    letter-spacing: .5px;
  }

  .slider .brush {
    width: 110%;
    position: absolute;
    bottom: -1px;
    left: -2%;
    z-index: 6;
    object-fit: cover;
    object-position: top;
  }

  .slider .box {
    flex-wrap: wrap;
  }

  .slider .item-box {
    max-width: 350px;
  }

  .slider .item-box p {
    font-size: 14px;
    line-height: 17px;
    margin-bottom: 10px;
    margin-top: 10px;
  }

  .slider .box .col-3 {
    border-right: 1px solid #fff;
  }

  .slider .icon {
    gap: 5px;
  }

  @media screen and (max-width: 576px) {

    .slider .container-global {
      min-height: 80vh;
    }

    .slider h1 {
      font-size: 25px;
      line-height: 38px;
      margin-bottom: 10px;
    }

    .slider p {
      font-size: 16px;
      margin-bottom: 15px;
    }

    .slider .box {
      display: none !important;
    }
  }

  ._home-slider-cta {
    color: white;
    font-size: 24px;
    font-weight: bold;
    padding: 1rem 1.4rem;
    background-color: var(--colors);
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    /*transition: all ease-in-out .5s; */
  }

  ._home-slider-cta ._home-slider-cta-overlay {
    background-color: white;
    position: absolute;
    left: 0;
    top: 0;
    width: 0;
    height: 100%;
    z-index: 1;
  }

  ._home-slider-cta:hover {
    color: var(--colors);
  }

  ._home-slider-cta span {
    z-index: 2;
  }
</style>

<div class="slideshow">
  <div class="slider">



    <?php $i = 1;
    foreach ($item->data as $slide): ?>
      <div class="item">
        <img src="<?= $slide->img ?>" alt="Sliders" class="background">
        <!-- <img src="https://jwc.gotra-resources.my.id/web-upload/1741154675-05-03-2025-zAl89uM1w7X3iZhBtOPgd6FDkfxjUHpG.webp" alt="Slider" class="brush"> -->
        <div class="container-global d-flex align-items-center justify-content-center">
          <div class="text">
            <h1 class="text-center _slider-title text-light">
              <?= $slide->title ?>
            </h1>
            <p class="p-sl text-center _slider-subtitle text-light">
              <?= $slide->text ?>
            </p>
            <div class="button d-flex justify-content-center align-items-center">
              <a href="" class="_home-slider-cta">
                <div class="_home-slider-cta-overlay"></div>
                <span>Explore Now <i class="fa-solid fa-chevron-right"></i></span>
              </a>
            </div>


            <!-- <div class="box d-flex justify-content-center align-items-center">
            <div class="item-box m-3 d-flex">
                <div class="col-3 d-flex align-items-center">
                    <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1703532568-26-12-2023-5FhGLykPVvf3o2KlCe60WtTQpsmDYSxb.webp" alt="TripAdvisor" class="w-100">
                </div>
                <div class="col-8">
                    <div class="icon d-flex">
                        <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1703532567-26-12-2023-Vlig9XfMDrPOYeQ0aZnCv3K7pGJTt42s.webp" alt="TripAdvisor">
                        <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1703532567-26-12-2023-Vlig9XfMDrPOYeQ0aZnCv3K7pGJTt42s.webp" alt="TripAdvisor">
                        <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1703532567-26-12-2023-Vlig9XfMDrPOYeQ0aZnCv3K7pGJTt42s.webp" alt="TripAdvisor">
                        <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1703532567-26-12-2023-Vlig9XfMDrPOYeQ0aZnCv3K7pGJTt42s.webp" alt="TripAdvisor">
                        <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1703532567-26-12-2023-Vlig9XfMDrPOYeQ0aZnCv3K7pGJTt42s.webp" alt="TripAdvisor">
                    </div>
                    <p class="text-light">As recommended by 99% of users on TripAdvisor</p>
                </div>
            </div>
            <div class="item-box m-3 d-flex">
                <div class="col-3 d-flex align-items-center">
                    <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1703532565-26-12-2023-2rATWtBn9bHIiExuOozJj365RFS0hqCL.webp" alt="Google" class="w-100">
                </div>
                <div class="col-8">
                    <div class="icon d-flex">
                        <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1703532567-26-12-2023-fHYVOtEoRDylWS2ApXNrLxekC73PqI4K.webp" alt="Star Rating">
                        <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1703532567-26-12-2023-fHYVOtEoRDylWS2ApXNrLxekC73PqI4K.webp" alt="Star Rating">
                        <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1703532567-26-12-2023-fHYVOtEoRDylWS2ApXNrLxekC73PqI4K.webp" alt="Star Rating">
                        <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1703532567-26-12-2023-fHYVOtEoRDylWS2ApXNrLxekC73PqI4K.webp" alt="Star Rating">
                        <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1703532567-26-12-2023-fHYVOtEoRDylWS2ApXNrLxekC73PqI4K.webp" alt="Star Rating">
                    </div>
                    <p class="text-light">As recommended by 99% of users on Google reviews</p>
                </div>
            </div>
          </div> -->
          </div>
        </div>
      </div>
    <?php $i++;
    endforeach ?>


  </div>
</div>