<?php 
$types = array('default','boxed','side_header');
$side = 'left';
$logo = 'true';
/*style header*/
$selected = 'default'; ?>


<?php

  $defaultHeader = "creativelayers_2"; 

  // AVAILABLE HEADER
  // creativelayers   : https://creativelayers.net/themes/swiss-resort-html/index.html
  // creativelayers_2 : https://creativelayers.net/themes/swiss-resort-html/index.html ,
  // villadellatorre  : https://www.villadellatorre.it",
  // amaliproperties  : https://amaliproperties.com/villa/aurora-grande,
  // behave           : https://behave.co.uk/;
  // old,

  function transformMenu($HeaderMenuData) {
    $menu_result = [];
    foreach ($HeaderMenuData as $menu) {
        $header_item = [
            'title' => $menu->label,
            'link'  => $menu->link,
            'sub'   => []
        ];
        if (isset($menu->child) && is_object($menu->child)) {
            foreach ($menu->child as $child) {
                $header_item['sub'][] = [
                    'title' => $child->label,
                    'link'  => $child->link
                ];
            }
        }
        $menu_result[] = $header_item;
    }
    return $menu_result;
  }
  $header_links = json_decode(json_encode(transformMenu($data->menu->primary_menu)));

?>

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
                <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Italiana&family=Lora:ital,wght@0,400..700;1,400..700&family=Oooh+Baby&display=swap" rel="stylesheet">

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
    --colors: #D29F54;
    --color2: #1B1A19;
    --color3: #D29F54;
    --decotext: "Oooh Baby", cursive;
    --primtext: "Italiana", sans-serif;
    --subtext: "Inter", sans-serif;
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
      margin-top: -115px;
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
      .container-global { padding-left: 8%; padding-right: 8% }
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

  /* Arrow */

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
      background: var(--colors);
      border: 1px solid ;
      height: 30px;
      width: 30px;
      font-size: 12px;
      transform: scale(1.3);
      color: var(--color2);
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
  /* Arrow */
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


  /*=============== Experience ===============*/

  #__unique-root {
      font-family: var(--primtext), serif;
    }
    #__unique-root .wrapper {
      padding-top: 5rem;
      padding-bottom: 5rem;
      border: 1px solid #eaeaea;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: stretch;
      gap: 2rem;
      justify-content: start;
    }
    #__unique-root .items-wrapper.items-wrapper-tablet {
      display: none;
    }
    #__unique-root .items-wrapper.items-wrapper-mobile {
      display: block;
    }

    #__unique-root .items-wrapper.items-wrapper-mobile .item {
      height: 500px;
      position: relative;
      /**border-radius: 2rem;**/
      overflow: hidden;
      display: flex;
      flex-direction: column;
      justify-content: end;
      align-items: stretch;
      padding: 1.2rem;
    }
    #__unique-root .items-wrapper.items-wrapper-mobile .item .item-img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    #__unique-root .items-wrapper.items-wrapper-mobile .item .item-desc-wrapper {
      z-index: 1;
      /**background-color: white; **/
      padding: 1.5rem;
      /**border-radius: 1rem;**/
      display: flex;
      gap: .4rem;
      flex-direction: column;
      justify-content: start;
      align-items: start;
    }

      #__unique-root .items-wrapper.items-wrapper-mobile .item .item-desc-wrapper i { display:none; }

    #__unique-root .items-wrapper.items-wrapper-mobile .logo {
      font-size: 2rem;
      color: var(--colors);
    }
    #__unique-root .items-wrapper.items-wrapper-mobile .title {
      font-weight: bold;
      color: var(--colors);
      display: flex;
      font-size: .9rem;
      justify-content: start;
      align-items: center;
      gap: 1rem;
      line-height: 1.6rem;
      letter-spacing: 0px;
    }
    #__unique-root .items-wrapper.items-wrapper-mobile .btn-exp {
      background: var(--colors); 
      border-radius: 0; 
      color: white; 
      margin-left: auto; 
      margin-top: 1rem; 
      padding: .8rem 1rem; 
      font-weight: bold;
    }
    #__unique-root .items-wrapper.items-wrapper-mobile .desc {
      line-height: 20px;
      font-size: .8rem;
    }
    #__unique-root .items-wrapper.items-wrapper-mobile .item .item-desc-wrapper * {
      padding: 0;
      margin: 0;
    }
    /*TABLET*/
    @media (min-width: 768px) {
      #__unique-root .items-wrapper.items-wrapper-tablet {
        display: flex;
        justify-content: center;
        gap: 1rem;
        align-items: center;
      }
      #__unique-root .items-wrapper.items-wrapper-tablet > .item {
        height: 484px;
        width: 25%;
        position: relative;
        /**border-radius: 2rem;**/
        overflow: hidden;
        /**padding: 1rem;**/
        display: flex;
        justify-content: center;
        align-items: end;
        transition: all ease-in-out .5s;
      }
      #__unique-root .items-wrapper.items-wrapper-tablet > .item.active .item-desc-wrapper {
          width: 100%;
          background-color: transparent;
          display: grid;
          grid-template-areas: "logo title" "logo description";
          grid-template-columns: auto 1fr;
          grid-template-rows: repeat(2, auto);
          column-gap: .8rem;
          padding: 35px 30px;
          z-index: 1;
          /**border-radius: 1rem;**/
          opacity: 1;
          transform: scale(1);
      }
      #__unique-root .items-wrapper.items-wrapper-tablet > .item .item-desc-wrapper {
        opacity: 0;
        transition: all ease-in-out 1.5s;
      }
      #__unique-root .items-wrapper.items-wrapper-tablet > .item .title {
          font-size: 22px;
          font-weight: 500;
          color: #fff;
          line-height: 30px;
          margin-bottom: 2px;
          text-transform: capitalize;
          letter-spacing: 0;
          grid-area: title;
          overflow: hidden;
          display: -webkit-box;
          -webkit-line-clamp: 3;
          -webkit-box-orient: vertical;
      }
      #__unique-root .items-wrapper.items-wrapper-tablet .btn-exp {
        background: var(--colors); 
        font-family: var(--subtext);
        border-radius: 0; 
        color: white; 
        margin-right: auto; 
        margin-top: 1rem; 
        font-weight: bold;
      }
      #__unique-root .items-wrapper.items-wrapper-tablet > .item .desc {
        color: #555;
        font-size: 0.9rem;
        margin-bottom: 0;
        grid-area: description;
        overflow: hidden;
        line-height: 1.6rem;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
      }
      #__unique-root .items-wrapper.items-wrapper-tablet > .item .item-img {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        object-fit: cover;
        filter: grayscale(1);
        transition: all ease-in-out .5s;
      }
      #__unique-root .items-wrapper.items-wrapper-tablet > .item .logo-wrapper {
        font-size: 1.4rem;
        display: flex;
        justify-content: center;
        align-items: start;
        color: white;
        grid-area: logo;
      }
      #__unique-root .items-wrapper.items-wrapper-tablet > .item .logo-wrapper .logo {
        background-color: var(--colors);
        color: white;
        padding: 0.8rem;
        border-radius: 999em;
      }
      #__unique-root .items-wrapper.items-wrapper-tablet .item.active {
        width: 50%;
      }
      #__unique-root .items-wrapper.items-wrapper-tablet > .item.active .item-img {
        filter: grayscale(0);
      }
      #__unique-root .items-wrapper.items-wrapper-mobile {
        display: none;
      }
    }


    #__unique-root .gradient-overlay {
      background: rgb(0,0,0);
      background: linear-gradient(0deg, rgba(0,0,0,0.8982186624649859) 0%, rgba(255,255,255,0) 100%);
    }

    @media (max-width: 768px) {
      #__unique-root .items-wrapper.items-wrapper-mobile .item { height:300px; }

      #__unique-root .items-wrapper.items-wrapper-mobile .title {
          font-weight: 500;
          font-size: 19px;
          line-height: 25px;
          color: white;
          text-transform: capitalize;
      }

      #__unique-root .items-wrapper.items-wrapper-mobile .item .item-desc-wrapper { padding:20px; }

      #__unique-root .items-wrapper.items-wrapper-mobile .btn-exp {
          padding: 7px 10px !important;
          margin-top: 10px !important;
      }

    }

    /*DESKTOP*/
    @media (min-width: 1280px) {
      
    }
  /*=============== Experience ===============*/
  /*=============== Room ===============*/
  /*=============== Arrow room ===============*/
  @media (min-width: 768px) {
  .rooms .ss-arrow button {
      background: transparent;
      border: .5px solid var(--colors);
      height: 50px;
      color: var(--colors);
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
      transition: all ease 300ms;
      filter: brightness(.8);
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
      letter-spacing: 0px;
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
      width: 80%;
      flex-wrap: wrap;
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
  .rooms .card:hover img {
      filter: brightness(.5);
      transform: scale(1.1);
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

  @media (min-width: 768px) {
    .rooms .card h3 {
      font-size: 24px;
      line-height: 30px;
    }
  }

  @media (min-width: 1280px) {
    .rooms .card h3 {
      font-size: 27px;
      line-height: 35px;
    }
  }

  @media screen and (max-width: 768px) {
      .rooms .card h3 {
          font-size: 24px;
          line-height: 30px;
          width: 100%;
      }
      .rooms .card p {
          font-size: 13px;
          line-height: 22px;
          width: 75%;
      }
      .rooms .card .button {
          right: 1.5rem;
      }
      .rooms .card .btn-room {
          width: 3rem;
          height: 3rem;
          font-size: 15px;
      }
      .rooms .facility {
          width: 75%;
          gap: .5rem;
      }
  }
  /*=============== Room ===============*/


  /* Title Global */

  .title-general .tag-ats {
      color: var(--colors);
      font-family: var(--decotext);
      font-size: 25px;
      line-height: 20px;
      font-weight: 400;
      text-transform: unset;
      letter-spacing: 0;
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
      font-weight: 500;
      text-transform: capitalize;
      letter-spacing: 0px;
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
      font-weight: 400;
      max-width: 800px;
      margin: auto;
  }

  @media (min-width: 768px) {
      .title-general h2 {
          font-size: 35px;
          line-height: 45px;
          margin-bottom: 20px;
      }

      .title-general p {
          font-size: 14px;
          line-height: 25px;
          margin-bottom: 20px;
      }
  }

  @media (min-width: 1280px) {
      .title-general h2 {
          font-size: 40px;
          line-height: 50px;
          margin-bottom: 20px;
      }

      .title-general p {
          font-size: 15px;
          line-height: 25px;
          margin-bottom: 20px;
      }
  }


      .circle-cursor {
        height: 24px;
        width: 24px;
        border-radius: 24px;
        background-color: var(--colors);
        position: fixed; 
        top: 0;
        opacity: .5;
        left: 0;
        pointer-events: none;
        z-index: 99999999; /* so that it stays on top of all other elements */
      }
      /*.circle-cursor:after {
        content: "";
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%) scale(1.8);
        border: 1px solid var(--colors);
        width: 100%;
        height: 100%;
        border-radius: 50%;
      }*/

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
          margin-bottom: 10px;
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



<!-- NEW HEADER STYLE -->

<?php if($defaultHeader == "creativelayers"): ?>
  <style>
  #_header-root * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    color: white !important;
  }

  .container-global {
    padding-left: 7% !important;
    padding-right: 7% !important;
  }

  body {
    font-family: "Jost", sans-serif;
  }

  #_header-root {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 9999;
  }
  #_header-root ._header-wrapper {
    padding-top: 1rem;
    padding-bottom: 1rem;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    gap: 3rem;
  }
  #_header-root ._header-wrapper ._header-hamburger {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    gap: 1rem;
    font-family: var(--subtext), sans-serif;
  }
  #_header-root ._header-wrapper ._header-hamburger i {
    font-size: 2rem;
  }
  #_header-root ._header-wrapper ._header-hamburger span {
    display: none;
  }
  @media (min-width: 64rem) {
    #_header-root ._header-wrapper ._header-hamburger span {
      display: inline;
    }
  }
  #_header-root ._header-wrapper ._header-brand {
    margin: 0 auto;
  }
  #_header-root ._header-wrapper ._header-brand img {
    width: 140px;
    object-fit: cover;
  }
  #_header-root ._header-wrapper ._header-whatsapp {
    display: none;
    font-family: var(--subtext), sans-serif;
  }
  @media (min-width: 64rem) {
    #_header-root ._header-wrapper ._header-whatsapp {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      gap: 0.6rem;
    }
  }
  #_header-root ._header-wrapper ._header-book-btn {
    display: none;
    border: 1px solid white;
    padding: 0.6rem 1rem;
    text-decoration: none;
    font-size: 16px;
    font-family: var(--subtext), sans-serif;
  }
  @media (min-width: 64rem) {
    #_header-root ._header-wrapper ._header-book-btn {
      display: flex;
      font-size: 20px;
    }
  }

  #_hamburger-content {
    position: fixed;
    left: 0;
    width: 100%;
    height: 100vh;
    top: -150%;
    background-color: white;
    z-index: 99999;
    overflow: hidden;
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: stretch;
  }
  #_hamburger-content ._hamburger-content-wrapper {
    z-index: 3;
    position: relative;
    height: 100%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: stretch;
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-left {
    overflow: auto;
    flex: 1;
    padding: clamp(3rem, 3vw, 8rem);
    gap: 4rem;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: stretch;
  }
  @media (min-width: 64rem) {
    #_hamburger-content ._hamburger-content-wrapper ._content-left {
      flex: 0.5;
    }
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-close-btn {
    margin-right: auto;
    text-transform: uppercase;
    background-color: transparent;
    color: white;
    box-shadow: none;
    border: none;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 0.8rem;
    font-size: 16px;
    font-family: var(--primtext), sans-serif;
  }
  @media (min-width: 64rem) {
    #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-close-btn {
      font-size: 24px;
    }
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-links-wrapper {
    gap: 2rem;
    margin-left: 1.8rem;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
  }
  @media (min-width: 64rem) {
    #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-links-wrapper {
      margin-left: 2.2rem;
    }
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-links-wrapper ._link-wrapper {
    overflow: hidden;
    padding-top: 0.4rem;
    padding-bottom: 0.4rem;
    gap: 1.6rem;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-links-wrapper ._link-wrapper ._link {
    text-decoration: none;
    color: white;
    font-size: 2rem;
    font-weight: 300;
    padding: 0.1rem 0;
    font-family: var(--primtext), sans-serif;
    transform: translateY(100%);
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-links-wrapper ._link-wrapper ._hamburger-sub-links-wrapper {
    margin-left: 2rem;
    flex-direction: column;
    opacity: 0;
    display: none;
    gap: 1rem;
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-links-wrapper ._link-wrapper ._hamburger-sub-links-wrapper ._sub-link-wrapper ._sub-link {
    color: white;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    text-decoration: none;
    font-size: 16px;
    font-family: "Jost", sans-serif;
  }
  @media (min-width: 64rem) {
    #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-links-wrapper ._link-wrapper ._hamburger-sub-links-wrapper ._sub-link-wrapper ._sub-link {
      font-size: 20px;
    }
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-right {
    flex: 1;
    background-color: #F9DABA;
    display: none;
    padding: 4rem;
  }
  @media (min-width: 64rem) {
    #_hamburger-content ._hamburger-content-wrapper ._content-right {
      display: flex;
      flex-direction: column;
      justify-content: space-evenly;
      align-items: center;
      flex: 0.5;
    }
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-right * {
    padding: 0;
    margin: 0;
    letter-spacing: 0;
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-right div {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 0.4rem;
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-right div h4 {
    font-size: 1.8rem;
    font-family: var(--primtext), sans-serif;
    color: rgba(0, 0, 0, 0.7);
  }
  #_hamburger-content ._hamburger-content-background-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 2;
  }

  /*# sourceMappingURL=header.css.map */


  </style>



  <script defer>

  document.addEventListener("DOMContentLoaded", () => {
      const globalCubicBezier = [0.44, 0, 0.03, 0.96]
      const headerHamburgerBtn = document.querySelector("#_header-root ._header-hamburger")
      const headerHamburgerCloseBtn = document.querySelector("#_hamburger-content ._hamburger-close-btn")
      const headerHamburgerContent = document.querySelector("#_hamburger-content")
      const hamburgerContentRight = document.querySelector("#_hamburger-content ._content-right")
      const hamburgerLinkWrappers = document.querySelectorAll("#_hamburger-content ._link-wrapper")

      const hamburgerMainLinkWrappers = document.querySelectorAll("#_hamburger-content ._hamburger-links-wrapper")
      const hamburgerSubLinkWrappers = document.querySelectorAll("#_hamburger-content ._hamburger-sub-links-wrapper")
      const hamburgerLinks = document.querySelectorAll("#_hamburger-content ._link")
      const headerRoot = document.querySelector("#_header-root")

      let isScrolled = false;

      scroll(progress => {
        if (progress > 0 && !isScrolled) {
          animate(headerRoot, {
            backgroundColor: "rgba(0, 0, 0, 1)"
          }, {
            duration: 1
          });
          isScrolled = true;
        } else if (progress === 0 && isScrolled) {
          animate(headerRoot, {
            backgroundColor: "rgba(0, 0, 0, 0)"
          }, {
            duration: 1
          });
          isScrolled = false;
        }
      });

      headerHamburgerBtn.addEventListener("click", () => {
        animate(headerHamburgerContent, {
          top: ["-150%", "0"],
          borderRadius: ["0% 0% 100% 0% / 0% 0% 100% 0%", "0% 0% 100% 0% / 0% 0% 0% 0%"]
        }, {
          duration: 1.5,
          ease: globalCubicBezier
        })
        animate(hamburgerContentRight, {
          x: [200, 0],
          opacity: [0, 1]
        }, {
          duration: 1,
          delay: 1,
          ease: globalCubicBezier
        })

        animate(hamburgerMainLinkWrappers, {
          opacity: [0, 1]
        }, {
          duration: 1,
          delay: 1,
          ease: globalCubicBezier
        })
        hamburgerLinks.forEach((val, index) => {
          animate(val, {
            y: ["150%", "0"]
          }, {
            delay: 1.5 + (index * 0.05),
            duration: 1,
            ease: globalCubicBezier
          })
        })
      })


      hamburgerLinkWrappers.forEach((val, index) => {
        val.addEventListener("mouseleave", () => {
          const subWrapper = val.querySelector("._hamburger-sub-links-wrapper")
          if (subWrapper !== null) {
            animate(subWrapper, {
              opacity: [1, 0],
              display: ["flex", "none"]
            })
          }
        })
        val.addEventListener("mouseenter", () => {
          const subWrapper = val.querySelector("._hamburger-sub-links-wrapper")
          if (subWrapper !== null) {
            animate(subWrapper, {
              opacity: [0, 1],
              display: ["none", "flex"]
            })
          }
        })
      })

      headerHamburgerCloseBtn.addEventListener("click", () => {
        animate(headerHamburgerContent, {
          top: ["0", "100%"]
        }, {
          duration: 1.5,
          ease: globalCubicBezier
        })
      })
  })


  </script>

<?php endif; ?>

<?php if($defaultHeader == "creativelayers_2"): ?>
  <style>
  #_header-root {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 9999;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    transition: all ease-in-out 1s;
  }

  #_header-root.hide-header {
    top: -100%;
    opacity: 0;
  }

  #_header-root.show-header {
    top: 0;
    opacity: 1;
  }

  #_header-root ._header-wrapper {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: stretch;
    gap: 4rem;
  }
  #_header-root ._header-wrapper ._header-hamburger {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    gap: 1rem;
    font-family: var(--subtext), sans-serif;
  }
  #_header-root ._header-wrapper ._header-hamburger i {
    font-size: 2rem;
  }
  #_header-root ._header-wrapper ._header-hamburger span {
    display: none;
    color: white;
  }
  @media (min-width: 64rem) {
    #_header-root ._header-wrapper ._header-hamburger span {
      display: inline;
    }
  }
  #_header-root ._header-wrapper ._header-brand {
    margin: 1.8rem auto;
  }
  #_header-root ._header-wrapper ._header-brand img {
    width: 80px;
    object-fit: cover;
  }
  #_header-root ._header-wrapper ._header-whatsapp {
    display: none;
    font-family: var(--subtext), sans-serif;
    color: white;
  }
  @media (min-width: 64rem) {
    #_header-root ._header-wrapper ._header-whatsapp {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      gap: 0.6rem;
    }
  }
  #_header-root ._header-wrapper ._header-search {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    font-size: 1.2rem;
    color: white;
  }
  #_header-root ._header-wrapper ._header-book-btn {
    display: none;
    text-transform: uppercase;
    text-decoration: none;
    font-size: 14px;
    border-left: 1px solid rgba(255, 255, 255, 0.1);
    padding-left: 3rem;
    font-family: var(--primtext), sans-serif;
    color: white;
  }
  @media (min-width: 64rem) {
    #_header-root ._header-wrapper ._header-book-btn {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      font-size: 16px;
    }
  }

  #_hamburger-content {
    position: fixed;
    left: 0;
    width: 100%;
    height: 100vh;
    top: -150%;
    background-color: white;
    z-index: 99999;
    overflow: hidden;
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: stretch;
  }
  #_hamburger-content ._hamburger-content-wrapper {
    z-index: 3;
    position: relative;
    height: 100%;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: stretch;
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-left {
    overflow: auto;
    flex: 1;
    padding: clamp(3rem, 3vw, 8rem);
    gap: 4rem;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: stretch;
  }
  @media (min-width: 64rem) {
    #_hamburger-content ._hamburger-content-wrapper ._content-left {
      flex: 0.5;
    }
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-close-btn {
    margin-right: auto;
    text-transform: uppercase;
    background-color: transparent;
    color: white;
    box-shadow: none;
    border: none;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    gap: 0.8rem;
    font-size: 16px;
    font-family: var(--primtext), sans-serif;
  }
  @media (min-width: 64rem) {
    #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-close-btn {
      font-size: 24px;
    }
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-links-wrapper {
    gap: 2rem;
    margin-left: 1.8rem;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
  }
  @media (min-width: 64rem) {
    #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-links-wrapper {
      margin-left: 2.2rem;
    }
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-links-wrapper ._link-wrapper {
    overflow: hidden;
    padding-top: 0.4rem;
    padding-bottom: 0.4rem;
    gap: 1.6rem;
    display: flex;
    flex-direction: column;
    justify-content: start;
    align-items: start;
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-links-wrapper ._link-wrapper ._link {
    text-decoration: none;
    color: white;
    font-size: 2rem;
    font-weight: 300;
    padding: 0.1rem 0;
    line-height: 40px;
    font-family: var(--primtext), sans-serif;
    transform: translateY(100%);
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-links-wrapper ._link-wrapper ._hamburger-sub-links-wrapper {
    margin-left: 2rem;
    flex-direction: column;
    opacity: 0;
    display: none;
    gap: 1rem;
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-links-wrapper ._link-wrapper ._hamburger-sub-links-wrapper ._sub-link-wrapper ._sub-link {
    color: white;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    text-decoration: none;
    font-size: 16px;
    font-family: "Jost", sans-serif;
  }
  @media (min-width: 64rem) {
    #_hamburger-content ._hamburger-content-wrapper ._content-left ._hamburger-links-wrapper ._link-wrapper ._hamburger-sub-links-wrapper ._sub-link-wrapper ._sub-link {
      font-size: 20px;
    }
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-right {
    flex: 1;
    background-color: #F9DABA;
    display: none;
    padding: 4rem;
  }
  @media (min-width: 64rem) {
    #_hamburger-content ._hamburger-content-wrapper ._content-right {
      display: flex;
      flex-direction: column;
      justify-content: space-evenly;
      align-items: center;
      flex: 0.5;
    }
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-right * {
    padding: 0;
    margin: 0;
    letter-spacing: 0;
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-right div {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 0.4rem;
  }
  #_hamburger-content ._hamburger-content-wrapper ._content-right div h4 {
    font-size: 1.8rem;
    font-family: var(--primtext), sans-serif;
    color: rgba(0, 0, 0, 0.7);
  }
  #_hamburger-content ._hamburger-content-background-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 2;
  }


  </style>

  <script defer>
  document.addEventListener("DOMContentLoaded", () => {
  const globalCubicBezier = [0.44, 0, 0.03, 0.96]
  const headerHamburgerBtn = document.querySelector("#_header-root ._header-hamburger")
  const headerHamburgerCloseBtn = document.querySelector("#_hamburger-content ._hamburger-close-btn")
  const headerHamburgerContent = document.querySelector("#_hamburger-content")
  const hamburgerContentRight = document.querySelector("#_hamburger-content ._content-right")
  const hamburgerLinkWrappers = document.querySelectorAll("#_hamburger-content ._link-wrapper")

  const hamburgerMainLinkWrappers = document.querySelectorAll("#_hamburger-content ._hamburger-links-wrapper")
  const hamburgerSubLinkWrappers = document.querySelectorAll("#_hamburger-content ._hamburger-sub-links-wrapper")
  const hamburgerLinks = document.querySelectorAll("#_hamburger-content ._link")
  const headerRoot = document.querySelector("#_header-root")

  let isScrolled = false;
  let scrolledDown = false;

  let lastScrollTop = document.documentElement.scrollTop;

    document.addEventListener("scroll", () => {
    const currentScroll = document.documentElement.scrollTop;

    if (currentScroll > lastScrollTop) {
        // Scroll down → sembunyikan
        headerRoot.classList.remove("show-header");
        headerRoot.classList.add("hide-header");
    } else if (currentScroll < lastScrollTop) {
        // Scroll up → tampilkan
        headerRoot.classList.remove("hide-header");
        headerRoot.classList.add("show-header");
    }

    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    });

  scroll(progress => {
    if (progress > 0 && !isScrolled) {
      animate(headerRoot, {
        backdropFilter: "blur(5px)",
      }, {
        duration: 1
      });
      isScrolled = true;
    } else if (progress === 0 && isScrolled) {
      animate(headerRoot, {
        backdropFilter: "blur(0px)",
      }, {
        duration: 1
      });
      isScrolled = false;
    }
  });

  headerHamburgerBtn.addEventListener("click", () => {
    animate(headerHamburgerContent, {
      top: ["-150%", "0"],
      borderRadius: ["0% 0% 100% 0% / 0% 0% 100% 0%", "0% 0% 100% 0% / 0% 0% 0% 0%"]
    }, {
      duration: 1.5,
      ease: globalCubicBezier
    })
    animate(hamburgerContentRight, {
      x: [200, 0],
      opacity: [0, 1]
    }, {
      duration: 1,
      delay: 1,
      ease: globalCubicBezier
    })

    animate(hamburgerMainLinkWrappers, {
      opacity: [0, 1]
    }, {
      duration: 1,
      ease: globalCubicBezier
    })
    hamburgerLinks.forEach((val, index) => {
      animate(val, {
        y: ["150%", "0"]
      }, {
        delay: 1.5 + (index * 0.05),
        duration: 1,
        ease: globalCubicBezier
      })
    })
  })


  hamburgerLinkWrappers.forEach((val, index) => {
    val.addEventListener("mouseleave", () => {
      const subWrapper = val.querySelector("._hamburger-sub-links-wrapper")
      if (subWrapper !== null) {
        animate(subWrapper, {
          opacity: [1, 0],
          display: ["flex", "none"]
        })
      }
    })
    val.addEventListener("mouseenter", () => {
      const subWrapper = val.querySelector("._hamburger-sub-links-wrapper")
      if (subWrapper !== null) {
        animate(subWrapper, {
          opacity: [0, 1],
          display: ["none", "flex"]
        })
      }
    })
  })

  headerHamburgerCloseBtn.addEventListener("click", () => {
    animate(headerHamburgerContent, {
      top: ["0", "100%"]
    }, {
      duration: 1.5,
      ease: globalCubicBezier
    })
  })

  });
  </script>

<?php endif; ?>

<?php if ($defaultHeader == "villadellatorre"): ?>
  <style>
    #_header-root * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      color: white !important;
    }

    .container-global {
      padding-left: 7% !important;
      padding-right: 7% !important;
    }

    body {
      font-family: "Jost", sans-serif;
    }

    #_header-root {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 9999;
    }
    #_header-root ._header-wrapper {
      padding-top: 1rem;
      padding-bottom: 1rem;
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }
    #_header-root ._header-wrapper ._header-brand img {
      width: 100px;
      object-fit: cover;
    }
    @media (min-width: 768px) {
      #_header-root ._header-wrapper ._header-brand img {
        width: 140px;
      }
    }
    #_header-root ._header-wrapper ._header-hamburger-btn {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 4px;
      border-radius: 999em;
      background-color: rgba(255, 255, 255, 0.2);
      padding: 8px;
      width: 50px;
      position: relative;
      aspect-ratio: 4/4;
      cursor: pointer;
      transform: scale(1);
    }
    #_header-root ._header-wrapper ._header-hamburger-btn ._hamburger-line {
      position: absolute;
      transform: translate(-50%, -50%);
      width: 60%;
      height: 2px;
      transform-origin: center;
      background-color: white;
    }
    #_header-root ._header-wrapper ._header-hamburger-btn ._hamburger-line:first-child {
      top: 45%;
      left: 50%;
      z-index: 1;
    }
    #_header-root ._header-wrapper ._header-hamburger-btn ._hamburger-line:last-child {
      top: 55%;
      left: 50%;
      z-index: 2;
    }
    #_header-root ._header-wrapper ._header-book-btn {
      background-color: var(--colors);
      font-family: var(--primtext);
      padding: 0.6rem 1rem;
      cursor: pointer;
    }
    @media (min-width: 768px) {
      #_header-root ._header-wrapper ._header-book-btn {
        padding: 0.8rem 1.2rem;
        font-size: 18px;
      }
    }

    ._hamburger-content-root {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100vh;
      display: none;
      z-index: 999;
    }
    ._hamburger-content-root ._hamburger-content-left {
      position: absolute;
      top: 0;
      left: 0;
      width: 0;
      padding: 0;
      margin: 0;
      background-color: black;
      height: 100%;
    }
    ._hamburger-content-root ._hamburger-content-right {
      position: absolute;
      top: 0;
      right: 0;
      padding: 0;
      margin: 0;
      width: 0;
      background-color: black;
      height: 100%;
    }
    ._hamburger-content-root ._hamburger-content-nav {
      position: absolute;
      left: 0;
      right: 0;
      width: 100%;
      color: white;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: clamp(1rem, 2vw, 1.4rem);
      z-index: 9999;
    }
    ._hamburger-content-root ._hamburger-content-nav ._link-wrapper {
      display: flex;
      flex-direction: column;
      justify-content: start;
      align-items: center;
      gap: 1rem;
    }
    ._hamburger-content-root ._hamburger-content-nav ._link-wrapper ._link-underline {
      height: 2px;
      width: 0;
      margin-bottom: 0.2rem;
      background-color: white;
    }
    ._hamburger-content-root ._hamburger-content-nav ._link-wrapper:hover ._link-underline {
      background-color: var(--colors);
    }
    ._hamburger-content-root ._hamburger-content-nav ._link-wrapper ._link {
      font-size: 24px;
      text-transform: uppercase;
      font-family: var(--primtext);
    }
    @media (min-width: 768px) {
      ._hamburger-content-root ._hamburger-content-nav ._link-wrapper ._link {
        font-size: 32px;
      }
    }
    ._hamburger-content-root ._hamburger-content-nav ._link-wrapper ._link:hover {
      color: var(--colors);
    }
    ._hamburger-content-root ._hamburger-content-nav ._link-wrapper ._sublink-wrapper {
      display: none;
      margin-bottom: 2rem;
      flex-direction: column;
      justify-content: start;
      align-items: center;
    }
    ._hamburger-content-root ._hamburger-content-nav ._link-wrapper ._sublink-wrapper ._sublink {
      font-family: var(--primtext);
      font-size: 24px;
      font-weight: 200;
    }
    ._hamburger-content-root ._hamburger-content-nav ._link-wrapper a {
      text-decoration: none;
      color: white;
    }
  </style>

  <script defer>
    document.addEventListener("DOMContentLoaded", () => {
      let burgeredOpen = false
      const globalCubicBezier = [0.44, 0, 0.03, 0.96]
      const headerHamburgerBtn = document.querySelector("#_header-root ._header-hamburger-btn")
      const headerHamburgerBtnLine1 = document.querySelector("#_header-root ._header-hamburger-btn ._line-1")
      const headerHamburgerBtnLine2 = document.querySelector("#_header-root ._header-hamburger-btn ._line-2")
      const hamburgerContentRoot = document.querySelector("._hamburger-content-root")
      const hamburgerContentLeft = document.querySelector("._hamburger-content-root ._hamburger-content-left")
      const hamburgerContentRight = document.querySelector("._hamburger-content-root ._hamburger-content-right")
      const hamburgerContentLinWrappers = document.querySelectorAll("._hamburger-content-root ._link-wrapper")
      const hamburgerContentLinks = document.querySelectorAll("._hamburger-content-root ._link")

      headerHamburgerBtn.addEventListener("click", () => {
        if (burgeredOpen === false) {
          animate(headerHamburgerBtnLine1, { transform: "rotate(45deg)", left: "auto", top: "50%"}, { ease: globalCubicBezier, duration: 0.5 })
          animate(headerHamburgerBtnLine2, { transform: "rotate(-45deg)", left: "auto", top: "50%"}, { ease: globalCubicBezier, duration: 0.5 })
          animate(hamburgerContentRoot, { display: "flex" })
          animate(hamburgerContentRight, { width: "51%" }, { duration: 1, ease: "anticipate" })
          animate(hamburgerContentLeft, { width: "51%" },  { duration: 1, ease: "anticipate" })

          hamburgerContentLinks.forEach((item, index) => {
            animate(item, { y: [100, 0], opacity: [0, 1] }, { delay: 0.5 + (index * 0.1), ease: globalCubicBezier, duration: 1 })
          })

        } else {
          animate(headerHamburgerBtnLine1, { transform: "rotate(0deg)", top: "45%"}, { ease: globalCubicBezier, duration: 0.5 })
          animate(headerHamburgerBtnLine2, { transform: "rotate(0deg)", top: "55%"}, { ease: globalCubicBezier, duration: 0.5 })
          animate(hamburgerContentRoot, { display: "none" }, { delay: 1 })
          animate(hamburgerContentRight, { width: "0" }, { delay: 1 })
          animate(hamburgerContentLeft, { width: "0" }, { delay: 1 })

          hamburgerContentLinks.forEach((item, index) => {
            animate(item, { y: [0, -100], opacity: [1, 0] }, { delay: index * 0.1, ease: globalCubicBezier, duration: 1 })
          })
        }
        burgeredOpen = !burgeredOpen
      })
      headerHamburgerBtn.addEventListener("mouseenter", () => {
        animate(headerHamburgerBtn, {
          transform: "scale(0.9)",
          gap: "0"
        }, { duration: 0.5, ease: globalCubicBezier })
      })
      headerHamburgerBtn.addEventListener("mouseleave", () => {
        animate(headerHamburgerBtn, {
          transform: "scale(1)",
          gap: "4px"
        }, { duration: 0.5, ease: globalCubicBezier })
      })
      hamburgerContentLinWrappers.forEach((item) => {
        item.addEventListener("mouseenter", () => {
          const link = item.querySelector("._link")
          const subWrapper = item.querySelector("._sublink-wrapper")
          const underline = item.querySelector("._link-underline")
          animate(link, { letterSpacing: ["0", "5px"] })
          if (subWrapper !== null) {
            animate(subWrapper, { display: ["none", "flex"] })
            animate(subWrapper, { opacity: [0, 1] })
            animate(underline, { width: ["0", "50%"] }, { duration: 1, ease: globalCubicBezier })
          }
        })
        item.addEventListener("mouseleave", () => {
          const link = item.querySelector("._link")
          const subWrapper = item.querySelector("._sublink-wrapper")
          const underline = item.querySelector("._link-underline")
          animate(link, { letterSpacing: ["5px", "0"] })
          if (subWrapper !== null) {
            animate(subWrapper, { display: ["flex", "none"] })
            animate(underline, { width: ["50%", "0"] }, { duration: 1, ease: globalCubicBezier })
          }
        })
      })
    })
  </script>
