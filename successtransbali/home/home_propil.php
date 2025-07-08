<style>

.profile {
    position: relative;
}
.profile .background-p {
    bottom: 0;
    left: 0;
    z-index: 2;
    width: 100%;
    height: 50%;
    position: absolute;
    background: #f9f9f9;
}
.profile span {
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
    line-height: 24px;
    color: var(--colors);
    letter-spacing: 1px;
    font-family: var(--subtext);
    display: block;
    width: max-content;
    margin-bottom: 1px;
}

.profile h2 {
    font-size: 45px;
    line-height: 60px;
    color: #000;
    font-weight: 600;
    margin-bottom: 20px;
    letter-spacing: .3px;
    text-transform: unset;
    font-family: var(--primtext);
    position: relative;
    background: transparent;
}
.profile h3 {
    font-size: 35px;
    line-height: 40px;
    color: #000;
    font-weight: 600;
    margin-bottom: 15px;
    letter-spacing: .3px;
    text-transform: unset;
    font-family: var(--primtext);
    position: relative;
    background: transparent;
    text-align: center;
}
.profile p {
    color: #555;
    font-family: var(--subtext);
    font-size: 15px;
    font-weight: 400;
    line-height: 28px;
    margin-bottom: 25px;
    letter-spacing: 0px;
}

.profile ul li {
    color: #555;
    font-family: var(--subtext);
    font-size: 15px;
    font-weight: 400;
    line-height: 28px;
    margin-bottom: 5px;
    letter-spacing: 0px;
}

