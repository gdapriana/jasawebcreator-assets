<style>

.why .card {
    overflow: hidden;
    position: relative;
    border: none;
    border-radius: 0px;
    background: white;
    z-index: 3;
}
.why .col-md-3 {position:relative;}

.why .col-md-3:before {
    width: 40%;
    height: 50%;
    content: "";
    position: absolute;
    transform: translateX(-3px);
    top: -4px;
    z-index: 1;
    background: var(--colors);
}
.why .col-md-3:after {
    width: 40%;
    height: 50%;
    content: "";
    position: absolute;
    transform: translateX(0px);
    right: 5px;
    bottom: -4px;
    z-index: 1;
    background: var(--colors);
}

.why .card h3 {
    font-family: var(--primtext);
    font-size: 17px;
    font-weight: 600;
    color: var(--color2);
    line-height: 28px;
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
      
<section class="why pad6rem" style="background: var(--color2)">

  <?php 
    $_why = json_decode(json_encode([
        'span' => 'We offer reliable services',
        'title' => 'Your Bali Taxi',
        'items' => [
            [
                'title' => 'Local Expertise',
                'description' => 'Our experienced drivers know Bali inside and out, ensuring a smooth and enjoyable journey',
                'icon' => ' fa-user-tie'
            ],
            [
                'title' => 'Quality Fleet',
                'description' => 'Choose from a range of well-maintained vehicles, from compact cars to spacious vans, all equipped for your comfort.',
                'icon' => 'fa-car'
            ],
            [
                'title' => '24/7 Customer Support',
                'description' => 'We\'re here for you around the clock, ready to assist with bookings and provide help whenever you need it.',
                'icon' => 'fa-headset'
            ],
            [
                'title' => 'Transparent Pricing',
                'description' => 'Enjoy clear pricing with no hidden fees, making budgeting for your trip easy and hassle-free.',
                'icon' => 'fa-tags'
            ],
        ]
    ]))
  ?>
  <div class="container-global">
    
    <div class="title-product text-center">
            <span class="tag-atas">Why Choose Us</span>
            <h2 style="color: white;">Why <?= $_why->title ?> Stands Out</h2>
    </div>
    
    <div class="row mx-0 w-100 px-0 mt-5">
        <?php foreach($_why->items as $item): ?>
          
        <div class="col-md-3 mb-md-3 mb-2 col-6 px-md-2 px-1">
            <div class="card h-100 carw">
                <div class="shadow"></div>
                <div class="card-body">
                    <div class="icon">
                        <i class="fa-solid <?= $item->icon ?>"></i>
                    </div>
                    <h3 class="card-title"><?= $item->title ?></h3>
                    <p class="text-card"><?= $item->description ?></p>
                </div>
            </div>
        </div>
            
        <?php endforeach; ?>
    </div>



  </div>
</section>