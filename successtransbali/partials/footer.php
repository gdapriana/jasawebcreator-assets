<?= $func->load('home/home_call') ?>

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
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 20px !important;
        font-weight: 600 !important;
        margin-bottom: 20px;
        color: var(--color2) !important;
    }

    .text-footer {
        margin-bottom: 0;
        font-family: var(--subtext);
        color: var(--color2);
        letter-spacing: 0.5px;
        text-align: left;
    }

    .text-foot b {
        font-weight: 500;
    }

    .text-foot {
        font-family: var(--subtext);
        color: var(--color2);
        margin-bottom: 3px;
        font-size: 14px;
    }

    .text-foot i { color:var(--colors) }

    .text-foot a {
        color: var(--color2) !important;
  }

    a.scroll-to-top.hidden-mobile.visible { display: none; }

    .img-avail { height: 53px; margin-bottom: 5px; }

    
p.text-foot.text-foot-linkk {
    font-size: 14px;
    margin-bottom: 10px;
}

p.text-foot.text-foot-linkk a { cursor: pointer; transition: all ease 500ms; }

p.text-foot.text-foot-linkk a:hover { color: var(--colors) !important; transition: all ease 500ms; }

@media (min-width: 768px) {
    .logo-footer {
        height: 70px;
        margin-bottom: 10px;
        object-fit: cover;
        filter: invert(1);
    }
}

@media (max-width: 768px) {
    .text-sm-center { text-align:center; }

    .logo-footer {
        height: 70px;
        margin-bottom: 10px;
        filter: invert(1);
    }

    .text-footer { text-align:center; }
}

.social-icons:not(.social-icons-clean) li a {
    background: var(--colors);
    color: white !important;
}

.social-icons li a { color: #111827 !important; }

.social-icons li a i {
    line-height: 28px;
    color: var(--color2);
}

ul.header-social-icons.social-icons { text-align: right; }

html .scroll-to-top { display: none; }

#footer.short {
    padding: 0;
    padding-top: 50px;
}

.foot-style {
    background-color: #f9f9f9 !important; border-color: #f9f9f9 !important;
}

.foot-style-2 {
    border-top:1px solid #cbcbcb; position: relative; background: #f9f9f9; margin-left: 7%; margin-right: 7%;
}

.fixwa { left: auto; right: 20px; bottom: 20px }

.share-icons { width: 50px }

.chat-wa {
    position: fixed;
    bottom: 5%;
    right: 3%;
    z-index: 1000;
}

.btn-chat-wa {
    background: #25d366;
    font-family: var(--subtext);
    color: white;
    border-radius: 100px;
    transition: all ease 500ms;
}

</style>

