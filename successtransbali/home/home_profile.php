<style>

.profile {
    position: relative;
}

.profile .tag-ats {
    color: var(--color2);
    font-family: var(--subtext);
    font-size: 14px;
    line-height: 20px;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 8px;
    display: block;
}

.profile h2 {
    color: #000;
    font-family: var(--subtext);
    font-size: 40px;
    line-height: 50px;
    font-weight: 500;
    text-transform: unset;
    letter-spacing: 0px;
    margin-bottom: 15px;
}

.profile p {
    color: #5e5e5e;
    font-family: var(--subtext);
    font-size: 15px;
    font-weight: 400;
    line-height: 28px;
    margin-bottom: 20px;
    letter-spacing: 0px;
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
  
}
</style>

<section class="pad6rem profile" style="position: relative">
  <div class="container-global">
    <div class="row">
      <div class="col-md-5 mb-3">
        <div class="pr-md-4 text-center text-md-left">
          <span class="tag-ats">Why Invest in Pupuan</span>
          <h2 class="title-profile">
            Discover the untapped potential of Pupuan
          </h2>
          <a href="#" class="btn btnprofile">
            <div class="shadow"></div>
            About Pupuan
            <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>

      <div class="col-md-7 mb-3">

        <?= $data->company->company_desc ?>
        
      </div>

      <div class="col-md-5 col-6">
        <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1735203968-26-12-2024-ayigcFeQHhMf7Ps58DKqpVrxXUdYnkEl.webp" class="w-100 about-img" alt="about us" />
      </div>

      <div class="col-md-7 col-6">
        <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1735203517-26-12-2024-9gAREOBrFCk7Ds2m1UXMdwh0ZSn65Jcv.webp" class="w-100 about-img" alt="about us" />
      </div>
    </div>
  </div>
    
</section>



