<style>

.profile {
    position: relative;
}
.profile .tag-ats {
    color: var(--color2);
    font-family: var(--subtext);
    font-size: 15px;
    line-height: 20px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 5px;
    display: block;
}

.profile h2 {
    color: var(--color2);
    font-family: var(--subtext);
    font-size: 40px;
    line-height: 50px;
    font-weight: 500;
    text-transform: capitalize;
    letter-spacing: 1px;
    margin-bottom: 20px;
}
.profile h2 span {
    font-size: 45px;
    letter-spacing: 0px;
    line-height: 50px;
    font-weight: 600;
    font-style: italic;
    color: var(--colors);
    text-shadow: 2px 2px 5px #00000010;
    font-family: var(--primtext);
}

.profile p {
    color: #5e5e5e;
    font-family: var(--subtext);
    font-size: 16px;
    font-weight: 400;
    line-height: 28px;
    margin-bottom: 20px;
    letter-spacing: 0.5px;
}
.profile p span, 
.profile p strong, 
.profile p b {
  color: var(--color2);
  font-weight: 600;
}

.profile .btn {
    border-radius: 40px;
    color: #fff;
    position: relative;
    background: var(--colors);
    font-family: var(--subtext);
    font-size: 15px;
    font-weight: 600;
    line-height: 25px;
    margin-top: 10px;
    padding: .6rem 2rem;
    letter-spacing: .5px;
    transition: ease-in-out .25s;
    align-item: center;
    overflow: hidden;

}
.profile .btn .shadow {
    position: absolute;
    left: -100%;
    top: -10%;
    width: 100%;
    height: 20px;
    opacity: .8;
    transition-delay: .2s;
    background-color: #ffffff;
    filter: blur(20px);
    transform: rotate(-45deg);
}
.profile .btn:hover .shadow {
    right: 110%;
    transition-delay: .2s;
    transition: .5s;
    transform: translateX(200%) rotate(-45deg);
}
.profile .btn:hover {
    background: var(--color2);
    color: #fff;
}
.profile .about-img {
  height: 500px;
  object-fit: cover;
}
.profile .counters strong {
  font-size: 45px;
  color: var(--color2);
  font-weight: 600;
  margin-bottom: 8px;
  text-align: left;
}
.profile .counters label {
  font-size: 17px;
  color: #3f3f3f;
  text-align: left;
}

@media screen and (max-width: 768px) {

  .profile h2 {
      text-align: center;
      margin-bottom: 10px;
      font-size: 25px;
      line-height: 35px;
  }

    .profile h2 span {
        text-align: center;
        font-size: 30px;
        line-height: 40px;
    }

  .profile .about-img { height:150px; }

  .profile .tag-ats {
    text-align: center;
    font-size: 12px;
    line-height: 25px;
  }
  .profile p {
    font-size: 14px;
    line-height: 28px;
    text-align: center;
  }
  .profile .counters label {
        font-size: 12px;
        font-weight: 400;
        font-family: var(--subtext);
        text-align: center;
    }
      .profile .counters strong {
        font-size: 23px;
        font-family: var(--subtext);
        text-align: center;
        margin-bottom: 0px;
        line-height: 35px;
    }
  
}
</style>

<section class="pad6rem profile" style="position: relative">
  <div class="container-global">
    <div class="row">
      <div class="col-md-4 mb-3">
        <div class="pr-md-4 text-center text-md-left">
          <span class="tag-ats">About Us</span>
          <h2 class="title-profile">
            <?= $data->company->company_name ?>
          </h2>
          <a href="" class="btn btnprofile">
            <div class="shadow"></div>
            More About Us
          </a>
        </div>
      </div>

      <div class="col-md-8 mb-3">

        <?= $data->company->company_desc ?>
        <hr>
        <div class="row counters" style="min-width: 60%;">
        <div class="col-4 col-lg-4 mb-4">
          <div class="counter">
            <strong data-to="3000" data-append="+">0</strong>
            <label>Guest Are Served</label>
          </div>
        </div>
        <div class="col-4 col-lg-4 mb-4">
          <div class="counter">
            <strong data-to="200" data-append="+">0</strong>
            <label>Positive Reviews</label>
          </div>
        </div>
        <div class="col-4 col-lg-4 mb-4 mb-sm-0">
          <div class="counter">
            <strong data-to="4" data-append="+">0</strong>
            <label>Comfortable Rooms</label>
          </div>
        </div>
      </div>

      </div>

      <div class="col-md-5 col-6">
        <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1733309773-04-12-2024-BW3PYE4GULJ9t1Spl7Q5ZjHsbVhOv2Mc.webp" class="w-100 about-img" alt="about us" />
      </div>

      <div class="col-md-7 col-6">
        <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1733309774-04-12-2024-WcLsrMeEqkST09wpaRPH3AzObnvCx25u.jpg" class="w-100 about-img" alt="about us" />
      </div>
    </div>
  </div>
    
</section>