<footer id="footer" class="foot-style short mt-0">
    <div class="container-global wow fadeInUp">
        <div class="row wow fadeIn" data-wow-duration="2s">

            <div class="col-md-3 mb-4 mb-md-0">
                <!-- <img loading="lazy" class="img-fluid logo-footer mb-4" src="<?= $data->web->site_logo_alternative ?>" alt="Logo <?= $data->web->site_name ?>"> -->

                <h4 class="title-foot-default">Opening Hours</h4>

                <p class="text-foot mb-3"><strong>Office:</strong> Open daily from 8:00 AM to 11:00 PM for inquiries and bookings.</p>
                <p class="text-foot"><strong>Airport Counter:</strong> Available from 7:00 AM to 1:00 AM to assist with on-the-spot services and last-minute bookings.</p>

                <img class="img-fluid w-100 mt-3" style="border-radius: 10px; overflow: hidden;" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737190155-18-01-2025-qwRTF0uZQdti1CnkpIvOYDNKoBm2Ug65.webp" alt="Counter & Ready Line">

                <img class="img-fluid w-100 mt-3" style="border-radius: 10px; overflow: hidden;" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737366477-20-01-2025-wXklE8RA9qLdvgx1rsNuPJ6ayUBWVcOC.webp" alt="Counter & Ready Line">
            </div>

            <div class="col-md-3 mb-4 mb-md-0">
                <h4 class="title-foot-default">Contact Information</h4>
                <p class="text-foot"><i class="fa-solid fa-location-dot mr-2"></i><?= $data->company->company_address ?></p>
                <p class="text-foot"><i class="fa-solid fa-square-phone mr-2"></i><a href="<?= $func->dm_telphone() ?>"><?= $data->company->company_telp ?></a></p>
                <p class="text-foot"><i class="fa-solid fa-envelope mr-2"></i><a href="<?= $func->dm_email() ?>"><?= $data->company->company_email ?></a></p>
                <p class="text-foot"><i class="fa-brands fa-whatsapp mr-2"></i><a href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%2C%20I%20got%20this%20WhatsApp%20contact%20from%20the%20website%20https%3A%2F%2Fsuccesstransbali.com.%20I%20have%20a%20few%20questions%2C%20can%20you%20help%3F">+<?= $data->social->whatsapp ?></a></p> 

            </div>

            <div class="col-md-3 mb-4 mb-md-0">
                <h4 class="title-foot-default">Useful Links</h4>
                
                <p class="text-foot text-foot-linkk"><i class="fas fa-arrow-right mr-3"></i><a href="<?= base_url() ?>/about-us">About Us</a></p>

                <p class="text-foot text-foot-linkk"><i class="fas fa-arrow-right mr-3"></i><a href="<?= base_url() ?>/terms-conditions">Terms & Conditions</a></p>

                <p class="text-foot text-foot-linkk"><i class="fas fa-arrow-right mr-3"></i><a href="<?= base_url() ?>/privacy-policy">Privacy Policy</a></p>

                <p class="text-foot text-foot-linkk"><i class="fas fa-arrow-right mr-3"></i><a href="<?= base_url() ?>/category/self-drive-car-rental">Self Drive Car Rental</a></p>

                <p class="text-foot text-foot-linkk"><i class="fas fa-arrow-right mr-3"></i><a href="<?= base_url() ?>/category/bali-tour-packages">Bali Tour Packages</a></p>
               

            </div>

            <div class="col-md-3 mb-4 mb-md-0">
                <h4 class="title-foot-default">Office Location</h4>

                <iframe class="mb-2" src="<?= $data->google_maps ?>" width="100%" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>

                <h4 class="title-foot-default">Counter Location</h4>

                <img class="img-fluid" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737602860-23-01-2025-r7aLJP42xXuwiqIlyYO01RMF5jHfoQn8.png" alt="Counter Location">
            </div>

        </div>
    </div>

    <div class="py-3 py-md-4 mt-4 text-sm-center foot-style-2">

        <div class="row">
            <div class="col-md-8 mb-md-0 mb-3">
                <p class="text-footer">© Copyright <?= date('Y') ?> <?= $data->web->site_name ?>. All Rights Reserved. Powered By <a href="https://jasawebcreator.com/"><b style="color: var(--colors)">Jasa Web Creator</b></a></p>
            </div>

            <div class="col-md-4 mb-0">
                <ul class="header-social-icons social-icons">
                   <li class="social-icons-facebook"><a href="<?= $data->social->facebook_url ?>" target="_blank" rel="noopener" rel="noreferrer" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                   <li class="social-icons-instagram"><a href="<?= $data->social->instagram_url ?>" target="_blank" rel="noopener" rel="noreferrer" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                   <li class="social-icons-youtube"><a href="<?= $data->social->youtube_url ?>" target="_blank" rel="noopener" rel="noreferrer" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                   <li class="social-icons-tiktok"><a href="<?= $data->social->twitter_url ?>" target="_blank" rel="noopener" rel="noreferrer" title="Tiktok"><i class="fab fa-tiktok"></i></a></li>
                </ul>
            </div>
        </div>

    </div>

</footer>
</div>

