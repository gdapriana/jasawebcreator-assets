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
				<link href="<?= base_url('assets') ?>/front/font/hiatus.ttf" type="text/css" rel="stylesheet">
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
	--colors: #dfb704;
	--color2: #0c0c0c;
    --color3: #62C03A;
    --primtext: 'Barlow Condensed';
    --subtext: 'Poppins';
    --spantext: 'hiatus';
}

i.fas.fa-chevron-down {
    display: none;
}


@media (min-width: 768px) {
    #header .header-nav.header-nav-stripe nav>ul>li.open>a, #header .header-nav.header-nav-stripe nav>ul>li:hover>a {
        border-radius: 5px !important;
    }
}

.header-body {
    background-color: transparent !important;
    border: unset !important;
    transition: all ease 500ms;
}

html:not(.sticky-header-active) .header-body { margin-top: 10px !important; transition: all ease 1000ms !important; }

html:not(.sticky-header-active) #header.header-transparent .header-nav-main:not(.header-nav-main-dark) nav>ul>li>a {
    color: #fff;
}

html:not(.sticky-header-active) #header.header-transparent .header-nav-main:not(.header-nav-main-dark) nav>ul>li>a.dropdown-toggle:after {
    border-color: #fff transparent transparent transparent;
}

@media (max-width: 768px) {
    html:not(.sticky-header-active) .header-body {
        margin-top: 0px !important;
    }
}

#header .header-nav.header-nav-stripe nav>ul>li>a {
    color: #fff;
    font-size: 13px;
    font-weight: 400;
    letter-spacing: 1px;
    font-family: var(--subtext);
    /* text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.6); */
    text-transform: uppercase;
    padding: 0 10px;
}

html.sticky-header-active #header.header-transparent .header-body { transition: all ease 1000ms !important; }

html.sticky-header-active #header.header-transparent .header-body:before {
    opacity: 1;
    background-color: var(--color2) !important;
    border: unset !important;
    transition: all ease 500ms !important;
}

<?php if ($data->site_position != 'home'): ?>
    html.sticky-header-active #header .header-body {
        background-color: var(--color2) !important;
        position: relative !important;
    }
<?php endif ?>

@media (min-width: 768px) {
    #header .header-nav.header-nav-stripe nav>ul>li>a {
        padding: 0 14px !important;
        min-height: 15px;
        height: 15px;
    }

	#header .header-nav.header-nav-stripe nav>ul>li.open>a, #header .header-nav.header-nav-stripe nav>ul>li:hover>a {
	    background-color: var(--colors);
	}
}

@media (min-width: 768px) {
    #header .header-nav.header-nav-stripe nav>ul>li>a.dropdown-toggle:after {
        border-color: #fff transparent transparent transparent !important;
    }
}

<?php if ($data->site_position != 'home'): ?>
    html:not(.sticky-header-active) .header-body { margin-top:0 !important; }

    #header .header-body { background-color: black !important; }
<?php endif ?>

@media (max-width: 768px) {
	#menu-button {
	    border-color: #111;
	    color: #111;
	    margin-left: 10px;
      border: unset !important;
	}
  
  .menu-tour a { font-family: var(--subtext); }

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
        background: var(--color2);
        z-index: 99999;
        opacity: 0;
        visibility: hidden;
        transition: all ease .5s;
    }

    #menuWrapper #close {
        color: #fff;
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
        color: #fff;
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

    .header-logo img {
        height: 50px !important;
        margin-top: 5px;
    }

	#menuWrapper {
		overflow: scroll;
	}
}


/* Section All Page */

.section-allpage {
    position: relative;
    height: 400px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    margin-top: -122px;
    background: var(--colors);
}

/* .section-allpage:before {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    right: 0;
    height: 180px;
    background: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
    opacity: .6;
}

.section-allpage:after {
    position: absolute;
    content: '';
    bottom: 0;
    left: 0;
    right: 0;
    height: 180px;
    transform: rotate(180deg);
    background: linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
    opacity: .6;
}  */

