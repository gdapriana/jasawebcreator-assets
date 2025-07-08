<style>

.why .card {
    overflow: hidden;
    position: relative;
    border: 1px solid #e9e6e6;
    border-radius: 10px;
    background: white;
}

.why .card h3 {
    font-family: var(--primtext);
    font-size: 21px;
    font-weight: 600;
    color: var(--color2);
    line-height: 30px;
    text-align: center;
    transition: all ease-in-out .6s;
    letter-spacing: .5px;
    margin-bottom: 10px;
}

.why .card p {
    margin-bottom: 0px;
    font-family: var(--subtext);
    font-size: 14px;
    line-height: 24px;
    font-weight: 300;
    text-align: center;
    letter-spacing: .5px;
    color: #333;
    transition: all ease-in-out .6s;
}

.why .card-body {
    padding: 2.5rem 2rem;
    position: relative;
    z-index: 2;
}

.why .icon i {
    font-size: 35px;
    text-align: center;
    color: var(--colors);
    margin-bottom: 2rem;
    transition: all ease-in-out .6s;
}


.why .icon {
  text-align: center;
  padding-left: 0 !important;
  margin-left: 0;
}

.why .card .shadow {
    position: absolute;
    left: 50%;
    top: 50%;
    width: 5rem;
    height: 5rem;
    transition-delay: .2s;
    border-radius: 50%;
    z-index: 1;
    opacity: .8;
    background-color: var(--color2);
    /* filter: blur(20px); */
    transform: scale(.0) translate(50%, 50%);
    transition: all ease-in-out .35s;
}
.why .card:hover .shadow {
    transform: scale(11) ;
}

.why .card:hover  h3,
.why .card:hover  p {
  color: white;
}

.why .card:hover .icon i {
  color: var(--colors);
}

@media (max-width: 768px) {
    .why .text-part {
    padding: 3rem 5%;
  }

  .why .card-body {
    padding: 20px;
}

.why .icon i {
    font-size: 30px;
    margin-bottom: 20px;
}

 .why .card h3 {
      font-size: 15px;
      line-height: 25px;
  }

.why .card p {
    margin-bottom: 0px;
    font-size: 12px;
    line-height: 20px;
}

}
@media (max-width: 576px) {
  .foot-why .patern {
    height: 100%;
    transform: scale(1);
  }
  .foot-why .patern.left {
    left: -2rem;
    top: -1rem;
  }
  .foot-why .patern.right {
    right: -2rem;
    bottom: -1rem;
  }
}
</style>
      
<section class="why pad6rem">
  <div class="container-global">
    
    <div class="title-product text-center">
            <span class="tag-atas">Why Choose Us</span>
            <h2>Delivering Seamless <span>Airport Transfers</span></h2>
    </div>
    
    <div class="row mx-0 w-100 px-0">
      <div class="col-md-3 mb-md-3 mb-2 col-6 px-md-2 px-1">
          <div class="card h-100 carw">
              <div class="shadow"></div>
              <div class="card-body">
                  <div class="icon">
                      <i class="fa-solid fa-clock"></i>
                  </div>
                  <h3 class="card-title">Last Minute Booking</h3>
                  <p class="text-card">Ready for urgent travel needs.</p>
              </div>
          </div>
      </div>
      <div class="col-md-3 mb-md-3 mb-2 col-6 px-md-2 px-1">
          <div class="card h-100">
              <div class="shadow"></div>
              <div class="card-body">
                  <div class="icon">
                      <i class="fa-solid fa-plane-departure"></i>
                  </div>
                  <h3 class="card-title">Airport Counter</h3>
                  <p class="text-card">Available in international & domestic arrivals at Ngurah Rai Airport.</p>
              </div>
          </div>
      </div>
      <div class="col-md-3 mb-md-3 mb-2 col-6 px-md-2 px-1">
          <div class="card h-100 carw">
              <div class="shadow"></div>
              <div class="card-body">
                  <div class="icon">
                      <i class="fa-solid fa-car"></i>
                  </div>
                  <h3 class="card-title">Premium Car</h3>
                  <p class="text-card">Comfortable and high-quality transport.</p>
              </div>
          </div>
      </div>
      <div class="col-md-3 mb-md-3 mb-2 col-6 px-md-2 px-1">
          <div class="card h-100">
              <div class="shadow"></div>
              <div class="card-body">
                  <div class="icon">
                      <i class="fa-solid fa-money-bill"></i>
                  </div>
                  <h3 class="card-title">Trusted & Affordable</h3>
                  <p class="text-card">Reliable services at fair prices.</p>
              </div>
          </div>
      </div>
  </div>

  </div>
</section>
