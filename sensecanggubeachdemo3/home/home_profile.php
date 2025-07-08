<style>

.profile {
    position: relative;
}
.profile p span, 
.profile p strong, 
.profile p b {
  color: var(--color2);
  font-weight: 600;
}
.about .title-general p {
  max-width: none;
}
.about .btn {
    border-radius: 0px;
    color: #fff;
    position: relative;
    background: var(--colors);
    font-family: var(--subtext);
    font-size: 15px;
    font-weight: 500;
    line-height: 25px;
    margin-top: 10px;
    padding: .6rem 2rem;
    letter-spacing: .5px;
    transition: ease-in-out .25s;
    align-item: center;
    overflow: hidden;

}
.about .btn .shadow {
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
.about .btn:hover .shadow {
    right: 110%;
    transition-delay: .2s;
    transition: .5s;
    transform: translateX(200%) rotate(-45deg);
}
.about .btn:hover {
    background: var(--color2);
    color: #fff;
}

.about .ctr img {
  /*transform: translateY(30%);*/
  margin-top: 30%;
}
.about .img img {
  object-fit: cover;
  height: 400px
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

<div class="pad6rem about animate-items">
      <div class="container-global">
        <div class="title-general">
          <span class="tag-ats text-center">Welcome to Sense Canggu Beach</span>
          <h2 class="text-center">A 4-Star Resort Steps from Bali’s Most Iconic Beaches</h2>

          <div class="row text-justify">
            <p class="col-md-6">
              <b>Sense Canggu Beach</b> is a luxurious 4-star resort located in the
              heart of Canggu, Bali, just steps away from the iconic <b>Echo Beach</b>
              and <b>Batu Bolong Beach.</b> Our stylish suites and penthouses offer the
              perfect blend of modern comfort and Balinese charm, making it the
              ideal getaway for those seeking relaxation and adventure.
            </p>
            <p class="col-md-6">
              With world-class amenities, a vibrant atmosphere, and personalized
              service, we provide an unforgettable stay in Bali. Whether you're
              lounging by the pool, enjoying local dining experiences, or
              exploring nearby beach clubs, Sense Canggu Beach offers everything
              you need for a premium Bali vacation.
            </p>
          </div>
          <div class="button d-flex justify-content-center">
            <a href="#" class="btn btn-about">Our Facilities</a>
          </div>
        </div>
        <div class="row img justify-content-between">
          <div class="col-md-4">
            <img src="https://jwc.gotra-resources.my.id/web-upload/1742798171-24-03-2025-RMOtud8ac43lNsyVDJpChbjLviYXwEZK.webp" alt="profile" class="w-100" />
          </div>
          <div class="col-md-4 ctr">
            <img src="https://jwc.gotra-resources.my.id/web-upload/1742878204-25-03-2025-sV0PAh35NRoI9EzwSpUaxZGWLCvji2Fn.webp" alt="profile" class="w-100" />
          </div>
          <div class="col-md-4">
            <img src="https://jwc.gotra-resources.my.id/web-upload/1742797626-24-03-2025-NdV9sjRx3GAfvJqEUcI81HFZDnBl52Mp.webp" alt="profile" class="w-100" />
          </div>
        </div>
      </div>
    </div>