.section-allpage .text p {
    color: #f1f1f1;
    letter-spacing: 0.5px;
    font-size: 17px;
}
.section-allpage .text h1 {
    text-transform: uppercase;
    letter-spacing: 5px;
    font-weight: 600;
    color: white;
    font-size: 45px;
    line-height: 50px;
    margin-bottom: 15px;
}
.section-allpage .text {
    position: absolute;
    left: 0;
    right: 0;
    text-align: center;
    top: 45%;
    z-index: 1;
    font-family: var(--subtext);
}

@media (max-width: 768px) {
    .section-allpage .text h1 {
        font-size: 28px;
        line-height: 30px;
    }

    .title-product { padding:0px 10px; }

    .section-allpage { height: 350px; }

    .section-allpage .text p {
        font-size: 15px;
    }
}

@media (min-width: 768px) {
    .container-global { padding-left: 7%; padding-right: 7% }
}

@media ( max-width: 768px ) {
   .container-global { padding-left: 5%; padding-right: 5% }
}

@media ( max-width: 768px ) {
    .display-pc-share {
        display: none;
   }
}

span.text-wid {
    font-family: var(--primtext);
    color: #fff;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 0px;
}

.social-icons:not(.social-icons-clean) li a {
    color: var(--color2) !important;
    background: white;
    border: 1px solid;
}

.social-icons li a {
    height: 35px;
    line-height: 35px;
    width: 35px;
    font-size: 17px;
}

.social-icons li a:hover {
    background: var(--colors) !important;
    color: white !important;
}

.social-icons li { margin-right:5px; }

.btn-book-atas {
    font-family: var(--subtext);
    background: var(--colors);
    color: var(--color2);
    margin-left: 15px;
    padding: 10px 20px;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 12px;
    letter-spacing: 1px;
    margin-top: 5px;
    border-radius: 100px;
}

.btn-book-atas:hover {
    background: #1a1a1a;
    color: white;
}

a { text-decoration:unset !important; }



.btn-contact1 {
    background: var(--colors);
    color: #fff;
    font-family: var(--primtext);
    font-size: 15px;
    text-transform: uppercase;
    font-weight: 600;
    padding: 15px 40px;
    transition: all ease 500ms;
    letter-spacing: 1px;
}

.btn-contact1:hover {
    background: var(--color2);
    border-color: white;
    color: #fff;
    transition: all ease 500ms;
}

@media (min-width: 768px) {
    .coni { max-width:1340px; }
}

.head-mencen {
    height: 85px; 
    padding: 20px 7%;
}

@media (max-width: 768px) {
    .head-mencen {
        height: 70px !important;
        padding: 20px 3%;
    }
}

/* Blog */

.blog img {
    height: auto;
    width: 100%;
    object-fit: cover;
    position: relative;
    z-index: 2;
    margin-bottom: 20px;
}

.blog {
    position: relative;
    margin-bottom: 20px;
}

.blog2 {
    position: relative;
}

.catcat{
    position: absolute;
    bottom: 13%;
    z-index: 3;
    left: -15px;
    background: var(--color2);
    font-family: var(--subtext);
    color: white;
    font-weight: 600;
    border-radius: 0;
    padding: 9px 20px;
    font-size: 13px;
    line-height: 13px;
    width: max-content;
    text-transform: uppercase;
}
.catcat:before {
    content: "";
    width: 16px;
    height: 10px;
    z-index: 1;
    clip-path: polygon(100% 0, 0% 100%, 100% 100%);
    background: var(--color2);
    position: absolute;
    top: -9.5px;
    left: 0;
}
.blog .catcat span {
    font-size: 22px;
    line-height: 22px;
}

.blog2 span {
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--color2);
    font-family: var(--primtext);
    font-weight: 600;
    font-size: 11px;
    display: block;
    margin-bottom: 8px;
}

.blog2 h3 {
    text-transform: unset;
    font-family: var(--primtext);
    font-weight: 600;
    letter-spacing: 0px;
    line-height: 30px;
    color: #333;
    font-size: 21px;
    margin-bottom: 10px;
}

.blog2 p {
    font-weight: 400;
    font-size: 14px;
    line-height: 25px;
    font-family: var(--subtext);
    color: #777;
}