<!-- <div class="fixed-bottom fixwa" style="left: auto; right: 20px; bottom: 20px">
    <div class="share-icons" style="width: 50px">
        <div id="sosmed" class="sosmed">
            <a title="Whatsapp" class="whatsapp" href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%2C%20I%20got%20this%20WhatsApp%20contact%20from%20the%20website%20https%3A%2F%2Fsuccesstransbali.com.%20I%20have%20a%20few%20questions%2C%20can%20you%20help%3F" class="text-decoration-none"><i class="fab fa-whatsapp icon-custom"></i></a>
        </div>
    </div>
</div> -->

<div class="chat-wa">
    <a class="btn btn-chat-wa" href="https://api.whatsapp.com/send?phone=<?= $data->social->whatsapp ?>&text=Hello%2C%20I%20got%20this%20WhatsApp%20contact%20from%20the%20website%20https%3A%2F%2Fsuccesstransbali.com.%20I%20have%20a%20few%20questions%2C%20can%20you%20help%3F"><i class="fab fa-whatsapp mr-2"></i>Chat via Whatsapp</a>
</div>


<!-- Vendor -->
<?= $func->script("vendor/popper/umd/popper.min.js") ?>
<script src="<?= base_url('assets') ?>/front/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets') ?>/front/vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="<?= base_url('assets') ?>/front/vendor/bootstrap/js/bootstrap.min.js"></script>
<?= $func->script("vendor/magnific-popup/jquery.magnific-popup.min.js") ?>
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
   
$(document).ready(function(){
  $('.slider').slick({
    autoplay: true,
    draggable: true,
    arrows: false,
    dots: false,
    fade: true,
    autoplaySpeed: 4000,
    speed: 1000,
    infinite: true,
  });
});


$(document).ready(function(){
  $('.img-air').slick({
    autoplay: false,
    draggable: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
    dots: false,
    autoplaySpeed: 3000,
    speed: 1000,
    infinite: true,
    slidesToShow: 1,
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
        slidesToShow: 1,
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
  $('.product-slick').slick({
    autoplay: false,
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

$(document).ready(function () {
    // Inisialisasi Slick.js
    $('.propro').slick({
        autoplay: false,
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
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });
});

$(document).ready(function () {
    // Inisialisasi Slick.js
    $('.propro1').slick({
        autoplay: false,
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
                    slidesToShow: 1,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
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

$(document).ready(function () {
    // Inisialisasi Slick.js
    $('.propro2').slick({
        autoplay: false,
        draggable: true,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
        dots: false,
        autoplaySpeed: 3000,
        speed: 1000,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: false
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
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }
        ]
    });
});

$(document).ready(function(){
  $('.review-slide').slick({
    autoplay: true,
    draggable: true,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-chevron-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-chevron-right"></i></button>',
    dots: false,
    autoplaySpeed: 5000,
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
  $('.carousel-wall').slick({
    autoplay: true,           // Aktifkan autoplay
    autoplaySpeed: 0,         // Tidak ada jeda antara slide
    speed: 9000,              // Kecepatan transisi slide
    cssEase: 'linear',        // Efek transisi linear seperti marquee
    slidesToShow: 6,          // Jumlah slide yang ditampilkan sekaligus
    slidesToScroll: 1,        // Jumlah slide yang bergeser setiap kali
    infinite: true,           // Looping tanpa batas
    arrows: false,            // Sembunyikan navigasi panah
    dots: false,              // Sembunyikan navigasi dots
    pauseOnHover: false,      // Autoplay tidak berhenti saat hover

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
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
  ]

  });
});


$(document).ready(function(){
  $('.carousel-wall1').slick({
    autoplay: true,
    autoplaySpeed: 0,
    speed: 9000,
    cssEase: 'linear',
    slidesToShow: 6,
    slidesToScroll: 1,
    infinite: true,
    arrows: false,
    dots: false,
    pauseOnHover: false,

    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
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
        slidesToShow: 2,
        slidesToScroll: 1
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