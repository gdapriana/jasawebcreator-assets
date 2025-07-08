<?php
$types = array('default', 'boxed', 'side_header');
$side = 'left';
$logo = 'true';
$selected = 'default'; ?>

<!DOCTYPE html>
<html lang="en" class="
<?php if ($types[1] == $selected) {
    echo 'boxed';
} elseif ($types[2] == $selected) {
    if ($side == 'right') {
        echo 'side-header side-header-right';
    } else {
        echo 'side-header';
    }
} else {
}
?>">

<head>
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
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <link href="<?= base_url('assets') ?>/front/vendor/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="<?= base_url('assets') ?>/front/vendor/animate/animate.min.css" type="text/css" rel="stylesheet">
    <?= $func->style("vendor/magnific-popup/magnific-popup.min.css") ?>
    <link href="<?= base_url('assets') ?>/front/css/theme.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/front/font/hiatus.ttf" type="text/css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/front/css/theme-elements.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/front/css/style-tour.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/front/css/colors.css" type="text/css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- Current Page CSS -->
    <link href="<?= base_url('assets') ?>/front/vendor/rs-plugin/css/settings.css" type="text/css" rel="stylesheet">
    <link href="<?= base_url('assets') ?>/front/vendor/rs-plugin/css/navigation.css" type="text/css" rel="stylesheet">

    <!-- Urbanist font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- formatter -->
    <style>
        :root {
            --colors: #4260ff;
            --text-color: #271d3a;
            --primtext: "Urbanist", sans-serif;
        }

        body {
            font-family: var(--primtext);
            color: var(--text-color);
        }

        a {
            text-decoration: none;
            color: var(--text-color);
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .container-global {
            padding-left: 7%;
            padding-right: 7%;
        }
    </style>


    <!-- Header Style -->
    <style>
        #header {
            width: 100%;
            display: flex;
            position: fixed;
            top: 0;
            background-color: white;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #header ._header-progress {
            width: 100%;
            height: 5px;
            background-color: var(--colors);
            position: fixed;
            top: 0;
            z-index: 999;
            transform-origin: top left;
        }

        #header ._header-wrapper {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 1.2rem 0;
        }

        #header ._header-brand {
            width: 110px;
        }

        #header ._header-nav {
            display: none;
            justify-content: center;
            align-items: center;
            gap: 2rem;
        }

        #header ._header-nav ._header-nav-item {
            font-size: 16px;
            color: var(--text-color);
            font-weight: 500;
        }

        #header ._header-nav ._header-nav-item i {
            font-size: 12px;
            margin-left: 2px;
        }

        #header ._header-nav ._header-nav-item:hover {
            text-decoration: none;
            color: var(--colors);
        }

        #header ._header-actions {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1.6rem;
        }

        #header ._header-actions>button {
            border: none;
            cursor: pointer;
            background-color: transparent;
            outline: none;
        }

        #header ._header-actions>button i {
            font-size: 20px;
        }

        #header ._header-actions ._header-cta {
            display: none;
            text-decoration: none;
            background-color: var(--colors);
            font-weight: 700;
            font-size: 16px;
            color: white;
            justify-content: center;
            align-items: center;
            padding: 12px 24px;
            border-radius: 6px;
        }

        @media (min-width: 576px) {
            #header ._header-actions ._header-cta {
                display: flex;
            }
        }

        @media (min-width: 1200px) {
            #header ._header-nav {
                display: flex;
            }

            #header ._header-actions ._header-hamburger-btn {
                display: none;
            }
        }
    </style>

    <?php
    $nav_data = json_decode(json_encode([
        ['name' => 'Home', 'child' => 1],
        ['name' => 'About', 'child' => 0],
        ['name' => 'Services', 'child' => 1],
        ['name' => 'Pages', 'child' => 1],
        ['name' => 'Blog', 'child' => 1],
        ['name' => 'Contact', 'child' => 0],
    ]));
    $hamburger_socials = json_decode(json_encode([
        ['name' => 'facebook',  'link' => '', 'icon' => 'fab fa-facebook-f'],
        ['name' => 'twitter',   'link' => '', 'icon' => 'fab fa-twitter'],
        ['name' => 'youtube',   'link' => '', 'icon' => 'fab fa-youtube'],
        ['name' => 'linkedin',  'link' => '', 'icon' => 'fab fa-linkedin-in'],
        ['name' => 'instagram', 'link' => '', 'icon' => 'fab fa-instagram'],
    ]));
    ?>

    <header id="header">
        <div class="_header-progress"></div>
        <div class="_header-wrapper container-global">
            <a href="#">
                <img src="https://jwc.gotra-resources.my.id/web-upload/1747107528-13-05-2025-9oiB1qSVYwRF0XdagesUDZtAfLClbhPx.png" class="_header-brand" alt="brand">
            </a>
            <div class="_header-nav">
                <?php foreach ($nav_data as $nav): ?>
                    <a href="#" class="_header-nav-item"><?= $nav->name ?>
                        <?php if ($nav->child == 1): ?>
                            <i class="fa-solid fa-chevron-down"></i>
                        <?php endif; ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="_header-actions">
                <button class="_header-search-btn">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <a class="_header-cta" href="#">Get a Quote</a>
                <button class="_header-hamburger-btn">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
    </header>


    <style>
        #hamburger._header-hamburger-content {
            position: fixed;
            width: 100%;
            max-width: 400px;
            background-color: white;
            height: 100dvh;
            z-index: 9999;
            top: 0;
            right: -100%;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            justify-content: start;
            align-items: stretch;
            padding: 1rem 2rem;
        }

        #hamburger ._hamburger-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 1rem 0;
        }

        #hamburger ._hamburger-header a img {
            width: 110px;
        }

        #hamburger ._hamburger-header ._hamburger-close-btn {
            border: 1px solid rgba(0, 0, 0, 0.1);
            cursor: pointer;
            width: 40px;
            aspect-ratio: 1/1;
            border-radius: 999em;
            padding: 4px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: transparent;
            transition: all ease-in-out 0.5;
        }

        #hamburger ._hamburger-header ._hamburger-close-btn:hover {
            background-color: var(--colors);
            color: white;
        }

        #hamburger ._hamburger-header ._hamburger-close-btn i {
            font-size: 22px;
        }

        #hamburger ._hamburger-content {
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: stretch;
            gap: 1rem;
        }

        #hamburger ._hamburger-content ._hamburger-nav {
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: stretch;
        }

        #hamburger ._hamburger-content ._hamburger-nav ._hamburger-nav-item {
            padding: .8rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
            text-decoration: none;
            font-size: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #hamburger ._hamburger-content ._hamburger-nav ._hamburger-nav-item:hover {
            color: var(--colors);
            border-bottom: 1px solid var(--colors);
        }

        #hamburger ._hamburger-content ._hamburger-nav ._hamburger-nav-item ._item-btn-inside {
            width: 30px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            aspect-ratio: 1/1;
            padding: 4px;
            border-radius: 6px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all ease-in-out .5s;
        }

        #hamburger ._hamburger-content ._hamburger-nav ._hamburger-nav-item ._item-btn-inside:hover {
            background-color: var(--colors);
            color: white;
        }

        #hamburger ._hamburger-content ._hamburger-nav ._hamburger-nav-item ._item-btn-inside i {
            font-size: 14px;
        }

        #hamburger ._hamburger-content ._hamburger-nav ._hamburger-nav-item:hover ._item-btn-inside {
            border: 1px solid var(--colors);
        }

        #hamburger ._hamburger-cta {
            font-size: 16px;
            font-weight: 600;
            background-color: var(--colors);
            color: white;
            padding: 12px 33px;
            text-decoration: none;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 4px;
            margin-top: 2rem;
        }

        #hamburger ._hamburger-footer-contact {
            margin-top: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: start;
            align-items: start;
            gap: .6rem;
        }

        #hamburger ._hamburger-footer-contact>a {
            text-decoration: none;
            color: var(--text-color);
        }

        #hamburger ._hamburger-footer-contact ._hamburger-footer-phone {
            font-size: 20px;
            font-weight: bold;
        }

        #hamburger ._hamburger-footer-contact ._hamburger-footer-email {
            font-size: 16px;
        }

        #hamburger ._hamburger-footer-socials {
            display: flex;
            justify-content: start;
            align-items: center;
            flex-wrap: wrap;
            gap: 4px;
            margin-top: 2rem;
        }

        #hamburger ._hamburger-footer-socials a {
            width: 40px;
            height: 40px;
            border-radius: 6px;
            font-size: 16px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            padding: 1rem;
            border: 1px solid rgba(0, 0, 0, 0.2);
        }
    </style>

    <div id="hamburger" class="_header-hamburger-content">
        <header class="_hamburger-header">
            <a href="#">
                <img src="https://jwc.gotra-resources.my.id/web-upload/1747107528-13-05-2025-9oiB1qSVYwRF0XdagesUDZtAfLClbhPx.png" alt="brand">
            </a>

            <button class="_hamburger-close-btn">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </header>
        <main class="_hamburger-content">
            <div class="_hamburger-nav">
                <?php foreach ($nav_data as $nav): ?>
                    <a href="#" class="_hamburger-nav-item"><?= $nav->name ?>
                        <?php if ($nav->child == 1): ?>
                            <div class="_item-btn-inside">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        <?php endif; ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <a href="" class="_hamburger-cta">Getting Started</a>
        </main>
        <footer class="_hamburger-footer">
            <div class="_hamburger-footer-contact">
                <a href="tel:123" class="_hamburger-footer-phone">+964 742 44 763</a>
                <a class="_hamburger-footer-email">info@seomy.com</a>
            </div>
            <div class="_hamburger-footer-socials">
                <?php foreach ($hamburger_socials as $soc): ?>
                    <a href="<?= $soc->link; ?>"><i class="<?= $soc->icon; ?>"></i></a>
                <?php endforeach; ?>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const progress = document.querySelector('#header ._header-progress');
            const hamburgerBtn = document.querySelector('#header ._header-hamburger-btn');
            const hamburgerCloseBtn = document.querySelector('#hamburger ._hamburger-close-btn');
            const hamburgerContent = document.querySelector('._header-hamburger-content');

            scroll(animate(progress, {
                scaleX: [0, 1]
            }, {
                ease: 'linear'
            }));

            hamburgerBtn.addEventListener('click', () => {
                animate(hamburgerContent, {
                    right: ['-100%', 0]
                }, {
                    duration: 0.8,
                    ease: [0.23, 1, 0.32, 1]
                })
            })
            hamburgerCloseBtn.addEventListener('click', () => {
                animate(hamburgerContent, {
                    right: [0, '-100%']
                }, {
                    duration: 0.8,
                    ease: [0.23, 1, 0.32, 1]
                })
            })
        })
    </script>

    <div role="main" class="main" style="background: url('https://jwc.gotra-resources.my.id/web-upload/1734076078-13-12-2024-SXDrEc9Rznl3iTavYHk4GVKpeqN02LJQ.webp');">