<?php endif; ?>

<?php if ($defaultHeader == "amaliproperties"): ?>
  <style>
    #_header-root {
      padding-top: 2rem;
      padding-bottom: 2rem;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      z-index: 9999;
    }
    #_header-root ._header-wrapper {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
    }
    #_header-root ._header-wrapper ._hamburger-wrapper {
      position: relative;
      width: 50px;
      aspect-ratio: 1/1;
    }
    #_header-root ._header-wrapper ._hamburger-wrapper ._hamburger-content {
      position: absolute;
      top: 0;
      left: 0;
      width: 50px;
      height: 50px;
      border-radius: 1.5rem;
      display: flex;
      flex-direction: column;
      justify-content: end;
      align-items: stretch;
      z-index: 1;
      background-color: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(20px);
    }
    #_header-root ._header-wrapper ._hamburger-wrapper ._hamburger-content ._links-wrapper {
      height: 90%;
      width: 100%;
      padding: 0 4rem 4rem;
      display: none;
      flex-direction: column;
      justify-content: space-evenly;
      align-items: start;
    }
    #_header-root ._header-wrapper ._hamburger-wrapper ._hamburger-content ._links-wrapper ._link-wrapper {
      padding: 0.4rem 0;
      position: relative;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
    }
    #_header-root ._header-wrapper ._hamburger-wrapper ._hamburger-content ._links-wrapper ._link-wrapper ._link {
      text-transform: uppercase;
      font-size: 1.8rem;
      font-family: var(--primtext);
      line-height: 2.4rem;
      text-decoration: none;
    }
    @media (min-width: 570px) {
      #_header-root ._header-wrapper ._hamburger-wrapper ._hamburger-content ._links-wrapper ._link-wrapper ._link {
        font-size: 2.4rem;
      }
    }
    #_header-root ._header-wrapper ._hamburger-wrapper ._hamburger-content ._links-wrapper ._link-wrapper ._sublinks-wrapper {
      position: absolute;
      right: -80px;
      opacity: 0;
      top: 50%;
      transform: translateY(-50%);
      background-color: white;
      overflow: hidden;
      padding: 1rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: start;
      gap: .8rem;
      border-radius: .4rem;
    }
    #_header-root ._header-wrapper ._hamburger-wrapper ._hamburger-content ._links-wrapper ._link-wrapper ._sublinks-wrapper ._sublink-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      overflow: hidden;
    }
    #_header-root ._header-wrapper ._hamburger-wrapper ._hamburger-content ._links-wrapper ._link-wrapper ._sublinks-wrapper ._sublink-wrapper ._sublink {
      color: rgba(0, 0, 0, 0.5);
      text-decoration: none;
      text-transform: uppercase;
      font-size: 20px;
      font-family: var(--primtext);
      transform: translateY(200%);
    }
    #_header-root ._header-wrapper ._hamburger-wrapper ._hamburger-btn {
      width: 40px;
      position: absolute;
      z-index: 2;
      cursor: pointer;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 999em;
      aspect-ratio: 1/1;
      background-color: white;
    }
    #_header-root ._header-wrapper ._hamburger-wrapper ._hamburger-btn ._line {
      position: absolute;
      transform: translate(-50%, -50%);
      width: 60%;
      height: 2px;
      transform-origin: center;
      background-color: black;
    }
    #_header-root ._header-wrapper ._hamburger-wrapper ._hamburger-btn ._line:first-child {
      top: 45%;
      left: 50%;
      z-index: 1;
    }
    #_header-root ._header-wrapper ._hamburger-wrapper ._hamburger-btn ._line:last-child {
      top: 55%;
      left: 50%;
      z-index: 2;
    }
    #_header-root ._header-wrapper ._header-brand img {
      width: 100px;
      object-fit: cover;
    }
    @media (min-width: 768px) {
      #_header-root ._header-wrapper ._header-brand img {
        width: 140px;
      }
    }
    #_header-root ._header-wrapper ._header-book-btn {
      background-color: var(--colors);
      padding: 0.6rem 1rem;
      cursor: pointer;
      font-family: var(--primtext);
      color: white;
    }
    @media (min-width: 768px) {
      #_header-root ._header-wrapper ._header-book-btn {
        padding: 0.8rem 1.2rem;
        font-size: 18px;
      }
    }

    /*# sourceMappingURL=amaliproperties.css.map */

  </style>

  <script defer>
    document.addEventListener("DOMContentLoaded", () => {
      let burgeredOpen = false
      let phoneMode = false
      const defaultAnimation = {duration: 1, ease: [0.52, 0.51, 0, 1]}
      const headerRoot = document.querySelector("#_header-root")
      const hamburgerBtn = document.querySelector("#_header-root ._hamburger-btn")
      const hamburgerContent = document.querySelector("#_header-root ._hamburger-content")
      const linksWrapper = document.querySelector("#_header-root ._links-wrapper")
      const linkWrapper = document.querySelectorAll("#_header-root ._link-wrapper")
      const links = document.querySelectorAll("#_header-root ._link")
      const sublinks = document.querySelectorAll("#_header-root ._sublink")
      const headerHamburgerBtnLine1 = document.querySelector("#_header-root ._hamburger-btn ._line-1")
      const headerHamburgerBtnLine2 = document.querySelector("#_header-root ._hamburger-btn ._line-2")
      const mediaQuery = window.matchMedia('(min-width: 570px)')

      scroll(progress => {
        if (progress > 0) {
          animate(headerRoot, { backgroundColor: "rgba(0,0,0,0.5)", backdropFilter: "blur(10px)" })
        } else {
          animate(headerRoot, { backgroundColor: "rgba(0,0,0,0)", backdropFilter: "blur(0)" })
        }
      })

      linkWrapper.forEach((item) => {
        const sub = item.querySelector("._sublinks-wrapper")
        const link = item.querySelector("._link")
        if (sub !== null) {
          item.addEventListener("mouseenter", () => {
            animate(link, { opacity: [1, 0.5] }, defaultAnimation)
            animate(sub, { opacity: [0, 1] }, defaultAnimation)
            sublinks.forEach((sublink, index) => {
              animate(sublink, { y: ["200%", "0"] }, {...defaultAnimation, delay: index * 0.1 })
            })
          })
          item.addEventListener("mouseleave", () => {
            animate(link, { opacity: [0.5, 1] }, defaultAnimation)
            animate(sub, { opacity: [1, 0] }, defaultAnimation)
            sublinks.forEach((sublink, index) => {
              animate(sublink, { y: ["0", "-200%"] }, {...defaultAnimation, delay: index * 0.1 })
            })
          })
        }
      })

      hamburgerBtn.addEventListener("click", (e) => {
        e.stopPropagation();
        if (burgeredOpen === false) {
          animate(headerHamburgerBtnLine1, { transform: "rotate(45deg)", left: "20%", top: "50%"}, defaultAnimation)
          animate(headerHamburgerBtnLine2, { transform: "rotate(-45deg)", left: "20%", top: "50%"}, defaultAnimation)
          animate(linksWrapper, {display: "flex"}, {delay: 0.5})
          animate(hamburgerContent, {
            width: phoneMode ? ["50px", "320px"] : ["50px", "500px"],
            height: ["50px", "80vh"]
          }, defaultAnimation)
          links.forEach((link, index) => {
            animate(link, { y: ["110%", 0], opacity: [0, 1] }, {...defaultAnimation, delay: 0.5 + (index * 0.1)})
          })
        } else {
          animate(headerHamburgerBtnLine1, { transform: "rotate(0deg)", top: "45%"}, defaultAnimation)
          animate(headerHamburgerBtnLine2, { transform: "rotate(0deg)", top: "55%"}, defaultAnimation)
          animate(linksWrapper, {display: "none"}, { delay: 0.5})
          animate(hamburgerContent, {
            width: phoneMode ? ["320px", "50px"] : ["500px", "50px"],
            height: ["80vh", "50px"] }, {...defaultAnimation, delay: 1})
          links.forEach((link, index) => {
            animate(link, { y: [0, "-110%"], opacity: [1, 0] }, {...defaultAnimation, delay: (index * 0.1)})
          })
        }
        burgeredOpen = !burgeredOpen
      })
      function handleTabletChange(e) {
        phoneMode = !e.matches;
      }
      mediaQuery.addListener(handleTabletChange)
      handleTabletChange(mediaQuery)
    })
  </script>
