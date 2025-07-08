<?php 
$types = array('default','boxed','side_header');
$side = 'left';
$logo = 'true';
/*style header*/
$selected = 'default'; ?>

<!DOCTYPE html>
<html lang="en" class="
<?php if($types[1] == $selected){
	echo 'boxed';
	}elseif($types[2] == $selected){
		if($side == 'right'){
			echo 'side-header side-header-right';

			}else{
				echo 'side-header';
			}
			}else{

			}
			?>
			">
			<head>

				<!-- Basic -->
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
				<?= $func->redirectToHTTPS() ?>  

				<?= $func->favicon() ?>

				<title><?= $func->title_bar() ?></title>

				<?php if ($data->site_position == 'home'): ?>
					<meta name="description" content="<?= $data->web->site_desc ?>">
					<meta name="keywords" content="<?= $data->web->site_keyword ?>">
					<meta name="title" content="<?= $data->web->site_name ?>">
				<?php elseif ($data->site_position == 'view_blog'): ?>
                    <meta name="description" content="<?= $data->result->seo_content ?>">
                    <meta name="keywords" content="<?= $data->result->seo_keyword ?>">
                    <meta name="title" content="<?= $data->result->seo_title ?>">
                <?php endif ?>

				<?= $func->meta_tag() ?>

				<!-- Mobile Metas -->
				<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

				<!-- Web Fonts  -->
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


				<!-- Vendor CSS -->
				<link href="<?= base_url('assets') ?>/front/vendor/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
				<link href="<?= base_url('assets') ?>/front/vendor/animate/animate.min.css" type="text/css" rel="stylesheet">
                <!-- <link href="<?= base_url('assets') ?>/front/vendor/owl.carousel/assets/owl.carousel.min.css" type="text/css" rel="stylesheet">
                <link href="<?= base_url('assets') ?>/front/vendor/owl.carousel/assets/owl.theme.default.min.css" type="text/css" rel="stylesheet"> -->

				 <?= $func->style("vendor/magnific-popup/magnific-popup.min.css") ?>
				<!-- Theme CSS -->
				<link href="<?= base_url('assets') ?>/front/css/theme.css" type="text/css" rel="stylesheet">
				<link href="<?= base_url('assets') ?>/front/css/theme-elements.css" type="text/css" rel="stylesheet">
				<link href="<?= base_url('assets') ?>/front/css/style-tour.css" type="text/css" rel="stylesheet">
				<link href="<?= base_url('assets') ?>/front/css/colors.css" type="text/css" rel="stylesheet">

                <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

				<!-- Current Page CSS -->
				<link href="<?= base_url('assets') ?>/front/vendor/rs-plugin/css/settings.css" type="text/css" rel="stylesheet">
				<link href="<?= base_url('assets') ?>/front/vendor/rs-plugin/css/navigation.css" type="text/css" rel="stylesheet">
				
<style>
:root{
	/*default*/	
	--boxed: #5f758d;
	--body: #e8f5e9;
	--colors:#41a543;
	--color2: #ffd601;
    --color3: #de262a;
    --background: #f3f5ea;
    --primtext: 'Teko';
    --subtext: 'Roboto';
}

i.fas.fa-chevron-down {
    display: none;
}

@media (min-width: 768px) {
    #header .header-nav.header-nav-stripe nav>ul>li.open>a, #header .header-nav.header-nav-stripe nav>ul>li:hover>a {
        border-radius: 5px !important;
        color: white !important;
    }
}

html.sticky-header-enabled #header.header-transparent:not(.header-transparent-not-fixed) .header-body { position:relative !important; }

.header-body {
    background-color: transparent !important;
    border: unset !important;
    transition: all ease 500ms;
}

html:not(.sticky-header-active) .header-body { margin-top: 10px !important; transition: all ease 1000ms !important; }

html:not(.sticky-header-active) #header.header-transparent .header-nav-main:not(.header-nav-main-dark) nav>ul>li>a {
    color: #000;
}

