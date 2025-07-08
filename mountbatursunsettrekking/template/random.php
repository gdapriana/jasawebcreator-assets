<style>
  .wrap-profile {
    position: relative;
    font-family: var(--primtext);
    padding-right: 30px;
  }

  .backgr {
      position: absolute;
      z-index: 0;
      width: 60%;
      left: 20%;
      top: 0;
      transform: translate(0%, -10%);
  }

  .wrap-profile span {
    color: var(--colors);
    text-transform: capitalize;
    font-weight: 500;
    font-family: 'Lobster';
    display: block;
    letter-spacing: 1px;
    font-size: 19px;
    margin-bottom: 15px;
  }

.wrap-profile h1 {
    font-size: 35px;
    line-height: 45px;
    color: #000;
    font-weight: 600;
    margin-bottom: 20px;
    letter-spacing: .3px;
    text-transform: unset;
    font-family: var(--primtext);
    position: relative;
    z-index: 1;
}

  .wrap-profile p {
    font-size: 16px;
    line-height: 30px;
    z-index: 1;
    color: #333;
    position: relative;
}

.btn-profile {
    background: var(--colors);
    color: #fff;
    font-family: var(--primtext);
    border: 1px solid;
    text-transform: uppercase;
    padding: 12px 30px;
    font-size: 15px;
    letter-spacing: 1px;
    font-weight: 600;
    margin-top: 15px;
    transition: all ease 500ms;
}
.pro-img img {
  aspect-ratio: 4/3;
  object-fit: cover;
  object-position: center;
}

.btn-profile:hover { background:#1a1a1a; color:white; }

@media (max-width: 768px) {
    .wrap-profile h1 {
        font-size: 25px;
        line-height: 40px;
    }

  .wrap-profile { padding: 0; }

  .wrap-profile p {
    font-size: 15px;
    line-height: 27px;
  }

  .btn-profile {
      padding: 11px 25px;
      font-size: 13px;
  }

  .pro-img button {
      transform: scale(1);
  }

  .pro-img .slide-arrow {
      top: 40% !important;
  }
}
</style>

<section class="pad6rem mt-3 mt-md-0">
  <div class="container-global">
    
    <div class="row">
      <div class="col-md-6">
        <div class="wrap-profile">
          <span>About Us</span>
          <h1><?= $data->company->company_name ?></h1>

          <div class="pro-img ss-arrow d-block d-md-none my-4">
            <div><img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1725085021-31-08-2024-kcnRGKJdBYOw1eo48jm3bMVZAy6N7CLx.webp" alt="Jero Tumbuk"></div>

            <div><img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1729770820-24-10-2024-XvD4QSTEnsuBVqMaOtC89mpoZH3l1hL7.webp" alt="Jero Tumbuk"></div>

            <div><img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1729770819-24-10-2024-hk2irlQ0uXTy6zAJ9WVFK8cRgPp5MvqD.webp" alt="Jero Tumbuk"></div>

            <div><img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1724996128-30-08-2024-HLF9EX4yQVhkD0zsg2Gj5fAKbWdOZ8p7.webp" alt="Jero Tumbuk"></div>
          </div>

          <?= $data->company->company_desc ?>
          <a class="btn btn-profile" href="https://jerotumbuk.com/coming-soon">Read More<i class="fas fa-arrow-right ml-2"></i></a>

          <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1724752420-27-08-2024-pxefOckyAMX6HRvuhnEzVZFCwbs7GK5D.png" alt="Get Involved Become a Volunteer" class="backgr">
        </div>
      </div>

      <div class="col-md-6">
        
        <div class="pro-img ss-arrow d-none d-md-block">
          <div><img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1725085021-31-08-2024-kcnRGKJdBYOw1eo48jm3bMVZAy6N7CLx.webp" alt="Jero Tumbuk"></div>

            <div><img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1729770820-24-10-2024-XvD4QSTEnsuBVqMaOtC89mpoZH3l1hL7.webp" alt="Jero Tumbuk"></div>

            <div><img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1729770819-24-10-2024-hk2irlQ0uXTy6zAJ9WVFK8cRgPp5MvqD.webp" alt="Jero Tumbuk"></div>

            <div><img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1724996128-30-08-2024-HLF9EX4yQVhkD0zsg2Gj5fAKbWdOZ8p7.webp" alt="Jero Tumbuk"></div>
        </div>

      </div>
    </div>

  </div>
</section>