<?php endif; ?>

<?php if ($defaultHeader == "behave"): ?>
  <style>
    #_header-root {
      padding-top: 2rem;
      padding-bottom: 2rem;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
      z-index: 9999;
    }
    #_header-root ._header-wrapper {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      gap: 1rem;
    }
    #_header-root ._header-wrapper ._book-btn {
      margin-left: auto;
    }
    #_header-root ._header-wrapper ._hamburger-btn {
      width: 40px;
      z-index: 2;
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      border-radius: 999em;
      position: relative;
      aspect-ratio: 1/1;
      background-color: white;
    }
    #_header-root ._header-wrapper ._hamburger-btn ._line {
      position: absolute;
      transform: translate(-50%, -50%);
      width: 60%;
      height: 2px;
      transform-origin: center;
      background-color: black;
    }
    #_header-root ._header-wrapper ._hamburger-btn ._line:first-child {
      top: 45%;
      left: 50%;
      z-index: 1;
    }
    #_header-root ._header-wrapper ._hamburger-btn ._line:last-child {
      top: 55%;
      left: 50%;
      z-index: 2;
    }

    ._hamburger-content {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: stretch;
      position: fixed;
      right: 120%;
      top: 0;
      width: 90%;
      height: 100vh;
      z-index: 999;
    }
    @media (min-width: 768px) {
      ._hamburger-content {
        width: 40%;
      }
    }
    ._hamburger-content ._hamburger-content-wave {
      width: 120px;
      background-color: var(--colors);
      border-radius: 100% 0 0 100%/50% 25% 25% 50%;
    }
    ._hamburger-content ._hamburger-content-main {
      padding: 8rem 2rem;
      display: flex;
      flex-direction: column;
      justify-content: start;
      align-items: stretch;
      gap: 1rem;
      background-color: var(--colors);
      flex: 1;
      overflow: auto;
    }
    @media (min-width: 768px) {
      ._hamburger-content ._hamburger-content-main {
        padding: 10rem 4rem;
      }
    }
    ._hamburger-content ._hamburger-content-main a, ._hamburger-content ._hamburger-content-main p {
      padding: 0;
      margin: 0;
      font-family: var(--primtext), sans-serif;
      text-decoration: none;
      color: white;
      font-size: 2rem;
    }
    @media (min-width: 768px) {
      ._hamburger-content ._hamburger-content-main a, ._hamburger-content ._hamburger-content-main p {
        font-size: 4rem;
      }
    }
    ._hamburger-content ._hamburger-content-main i {
      padding: 0;
      margin: 0;
      text-decoration: none;
      color: white;
      font-size: 1rem;
    }
    @media (min-width: 768px) {
      ._hamburger-content ._hamburger-content-main i {
        font-size: 2rem;
      }
    }
    ._hamburger-content ._hamburger-content-main ._link-wrapper {
      cursor: pointer;
    }
    ._hamburger-content ._hamburger-content-main ._link-wrapper ._unlink-wrapper {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid white;
    }
    ._hamburger-content ._hamburger-content-main ._link-wrapper ._sublinks-wrapper-grid {
      overflow: hidden;
      display: grid;
      grid-template-rows: 0fr;
    }
    ._hamburger-content ._hamburger-content-main ._link-wrapper ._sublinks-wrapper-grid ._sublinks-wrapper {
      margin: 1rem;
      overflow: hidden;
      display: flex;
      flex-direction: column;
      justify-content: start;
      align-items: start;
      gap: 1rem;
    }
    ._hamburger-content ._hamburger-content-main ._link-wrapper ._sublinks-wrapper-grid ._sublinks-wrapper ._sublink {
      display: flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      gap: 1rem;
      font-size: 1rem;
    }
    @media (min-width: 768px) {
      ._hamburger-content ._hamburger-content-main ._link-wrapper ._sublinks-wrapper-grid ._sublinks-wrapper ._sublink {
        font-size: 2rem;
      }
    }
    ._hamburger-content ._hamburger-content-main ._link-wrapper ._sublinks-wrapper-grid ._sublinks-wrapper ._sublink i {
      font-size: 1rem;
    }

    /*# sourceMappingURL=behave.css.map */

  </style>

  <script defer>


    document.addEventListener("DOMContentLoaded", () => {
      let burgeredOpen = false
      let phoneMode = false
      const globalEase = [0.52, 0.51, 0, 1]
      const defaultAnimation = {duration: 2, ease: globalEase}
      const hamburgerBtn = document.querySelector("#_header-root ._hamburger-btn")
      const headerHamburgerBtnLine1 = document.querySelector("#_header-root ._hamburger-btn ._line-1")
      const headerHamburgerBtnLine2 = document.querySelector("#_header-root ._hamburger-btn ._line-2")
      const hamburgerContent = document.querySelector("._hamburger-content")
      const hamburgerWave = document.querySelector("._hamburger-content ._hamburger-content-wave")
      const mediaQuery = window.matchMedia('(min-width: 768px)')
      const linksRootWrapper = document.querySelectorAll("._hamburger-content ._link-wrapper")

      linksRootWrapper.forEach((item) => {
        const sub = item.querySelector("._sublinks-wrapper-grid")
        const plusIcon = item.querySelector("i")
        item.addEventListener("mouseenter", () => {
          if (sub !== null) {
            animate(sub, { gridTemplateRows: ["0fr", "1fr"]}, { duration: 0.5, ease: globalEase })
          }
          if (plusIcon !== null) {
            animate(plusIcon, { rotate: "45deg" }, { duration: 0.5, ease: globalEase })
          }
        })
        item.addEventListener("mouseleave", () => {
          if (sub !== null) {
            animate(sub, { gridTemplateRows: ["1fr", "0fr"]}, { duration: 0.5, ease: globalEase })
          }
          if (plusIcon !== null) {
            animate(plusIcon, { rotate: "0deg" }, { duration: 0.5, ease: globalEase })
          }
        })
      })


      hamburgerBtn.addEventListener("click", () => {
        if (burgeredOpen === false) {
          animate(headerHamburgerBtnLine1, { transform: "rotate(45deg)", left: "20%", top: "50%"}, defaultAnimation)
          animate(headerHamburgerBtnLine2, { transform: "rotate(-45deg)", left: "20%", top: "50%"}, defaultAnimation)
          animate(hamburgerContent, { right: ["-120%", 0], width: phoneMode ? "90%" : "50%" }, defaultAnimation)
          animate(hamburgerWave, { width: ["120px", 0] }, defaultAnimation)
        } else {
          animate(headerHamburgerBtnLine1, { transform: "rotate(0deg)", top: "45%"}, defaultAnimation)
          animate(headerHamburgerBtnLine2, { transform: "rotate(0deg)", top: "55%"}, defaultAnimation)
          animate(hamburgerContent, { right: [0, "120%"], width: "100%" }, defaultAnimation)
        }
        burgeredOpen = !burgeredOpen
      })

      function handleTabletChange(e) {
        phoneMode = !e.matches;
      }
      mediaQuery.addListener(handleTabletChange)
      handleTabletChange(mediaQuery)
    })
  </script>