html:not(.sticky-header-active) #header.header-transparent .header-nav-main:not(.header-nav-main-dark) nav>ul>li>a.dropdown-toggle:after {
    border-color: #fff transparent transparent transparent;
}

#header .header-nav-main nav>ul>li.dropdown .dropdown-menu li a { font-family: var(--subtext); }

@media (max-width: 768px) {
    html:not(.sticky-header-active) .header-body {
        margin-top: 0px !important;
    }
}

#header .header-nav.header-nav-stripe nav>ul>li>a {
    color: #000;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 0px;
    font-family: var(--subtext);
    text-transform: capitalize;
    padding: 0 5px;
}

html.sticky-header-active #header.header-transparent .header-body { transition: all ease 1000ms !important; }

html.sticky-header-active #header.header-transparent .header-body:before {
    opacity: 1;
    background-color: #fff !important;
    backdrop-filter: saturate(180%) blur(20px);
    border: unset !important;
    border-bottom: 5px solid var(--colors) !important;
    transition: all ease 500ms !important;
}

@media (min-width: 768px) {
	#header .header-nav.header-nav-stripe nav>ul>li>a {
	    padding: 0 10px!important;
	    min-height: 50px;

	    height: 50px;
	}

	#header .header-nav.header-nav-stripe nav>ul>li.open>a, #header .header-nav.header-nav-stripe nav>ul>li:hover>a {
	    background-color: var(--colors);
	}

    <?php if ($data->site_position != 'home'): ?>
        #header.header-no-min-height .header-body {
            margin-top: 0 !important;
        }

        html.sticky-header-active #header .header-body { background:white !important; }
    <?php endif ?>
}

@media (min-width: 768px) {
    #header .header-nav.header-nav-stripe nav>ul>li>a.dropdown-toggle:after {
        border-color: #000 transparent transparent transparent !important;
    }
}

@media (max-width: 768px) {
	#menu-button {
	    border-color: #111;
	    color: #111;
	    margin-left: 10px;
      border: unset !important;
	}
  
  .menu-tour a { font-family: var(--primtext); }

    #menuWrapper.show-box {
        opacity: 1;
        visibility: visible;
    }
    #menuWrapper {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: #fff;
        z-index: 99999;
        opacity: 0;
        visibility: hidden;
        transition: all ease .5s;
    }

    #menuWrapper #close {
        color: var(--colors);
        position: absolute;
        top: 15px;
        right: 20px;
        width: 42px;
        height: 35px;
        font-size: 20px;
        background: 0 0;
        z-index: 1;
        border: none;
    }

    #menuWrapper .container {
        height: 100%;
    }

    .menu-tour ul {
        position: relative;
        padding: 0;
        top: 2%;
        left: 0;
        right: 0;
        text-align: left;
        list-style: none;
    }

    .menu-tour li {
        padding: 10px;
        border-bottom: 1px solid #eee;
        margin: unset;
    }

    .menu-tour a {
        color: #12265a;
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 1px;
    }

}


@media (max-width: 768px) {
	.logo-menu {
		align-items: flex-start !important;
	}

	.menu-andro {
		justify-content: center !important;
	}

	.menu-andro {
    	justify-content: flex-end !important;
    	margin-right: 10px;
    }

    .header-logo {
    	margin-left: 10px !important;
    }

	#menuWrapper {
		overflow: scroll;
	}
}


/* Section All Page */

