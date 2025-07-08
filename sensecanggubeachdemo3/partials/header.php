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

                <link rel="stylesheet" href="https://s3.ap-southeast-1.amazonaws.com/cdn.omnihotelier.com/assets/styles/bootstrap.min.v.1.3.css">
                <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
                <link href="https://s3.ap-southeast-1.amazonaws.com/cdn.omnihotelier.com/assets/styles/omnih-style.v.1.3.css" rel="stylesheet">
                
                <script src="https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.js"></script>
                <script>const { animate, scroll, stagger, inView } = Motion</script>
				
<style>



:root{
	/*default*/	
	--boxed: #5f758d;
	--body: #e8f5e9;
	--colors: #F68121;
	--color2: #141414;
    --color3: #F68121;
    --primtext: "Gilda Display", serif;
    --subtext: "Barlow", sans-serif;
}

i.fas.fa-chevron-down {
    display: none;
}

html.sticky-header-enabled #header.header-transparent:not(.header-transparent-not-fixed) .header-body {
    position: relative;
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
    height: 450px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    margin-top: -95px;
}

.section-allpage:before {
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
} 

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
    .container-global { padding-left: 10%; padding-right: 10% }
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
    color: #fff;
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

.wrap-blog img {
    height: auto;
    object-fit: cover;
    margin-bottom: 20px;
    height: 250px;
}

.wrap-blog {
    position: relative;
    margin-bottom: 20px;
    overflow: hidden;
}

.wrap-blog2 {
    position: relative;
}

span.catcat {
    position: absolute;
    bottom: 13%;
    z-index: 1;
    left: 4%;
    background: var(--colors);
    font-family: var(--subtext);
    color: white;
    font-weight: 600;
    border-radius: 0;
    padding: 3px 20px;
    font-size: 13px;
    text-transform: uppercase;
}

.wrap-blog2 span {
    text-transform: uppercase;
    letter-spacing: 1px;
    color: var(--color2);
    font-family: var(--subtext);
    font-weight: 600;
    font-size: 11px;
    display: block;
    margin-bottom: 8px;
}

.wrap-blog2 h3 {
    text-transform: unset;
    font-family: var(--primtext);
    font-weight: 700;
    letter-spacing: 0px;
    line-height: 30px;
    color: #333;
    font-size: 21px;
    margin-bottom: 10px;
}

.wrap-blog2 p {
    font-weight: 400;
    font-size: 16px;
    line-height: 30px;
    font-family: var(--subtext);
    color: #777;
}

.wrap-blog2 a {
    border-radius: 5px;
    font-family: var(--subtext);
    color: var(--colors);
    padding: 0;
    font-size: 15px;
    font-weight: 600;
    transition: all ease 500ms;
}

.wrap-blog2 a:hover {
    color: #000;
}