<?php endif; ?>

<?= $func->xview_header() ?>
<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Gilda+Display&display=swap" rel="stylesheet">
</head>
<body>
	<div class="body">

    <?php if($defaultHeader == "old"): ?>
      <header id="header"
          class="header-no-min-height <?= $data->site_position == "home" || $data->site_position == "view_product" ? ' header-transparent' : '' ?>"
          data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 600, 'stickySetTop': '0'}">
          <div class="header-body wow fadeIn" data-wow-duration="2s">
              <div class="header-container container-global head-sty">
                  <div class="header-row">
                      <div class="header-column justify-content-start logo-menu start-menu"
                          style="align-self: center; align-items: baseline;">
                          <div class="header-logo">
                              <a href="<?= base_url() ?>">
                                  <img style="object-fit: contain;" class="img-fluid" alt="logo 1"
                                      src="<?= $data->web->site_logo_alternative ?>">
                              </a>
                          </div>
                      </div>
                      <div class="header-column justify-content-start mid-menu">
                          <div class="header-row menu-andro">
                              <div class="header-nav header-nav-stripe">
                                  <div
                                      class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                      <nav class="collapse">
                                          <ul class="nav nav-pills" id="mainNav">
                                              <li class="nav-item"><a title="Home" class="nav-link"
                                                      href="<?= base_url() ?>">Home </a></li>
                                              <?php foreach ($data->menu->primary_menu as $menu) : ?>
                                              <?php $arrayi = json_decode(json_encode($menu), true); ?>
                                              <?php if (array_key_exists('child', $arrayi)) : ?>
                                              <li class="dropdown">
                                                  <a class="dropdown-item dropdown-toggle" href="javascript:void(0);"
                                                      title="<?= $menu->label ?>"><?= $menu->label ?></a>

                                                  <ul class="dropdown-menu">
                                                      <?php foreach ($menu->child as $menis) : ?>
                                                      <?php $arrayis = json_decode(json_encode($menis), true); ?>
                                                      <?php if (array_key_exists('child', $arrayis)) : ?>
                                                      <li class="dropdown-submenu">
                                                          <a class="dropdown-item" href="javascript:void(0);"
                                                              title="<?= $menis->label ?>"><?= $menis->label ?></a>
                                                          <ul class="dropdown-menu">
                                                              <?php foreach ($menis->child as $key => $menis) : ?>
                                                              <li><a class="dropdown-item" href="<?= $menis->link ?>"
                                                                      title="<?= $menis->label ?>"><?= $menis->label ?></a>
                                                              </li>
                                                              <?php endforeach ?>
                                                          </ul>
                                                      </li>
                                                      <?php else : ?>
                                                      <li><a class="dropdown-item" href="<?= $menis->link ?>"
                                                              title="<?= $menis->label ?>"><?= $menis->label ?></a></li>
                                                      <?php endif ?>
                                                      <?php endforeach ?>
                                                  </ul>

                                              </li>
                                              <?php else : ?>
                                              <li><a class="nav-link" href="<?= $menu->link ?>"
                                                      title="<?= $menu->label ?>"><?= $menu->label ?></a></li>
                                              <?php endif ?>


                                              <?php endforeach ?>

                                          </ul>
                                      </nav>
                                  </div>

                                  <style type="text/css">
                                  .b-p-bg-color .bar1,
                                  .b-p-bg-color .bar2,
                                  .b-p-bg-color .bar3 {
                                      width: 30px;
                                      height: 3px;
                                      margin: 6px 0;
                                      transition: 0.4s;
                                  }

                                  .b-p-bg-color .bar1 {
                                      background-color: #fff
                                  }

                                  .b-p-bg-color .bar2 {
                                      background-color: #fff
                                  }

                                  .b-p-bg-color .bar3 {
                                      background-color: #fff
                                  }

                                  html.sticky-header-active .b-p-bg-color .bar1 {
                                      background-color: #000
                                  }

                                  html.sticky-header-active .b-p-bg-color .bar2 {
                                      background-color: #000
                                  }

                                  html.sticky-header-active .b-p-bg-color .bar3 {
                                      background-color: #000
                                  }

                                  <?php if ($data->site_position !='home'): ?>.b-p-bg-color .bar1,
                                  .b-p-bg-color .bar2,
                                  .b-p-bg-color .bar3 {
                                      background-color: #fff !important;
                                  }

                                  <?php endif ?>*/ .b-p-bg-color .bar2 {
                                      width: 20px;
                                      margin: 0 0 0 auto;
                                  }
                                  </style>
                                  <button class="menu b-p-bg-color d-block d-md-none" id="menu-button">
                                      <div class="bar1"></div>
                                      <div class="bar2"></div>
                                      <div class="bar3"></div>
                                  </button>
                                  <div class="menu-box" id="menuWrapper">
                                      <button id="close" class="p-color"><i style="font-size:24px"
                                              class="fa">&#xf00d;</i></button>
                                      <div class="container menu-tour">
                                          <ul>
                                              <a href="<?= base_url() ?>">
                                                  <img style="height: 60px;" alt="logo 2" class="img-fluid mb-2"
                                                      loading="lazy" src="<?= $data->web->site_logo_alternative ?>"
                                                      alt="<?= $data->web->site_name ?>">
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

                                              <li style="border-bottom: unset;"><a class="btn btn-book-atas"
                                                      href="<?= $func->dm_whatsapp() ?>"><i
                                                          class="fa-regular fa-calendar mr-2"></i>Reserve Now</a></li>

                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

                      <div class="header-column end-menu">
                          <a class="btn btn-book-atas d-none d-md-block"
                              href="https://sensecanggubeach.reserveonline.id/book/743"><i
                                  class="fa-regular fa-calendar mr-2"></i>Reserve Now!</a>
                      </div>
                  </div>
              </div>
          </div>
      </header>

    <?php endif; ?>
    

    <!-- NEW HEADER -->


    <?php if($defaultHeader == "creativelayers"): ?>
      <header id="_header-root">
        <div class="_header-wrapper container-global">
          <div class="_header-hamburger">
            <i class="fa-solid fa-grip-lines"></i> <span>Menu</span>
          </div>
          <div class="_header-whatsapp">
            <i class="fa-solid fa-phone"></i>
            +62 123 4567 4567
          </div>
          <div class="_header-brand">
            <img src="https://jwc.gotra-resources.my.id/web-upload/1742791133-24-03-2025-rcH53iBWJjA96d2K4tY8ESyLOQpI0qCU.webp" alt="logo">
          </div>
          <div class="_header-language">EN <i class="fa-solid fa-chevron-down"></i></div>
          <a href="#" class="_header-book-btn">Book Your Stay</a>
        </div>
      </header>

      <div id="_hamburger-content" style="background-image: url('https://images.unsplash.com/photo-1531971589569-0d9370cbe1e5?q=80&w=2962&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
        <div class="_hamburger-content-wrapper">
          <div class="_content-left">
            <button class="_hamburger-close-btn"><i class="fa-solid fa-xmark"></i>Close</button>
            <div class="_hamburger-links-wrapper">

              <?php foreach ($header_links as $link): ?>
                <div class="_link-wrapper">
                  <a href="<?= $link->link ?>" class="_link"><?= $link->title ?></a>
                    <?php if (count($link->sub) != 0): ?>
                    <div class="_hamburger-sub-links-wrapper">
                      <?php foreach ($link->sub as $sub): ?>
                        <div class="_sub-link-wrapper">
                          <a href="<?= $sub->link ?>"  class="_sub-link"><i class="fa-solid fa-circle"></i> <?= $sub->title ?></a>
                        </div>
                      <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
              <?php endforeach; ?>

            </div>
          </div>
          <div class="_content-right">
            <div class="_content-1">
              <h4>RESORT TITLE</h4>
              <p>LUXURY HOTEL</p>
            </div>
            <div class="_content-2">
              <h4>Hotel & Spa Swiss Resort</h4>
            </div>
            <div class="_content-3">
              <h4>Location</h4>
              <p>PO Box 16122 Collins Street West Victoria 8007 Australia</p>
            </div>
            <div class="_content-4">
              <h4>Phone Support</h4>
              <p>+ 01 345 647 745</p>
              <p>info@swiss-resort.com</p>
            </div>
            <div class="_content-5">
              <h4>Connect With Us</h4>
              <p>+ 01 345 647 745</p>
            </div>
          </div>
        </div>
        <div class="_hamburger-content-background-overlay"></div>
      </div>
    <?php endif ?>


    <?php if($defaultHeader == "creativelayers_2"): ?>
      <header id="_header-root">
        <div class="_header-wrapper container-global">
          <div class="_header-hamburger">
            <div style="width: 20px; height: 26px; display: flex; flex-direction: column; justify-content: center; align-items: center; gap: .2rem">
                <div style="width: 100%; height: 2px; background-color: white;"></div>
                <div style="width: 100%; height: 2px; background-color: white;"></div>
            </div>
             <span>Menu</span>
          </div>
          <a href="tel:<?= $data->company->company_phone ?>" class="_header-whatsapp">
            <i class="fa-solid fa-phone"></i>
            <?= $data->company->company_phone ?>
          </a>
            <a href="<?= base_url() ?>" class="_header-brand">
                <img style="object-fit: contain;" class="img-fluid" alt="logo 1"
                    src="<?= $data->web->site_logo_alternative ?>">
            </a>
          <a href="#" class="_header-search"><i class="fa-solid fa-magnifying-glass"></i></a>
          <a href="#" class="_header-book-btn">GET IN TOUCH</a>
        </div>
      </header>

      <div id="_hamburger-content"
          style="background-image: url('https://images.unsplash.com/photo-1531971589569-0d9370cbe1e5?q=80&w=2962&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
        <div class="_hamburger-content-wrapper">
          <div class="_content-left">
            <div class="_hamburger-close-btn" style="display: flex; justify-content: center; align-items: center; gap: 1rem;">
                <div style="width: 20px; aspect-ratio: 1/1; display: flex; flex-direction: column; justify-content: center; align-items: center; position: relative;">
                    <div style="width: 100%; height: 2px; background-color: white; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); transform: rotate(45deg);"></div>
                    <div style="width: 100%; height: 2px; background-color: white; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); transform: rotate(-45deg);"></div>
                </div>
                Close
            </div>
            <div class="_hamburger-links-wrapper">

              <?php foreach ($header_links as $link): ?>
                <div class="_link-wrapper">
                  <a href="<?= $link->link ?>" class="_link"><?= $link->title ?></a>
                  <?php if (count($link->sub) != 0): ?>
                    <div class="_hamburger-sub-links-wrapper">
                      <?php foreach ($link->sub as $sub): ?>
                        <div class="_sub-link-wrapper">
                          <a href="<?= $sub->link ?>" class="_sub-link"><i class="fa-solid fa-circle"></i>
                            <?= $sub->title ?></a>
                        </div>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>

            </div>
          </div>
          <div class="_content-right">
            <div class="_content-1">
              <h4><?= $data->web->site_name ?></h4>
              <p style="text-align: center"><?= $data->web->site_desc ?></p>
            </div>
            <div class="_content-2">
              <h4><?= $data->web->site_about ?></h4>
            </div>
            <div class="_content-3">
              <h4>Location</h4>
              <p><?= $data->company->company_address ?></p>
            </div>
            <div class="_content-4">
              <h4>Phone Support</h4>
              <p><?= $data->company->company_phone ?></p>
              <p><?= $data->company->company_email ?></p>
            </div>
            <div class="_content-5">
              <h4>Connect With Us</h4>
              <p><?= $data->company->company_phone ?></p>
            </div>
          </div>
        </div>
        <div class="_hamburger-content-background-overlay"></div>
      </div>

    <?php endif; ?>

    <?php if ($defaultHeader == "villadellatorre"): ?>
      <header id="_header-root">
        <div class="_header-wrapper container-global">
          <div class="_header-brand">
            <img src="https://jwc.gotra-resources.my.id/web-upload/1742791133-24-03-2025-rcH53iBWJjA96d2K4tY8ESyLOQpI0qCU.webp" alt="logo">
          </div>
          <div class="_header-hamburger-btn">
            <div class="_hamburger-line _line-1"></div>
            <div class="_hamburger-line _line-2"></div>
          </div>
          <a class="_header-book-btn">Book Now</a>
        </div>
      </header>

      <div class="_hamburger-content-root">
        <div class="_hamburger-content-left"></div>

        <div class="_hamburger-content-nav">
          <?php foreach ($header_links as $link): ?>
            <div class="_link-wrapper">
              <a class="_link" href="<?= $link->link ?>"><?= $link->title ?></a>
              <div class="_link-underline"></div>

              <?php if (count($link->sub) != 0): ?>
                <div class="_sublink-wrapper">
                  <?php foreach ($link->sub as $sub): ?>
                    <a class="_sublink" href="<?= $sub->link ?>"><?= $sub->title ?></a>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="_hamburger-content-right">
        </div>
      </div>
    <?php endif; ?>

    <?php if($defaultHeader == "amaliproperties"): ?>
      <header id="_header-root">
        <div class="_header-wrapper container-global">
          <div class="_hamburger-wrapper">
            <div class="_hamburger-btn">
              <div class="_line _line-1"></div>
              <div class="_line _line-2"></div>
            </div>
            <div class="_hamburger-content">
              <div class="_links-wrapper">
                <?php foreach ($header_links as $link): ?>
                  <div class="_link-wrapper">
                    <a class="_link" href="<?= $link->link ?>"><?= $link->title ?></a>
                    <?php if (count($link->sub) != 0): ?>
                      <div class="_sublinks-wrapper">
                        <?php foreach ($link->sub as $sub): ?>
                          <div class="_sublink-wrapper">
                            <a class="_sublink" href="<?= $sub->link ?>"><?= $sub->title ?></a>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    <?php endif; ?> 
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          <div class="_header-brand">
            <img src="https://jwc.gotra-resources.my.id/web-upload/1742791133-24-03-2025-rcH53iBWJjA96d2K4tY8ESyLOQpI0qCU.webp" alt="logo">
          </div>
          <a class="_header-book-btn">Book Now</a>
        </div>
      </header>
    <?php endif; ?>


    <?php if($defaultHeader == "behave"): ?>

      <header id="_header-root">
        <div class="_header-wrapper container-global">
          <div class="_brand">Brand</div>
          <a href="" class="_book-btn">Book</a>
          <div class="_hamburger-btn">
            <div class="-line _line-1"></div>
            <div class="_line _line-2"></div>
          </div>
        </div>
      </header>

      <div class="_hamburger-content">
        <div class="_hamburger-content-wave"></div>
        <div class="_hamburger-content-main">

          <?php foreach ($header_links as $link): ?>

            <div class="_link-wrapper">
              <?php if (count($link->sub) != 0): ?>
                <div class="_unlink-wrapper">
                  <p class="_link"><?= $link->title ?></p>
                  <i class="fa-solid fa-plus"></i>
                </div>
                <div class="_sublinks-wrapper-grid">
                  <div class="_sublinks-wrapper">
                    <?php foreach ($link->sub as $sub): ?>
                      <a href="<?= $sub->link ?>" class="_sublink">
                        <i class="fa-solid fa-circle"></i>
                        <?= $sub->title ?>
                      </a>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php else: ?>
                <a class="_link" href="<?= $link->link ?>"><?= $link->title ?></a>
              <?php endif; ?>
            </div>

          <?php endforeach; ?>

        </div>
      </div>

    <?php endif; ?>
    
    
    <div role="main" class="main" style="background: #fff;">
    <div class="cursor">
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
        <div class="circle-cursor"></div>
      </div>


<script type="module">
    
        const items = document.querySelectorAll(".img-container")
    
        // Animate gallery horizontally during vertical scroll
        scroll(
            animate(".img-group", {
                transform: ["none", `translateX(-${items.length - 1}00vw)`],
            }),
            { target: document.querySelector(".img-group-container") }
        )
    
        // Progress bar representing gallery scroll



        const coords = { x: 0, y: 0 };
const circles = document.querySelectorAll(".circle-cursor");



circles.forEach(function (circle, index) {
  circle.x = 0;
  circle.y = 0;
});

window.addEventListener("mousemove", function(e){
  coords.x = e.clientX;
  coords.y = e.clientY;
  
});

function animateCircles() {
  
  let x = coords.x;
  let y = coords.y;
  
  circles.forEach(function (circle, index) {
    circle.style.left = x - 12 + "px";
    circle.style.top = y - 12 + "px";
    
    circle.style.scale = (circles.length - index) / circles.length;
    
    circle.x = x;
    circle.y = y;

    const nextCircle = circles[index + 1] || circles[0];
    x += (nextCircle.x - x) * 0.15;
    y += (nextCircle.y - y) * 0.15;
  });
 
  requestAnimationFrame(animateCircles);
}

animateCircles();

        
</script>