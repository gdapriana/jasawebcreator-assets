<style>

.why .icon .bx {
    margin-bottom: 15px;
    text-align: center;

}
  .why .icon .bx i {
    font-size: 50px;
    color: var(--colors);
    text-align: center;
    transition: all ease 500ms;
  }
.why .card {
    background: #fff;
    border: none;
    height: 90%;
    overflow: hidden;
    border-radius: 0;
    padding: 2rem 1rem;
    justify-content: space-between;
    transition: all ease 500ms;
}

.why .card h3 {
    color: var(--color2);
    font-family: var(--primtext);
    font-size: 21px;
    line-height: 25px;
    font-weight: 400;
    text-transform: capitalize;
    text-align: center;
    letter-spacing: 0px;
    margin-bottom: 8px;
    transition: all ease 500ms;
}
.why .card p {
    color: #fff;
    font-family: var(--subtext);
    font-size: 16px;
    line-height: 23px;
    text-align: center;
    letter-spacing: 0px;
    font-weight: 300;
    margin-bottom: 0;
    transition: all ease 500ms;
    opacity: 0;
}

.why .card .wrap {
    transform: translateY(20%);
    position: relative;
    transition: all ease 500ms;
}
.why .card:hover .wrap {
    transform: translateY(0);
}
.why .card:hover {
  background: var(--colors);
}
.why .card:hover p {
  opacity: 1;
}
.why .card:hover h3 {
  color: #fff;
}
.why .btn-why {
  background: var(--colors);
  color: #fff;
  padding: .8rem 1.5rem;
  text-transform: uppercase;
  font-size: 15px;
  font-family: var(--subtext);
  letter-spacing: 1px;
  font-weight: 600;
}

.why .card:hover .icon .bx i {color: #fff}

@media (max-width: 768px) {

  .why .card h3 {
    font-size: 16px;

  }

  .why .icon .bx {
    width: 3rem;
    height: 3rem;
    margin-bottom: 1rem;
}
}

</style>

<section class="pad6rem why wow fadeIn animate-items" data-wow-duration="2s" style="background: #f681211a;">
    <div class="container-global">
        <div class="row">
          <div class="col-md-4 mb-md-0 mb-4 d-flex align-items-center">
            <div class="title-general">
              <span class="tag-ats">Top-Notch Facilities</span>
              <h2 class="card-title">Amenities</h2>
              <p class="">Enjoy world-class amenities at Sense Canggu Beach, including a lagoon pool, 7 Sense Spa, fitness center, airport transfer, and more.</p>
              
              <div class="pt-3">
                <a href="#" class="btn-why">Book Now!</a>
              </div>
            </div>
          </div>

          <div class="col-md-8 px-0">
            <div class="row mx-0 px-0">
              <div class="col-md-4 col-6 px-2">
                <div class="card py-4 px-3 mb-3">
                  <div class="wrap py-1">
                    <div class="icon mx-auto">
                      <div class="bx">
                        <i class="fa-solid fa-water-ladder"></i>
                      </div>
                    </div>
                    <h3 class="card-title">Lagoon-Style Pool</h3>
                    <p class="text-card">Relax and swim in our lagoon-style pool.</p>
                  </div>
                </div>
              </div>
              
              <div class="col-md-4 col-6 px-2">
                <div class="card py-4 px-3 mb-3">
                  <div class="wrap py-1">
                    <div class="icon mx-auto">
                      <div class="bx">
                        <i class="fa-solid fa-spa"></i>
                      </div>
                    </div>
                    <h3 class="card-title">7 Sense Spa</h3>
                    <p class="text-card">Rejuvenating treatments at 7 Sense Spa.</p>
                  </div>
                </div>
              </div>
              
              <div class="col-md-4 col-6 px-2">
                <div class="card py-4 px-3 mb-3">
                  <div class="wrap py-1">
                    <div class="icon mx-auto">
                      <div class="bx">
                        <i class="fa-solid fa-utensils"></i>
                      </div>
                    </div>
                    <h3 class="card-title">Restaurant</h3>
                    <p class="text-card">Delicious local and international dishes.</p>
                  </div>
                </div>
              </div>
              
              <div class="col-md-4 col-6 px-2">
                <div class="card py-4 px-3 mb-3">
                  <div class="wrap py-1">
                    <div class="icon mx-auto">
                      <div class="bx">
                        <i class="fa-solid fa-cocktail"></i>
                      </div>
                    </div>
                    <h3 class="card-title">Pool Bar</h3>
                    <p class="text-card">Refreshing cocktails by the poolside.</p>
                  </div>
                </div>
              </div>
              
              <div class="col-md-4 col-6 px-2">
                <div class="card py-4 px-3 mb-3">
                  <div class="wrap py-1">
                    <div class="icon mx-auto">
                      <div class="bx">
                        <i class="fa-solid fa-taxi"></i>
                      </div>
                    </div>
                    <h3 class="card-title">Airport Transfer Service</h3>
                    <p class="text-card">Convenient airport transfer service.</p>
                  </div>
                </div>
              </div>
              
              <div class="col-md-4 col-6 px-2">
                <div class="card py-4 px-3 mb-3">
                  <div class="wrap py-1">
                    <div class="icon mx-auto">
                      <div class="bx">
                        <i class="fa-solid fa-wifi"></i>
                      </div>
                    </div>
                    <h3 class="card-title">High-Speed Wi-Fi</h3>
                    <p class="text-card">Fast and reliable Wi-Fi throughout.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
    </div>
</section>