@media (max-width: 768px) {
    .wrap-blog2 span {
        font-size: 10px;
        margin-bottom: 5px;
    }

    .wrap-blog2 h3 {
        line-height: 30px;
        font-size: 20px;
    }

    .wrap-blog2 p {
        font-size: 14px;
        line-height: 27px;
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


/*=============== Room ===============*/
/*=============== Arrow room ===============*/
.rooms .ss-arrow button {
    background: transparent;
    border: .5px solid var(--colors);
    height: 50px;
    width: 50px;
    font-size: 15px;
}
.rooms .ss-arrow .prev-arrow {
    left: auto;
    right: 2rem;
    transform: translateX(-120%) translateY(-60%);
    top: -3rem !important;
}
.rooms .ss-arrow .next-arrow {
    right: 2rem;
    transform: scale(1) translateY(-60%);
    top: -3rem !important;
}
/*=============== Arrow room ===============*/
.rooms .card {
    position: relative;
    overflow: hidden;
    border: none;
    border-radius: 0;
}
.rooms .card:after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    height: 60%;
    z-index: 2;
    width: 100%;
    opacity: 0.7;
    background-image: linear-gradient(0deg, #000000, transparent);
}
.rooms .card img {
    height: 380px;
    object-fit: cover;
}
.rooms .card .card-img-overlay {
    height: max-content;
    top: auto;
    z-index: 5;
    bottom: 0;
}
.rooms .card .tag {
    position: absolute;
    z-index: 3;
    top: 1.2rem;
    left: 1.5rem;
    background-color: var(--colors);
    font-family: var(--subtext);
    color: #fff;
    padding: 6px 14px;
}
.rooms .card h3 {
    color: #fff;
    font-size: 27px;
    line-height: 35px;
    font-family: var(--primtext);
    text-transform: capitalize;
    margin-bottom: 15px;
    width: 70%;
}
.rooms .card p {
    color: #cacaca;
    font-family: var(--subtext);
    font-size: 15px;
    line-height: 25px;
    font-weight: 400;
    width: 70%;
    margin-bottom: 15px;
}
.rooms .facility {
    gap: 1rem;
    margin-bottom: 10px;
}
.rooms .facility-items {
    color: #fff;
    font-family: var(--subtext);
}
.rooms .facility-items i {
    color: var(--colors);
}
.rooms .card .price {
    color: #fff;
    margin-bottom: 10px;
    opacity: 0;
    position: relative;
    font-size: 15px;
    transform: translateY(110%);
    transition: all ease 300ms;
    font-family: var(--primtext);
}
.rooms .card:hover .price {
    opacity: 1;
    transform: translateY(0);
}
.rooms .card .button {
    position: absolute;
    right: 2rem;
    bottom: 2rem;
}
.rooms .card .btn-room {
    color: #fff;
    background-color: var(--colors);
    border-radius: 50%;
    width: 3.2rem;
    height: 3.2rem;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px;
    transform: translateY(110%);
    opacity: 0;
    border: 1px solid transparent;
    transition: all ease 300ms;
}
.rooms .card:hover .btn-room {
    transform: translateY(0);
    opacity: 1;
}
.rooms .card .btn-room:hover {
    background-color: transparent;
    border: 1px solid var(--colors);
    color: var(--colors);
}
@media screen and (max-width: 768px) {
}
/*=============== Room ===============*/

span.label-name {
    position: absolute;
    top: 3%;
    left: 0;
    z-index: 3;
    background: var(--colors);
    color: white;
    font-family: var(--primtext);
    letter-spacing: .4px;
    text-transform: uppercase;
    padding: 6px 20px 6px 15px;
    font-weight: 600;
    font-size: 12px;
    border-radius: 0px 100px 100px 0px;
}

.ss-arrow button {
    margin: 0;
    padding: 0;
    background: white;
    border: 1px solid var(--colors);
    height: 30px;
    width: 30px;
    font-size: 12px;
    transform: scale(1.3);
    color: var(--colors);
    border-radius: 100px;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    transition: all ease 500ms;
}

.ss-arrow button:hover {
    background-color: var(--colors);
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

/* Title Global */

.title-general .tag-ats {
    color: var(--colors);
    font-family: var(--subtext);
    font-size: 13px;
    line-height: 20px;
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin: auto;
    margin-bottom: 10px;
    display: block;
}

.title-general h2 {
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
    color: var(--color2);
    font-family: var(--primtext);
    font-size: 40px;
    line-height: 50px;
    font-weight: 500;
    text-transform: capitalize;
    letter-spacing: 1px;
    margin-bottom: 20px;
}

.title-general h2 span {
    font-size: 45px;
    letter-spacing: 0px;
    line-height: 65px;
    font-weight: 700;
    font-style: italic;
    color: var(--colors);
    text-shadow: 2px 2px 5px #00000010;
    font-family: var(--primtext);
}

.title-general p {
    color: #555;
    font-family: var(--subtext);
    font-size: 15px;
    line-height: 25px;
    font-weight: 400;
    max-width: 800px;
    margin: auto;
    margin-bottom: 20px;
}

@media (max-width: 768px) {
    .title-general h2 {
        margin-bottom: 10px;
        font-size: 25px;
        line-height: 35px;
    }
    .title-general h2 span {
        text-align: center;
        font-size: 30px;
        line-height: 40px;
    }

  .title-general .tag-ats {
        font-size: 12px;
        line-height: 25px;
    }

    .title-general p {
        font-size: 13px;
        line-height: 23px;
        letter-spacing: 0px;
    }
}


/* =========== Review ========== */
/* =========== Arrow ========== */
.revieww .ss-arrow .next-arrow {
    right: 2rem;
    bottom: 2rem;
    z-index: 1;
    top: unset !important;
    transform: translateY(-40%);
}

.revieww .ss-arrow .prev-arrow {
    left: unset;
    top: unset !important;
    right: 2rem;
    z-index: 1;
    transform: translate(-120%, -40%);
    bottom: 2rem;
}
.revieww .ss-arrow button {
    height: 40px;
    width: 40px;
    font-size: 12px;
    background: var(--color2);
    color: var(--colors);
}
/* =========== Arrow ========== */
.revieww {
    position: relative;
}
.revieww .background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    filter: brightness(.5);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-image: url('https://jwc.gotra-resources.my.id/web-upload/1742801958-24-03-2025-N5I672aqvij94ZzH3hwUds1CyF8QEpmf.webp');
}
.revieww .btn-rev {
  background: var(--colors);
  color: #fff;
  padding: .8rem 1.5rem;
  text-transform: uppercase;
  font-size: 15px;
  font-family: var(--subtext);
  letter-spacing: 1px;
  font-weight: 600;
}
.revieww .card {
    position: relative;
    border: none;
    background-color: var(--color2);
    border-radius: 0px;
    min-height: 300px;
    margin: 10px;
}

.revieww .star {
    margin-bottom: 10px;
    color: var(--colors);
}
.revieww h3 {
    font-family: var(--subtext);
    color: var(--colors);
    font-size: 23px;
    line-height: 25px;
    font-weight: 600;
    margin: 15px 0 10px;
    letter-spacing: .3px;
    text-transform: capitalize
}
.revieww .who {
    font-family: var(--subtext);
    color: #fff;
    font-size: 13px;
    line-height: 25px;
    font-weight: 300;
    letter-spacing: 0.5px;
}
.revieww p {
    font-family: var(--subtext);
    color: #fff;
    font-size: 15px;
    margin-bottom: 5px;
    line-height: 25px;
    font-weight: 300;
    letter-spacing: 0.1px;
}


@media (max-width: 768px) {

  .wrap-review p {
    color: #555;
    font-size: 13px;
    line-height: 27px;
    font-weight: 400;
    letter-spacing: 0.1px;
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
    color: var(--colors);
    opacity: .7;
    font-size: 14px;
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
        border: none;
        border-radius: 0px;
        padding: 15px;

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
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Gilda+Display&display=swap" rel="stylesheet">
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
                                        <img style="object-fit: contain;" class="img-fluid" alt="logo 1" src="<?= $data->web->site_logo_alternative ?>">
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

                            html.sticky-header-active .b-p-bg-color .bar1 { background-color:#000 }
                            html.sticky-header-active .b-p-bg-color .bar2 { background-color:#000 }
                            html.sticky-header-active .b-p-bg-color .bar3 { background-color:#000 }

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

                                <li style="border-bottom: unset;"><a class="btn btn-book-atas" href="<?= $func->dm_whatsapp() ?>"><i class="fa-regular fa-calendar mr-2"></i>Reserve Now</a></li>

                                </ul>
                            </div>
                        </div> <!-- /.search-box -->


                      </div>
                    </div>
                  </div>

                  <div class="header-column end-menu">
                        <a class="btn btn-book-atas d-none d-md-block" href="<?= $func->dm_whatsapp() ?>"><i class="fa-regular fa-calendar mr-2"></i>Reserve Now!</a>
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

                <div role="main" class="main" style="background: #fff;">