.blog2 a {
    border-radius: 100px;
    font-family: var(--subtext);
    color: var(--color2);
    background: var(--colors);
    font-size: 14px;
    padding: .6rem 1.3rem;
    border: 1px solid var(--colors);
    font-weight: 600;
    transition: all ease 500ms;
}

.blog2 a:hover {
    color: #fff;
    background: black;
}

@media (max-width: 768px) {

    .blog img {
        height: 160px;
        margin-bottom: 20px;
    }

    .blog2 span {
        font-size: 10px;
        margin-bottom: 5px;
    }

    .blog2 h3 {
        line-height: 22px;
        font-size: 16px;
        margin-bottom: 20px;
    }

    .blog2 p {
       display: none;
    }

    .blog .catcat span {
        font-size: 15px;
        line-height: 15px;
    }

    .catcat {
        font-size: 11px;
        line-height: 13px;
    }

    .blog2 a {
        font-size: 13px;
        padding: 7px 16px;
    }

}
/* Blog */




/* ======== CATE ========== */

    .title-blog { position:relative; font-family:var(--subtext); padding-right:35px; }

    .title-blog span {
        color: var(--color2);
        font-family: var(--subtext);
        font-size: 15px;
        line-height: 25px;
        font-weight: 300;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 10px;
        display: block;
    }

    .title-blog h2 {
        color: var(--color2);
        font-family: var(--primtext);
        font-size: 38px;
        line-height: 50px;
        font-weight: 500;
        text-transform: unset;
        letter-spacing: 0px;
        margin-bottom: 25px;
    }

    .title-blog p {
        color: #555;
        font-family: var(--subtext);
        font-size: 15px;
        font-weight: 400;
        line-height: 28px;
        margin-bottom: 20px;
        letter-spacing: 0.2px;
    }

    .btn-lpm {
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
    }

    .btn-lpm:hover {
        background: white;
        color: var(--colors);
    }

@media (max-width: 768px) {
    .title-blog {
        text-align: center;
        padding: unset;
    }

    .title-blog h2 {
      margin-bottom: 15px;
      font-size: 30px;
      line-height: 45px;
    }

    .title-blog span {
        font-size: 12px;
        line-height: 25px;
    }

    .title-blog p {
        font-size: 13px;
        line-height: 23px;
        letter-spacing: 0px;
    }

    .btn-lpm { margin-bottom:30px; }
}


/* ============= Mobil ============*/

.wrap-mobil-b {
    background: #fff;
    border-radius: 5px;
    position: relative;
    font-family: var(--subtext);
    margin-bottom: 15px;
}

.wrap-mobil-b img {
    height: 200px;
    object-fit: contain;
    width: 100%;
    padding: 10px;
}


.wrap-mobil-b2 {
    padding: 10px 30px 30px;
    margin-bottom: 70px;
}

.wraphar {
    background: #f8f8f8;
    padding: 15px 30px 20px;
}


.wraphar h3 {
    font-size: 23px;
    text-transform: capitalize;
    font-weight: 600;
    letter-spacing: 0px;
    line-height: 35px;
    margin-bottom: 0px;
    font-family: var(--primtext);
}

.wraphar span {
    display: block;
    font-size: 14px;
    margin-bottom: 0px;
}

.wrap-mobil-b hr {
    margin-top: 15px;
    margin-bottom: 15px;
}

.wrap-mobil-b2 p {
    border-bottom: 1px solid #bbb;
    padding-bottom: 10px;
    padding-top: 10px;
    font-size: 13px;
    color: #555;
    margin-bottom: 0px;
}

.wrap-mobil-b2 ul {
    margin-top: 20px;
}
.btn-sewabil {
    background: var(--colors);
    font-size: 12px;
    font-weight: 600;
    color: white;
    padding: 7px 13px;
    transition: all ease 500ms;
}

.btn-sewabil:hover {
    background: #fff;
    color: #111;
}

.coll5 {
    padding: 0;
    align-self: flex-end;
    text-align: center;
}

