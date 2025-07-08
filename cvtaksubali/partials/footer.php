<!-- <?= $func->load('home/home_contact_baru') ?> -->

</div>

<style>

#chatbtn{
    background: #089dff;
    color: #fff;
    width: 50px;
    height: 50px;
    font-size: 20px;
    outline: none;
    border-radius: 50%;
    float: right;
    cursor: pointer;
    border: none;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.14), 0 3px 1px -2px rgba(0,0,0,0.12), 0 1px 5px 0 rgba(0,0,0,0.2);
    z-index: 9999;
}

    .sosmed .facebook i{background-color: #4267b2;}
    .sosmed .instagram i{background-color: #d10869;}
    .sosmed .whatsapp i{background-color: #25d366;}
    .sosmed .messenger i {background-color: #0084ff;}
    .sosmed .telegram i {background-color: #51bae7;}
    .sosmed .youtube i {background-color: red;}
    .sosmed .email i{background-color: #f17721}
    .fixed-bottom #sosmed a i{
        margin:5px auto;
        display: block;
        color: #FFF;
        padding: 12px;
        opacity: 0.8;
        text-align: center;
    }

    html .scroll-to-top{
    bottom: 25px;
    border-radius: 5px;
    right: 80px;
    }

    .icon-custom {
        font-size: 25px !important;
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .title-foot-default {
        font-family: var(--primtext);
        text-transform: capitalize;
        letter-spacing: .3px;
        font-size: 23px !important;
        font-weight: 600 !important;
        margin-bottom: 30px;
        color: var(--colors) !important;
    }

    .text-footer {
        margin-bottom: 0;
        font-family: var(--subtext);
        color: #fff;
        letter-spacing: 0.5px;
        font-size: 14px;
        text-align: left;
    }

    .text-foot b {
        font-weight: 500;
    }

    .text-foot {
        font-family: var(--subtext);
        color: #fff;
        margin-bottom: 3px;
        font-size: 15px;
        letter-spacing: 0px;
        line-height: 28px;
    }

    .text-foot i { color: #fff; }

    .text-foot a {
        color: #fff !important;
  }

    a.scroll-to-top.hidden-mobile.visible { display: none; }

    .img-avail { height: 53px; margin-bottom: 5px; }


.logfot { position:relative; margin-bottom:4rem; }

.logfot p {
    font-size: 16px;
    width: 510px;
    margin: auto;
    margin-top: 10px;
    line-height: 30px;
}

.txt-add { width:320px; }

@media (min-width: 768px) {
      .logo-footer {
        height: 90px;
        margin-bottom: 10px;
        object-fit: contain;
        margin-top: 1rem;
    }
}

@media (max-width: 768px) {

    .whatsapp-text { display: none; }

    .text-sm-center { text-align:center; }

    .logo-footer {
        height: 70px;
        margin-bottom: 10px;
    }
    #footer.short {
        padding-top: 3rem;
    }

    .text-footer { text-align:center; }

    .logfot p { width: auto; font-size: 14px; }
}

.social-icons:not(.social-icons-clean) li a {
    background: transparent;
}
#footer .social-icons:not(.social-icons-clean) li a {
    color: #fff !important;
    border: .3px solid #ffffff50;
}
.social-icons li a { color: #111827 !important; }

.social-icons li a i { line-height: 28px; }

.social-icons li { margin-right: 5px; }

ul.header-social-icons.social-icons {

    margin-top: 20px;
}
 .social-icons li {
    border: .3px solid var(--colors);
    border-radius: 0;
}
#footer .social-icons li {
    border: .3px solid #ffffff80;
    border-radius: 0;
}
.social-icons:not(.social-icons-clean) li {
    -webkit-box-shadow: none;
    box-shadow: none;
}
.social-icons li a {
    border-radius: 0;
    height: 32px;
    line-height: 32px;
    width: 32px;
}
.social-icons:not(.social-icons-clean) li:hover a {
    color: #fff !important;
}

html .scroll-to-top { display: none; }

#footer.short {
    padding: 0;
    padding-top: 5rem;
}

.foot-style {
    background-color: var(--color2) !important;
    border-color: var(--colors) !important;
    position: relative;
    border-top: 4px solid var(--colors) !important;

}

.foot-style-2 {
    border-top: 1px solid #ffffff30;
    position: relative;
    background: transparent;
}

.fixwa { left: auto; right: 20px; bottom: 20px }

.share-icons { width: 50px }

img.img-sosmed {
    height: 30px;
    margin-right: 10px;
}

.list-link p a i {
    color: var(--colors);
}
.list-link p {
    font-family: var(--subtext);
    color: #acacac;
    margin-bottom: 10px;
    font-size: 15px;
}

.list-link p a {
    color: #fff !important;
}

.list-link p a:hover {
    color: var(--colors) !important;
}
</style>




<!-- <footer id="footer" class="foot-style short mt-0">
   
    <div class="container-global pb-4 wow fadeInUp" style="position: relative; z-index: 3;">


        <div class="row justify-content-center wow fadeIn" data-wow-duration="2s">

            <div class="col-md-4 mb-4 mb-md-0">
                <img loading="lazy" class="img-fluid logo-footer" src="<?= $data->web->site_logo_alternative ?>" alt="Logo <?= $data->web->site_name ?>">

                <p class="text-foot">An exquisite luxury 4-star Resort which guarantees a relaxing stay in the enchanting village of Canggu on the island of Bali, Indonesia.</p>
                
                <ul class="header-social-icons social-icons">
                   <li class="social-icons-facebook"><a href="<?= $data->social->facebook_url ?>" target="_blank" rel="noopener" rel="noreferrer" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                   <li class="social-icons-instagram"><a href="<?= $data->social->instagram_url ?>" target="_blank" rel="noopener" rel="noreferrer" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
                
            </div>

            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="title-foot-default">Contact Us</h3>

                <p class="text-foot mt-3 "><i class="fa-solid fa-location-dot mr-3"></i><?= $data->company->company_address ?></p>
                <p class="text-foot"><i class="fab fa-whatsapp mr-3"></i><a href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%2C%20I%20got%20this%20number%20from%20the%20website%20<?= base_url('') ?>%20I%E2%80%99d%20like%20to%20ask%20something%20can%20you%20help%20me%3F">+<?= $data->social->whatsapp ?></a></p>
                <p class="text-foot mb-4"><i class="fa-solid fa-envelope mr-3"></i><a href="<?= $func->dm_email() ?>"><?= $data->company->company_email ?></a></p>
                
                
            </div>

            <div class="col-md-4 mb-4 mb-md-0">
                <h3 class="title-foot-default">Useful Links</h3>
                
                <div class="list-link">
                    <p><a href="http://demo3.jasawebcreator.com/about-us"><i class="fas fa-arrow-right mr-2"></i>About Us</a></p>
                    <p><a href="http://demo3.jasawebcreator.com/category/rooms-suites"><i class="fas fa-arrow-right mr-2"></i>Rooms & Suites</a></p>
                    <p><a href="http://demo3.jasawebcreator.com/category/experiences"><i class="fas fa-arrow-right mr-2"></i>Experiences</a></p>
                    <p><a href="http://demo3.jasawebcreator.com/article-category/nearby-attractions"><i class="fas fa-arrow-right mr-2"></i>Nearby Attractions</a></p>
                    <p><a href="http://demo3.jasawebcreator.com/article-category/blog-news"><i class="fas fa-arrow-right mr-2"></i>Blogs</a></p>
                </div>
            </div>


        </div>
    </div>

    <div class="py-4 py-md-4 mt-4 text-sm-center foot-style-2">

        <div class="row justify-content-center text-center">
            <div class="col-md-12 mb-md-0 mb-3">
                <p class="text-footer text-center">© Copyright <?= date('Y') ?> <b><?= $data->web->site_name ?></b>. All Rights Reserved. Powered <b><a href="https://www.jasawebcreator.com/">By Jasa Web Creator</a></b></p>
            </div>

        </div>

    </div>
</footer> -->


<style>

._footer-root {
    background-color: var(--color2);
}

._footer-root ._footer-wrapper * {
    padding: 0;
    margin: 0;
    letter-spacing: 0;
}

._footer-root ._footer-wrapper {
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: stretch;
}
._footer-root ._footer-wrapper ._footer-top {
    display: grid;
    grid-template-columns: 1fr;
    gap: 2rem;
    padding: 2rem 0;
    border-bottom: 1px solid rgba(255,255,255,0.1);
}
._footer-root ._footer-wrapper ._footer-top ._footer-top-brand {
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
    gap: 14px;
}
._footer-root ._footer-wrapper ._footer-top ._footer-top-brand img {
    width: 120px;
    height: auto !important;
    object-fit: contain;
}
._footer-root ._footer-wrapper ._footer-top ._footer-top-brand p {
    font-family: var(--subtext);
    color: white;
    font-size: 16px;
}
._footer-root ._footer-wrapper ._footer-top ._footer-top-form {
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
    gap: 1rem;
}
._footer-root ._footer-wrapper ._footer-top ._footer-top-form ._footer-form-title {
    font-family: var(--primtext);
    color: white;
}
._footer-root ._footer-wrapper ._footer-top ._footer-top-form ._footer-form {
    display: flex;
    width: 100%;
    justify-content: center;
    align-item: center;
    gap: 1rem;
}
._footer-root ._footer-wrapper ._footer-top ._footer-top-form ._footer-form input {
    flex: 1;
    background-color: var(--color2);
    border: 1px solid rgba(255,255,255,0.1);
    padding: .8rem;
    color: white;
}
._footer-root ._footer-wrapper ._footer-top ._footer-top-form ._footer-form button {
    color: white;
    background-color: var(--colors);
    padding: 1rem 1.4rem;
    font-family: var(--subtext);
    border: none;
}
._footer-root ._footer-wrapper ._footer-mid {
    display: grid;
    gap: 1rem;
    grid-template-columns: 1fr;
    padding: 2rem 0;
    border-bottom: 1px solid rgba(255,255,255,0.1);
}
._footer-root ._footer-wrapper ._footer-mid ._footer-mid-content {
    display: flex;
    justify-content: start;
    flex-direction: column;
    align-items: star;
    gap: .8rem;
}
._footer-root ._footer-wrapper ._footer-mid ._footer-mid-content h4 {
    color: white;
    font-family: var(--primtext);
    font-size: 24px;
}

._footer-root ._footer-wrapper ._footer-mid ._footer-mid-content ._footer-main-content {
    display: flex;
    justify-content: start;
    align-items: start;
    gap: .4rem;
    flex-direction: column;
}
._footer-root ._footer-wrapper ._footer-mid ._footer-mid-content:last-child ._footer-main-content {
    display: flex; 
    width: 100%; 
    flex-direction: row;
}
._footer-root ._footer-wrapper ._footer-mid ._footer-mid-content:last-child ._footer-main-content a {
    background-color:white; 
    aspect-ratio: 1/1; 
    flex: 1; 
    display: flex; 
    justify-content: center; 
    align-items: center; 
    color: rgba(0,0,0,0.5);
    cursor: pointer;
}

._footer-root ._footer-wrapper ._footer-mid ._footer-mid-content:last-child ._footer-main-content a i {
    color: rgba(0, 0, 0, 0.7);
    font-size: 1.4rem;
}

._footer-root ._footer-wrapper ._footer-mid ._footer-mid-content:last-child ._footer-main-content a:hover {
    background-color: var(--colors);
}
._footer-root ._footer-wrapper ._footer-mid ._footer-mid-content:last-child ._footer-main-content a:hover i {
    color: white;
}


._footer-root ._footer-wrapper ._footer-mid ._footer-mid-content ._footer-main-content * {
    color: rgba(255,255,255,0.5);
    font-size: 16px;
    transition: all ease-in-out .5s;
}
._footer-root ._footer-wrapper ._footer-mid ._footer-mid-content ._footer-main-content a {
    font-family: var(--subtext);
}
._footer-root ._footer-wrapper ._footer-mid ._footer-mid-content ._footer-main-content *:hover {
    color: var(--colors);
}

._footer-root ._footer-wrapper ._footer-bottom {
    display: grid;
    gap: 1rem;
    grid-template-columns: 1fr;
    padding: 2rem 0;
}

@media (min-width: 500px) {
    ._footer-root ._footer-wrapper ._footer-top {
        grid-template-columns: repeat(2, 1fr);
    }
    ._footer-root ._footer-wrapper ._footer-mid {
        grid-template-columns: repeat(2, 1fr);
    }
    ._footer-root ._footer-wrapper ._footer-bottom {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 768px) {
    ._footer-root {
        background-color: var(--color2);
        padding-top: 4rem;
        padding-bottom: 4rem;
    }
    ._footer-root ._footer-wrapper ._footer-top {
        grid-template-columns: repeat(2, 1fr);
    }
    ._footer-root ._footer-wrapper ._footer-mid {
        grid-template-columns: repeat(4, 1fr);
    }
    ._footer-root ._footer-wrapper ._footer-bottom {
        grid-template-columns: repeat(2, 1fr);
    }
    ._footer-root ._footer-wrapper ._footer-top ._footer-top-brand p {
        font-size: 18px;
    }
}

</style>


<?php 


$_footer_data = json_decode(json_encode([
  'logo' => [
    'link'  => $data->web->site_logo_alternative,
    'alt'   => "Logo" . $data->web->site_name,
  ],
  'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec',
  'socials' => [
    [
      'title' => 'instagram',
      'link' => '',
      'icon' => 'fa-brands fa-instagram'
    ],
    [
      'title' => 'whatsapp',
      'link' => '',
      'icon' => 'fa-brands fa-whatsapp'
    ],
    [
      'title' => 'facebook',
      'link' => '',
      'icon' => 'fa-brands fa-facebook'
    ],
    [
      'title' => 'line',
      'link' => '',
      'icon' => 'fa-brands fa-line'
    ],
  ],
  'copyright' => [
    'text' => 'Copyright © 2025 All Rights reserved.'
  ]
]))

?>


<footer class="_footer-root pad6rem">
    <div class="container-global _footer-wrapper">
        <div class="_footer-top">
            <div class="_footer-top-brand">
                <img loading="lazy" class="img-fluid logo-footer" src="<?= $_footer_data->logo->link ?>" alt="<?= $_footer_data->logo->alt ?>">
                <p><?= $_footer_data->description ?></p>
            </div>
            <div class="_footer-top-form">
                <h3 class="_footer-form-title">Our Newsletter</h3>
                <form class="_footer-form">
                    <input type="text" required>
                    <button>SUBSRIBE</button>
                </form>
            </div>
        </div>
        <div class="_footer-mid">
            <div class="_footer-mid-content">
                <h4>Reservation</h4>
                <div class="_footer-main-content">
                    <a href="tel:<?= $data->company->company_phone ?>"><?= $data->company->company_phone ?></a>
                    <a href=""><?= $data->company->company_email ?></a>
                </div>
            </div>
            <div class="_footer-mid-content">
                <h4>Our Locations</h4>
                <div class="_footer-main-content">
                    <a href="#"><?= $data->company->company_address ?></a>
                </div>
            </div>
            <div class="_footer-mid-content">
                <h4>Our Phone</h4>
                <div class="_footer-main-content">
                    <a href="tel:<?= $data->company->company_phone ?>"><?= $data->company->company_phone ?></a>
                </div>
            </div>
            <div class="_footer-mid-content">
                <h4>Follow Us:</h4>
                <div class="_footer-main-content">
                    <?php foreach($_footer_data->socials as $social): ?>
                      <a href="<?= $social->link ?>">
                          <i class="<?= $social->icon ?>"></i>
                      </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="_footer-bottom">
            <div><?= $_footer_data->copyright->text ?></div>
            <div><?= $data->web->site_name ?></div>
        </div>
    </div>
</footer>

<div class="fixed-bottom fixwa" style="left: auto; right: 20px; bottom: 20px">
    <div class="share-icons" style="width: 50px">
        <div id="sosmed" class="sosmed">
            <a title="Whatsapp" class="whatsapp" href="<?= $func->dm_whatsapp() ?>" class="text-decoration-none"><i class="fab fa-whatsapp icon-custom"></i></a>
        </div>
    </div>
</div>

<!--mbv<?php if ($data->site_position == 'home'): ?>
   <?= $func->load('first-popup') ?> 
mbh<?php endif ?>mm-->

<!-- Vendor -->
<?= $func->script("vendor/popper/umd/popper.min.js") ?>
<script src="<?= base_url('assets') ?>/front/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets') ?>/front/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url('assets') ?>/front/vendor/bootstrap/js/bootstrap.min.js"></script>
<?= $func->script("vendor/magnific-popup/jquery.magnific-popup.min.js") ?>
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://s3.ap-southeast-1.amazonaws.com/cdn.omnihotelier.com/assets/styles/omnih-app.v.1.3.js" defer></script>
<!-- <script src="<?= base_url('assets') ?>/front/vendor/owl.carousel/owl.carousel.min.js"></script> -->

<!-- Theme Base, Components and Settings -->
<script src="<?= base_url('assets') ?>/front/js/theme.min.js"></script>

<!-- Theme Custom -->
<script src="<?= base_url('assets') ?>/front/js/wow.min.js"></script>

<script src="<?= base_url('assets') ?>/front/js/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url('assets') ?>/front/js/common/common.min.js"></script>
<script src="<?= base_url('assets') ?>/front/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets') ?>/front/js/theme.js"></script>
<script src="<?= base_url('assets') ?>/front/js/theme.init.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="<?= base_url('assets') ?>/front/js/ls.bgset.min.js"></script>
<script src="<?= base_url('assets') ?>/front/js/lazysizes.min.js"></script>
<!-- <script src="<?= base_url('assets') ?>/front/js/examples/examples.gallery.js"></script> -->

<script>
    new WOW().init();
</script>

<!-- <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WC9WTSF');</script> -->

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v13.0" nonce="fwhFN9Lu"></script>

<script>
$(window).on("scroll",function(){$(window).scrollTop()>=600?$(".hilang-head").addClass("hilang-sticky"):$(".hilang-head").removeClass("hilang-sticky")}),$(document).ready(function(){var n=$("#menu-button"),i=$("#menuWrapper"),l=$("#close");n.on("click",function(){i.addClass("show-box")}),l.on("click",function(){i.removeClass("show-box")})});var i,linkCollapse=document.getElementsByClassName("child-toggle");for(i=0;i<linkCollapse.length;i++)linkCollapse[i].addEventListener("click",function(){this.nextElementSibling.classList.toggle("show-child-menus")});$(document).on("click",".menu-prosing",function(){$(this).addClass("active").siblings().removeClass("active")});

function toggleMessage(id, expand) {
    const messageElement = document.getElementById(id);
    const readMoreButton = messageElement.nextElementSibling;
    const readLessButton = readMoreButton.nextElementSibling;

    if (expand) {
        // Expand to full message
        messageElement.textContent = messageElement.getAttribute('data-full-message');
        readMoreButton.classList.add('d-none');
        readLessButton.classList.remove('d-none');
    } else {
        // Collapse to short message
        messageElement.textContent = messageElement.getAttribute('data-short-message');
        readMoreButton.classList.remove('d-none');
        readLessButton.classList.add('d-none');
    }
}

</script>

<script>
// const _unique_title = document.querySelector(".unique-title");
//   inView(_unique_title, (element) => {
//     animate(element, {y: [50, 0], opacity: [0, 1]}, {ease: "anticipate", duration: 1.5})
//     return (leaveInfo) => {
//       animate(element, {y: [0, 50], opacity: [1, 0]}, {ease: "anticipate", duration: 1.5})
//     }
//   })
  document.addEventListener("DOMContentLoaded", function () {
    const articles = document.querySelectorAll("#__unique-root .item");
    articles.forEach(article => {
      article.addEventListener("click", function () {
        articles.forEach(a => a.classList.remove("active"));
        this.classList.add("active");
      });
      article.addEventListener("mouseenter", function () {
        articles.forEach(a => a.classList.remove("active"));
        this.classList.add("active");
      });
    });
    $('.unique-slick').slick({
      autoplay: true,
      draggable: true,
      prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
      nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
      dots: false,
      fade: true,
      cssEase: 'linear',
      autoplaySpeed: 3000,
      speed: 1000,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
  });
</script>
<script>
  const _animate_items = document.querySelectorAll(".animate-items")
  
  inView(_animate_items, (element) => {
    animate(element, { opacity: [0, 1]}, {ease: "anticipate", duration: 1.5})
    return (leaveInfo) => {
      animate(element, { opacity: [1, 0]}, {ease: "anticipate", duration: 1.5})
    }
  })
</script>

<script src="https://unpkg.com/lenis@1.2.0/dist/lenis.min.js"></script>

<script>
  
const lenis = new Lenis({
  autoRaf: true,
});

lenis.on("scroll", (e) => {});

</script>

<script>
   
$(document).ready(function(){
  $('.slider').slick({
    autoplay: true,
    draggable: true,
    arrows: false,
    dots: false,
    fade: true,
    autoplaySpeed: 4000,
    speed: 2000,
    infinite: true,
  });
});

$(document).ready(function(){
  $('.rowdes2').slick({
    autoplay: false,
    draggable: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
    dots: false,
    autoplaySpeed: 3000,
    speed: 1000,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
  });
});

$(document).ready(function(){
  $('.product-slick').slick({
    autoplay: true,
    draggable: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
    dots: false,
    autoplaySpeed: 3000,
    speed: 1000,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
  });
});
$(document).ready(function(){
  $('.rooms-slick').slick({
    autoplay: true,
    draggable: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
    dots: false,
    autoplaySpeed: 3000,
    speed: 800,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
  });
});

$(document).ready(function(){
  $('.review-slide').slick({
    autoplay:false,
    draggable: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
    dots: false,
    autoplaySpeed: 5000,
    speed: 1000,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
  });
});

$(document).ready(function(){
  $('.slick-center').slick({
  centerMode: true,
  centerPadding: '0px',
  prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
  nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
  slidesToShow: 1,
  focusOnSelect: true,
  arrows: true,
  dots: false,
  autoplay: true,
  autoplaySpeed: 4000,
  speed: 1000,
  infinite: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: true,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
});

$(document).ready(function(){
  $('.slick-cent22').slick({
  centerMode: true,
  centerPadding: '0px',
  prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
  nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
  slidesToShow: 1,
  focusOnSelect: true,
  arrows: false,
  dots: false,
  autoplay: true,
  autoplaySpeed: 4000,
  speed: 1000,
  infinite: true,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
});
 
</script>

 <script type="text/javascript"> function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: "id", autoDisplay: false }, "google_translate_element2"); } </script> <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script> <script type="text/javascript"> eval(function(e,t,n,r,a,c){if(a=function(e){return(e<43?"":a(parseInt(e/43)))+((e%=43)>35?String.fromCharCode(e+29):e.toString(36))},!"".replace(/^/,String)){for(;n--;)c[a(n)]=r[n]||a(n);r=[function(e){return c[e]}],a=function(){return"\\w+"},n=1}for(;n--;)r[n]&&(e=e.replace(new RegExp("\\b"+a(n)+"\\b","g"),r[n]));return e}("6 7(a,b){n{4(2.9){3 c=2.9(\"o\");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s('t'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a=='')v;3 b=a.w('|')[1];3 c;3 d=2.x('y');z(3 i=0;i<d.5;i++)4(d[i].A=='B-C-D')c=d[i];4(2.j('k')==E||2.j('k').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,'m');7(c,'m')}}",0,43,"||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500".split("|"),0,{})) </script>


    <?= $func->xview_footer() ?>

</body>

</html>