.section-allpage {
    position: relative;
    height: 350px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

.section-allpage .text p {
    color: #fff;
    letter-spacing: 0.5px;
    font-size: 17px;
    font-family: var(--subtext);
}
.section-allpage .text h1 {
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 800;
    color: #fff;
    font-size: 45px;
    line-height: 50px;
    margin-bottom: 15px;
}
.section-allpage .text {
    position: absolute;
    left: 0;
    right: 0;
    text-align: center;
    top: 35%;
    z-index: 1;
    font-family: var(--primtext);
}

@media (max-width: 768px) {
    .section-allpage {
        height: 180px;
    }

    .section-allpage .text h1 {
        font-size: 20px;
        line-height: 30px;
        letter-spacing: 0px;
        margin-bottom: 5px;
    }

    .section-allpage .text p {
        letter-spacing: 0.5px;
        font-size: 13px;
    }

    .section-allpage .text {
        top: 31%;
    }
}

/* ======= Patern ===== */
.back-patt {
    position: relative;
}
.back-patt .patern {
    position: absolute;
    left: 0;
    z-index: 3;
}
.back-patt .patern.top {
    top: -1px;
    transform: rotate(180deg);
}
.back-patt .patern.bottom {
    bottom: -1px;
}
.back-patt .background {
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    /* opacity: .7; */
    filter: brightness(.7);
    position: absolute;
    background-size: cover;
    background-position: center;
    background-image: url(https://jwc.gotra-resources.my.id/web-upload/1724664904-26-08-2024-N3Bb0nLmP4TuDhoWRUtkpdJfyzlvHaOI.webp);
}

/* Blog */

.blog-sec {
    font-family: var(--primtext);
}
.blog-sec .card img {
    aspect-ratio: 4/3.5;
    object-fit: cover;
    object-position: center;
    clip-path: polygon(15% 0%, 100% 0, 100% 87%, 85% 100%, 0 100%, 0% 13%);
}
.blog-sec .card .info {
    font-size: 18px;
    letter-spacing: 1px;
    color: #000000;
}
.blog-sec .card h5 {
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 600;
    color: #000000;
    font-family: var(--primtext);
    font-size: 25px;
    line-height: 28px;
    margin-bottom: 10px;
    transition: ease-in-out .3s;
}
.blog-sec .card .btn i {
    transform: rotate(-45deg);
}
.blog-sec .card .btn {
    color: #000000;
    font-family: var(--primtext);
    letter-spacing: 1px;
    font-weight: 500;
    font-size: 20px;
    transition: ease-in-out .3s;
    /* text-shadow: 1px 1px 0 #00000030; */
}
.blog-sec .card h5:hover {
    color: var(--colors);
}
.blog-sec .card .btn:hover {
    color: var(--color2);
    text-shadow: .5px .5px 0 #00000080;
}
.blog-sec .card .btn:hover .btn::after {
    co
}
@media (max-width: 768px ) {

    .blog-sec .card h5 { font-size:22px; }

	.col-6.col-md-3.mb-3 {
	    padding: 0px 5px;
	}

    .display-pc-share {
        display: none;
    }

    .header-logo img {
      height: 35px !important;
    }
}

@media ( min-width: 768px ) {
    .display-pc-share {
        display: flex;
    }
}

@media (min-width: 768px) {
    .container-global { padding-left: 7%; padding-right: 7% }
}

@media ( max-width: 768px ) {
   .container-global { padding-left: 5%; padding-right: 5% }
}

span.text-wid {
    font-family: var(--primtext);
    color: #fff;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 0px;
}

.social-icons:not(.social-icons-clean) li a {
    color: var(--colors) !important;
}

.btn-book-atas {
    font-family: var(--subtext);
    background: var(--colors);
    color: #fff;
    text-transform: capitalize;
    border-radius: 100px;
    margin-left: 15px;
    padding: 7px 23px;
    font-weight: 500;
    font-size: 14px;
    margin-top: 5px;
}

.btn-book-atas:hover {
    background: #1a1a1a;
    color: white;
}

a { text-decoration:unset !important; }


.title-product {position:relative;}

.title-product span {
    color: var(--color2);
    text-transform: uppercase;
    font-weight: 700;
    font-family: var(--primtext);
    display: block;
    letter-spacing: 1px;
    font-size: 15px;
    margin-bottom: 10px;
}
.tipro span.tit {
    font-family: var(--primtext);
    text-transform: uppercase;
    font-size: 100px;
    line-height: 30px;
    font-weight: 800;
    letter-spacing: 3px;
    opacity: 0.15;
    position: absolute;
    z-index: 1;
    left: 0;
    top: 30%;
    right: 0;
    color: #f1f1f1;
    text-shadow: 1px 1px 0 rgba(0,0,0 , .5), -1px -1px 0 rgba(0,0,0 , .5), 1px -1px 0 rgba(0,0,0 , .5), -1px 1px 0 rgba(0,0,0 , .5), 1px 1px 0 rgba(0,0,0 , .5);
    -webkit-text-fill-color: #fff;
}

.title-product h2 span {
    color: #12265a;
    font-weight: 800;
    font-size: unset;
    text-transform: unset;
    display: unset;
    letter-spacing: unset;
    padding: 0px 5px;
    position: relative;
}

.title-product h2 {
    font-weight: 600;
    font-family: var(--primtext);
    color: #000;
    letter-spacing: 1px;
    font-size: 50px;
    line-height: 55px;
    text-transform: uppercase;
    margin-bottom: 35px;
    margin-top: 30px;
    position: relative;
    z-index: 3;
}



@media screen and (max-width: 576px) {
    .title-product h2 {
        font-size: 35px;
        line-height: 40px;
        margin-bottom: 20px !important;
    }

    .tipro span.tit {
        font-size: 50px;
        line-height: 30px;;
        opacity: 0.15;
        top: 15%;
    }

    .tirev { margin:0 !important; }

    .title-product h2 span { display:block; width: max-content; margin: auto; }

    .title-product p { margin-bottom: 25px; }

    .title-product span {
        font-size: 13px;
        margin-bottom: 10px;
    }
}
@media screen and (max-width: 375px) {
    .tipro span.tit {
        font-size: 40px;
    }
}
.ss-arrow button {
    margin: 0;
    padding: 0;
    background: white;
    border: 1px solid var(--colors);
    height: 30px;
    width: 30px;
    font-size: 12px;
    transform: scale(1.5);
    color: var(--colors);
    border-radius: 100px;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
    
.ss-arrow .slide-arrow{
  position: absolute;
  top: 44% !important;
  margin-top: -15px;
}
.ss-arrow .prev-arrow{
  left: -1%;
  z-index: 1;
}
.ss-arrow .next-arrow{
  right: -1%;
  z-index: 1;
}

.blog-slide button { transform: scale(1.1); }

@media (max-width: 768px) {

    .pad6rem { padding: 3rem 0 !important; }

  .ss-arrow button { transform: scale(1); }

  .ss-arrow .slide-arrow { top: 45%; }

  .ss-arrow .prev-arrow{
      left: -1%;
      z-index: 1;
    }
}

.slick-dots {
    display: flex;
    justify-content: center;
    margin: 0;
    padding: 3rem 0 0;
    list-style-type: none;
}
    
 .slick-dots button {
    display: block;
    width: 0.6rem !important;
    height: 0.6rem !important;
    padding: 0;
    border: none !important;
    border-radius: 100%;
    transform: scale(1.0) !important;
    background-color: #bababa !important;
    text-indent: -9999px;
}

 .slick-dots li {
    margin: 0 0.25rem;
}

 .slick-dots li.slick-active button {
    background-color: var(--colors) !important;
}

/* Cate */

* { scroll-behavior:smooth; }

.smooth-slide {
    position: relative;
    bottom: 100px;
}

.pad6rem { padding:5rem 0; }

.head-sty {
    height: 74px;
    padding-top: 12px;
    padding-bottom: 14px;
    background: white;
    border-radius: 100px;
    margin: 0 7%;
    margin-top: 15px;
    padding-left: 30px;
    padding-right: 30px;
}

@media (max-width: 768px) {
  .pad6rem { padding:3rem 0; }

  .head-sty { height: 50px; padding-top: 0px; padding-bottom: 0px; padding-left:2%; padding-right:2%; }
}


/* Our Services */

.product .card {
    position: relative;
    overflow: hidden;
    border-radius: 0;
    box-shadow: 100px 100px 10px #000;
    clip-path: polygon(7% 0%, 100% 0, 100% 90%, 92% 100%, 0 100%, 0% 10%);
}

.product .card .shadow {
    position: absolute;
    top: 0%;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    z-index: 3;
    clip-path: polygon(7% 0%, 100% 0, 100% 90%, 92% 100%, 0 100%, 0% 10%);
    transform: scale(.99);
}
.product .card .shadow:after {
    position: relative;
    content: '';
    top: 20%;
    left: 0;
    transition: all ease 500ms;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    width: 100%;
    height: 80%;
    background: transparent linear-gradient(180deg, rgb(13 28 52 / 0) 0, #000000 100%) 0 0 no-repeat padding-box;
}
.product .card .tag-price {
    position: absolute;
    top: 1rem;
    right: 1rem;
    color: #000;
    z-index: 4;
    background: var(--color2);
    font-family: var(--primtext);
    font-size: 20px;
    line-height: 30px;
    letter-spacing: 2px;
    padding: .8rem 2.2rem;
    clip-path: polygon(10% 0%, 100% 0, 100% 85%, 90% 100%, 0 100%, 0% 15%);
}
.product .card img {

    transform: scale(.99);
    clip-path: polygon(7% 0%, 100% 0, 100% 90%, 92% 100%, 0 100%, 0% 10%);
}
.product .card .card-img-overlay {
    bottom: 0;
    height: max-content;
    top: unset;
    z-index: 4;
}
.product .card h5 {
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 600;
    color: #fff;
    font-family: var(--primtext);
    font-size: 28px;
    line-height: 32px;
    margin-bottom: 10px;
}
.product .card p {
    letter-spacing: .5px;
    font-weight: 400;
    color: #fff;
    font-family: var(--subtext);
    font-size: 14px;
    line-height: 21px;
    margin-bottom: 10px;
}
.product .card h6 {
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 600;
    color: #fff;
    font-family: var(--primtext);
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 10px;
}
.product .card .include {
    color: #fff;
    font-family: var(--subtext);
    font-size: 15px;
    flex-wrap: wrap;
}
.product .card .btn {
    color: #fff;
    background: var(--colors);
    padding: .6rem 1.2rem;
    font-family: var(--primtext);
    letter-spacing: 1px;
    font-weight: 500;
    font-size: 17px;
    border-radius: 0;
    line-height: 18px;
    margin-top: 5px;
    transition: ease-in-out .3s;
}



.paducus {
    background: var(--background); 
    margin: 0px 20px; 
    border-radius: 20px;
}


.concus {
    padding-left: 2%;
    padding-right: 2%;
}

@media (max-width: 768px) {

    .product .card img {
        height: 270px;
        object-fit: cover;
    }

    .product .card .tag-price {
        font-size: 15px;
        line-height: 30px;
        letter-spacing: 2px;
        padding: 3px 13px;
    }

    .product .card .include { font-size:11px; }

    .product .card h5 {
        font-size: 20px;
        line-height: 32px;
        margin-bottom: 5px;
    }

    .paducus {
        margin: 0px 0px;
    }

}


</style>

<!-- Head Libs -->
<!-- <script src="<?= base_url('assets') ?>/front/vendor/modernizr/modernizr.min.js" defer></script> -->
<?= $func->xview_header() ?>
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
	<!-- <?= $func->fb_sdk() ?> -->
	
	<div class="body">
		<header id="header" class="header-no-min-height <?= $data->site_position == "home" || $data->site_position == "view_product" ? ' header-transparent' : '' ?>" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 600, 'stickySetTop': '0'}">
				<div class="header-body wow fadeIn" data-wow-duration="2s">

					<!-- <div class="header-container container-fluid hilang-head d-none d-md-flex" style="padding: 0px 30px; height: 50px; border-bottom: 1px solid #e1e1e1; background-color: var(--colors);">
						<div class="header-row container" style="padding: 0;">

							<div class="header-column justify-content-start display-pc" style="align-self: center;">
                <ul class="header-social-icons social-icons display-pc" style="margin-left: 0;">
                    <?php if (!empty($data->social->facebook_url)): ?>
                        <li class="social-icons-facebook"><a href="<?= $data->social->facebook_url ?>"  title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <?php endif ?>
                    <?php if (!empty($data->social->twitter_url)): ?>
                        <li class="social-icons-twitter"><a href="<?= $data->social->twitter_url ?>"  title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <?php endif ?>
                    <?php if (!empty($data->social->instagram_url)): ?>
                        <li class="social-icons-instagram"><a href="<?= $data->social->instagram_url ?>"  title="Instagram"><i class="fab fa-instagram"></i></a></li>
                    <?php endif ?>
                    <?php if (!empty($data->social->youtube_url)): ?>
                        <li class="social-icons-youtube"><a href="<?= $data->social->youtube_url ?>"  title="Youtube"><i class="fab fa-youtube"></i></a></li>
                    <?php endif ?>
                    <?php if (!empty($data->social->googleplus_url)): ?>
                        <li class="social-icons-googleplus"><a href="<?= $data->social->googleplus_url ?>"  title="Google+"><i class="fab fa-google-plus-g"></i></a></li>
                    <?php endif ?>
                </ul>
							</div>

							<div class="header-column justify-content-end sosmed-i" style="display: inline-block; align-self: center;">
								<span class="text-wid" style="padding-left: 10px;"><i class="fas fa-phone phone"></i><?= $data->company->company_telp; ?></span>
								<span class="text-wid"><i class="far fa-envelope mail"></i><?= $data->company->company_email; ?></span>
							</div>

						</div>
					</div> -->

					<div class="header-container container-global head-sty">
						<div class="header-row">

							<div class="header-column justify-content-start logo-menu" style="align-self: center; align-items: baseline;">
								<div class="header-logo">
									<a href="<?= base_url() ?>">
										<img style="height: 55px; object-fit: cover;" class="img-fluid" alt="logo 1" src="<?= $data->web->site_logo_alternative ?>">
									</a>
								</div>
							</div>
							
							<div class="header-column justify-content-start">
                <div class="header-row menu-andro">
                  <div class="header-nav header-nav-stripe">
                    <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                      <nav class="collapse">
                        <ul class="nav nav-pills" id="mainNav">
                          <li class="nav-item"><a title="Home" class="nav-link" href="<?= base_url() ?>">Home </a></li>
                          <?php foreach ($data->menu->primary_menu as $menu) : ?>
                                                        <?php $arrayi = json_decode(json_encode($menu), true); ?>
                            <?php if (array_key_exists('child', $arrayi)) : ?>
                              <li class="dropdown">
                                <a class="dropdown-item dropdown-toggle" href="javascript:void(0);" title="<?= $menu->label ?>"><?= $menu->label ?></a>

                                <ul class="dropdown-menu">
                                  <?php foreach ($menu->child as $menis) : ?>
                                                                        <?php $arrayis = json_decode(json_encode($menis), true); ?>
                                    <?php if (array_key_exists('child', $arrayis)) : ?>
                                      <li class="dropdown-submenu">
                                        <a class="dropdown-item" href="javascript:void(0);" title="<?= $menis->label ?>"><?= $menis->label ?></a>
                                        <ul class="dropdown-menu">
                                          <?php foreach ($menis->child as $key => $menis) : ?>
                                            <li><a class="dropdown-item" href="<?= $menis->link ?>" title="<?= $menis->label ?>"><?= $menis->label ?></a></li>
                                          <?php endforeach ?>
                                        </ul>
                                      </li>
                                      <?php else : ?>
                                        <li><a class="dropdown-item" href="<?= $menis->link ?>" title="<?= $menis->label ?>"><?= $menis->label ?></a></li>
                                      <?php endif ?>
                                    <?php endforeach ?>                                                            
                                  </ul>

                                </li>
                                <?php else : ?>
                                  <li><a class="nav-link" href="<?= $menu->link ?>" title="<?= $menu->label ?>"><?= $menu->label ?></a></li>
                                <?php endif ?>
                                
                                
                              <?php endforeach ?> 

                            </ul>
                          </nav>
                        </div>

                        <style type="text/css">                  
                            .b-p-bg-color .bar1, .b-p-bg-color .bar2, .b-p-bg-color .bar3 {
                              width: 30px;
                              height: 3px;
                              margin: 6px 0;
                              transition: 0.4s;
                            }

                            .b-p-bg-color .bar1, .b-p-bg-color .bar2, .b-p-bg-color .bar3 { background-color:#12265a; }

                           /*  html.sticky-header-active .b-p-bg-color .bar1 { background-color:white }
                            html.sticky-header-active .b-p-bg-color .bar2 { background-color:white }
                            html.sticky-header-active .b-p-bg-color .bar3 { background-color:white }

                            <?php if ($data->site_position != 'home'): ?>
                                .b-p-bg-color .bar1, .b-p-bg-color .bar2, .b-p-bg-color .bar3 { background-color:#fff !important; }
                            <?php endif ?> */

                            .b-p-bg-color .bar2 { width: 20px; margin:0 0 0 auto; }

                        </style>

                        <button class="menu b-p-bg-color d-block d-md-none" id="menu-button">
                           <div class="bar1"></div>
                           <div class="bar2"></div>
                           <div class="bar3"></div>                                    
                        </button>
                        <div class="menu-box" id="menuWrapper">
                            <button id="close" class="p-color"><i style="font-size:24px" class="fa">&#xf00d;</i></button>
                            <div class="container menu-tour">
                                <ul>

                                    <a href="<?= base_url() ?>">
                                        <img style="height: 60px;" alt="logo 2" class="img-fluid mb-2" loading="lazy" src="<?= $data->web->site_logo_alternative ?>" alt="<?= $data->web->site_name ?>">
                                    </a>

                                    <li>
                                        <a href="<?= base_url() ?>">Home</a>
                                    </li>

                                <?php foreach ($data->menu->primary_menu as $menus) : ?>
                                    <?php $arrayisi = json_decode(json_encode($menus), true); ?>
                                    <?php if (array_key_exists('child', $arrayisi)) : ?>
                                    <li class="position-relative">

                                        <a href="<?= $menus->link ?>"><?= $menus->label ?></a>
                                        <i class="fa fa-chevron-down child-icon child-toggle"></i>
                                        <ul class="ul-child child-menus">
                                        <?php foreach ($menus->child as $menuc) : ?>
                                            <li>
                                                <a href="<?= $menuc->link ?>"><?= $menuc->label ?></a>  
                                            </li>
                                        <?php endforeach ?>
                                        </ul>

                                    </li>
                                    <?php else: ?>
                                        <li><a href="<?= $menus->link ?>"><?= $menus->label ?></a></li>
                                    <?php endif ?>
                                <?php endforeach ?>

                                <!-- <li><a href="<?= base_url() ?>booking-form">Booking Form</a></li> -->

                                </ul>
                            </div>
                        </div> <!-- /.search-box -->


                      </div>
                    </div>
                  </div>

                  <a class="btn btn-book-atas d-none d-md-block" href="<?= $func->dm_whatsapp() ?>"><i class="fab fa-whatsapp mr-2"></i>Booking Now!</a>

									
									
								</div>
							</div>
						</div>


					</header>
				<style>
                </style>

                <div role="main" class="main" style="background: #fff;">