.profile .card {
  border-radius: 0;
  background: var(--colors);
}
.profile .card.cr2 {
  background: var(--color2);
}
.profile .card.cr2 h3 {
  color: #fff;
}
.profile .card.cr1 p {color: #333; text-align: center; margin-bottom: 0;}
.profile .card.cr2 p {color: #ddd; text-align: center; margin-bottom: 0;}


.profile .b-img {
    aspect-ratio: 1/1.1;
    object-fit: cover;
    border-radius: 20px;
}
.profile .img-rg img {
    height: 500px;
    object-fit: cover;
}
.profile .btn {
    border-radius: 0;
    color: white;
    background: var(--colors);
    font-family: var(--subtext);
    font-size: 15px;
    font-weight: 300;
    line-height: 25px;
    margin-top: 10px;
    padding: .6rem 2rem;
    letter-spacing: .5px;
    transition: ease-in-out .2s;
    align-item: center;
}
.profile .btn:hover {
    background: var(--color2);
    color: #fff;
}

.card-vimis.h-100 h3 {
    font-family: var(--primtext);
    font-weight: 600;
    font-size: 25px;
    letter-spacing: 0px;
    margin-bottom: 20px;
}
.card-vimis.h-100 p {
    margin-bottom: 0;
    font-family: var(--subtext);
    color: #333;
}
.card-vimis.h-100 {
    padding: 30px 40px;
    border: 1px solid #ccc;
    border-radius: 10px;
    text-align: center;
}

@media screen and (max-width: 768px) {
  .profile span {
    font-size: 12px;
    line-height: 25px;
  }

  .profile h2 {
      margin-bottom: 10px;
      font-size: 30px;
      line-height: 45px;
  }
  .profile h3 {
      margin-bottom: 10px;
      font-size: 25px;
      line-height: 35px;
  }

  .profile .background {
    height: 60%;
  }
    .profile p {
        font-size: 13px;
        line-height: 23px;
        letter-spacing: 0px;
    }
  .profile .b-img {
    height: 400px;
  }

  .profile .img-rg {
    margin-bottom: 15px !important;
  }
}
</style>

<section class="pad6rem profile" style="position: relative; background: #f9f9f9;">
    <div class="container-global wow fadeIn" data-wow-duration="2s" style="z-index:3; position: relative;">
        <div class="row">
          <div class="col-md-7" style="align-self: center;">
            <span>Who We Are?</span>
            <h2>Succes Trans Bali</h2>

            <?= $data->result->content ?>
            
          </div>
          <div class="col-md-5">
            <img src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737354487-20-01-2025-d96sc4Xl1zowruHLiDEFbRSNVMyCKj0Y.webp" alt="<?= $data->company->company_name ?>" class="w-100 b-img " />
          </div>
        </div>
    </div>

</section>


<section class="pad6rem">
  <div class="container-global">

    <div class="title-product text-center">
        <span class="tag-atas">Vision & Mission</span>
        <h2>Guiding Principles of <span>Success Trans Bali</span></h2>
    </div>

    <div class="row">

      <div class="col-md-6 pb-3">
        <div class="card-vimis h-100">
            <h3>Our Vision</h3>
            <p>To be the leading transportation service in Bali, recognized for our commitment to customer satisfaction, innovation, and the highest standards of professionalism.</p>
        </div>
      </div>

      <div class="col-md-6 pb-3">
        <div class="card-vimis h-100">
            <h3>Our Mission</h3>
            <p>To provide comfort, reliability, and top-quality transportation services, ensuring every traveler can fully experience the beauty and culture of Bali.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<style>
  
.paducus {
    background: #f9f9f9; 
    margin: 0px 20px; 
    border-radius: 20px;
}

.wrap-why-chos {
    position: relative;
    font-family: var(--subtext);
    background: white;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 30px;
}

.wrap-why-chos2 h3 {
    font-family: var(--primtext);
    font-weight: 600;
    letter-spacing: 0px;
    font-size: 26px;
    margin-bottom: 25px;
}

.wrap-why-chos2 p {
    color: #555;
    font-size: 15px;
    line-height: 30px;
    margin-bottom: 0;
}

.wrap-why-chos2 {
    padding-right: 60px;
    padding-left: 20px;
}

.wrap-why-chos3 {
    padding-left: 60px;
    padding-right: 20px;
}

@media (max-width: 768px) {
  .paducus {
      margin: 0px 0px;
  }

    .wrap-why-chos2, .wrap-why-chos3 {
      padding: 35px !important;
  }

  .wrap-why-chos2 h3 {
    font-size: 23px;
}

</style>

<section class="pad6rem paducus" style="background: #f9f9f9;">
  <div class="container-global">

    <div class="title-product text-center mb-5">
        <span class="tag-atas">Why Choose Us</span>
        <h2>Your Trusted Transportation <span>Partner in Bali</span></h2>
    </div>

    <div class="wrap-why-chos">
      <div class="row">
        <div class="col-md-5">
          <img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737363617-20-01-2025-09adXs1WiCunrReNylhOvGwTS5IJ7zpH.jpeg" alt="Airport Counter">
        </div>

        <div class="col-md-7" style="align-self: center;">
          <div class="wrap-why-chos2">
            <h3>1. Airport Counter</h3>
            <p>Strategically located at international and domestic arrivals, our counter ensures quick bookings and direct assistance for a seamless start to your Bali journey.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="wrap-why-chos">
      <div class="row">
        <div class="col-md-5 order-lg-2 order-1">
          <img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737366477-20-01-2025-wXklE8RA9qLdvgx1rsNuPJ6ayUBWVcOC.webp" alt="Airport Counter">
        </div>

        <div class="col-md-7 order-lg-1 order-2" style="align-self: center;">
          <div class="wrap-why-chos2 wrap-why-chos3">
            <h3>2. Ready Line</h3>
            <p>Our fleet is always ready at key locations, providing fast and responsive service. Enjoy minimal waiting times with well-maintained vehicles and professional drivers on standby.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="wrap-why-chos">
      <div class="row">
        <div class="col-md-5">
          <img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737366459-20-01-2025-GIl0a3bMz8q7smPSxijpHnAu9B4ZcfK1.webp" alt="Airport Counter">
        </div>

        <div class="col-md-7" style="align-self: center;">
          <div class="wrap-why-chos2">
            <h3>3. Representative Staff</h3>
            <p>Our friendly, professional team welcomes you at the airport, ensuring a smooth pick-up process and excellent support to make your travel experience hassle-free.</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="pad6rem">
    <div class="container-global wow fadeIn" data-wow-duration="2s">

        <div class="title-product text-center mt-4">
            <span class="tag-atas">Explore Our Premium Fleet</span>
            <h2>Choose Your Ride for a <span>Seamless Airport Transfer</span></h2>
        </div>

        <div class="propro1 ss-arrow mt-4 justify-content-center">


            <div class="px-2 slide-fix pb-4">
                <div class="wrap-mobil-b wrap-mobil-bpt2 h-100">
                    <img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737275451-19-01-2025-fMsaFrV1QPB8KeqTWlw0OE9hUmRAipcz.webp" loading="lazy" alt="Luxury Cars ( Alphard )">

                    <div class="wraphar wraphar2 text-center">
                        <span>Our Fleet</span>
                        <h3>Luxury Cars ( Alphard )</h3>   
                    </div>

                    <div class="wrap-mobil-b2 text-left">
                       <p>Luxury cars designed for business trips or VIP transportation, featuring premium interiors, advanced features, and maximum comfort. Ideal for those seeking sophistication and exclusivity.</p>
                      <p><strong>Perfect For:</strong></p>
                      <ul>
                      <li>High-profile guests prioritizing comfort and elegance.</li>
                      <li>Business travelers attending important meetings or events.</li>
                      <li>Special occasions requiring premium transportation.</li>
                      </ul>

                    </div>
                    <div class="btn-wrmob">
                        <a class="btn btn-momo" href="https://successtransbali.com/airport-transfer">Booking Now!</a>
                    </div>

                </div>
            </div>


            <div class="px-2 slide-fix pb-4">
                <div class="wrap-mobil-b wrap-mobil-bpt2 h-100">
                    <img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737021832-16-01-2025-MhlDqdn5UzA8t6IZkExVfRK2YrXy4J3m.webp" loading="lazy" alt="Premium Minivan (Hiace Premio)">

                    <div class="wraphar wraphar2 text-center">
                        <span>Our Fleet</span>
                        <h3>Premium Minivan (Hiace Premio)</h3>   
                    </div>

                    <div class="wrap-mobil-b2 text-left">
                       <p>A modern minivan with spacious seating and a comfortable interior. Equipped with advanced safety features and ample luggage space, this vehicle ensures a smooth ride for medium-sized groups.</p>
                      <p><strong>Perfect For:</strong></p>
                      <ul>
                      <li>Families traveling together.</li>
                      <li>Small groups exploring Bali&rsquo;s scenic routes.</li>
                      <li>Transfers requiring extra luggage capacity.</li>
                      </ul>

                    </div>
                    <div class="btn-wrmob">
                        <a class="btn btn-momo" href="https://successtransbali.com/airport-transfer">Booking Now!</a>
                    </div>

                </div>
            </div>


            <div class="px-2 slide-fix pb-4">
                <div class="wrap-mobil-b wrap-mobil-bpt2 h-100">
                    <img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737021832-16-01-2025-m7DkxGLo5a6uSqpd3TH1VJBUrWX4yz0F.webp" loading="lazy" alt="Minivan (Hiace)">

                    <div class="wraphar wraphar2 text-center">
                        <span>Our Fleet</span>
                        <h3>Minivan (Hiace)</h3>   
                    </div>

                    <div class="wrap-mobil-b2 text-left">
                       <p>A cost-effective option for larger groups, offering spacious interiors and reliable performance. Ideal for group tours or extended family outings across Bali.</p>
                      <p><strong>Perfect For:</strong></p>
                      <ul>
                      <li>Group travel with up to 12 passengers.</li>
                      <li>Affordable transportation for sightseeing tours.</li>
                      <li>Events or gatherings requiring group transfers.</li>
                      </ul>

                    </div>
                    <div class="btn-wrmob">
                        <a class="btn btn-momo" href="https://successtransbali.com/airport-transfer">Booking Now!</a>
                    </div>

                </div>
            </div>


            <div class="px-2 slide-fix pb-4">
                <div class="wrap-mobil-b wrap-mobil-bpt2 h-100">
                    <img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737275453-19-01-2025-GhXU3tYEnCufwvRAk5qjxdgTF6Vz7S8s.webp" loading="lazy" alt="Standard MPV">

                    <div class="wraphar wraphar2 text-center">
                        <span>Our Fleet</span>
                        <h3>Standard MPV</h3>   
                    </div>

                    <div class="wrap-mobil-b2 text-left">
                       <p>A versatile vehicle for 4-6 passengers, designed for everyday use. Comfortable seating and compact size make it perfect for smaller families or couples exploring Bali.</p>
                      <p><strong>Perfect For:</strong></p>
                      <ul>
                        <li>Families with children.</li>
                        <li>Couples looking for a comfortable and budget-friendly option.</li>
                        <li>Daily trips to Bali&rsquo;s iconic destinations.</li>
                      </ul>

                    </div>
                    <div class="btn-wrmob">
                        <a class="btn btn-momo" href="https://successtransbali.com/airport-transfer">Booking Now!</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>