.wrap-mobil-bpt2 { border:1px solid #eee }

.wraphar2 {
    background: var(--colors);
}

.wraphar2 span {
    color: #f1f1f1;
}

.wraphar2 h3 {
    color: #fff;
}
.btn-wrmob {
    position: absolute;
    width: 100%;
    left: 0;
    bottom: 20px;
    padding: 0 30px;
}
.btn-momo {
    background: var(--color2);
    margin-top: 20px;
    color: white;
    width: 100%;
    padding: 10px 25px;
    border-radius: 2px;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 1px;
    transition: all ease 500ms;
}

.btn-momo:hover {
    background: var(--colors);
    color: black;
}

/*=============== Mobil ===============*/
/*=============== Product ===============*/

.product {
    font-family: var(--primtext);
}
.product .card {
    overflow: hidden;
    position: relative;
    border-radius: 0;
    border: none;
    box-shadow: 5px 5px 10px #00000010, -2px -2px 10px #00000010;
}
.product .card .price span {
    font-size: 18px;
    font-style: normal;
    font-weight: 700;
}
.product .card img {
    height: 280px;
    object-fit: cover;
    object-position: center;
}
.product .card .price {
    position: absolute;
    top: 2.8rem;
    right: 0;
    color: #000;
    background-color: #FAB01A;
    padding: 8px 15px;
    font-style: italic;
    font-size: 12px;
}
.product .card-body {
    position: relative;
}
.product .card-body .txt {padding-bottom: 60px !important;}
.product .card .rating {
    font-size: 12px;
    margin-bottom: 12px;
    color: #878787;
    font-family: var(--subtext);
}
.product .card .rating i {
    font-size: 14px;
    margin-right: 4px;
    color: #ffa127;
}
.product .card .info-tag {
    position: absolute;
    width: 95%;
    background: var(--colors);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    top: -10px;
    left: 50%;
    transform: translate(-50%, -100%);
    padding: 8px 13px;
    color: #000;
    font-family: var(--subtext);
}
.product .card .info-tag i {
    margin-right: 5px;
}
.product .card .info-tag span {
    padding: 0 8px;
    display: block;
    text-align: center;
    width: 33.33%;
    font-size: 14px;
}
.product .card .info-tag .people {
    border-left: 0.5px solid;
    border-right: 0.5px solid;
}
.product .card .card-title {
    font-size: 24px;
    letter-spacing: 0.5px;
    font-weight: 700;
    line-height: 30px;
}
.product .card p {
    margin-bottom: 12px;
    font-size: 15px;
    color: #323232;
    font-family: var(--subtext);
    letter-spacing: .3px;
}

.product .btnwr {
    position: absolute;
    bottom: 10px;
    left: 0;
}
.product .btn {
    border-radius: 100px;
    font-family: var(--subtext);
    color: var(--color2);
    background: var(--colors);
    font-size: 14px;
    padding: .6rem 1.3rem;
    border: 1px solid var(--colors);
    font-weight: 600;
    margin-top: 15px;
    transition: all ease 500ms;
}

.product .btn:hover {
    color: #fff;
    background: black;
}
@media screen and (max-width: 576px) {
    .product .row.justify-content-center {justify-content: start !important;}
    .product .card .txt{
        padding: 10px !important;
        padding-bottom: 40px !important;
    }
    .product .card .card-title {
        margin:0;
        font-size: 11px;
        line-height: 20px;
    }
    .product .card .rating {
        font-size: 8px;
        margin-bottom: 5px;
        line-height: 2;
    }
    .product .card .rating i {
        font-size: 7px;
        margin-right: 2px;
    }
    .product .card .price {
        top: 1rem;
        padding: 6px 9px;
        font-size: 8px;
        line-height: 1;
    }
    .product .card .price span {font-size: 13px;}
    .product .card img {
        height: 160px;
    }
    .product .btnwr {left: 10px}
    .product .card .btn {
        font-size: 10px;
        padding: .4rem 1rem;
    }
}

/*=============== Product ===============*/

/*=============== btn profile ===============*/
.btnprofile {
    color: #222;
    position: relative;
    background: var(--colors);
    font-family: var(--subtext);
    font-size: 15px;
    font-weight: 600;
    line-height: 25px;
    border: .5px solid #00000050;
    margin-top: 10px;
    padding: 5px 5px 5px 1.6rem;
    letter-spacing: .4px;
    width: max-content;
    border-radius: 50px;
    text-transform: uppercase;
    transition: ease-in-out .25s;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.btnprofile .tx {
  position: relative; 
  z-index: 2; 
  display: flex;
  justify-content: center;
  align-items: center;
}
.btnprofile .icon {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 3rem;
    width: 3rem;
    background: #00000020;
    margin-left: 15px;
    border-radius: 50%;
    transition: all ease-in-out .3s;
    transform: rotate(45deg);
}
.btnprofile:hover .icon {transform: rotate(90deg);}
.btnprofile i {
    height: fit-content;
    line-height: 1.1rem;
    font-size: 1.2rem;
}
.btnprofile .shadow {
    position: absolute;
    right: 5px;
    top: 5px;
    width: 3rem;
    height: 3rem;
    opacity: .8;
    transition-delay: .2s;
    border-radius: 50%;
    z-index: 1;
    background-color: #fff;
    /* filter: blur(20px); */
    transform: scale(.0) translateX(-202%);
    transition: all ease-in-out .6s;
}
.btnprofile:hover .shadow {
    transform: scale(11) ;

}
.btnprofile:hover {
    background: var(--colors);
    color: var(--color2);
}

/* ========= cate btn ======= */
.wrap-cate .btnprofile {font-size: 13px;}
.wrap-cate .btnprofile .icon {
    width: 2rem;
    height: 2rem;
}
.wrap-cate .btnprofile .icon i {
    font-size: 1rem;
    line-height: 1rem;
}
/* ========= cate btn ======= */
@media screen and (max-width: 576px) {
    .btnprofile .icon {
        margin-left: 15px;
        height: 2.5rem;
        width: 2.5rem;
    }
}
/*=============== btn profile ===============*/


.ss-arrow button {
    margin: 0;
    padding: 0;
    background: var(--colors);
    border: 1px solid var(--colors);
    height: 30px;
    width: 30px;
    font-size: 12px;
    transform: scale(1.2);
    color: var(--color2);
    border-radius: 100px;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    transition: all ease 500ms;
}

.ss-arrow button:hover {
    background-color: var(--color2);
    color: white;
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

.pad6rem { padding:6rem 0px; }

@media (max-width: 768px) {

  .ss-arrow button { transform: scale(0.9); }

  .ss-arrow .slide-arrow { top: 45%; }

  .ss-arrow .prev-arrow{
      left: -1%;
      z-index: 1;
    }

    .ss-arrow .next-arrow{
      right: -1%;
      z-index: 1;
    }

    .pad6rem { padding: 3rem 0 !important; }
}

/* ========= title general ========*/
.title-product .tag-atas {
    font-size: 14px;
    font-weight: 500;
    text-transform: uppercase;
    line-height: 24px;
    color: var(--colors);
    letter-spacing: 1px;
    font-family: var(--subtext);
    display: block;
    width: max-content;
    margin: auto;
    margin-bottom: 1px;
}

.title-product h2 span {
    color: var(--color2);
    font-weight: 600;
    position: relative;
    z-index: 1;
}

.title-product h2 span:before {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    bottom: 10%;
    height: 10px;
    width: 100%;
    z-index: -1;
    background: #dfb704fa;
}

.title-product h2 {
    font-size: 45px;
    line-height: 60px;
    color: #000;
    font-weight: 400;
    margin-bottom: 40px;
    letter-spacing: .3px;
    text-transform: unset;
    font-family: var(--primtext);
    position: relative;
    background: transparent;
}
@media screen and (max-width: 576px) {
    .title-product h2 {
        font-size: 27px;
        line-height: 40px;
        margin-bottom: 40px;
        text-align: center;
    }

    .title-product h2 span {
        display: block;
        width: max-content;
        margin: auto;
        margin-top: -7px;
    }

    .title-product p { margin-bottom: 25px; text-align: center;}

    .title-product .tag-atas {
        font-size: 11px;
        margin-bottom: 10px;
        text-align: center;
        margin: auto !important;
    }
    .title-product .btnprofile {
        margin-left: auto;
        margin-right: auto;
    }
}


/* Review */

.rev-card .card {

    position: relative;
    border: none;
    background-color: #ffffff30;
    border-radius: 0px;
    min-height: 300px;
    margin: 10px;
}

.rev-card h3 {
    font-family: var(--subtext);
    color: #fff;
    font-size: 18px;
    line-height: 25px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: capitalize
}
.rev-card .from {
    font-family: var(--subtext);
    color: #fff;
    font-size: 13px;
    line-height: 25px;
    font-weight: 300;
    letter-spacing: 0.5px;
}
.rev-card p {
    font-family: var(--subtext);
    color: #fff;
    font-size: 15px;
    line-height: 25px;
    font-weight: 300;
    letter-spacing: 0.1px;
}

.rev-card img {
    height: 80px;
    width: 80px;
    border-radius: 50%;
    object-fit: cover;
    border: .4px solid #00000050;
    margin-right: 25px;
}

@media (max-width: 768px) {

  .wrap-review p {
    color: #555;
    font-size: 13px;
    line-height: 27px;
    font-weight: 400;
    letter-spacing: 0.1px;
  }

  .rev-card img {
    height: 45px;
    width: 45px;
    margin-right: 15px;
}

      .btn-full {
        padding: 10px 13px;
        font-size: 13px;
    }

  .pad-cus { background-size:contain !important; }

  .wrap-review { padding:2rem; }

  .tirev h2 {
    font-size: 28px;
    line-height: 40px;
}

}


.revieww h2 span {
    color: var(--colors);
}

.read-more, .read-less {
    color: #9f9e9e;
    border-bottom: 1px solid;
}


@media (min-width: 768px) {
    .start-menu {
        width: 15%;
    }

    .mid-menu {
        width: 70%;
        align-self: center !important;
        height: 45px;
    }

    .end-menu {
        width: 15%;
        align-items: flex-end;
        align-self: center !important;
    }

    .menu-andro {
        align-self: center !important;
        border: 1px solid #ffffff5c;
        border-radius: 100px;
        padding: 15px;
        background: #ffffff50;
        backdrop-filter: blur(10px);
    }
}

@media (max-width: 768px) {

    .end-menu {
        display: none !important;
    }

    .nav-tabs .nav-item {
        margin-bottom: -1px;
        display: contents;
    }
}



</style>

<!-- Head Libs -->
<!-- <script src="<?= base_url('assets') ?>/front/vendor/modernizr/modernizr.min.js" defer></script> -->
<?= $func->xview_header() ?>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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

                            <div class="header-column justify-content-start logo-menu start-menu" style="align-self: center; align-items: baseline;">
                                <div class="header-logo">
                                    <a href="<?= base_url() ?>">
                                        <img style="object-fit: cover; height: 60px;" class="img-fluid" alt="logo 1" src="<?= $data->web->site_logo_alternative ?>">
                                    </a>
                                </div>
                            </div>
                            
                            <div class="header-column justify-content-start mid-menu">
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

                            .b-p-bg-color .bar1 { background-color:#fff }
                            .b-p-bg-color .bar2 { background-color:#fff }
                            .b-p-bg-color .bar3 { background-color:#fff }

                            html.sticky-header-active .b-p-bg-color .bar1 { background-color:#fff }
                            html.sticky-header-active .b-p-bg-color .bar2 { background-color:#fff }
                            html.sticky-header-active .b-p-bg-color .bar3 { background-color:#fff }

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

                                <li style="border-bottom: unset;"><a class="btn btn-book-atas" href="https://successtransbali.com/book-airport-transfer"><i class="fa-regular fa-calendar mr-2"></i>Contact Us</a></li>

                                </ul>
                            </div>
                        </div> <!-- /.search-box -->


                      </div>
                    </div>
                  </div>

                  <div class="header-column end-menu">
                        <a class="btn btn-book-atas d-none d-md-block" href="https://successtransbali.com/book-airport-transfer">Book Now<i class="fas fa-arrow-right ml-2"></i></a>
                    </div>

                  
                  <!-- <ul class="header-social-icons social-icons display-pc">
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
                </ul> -->

                                    
                                    
                                </div>
                            </div>
                        </div>


                    </header>
                <style>
                </style>

                <div role="main" class="main">
