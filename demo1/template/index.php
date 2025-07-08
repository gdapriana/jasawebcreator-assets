<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/slider.css">
    <link rel="stylesheet" href="./css/how-we-doit.css">
    <link rel="stylesheet" href="./css/agency-of-the-year.css">
    <link rel="stylesheet" href="./css/featured.css">
    <link rel="stylesheet" href="./css/services.css">
    <link rel="stylesheet" href="./css/projects.css">
    <link rel="stylesheet" href="./css/blogs.css">
    <link rel="stylesheet" href="./css/wcu.css">
    <link rel="stylesheet" href="./css/pricing.css">
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/review.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
</head>

<body>
    <section id="slider">
        <div class="_slider-content">
            <div class="_slider-content-wrapper">
                <div class="_slider-welcome _welcome">
                    <img class="_welcome-wavy"
                        src="https://jwc.gotra-resources.my.id/web-upload/1747190765-14-05-2025-yOv5TugpDNRILwz3nBKZEX6iG8jb0kF2.svg"
                        alt="wavy">
                    <span>Welcome To</span>
                </div>
                <h2 class="_slider-greeting">SEO Marketing & Agency</h2>
                <p class="_slider-subgreeting">Ensuring the best return on investment for your bespoke SEO <br>Campaign
                    requirement.</p>

                <form action="" class="_slider-form">
                    <div class="">
                        <i class="fa-solid fa-link"></i>
                        <input type="text" placeholder="https://yoursite.com">
                    </div>
                    <div class="">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="youremail@domain.com">
                    </div>
                    <button type="submit">Analyze Now</button>
                </form>
            </div>
        </div>

        <img class="_slider-wave"
            src="https://jwc.gotra-resources.my.id/web-upload/1747191429-14-05-2025-XhdAbOuPUVZx4e9TaQ37ID6sml81RY5g.webp"
            alt="wave">

        <div class="_slider-elements">
            <img class="_element-people"
                src="https://jwc.gotra-resources.my.id/web-upload/1747192206-14-05-2025-DH679fvdcxznCAE5rSqFMseOkL2ZGBNT.4435928d"
                alt="element">

            <img src="https://jwc.gotra-resources.my.id/web-upload/1747192218-14-05-2025-qntfwXIWz2AMByoNY7ac34JrH1QZLEGp.3f3713ed"
                class="_element-coconut" alt="element">

            <img src="https://jwc.gotra-resources.my.id/web-upload/1747192194-14-05-2025-ebNW5O3x9RaGfAHTh4klKzEUjdmQLF0J.218fc863"
                alt="element" class="_element-dna">

            <img src="https://jwc.gotra-resources.my.id/web-upload/1747192181-14-05-2025-Ig0i92GNcfVBd4qUblsJnKHDRCToE1Yj.cd9faf4a"
                alt="element" class="_element-dart">

            <img src="https://jwc.gotra-resources.my.id/web-upload/1747192166-14-05-2025-oHS2eANIzXuxWdMCl5Y8UGOh6rZpTDg7.9764e8d8"
                alt="element" class="_element-speaker">
        </div>
    </section>

    <section id="howwedoit">

        <?php $howwedoit_data = json_decode(json_encode([
            ['description' => 'Brainstorming and Creative ideas & Research', 'color' => '#3eb9ff'],
            ['description' => 'Fully-Automated Keyword Grouping', 'color' => '#abbf78'],
            ['description' => 'Building the strategy to boost Your Sales', 'color' => '#ffb876'],
            ['description' => 'Helping to achieve more People', 'color' => '#ffa0c9'],
        ])) ?>

        <div class="_howwedoit-wrapper container-global">
            <header class="_howwedoit-header">
                <div class="_howwedoit-welcome _welcome">
                    <img class="_welcome-wavy"
                        src="https://jwc.gotra-resources.my.id/web-upload/1747190765-14-05-2025-yOv5TugpDNRILwz3nBKZEX6iG8jb0kF2.svg"
                        alt="wavy">
                    <span>How we do it</span>
                </div>
                <h2 class="_howwedoit-title">Helping others Succeed</h2>
            </header>
            <main class="_howwedoit-content">
                <?php foreach ($howwedoit_data as $key => $how): ?>
                <div class="_howwedoit-card">
                    <div class="_card-number" style="border: 1px solid <?= $how->color ?>;">
                        <div class="_card-number-inside" style="background-color: <?= $how->color ?>;">
                            <?= $key + 1; ?></div>
                    </div>
                    <p class="_card-desc"><?= $how->description ?></p>
                    <img class="_card-line"
                        style="<?php if ($key % 2 == 1): ?>rotate: 180deg; transform: translateY(40px);<?php endif; ?> <?php if (count($howwedoit_data) == $key + 1): ?>display: none;<?php endif; ?>"
                        src="https://jwc.gotra-resources.my.id/web-upload/1747199875-14-05-2025-LPCJ8bdAWOMBqymf1RwreVxlHQ7KNs63.svg"
                        alt="line">
                </div>
                <?php endforeach; ?>
            </main>
        </div>
    </section>

    <section id="saoty">
        <?php $saoty_data = json_decode(json_encode([
            ['number' => 10265, 'desc' => 'Annual Organic Traffic'],
            ['number' => 8426, 'desc' => 'Ranking Keywords'],
            ['number' => 726, 'desc' => 'Return on Investment'],
        ])) ?>
        <div class="_saoty-wrapper">
            <header class="_saoty-header">
                <div class="_saoty-welcome _welcome">
                    <img class="_welcome-wavy"
                        src="https://jwc.gotra-resources.my.id/web-upload/1747190765-14-05-2025-yOv5TugpDNRILwz3nBKZEX6iG8jb0kF2.svg"
                        alt="wavy">
                    <span>SEO Agency of the Year</span>
                </div>
                <h2 class="_saoty-title"><span>Expect great things</span><br><b>from your SEO Agency</b></h2>
                <p class="_saoty-desc">Believe it because you've seen it. Here are real numbers from just one <br>
                    successful Victorious partner.</p>
            </header>
            <main class="_saoty-content">
                <div class="_saoty-toggle-wrapper">
                    <span>BEFORE SEO</span>
                    <div class="_saoty-toggle">
                        <input type="checkbox" class="_saoty-toggle-input">
                        <b class="_saoty-toggle-switch"></b>
                    </div>
                    <span>AFTER SEO</span>
                </div>
                <div class="_saoty-count-wrapper">
                    <?php foreach ($saoty_data as $sao): ?>
                    <div class="_saoty-card">
                        <h3><?= number_format($sao->number) ?>+</h3>
                        <p><?= $sao->desc ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </main>
        </div>

        <div class="_saoty-elements">
            <img class="_element-graph-1"
                src="https://jwc.gotra-resources.my.id/web-upload/1747204840-14-05-2025-83BJYy6i0xTWvoUFwsGM9l1nqaD2OhRp.de2ab50c"
                alt="element">

            <img src="https://jwc.gotra-resources.my.id/web-upload/1747204826-14-05-2025-2RrbTdQwiKCuzh396oHJIApqNkL8Fsyg.dc89d13c"
                alt="element" class="_element-graph-2">
        </div>
    </section>

    <section id="featured">
        <?php $featured_data = json_decode(json_encode([
            ['title' => 'Twice Profit Than Before', 'categories' => ['SEO Analysis', 'Marketing'], 'img_cover_url' => 'https://seomy-nextjs.netlify.app/_ipx/w_1200,q_75/%2F_next%2Fstatic%2Fmedia%2Fcase-2.2316dc5f.jpg?url=%2F_next%2Fstatic%2Fmedia%2Fcase-2.2316dc5f.jpg&w=1200&q=75'],
            ['title' => 'Social Engagement', 'categories' => ['SEO Analysis', 'Marketing'], 'img_cover_url' => 'https://seomy-nextjs.netlify.app/_ipx/w_1200,q_75/%2F_next%2Fstatic%2Fmedia%2Fcase-3.907d1f07.jpg?url=%2F_next%2Fstatic%2Fmedia%2Fcase-3.907d1f07.jpg&w=1200&q=75'],
            ['title' => 'Media Management', 'categories' => ['SEO Analysis', 'Marketing'], 'img_cover_url' => 'https://seomy-nextjs.netlify.app/_ipx/w_1200,q_75/%2F_next%2Fstatic%2Fmedia%2Fcase-4.7dd0ffaa.jpg?url=%2F_next%2Fstatic%2Fmedia%2Fcase-4.7dd0ffaa.jpg&w=1200&q=75'],
            ['title' => 'Online Media Management', 'categories' => ['SEO Analysis', 'Marketing'], 'img_cover_url' => 'https://seomy-nextjs.netlify.app/_ipx/w_1200,q_75/%2F_next%2Fstatic%2Fmedia%2Fcase-1.55c9953e.jpg?url=%2F_next%2Fstatic%2Fmedia%2Fcase-1.55c9953e.jpg&w=1200&q=75'],
        ])) ?>
        <header class="_featured-header">
            <div class="_featured-welcome _welcome">
                <img class="_welcome-wavy"
                    src="https://jwc.gotra-resources.my.id/web-upload/1747190765-14-05-2025-yOv5TugpDNRILwz3nBKZEX6iG8jb0kF2.svg"
                    alt="wavy">
                <span>Featured Projects</span>
            </div>
            <div class="_featured-title-arrow">
                <h2 class="_featured-title">Our Case Studies</h2>
                <div class="_featured-arrow">
                    <button class="_featured-arrow-left">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button class="_featured-arrow-right">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </header>
        <main class="_featured-content">
            <?php foreach ($featured_data as $fet): ?>
            <div class="_featured-card">
                <div class="_featured-card-content">
                    <div class="_featured-card-categories">
                        <?php foreach ($fet->categories as $cat): ?>
                        <span class="_featured-cat"><?= $cat ?></span>
                        <?php endforeach; ?>
                    </div>
                    <h3 class="_featured-card-title"><?= $fet->title ?></h3>
                </div>
                <div class="_featured-overlay-1"></div>
                <div class="_featured-overlay-2"></div>
                <img class="_featured-card-cover" src="<?= $fet->img_cover_url ?>" alt="cover">
            </div>
            <?php endforeach; ?>
        </main>
    </section>

    <section id="services">

        <?php
        $services_data = json_decode(json_encode([
            [
                'title' => 'Social Marketing',
                'description' => 'Instant account activation if instant access.',
                'image_url' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fservices-1-icon-1.45bc2a81.png&w=256&q=75',
                'color' => '#EFFAFE',
            ],
            [
                'title' => 'SEO Optimization',
                'description' => 'Services activation if need access.',
                'image_url' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fservices-1-icon-2.f13dec38.png&w=256&q=75',
                'color' => '#FFF7E6',
            ],
            [
                'title' => 'One Page SEO',
                'description' => 'Account activation if instant access.',
                'image_url' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fservices-1-icon-3.7d3e0a3f.png&w=256&q=75',
                'color' => '#EEF1FF',
            ],
            [
                'title' => 'Content Marketing',
                'description' => 'SEO account activation if instant access.',
                'image_url' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fservices-1-icon-4.d16ea8ca.png&w=256&q=75',
                'color' => '#FFEEEF',
            ],
            [
                'title' => 'Email Marketing',
                'description' => 'Email Marketing activation if instant access.',
                'image_url' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fservices-1-icon-5.43e23f15.png&w=256&q=75',
                'color' => '#E3FBF4',
            ],
            [
                'title' => 'Keyword Research',
                'description' => 'Keyword Research activation if instant access.',
                'image_url' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fservices-1-icon-6.ae206288.png&w=256&q=75',
                'color' => '#FFEEF7',
            ],
        ]));
        ?>
        <div class="_services-wrapper">
            <header class="_services-header">
                <div class="_services-welcome _welcome">
                    <img class="_welcome-wavy"
                        src="https://jwc.gotra-resources.my.id/web-upload/1747190765-14-05-2025-yOv5TugpDNRILwz3nBKZEX6iG8jb0kF2.svg"
                        alt="wavy">
                    <span>Our Services</span>
                </div>
                <h2 class="_services-title">From your SEO Agency</h2>
                <p class="_services-desc">Our strategy includes consistently evolving, to ensure we’re producing
                    <br>exceptional SEO for business.
                </p>
            </header>
            <main class="_services-content">
                <?php foreach ($services_data as $ser): ?>
                <div class="_service-card">
                    <div class="_card-image-wrapper" style="background-color: <?= $ser->color; ?>;">
                        <img class="_card-image" src="<?= $ser->image_url ?>" alt="element">
                    </div>

                    <p class="_card-title"><?= $ser->title ?></p>
                    <p class="_card-subtitle"><?= $ser->description ?></p>
                </div>
                <?php endforeach; ?>
            </main>
        </div>
    </section>

    <section id="projects">
        <div class="_projects-wrapper">
            <header class="_projects-header"
                style="background-image: url('https://jwc.gotra-resources.my.id/web-upload/1747291802-15-05-2025-rQLxtblm0i4zgpD8JEM5acnGZqf2yIud.png');">
                <div class="_projects-welcome _welcome">
                    <img class="_welcome-wavy"
                        src="https://jwc.gotra-resources.my.id/web-upload/1747190765-14-05-2025-yOv5TugpDNRILwz3nBKZEX6iG8jb0kF2.svg"
                        alt="wavy">
                    <span>Selected Projects</span>
                </div>
                <h2 class="_projects-title">We Believe In Our Success</h2>
            </header>
            <header class="_projects-content">
                <div class="_content-keyword">
                    <p class="_content-headline">Keywords</p>
                    <h3 class="_content-head"><span>4</span>.628.319.632</h3>
                    <div class="_content-sub">
                        <p class="_sub-1"><i class="fa-solid fa-road"></i> 62 Countries</p>
                        <p class="_sub-2"><i class="fa-solid fa-globe"></i> 28 Languages</p>
                    </div>
                </div>
                <div class="_content-volume">
                    <p class="_content-headline">Search Volume</p>
                    <h3 class="_content-head"><span>106,</span>9 Billion</h3>
                    <div class="_content-sub">
                        <p class="_sub-1"><i class="fa-solid fa-language"></i> 4+ Billion Keywords</p>
                        <p class="_sub-2"><i class="fa-solid fa-database"></i> 36TB Data</p>
                    </div>
                </div>
            </header>
        </div>
    </section>

    <section id="review">
        <?php
        $review_data = json_decode(json_encode([
            ['user' => ['profile' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ftestimonial-2.8159868b.png&w=1200&q=75', 'name' => 'Robert Fox', 'as' => 'CEO of Advisor Fuel'], 'message' => 'We help our clients succeed by creating brand identities, digital experiences, material that communicate clearly, achieve marketing goals!',],
            ['user' => ['profile' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ftestimonial-1.99e45321.png&w=384&q=75', 'name' => 'Robert Fox', 'as' => 'CEO of Advisor Fuel'], 'message' => 'We help our clients succeed by creating brand identities, digital experiences, material that communicate clearly, achieve marketing goals!',],
            ['user' => ['profile' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ftestimonial-2.8159868b.png&w=1200&q=75', 'name' => 'Robert Fox', 'as' => 'CEO of Advisor Fuel'], 'message' => 'We help our clients succeed by creating brand identities, digital experiences, material that communicate clearly, achieve marketing goals!',],
            ['user' => ['profile' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ftestimonial-2.8159868b.png&w=1200&q=75', 'name' => 'Robert Fox', 'as' => 'CEO of Advisor Fuel'], 'message' => 'We help our clients succeed by creating brand identities, digital experiences, material that communicate clearly, achieve marketing goals!',],
        ]));
        ?>
        <div class="_review-header">
            <img src="https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ftest-avatar-bg-1.80f5198d.png&w=384&q=75"
                alt="cover" class="_users-profile">

            <h2 class="_review-title">Client love us & we love them</h2>
            <p class="_review-desc">Trusted by over 4,000 clients worldwide</p>
        </div>
        <div class="_review-content">
            <div class="_review-list">
                <?php foreach ($review_data as $rev): ?>
                <div class="_review-item">
                    <img src="<?= $rev->user->profile ?>" alt="profile" class="_review-userimg">
                    <div class="_review-item-content">
                        <i>
                            <svg width="40" height="30" viewBox="0 0 40 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.2289 29.0379C24.7654 29.0379 25.8383 28.0753 27.4476 26.1502C29.0569 24.332 30.559 22.2465 31.9537 19.8935C33.2412 17.5406 33.8849 15.455 33.8849 13.6368C33.8849 13.1021 33.7776 12.5139 33.563 11.8721C33.3485 12.6208 32.8657 13.2625 32.1147 13.7973C31.2563 14.439 30.0762 14.7598 28.5741 14.7598C26.3211 14.7598 24.6581 14.1181 23.5852 12.8347C22.405 11.6582 21.8149 10.1609 21.8149 8.34273C21.8149 6.20369 22.6732 4.27856 24.3899 2.56734C25.9992 0.856103 28.1986 0.000488217 30.9881 0.000488217C33.4558 0.000488217 35.4942 0.695676 37.1036 2.08605C38.6056 3.47643 39.5176 5.13418 39.8394 7.05931C39.9467 7.59407 40.0004 8.44969 40.0004 9.62616C40.0004 13.6903 38.6593 17.5406 35.977 21.177C33.2948 24.9203 29.7007 27.8614 25.1945 30.0005L24.2289 29.0379ZM2.98579 29.0379C3.52223 29.0379 4.59512 28.0753 6.20445 26.1502C7.81377 24.332 9.31581 22.2465 10.7106 19.8935C11.998 17.5406 12.6418 15.455 12.6418 13.6368C12.6418 13.1021 12.5345 12.5139 12.3199 11.8721C12.1053 12.6208 11.6225 13.2625 10.8715 13.7973C10.0132 14.439 8.83301 14.7598 7.33097 14.7598C5.07791 14.7598 3.41494 14.1181 2.34205 12.8347C1.16188 11.6582 0.571791 10.1609 0.571791 8.34273C0.571791 6.20369 1.4301 4.27856 3.14672 2.56734C4.75605 0.856103 6.95546 0.000488217 9.74497 0.000488217C12.2126 0.000488217 14.2511 0.695676 15.8604 2.08605C17.3625 3.47643 18.2744 5.13418 18.5963 7.05931C18.7036 7.59407 18.7572 8.44969 18.7572 9.62616C18.7572 13.6903 17.4161 17.5406 14.7339 21.177C12.0517 24.9203 8.4575 27.8614 3.95138 30.0005L2.98579 29.0379Z"
                                    fill="white" stroke="currentColor" fill-opacity="0.2"></path>
                            </svg>

                        </i>
                        <h3 class="_review-message"><?= $rev->message ?></h3>

                        <div class="_user-detail">
                            <p class="_username"><?= $rev->user->name ?></p>
                            <div class="_useras"><?= $rev->user->as ?></div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="_review-fix-bg">
                <div class="_bg"></div>
            </div>
        </div>
    </section>

    <section id="blogs">
        <?php $blogs_data = json_decode(json_encode([
            ['title' => 'Simple ways to Optimize your Website For SEO', 'categories' => ['SEO Analysis', 'Marketing'], 'created_at' => 'August 3, 2023', 'user' => ['profile' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fblog-avatar-1.48aa6eb3.png&w=96&q=75', 'name' => 'Nathalie Grossman'], 'cover_url' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fblog-1-bg-1.8104b83b.jpg&w=750&q=75'],
            ['title' => 'Simple ways to Optimize your Website For SEO', 'categories' => ['SEO Analysis', 'Marketing'], 'created_at' => 'August 3, 2023', 'user' => ['profile' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fblog-avatar-1.48aa6eb3.png&w=96&q=75', 'name' => 'Nathalie Grossman'], 'cover_url' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fblog-1-bg-1.8104b83b.jpg&w=750&q=75'],
            ['title' => 'Simple ways to Optimize your Website For SEO', 'categories' => ['SEO Analysis', 'Marketing'], 'created_at' => 'August 3, 2023', 'user' => ['profile' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fblog-avatar-1.48aa6eb3.png&w=96&q=75', 'name' => 'Nathalie Grossman'], 'cover_url' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fblog-1-bg-1.8104b83b.jpg&w=750&q=75'],
        ])) ?>

        <header class="_blogs-header">
            <div class="_blogs-welcome _welcome">
                <img class="_welcome-wavy"
                    src="https://jwc.gotra-resources.my.id/web-upload/1747190765-14-05-2025-yOv5TugpDNRILwz3nBKZEX6iG8jb0kF2.svg"
                    alt="wavy">
                <span>From our blog</span>
            </div>
            <div class="_blogs-title-cta">
                <h2 class="_blogs-title">Latest blog & news</h2>
                <a href="#" class="_blogs-cta">See all our Blog <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </header>
        <main class="_blogs-content">
            <?php foreach ($blogs_data as $blog): ?>
            <div class="_blog-card">
                <div class="_blog-cover-wrapper">
                    <img src="<?= $blog->cover_url ?>" alt="cover" class="_blog-cover">
                </div>
                <div class="_blog-categories">
                    <?php foreach ($blog->categories as $cat): ?>
                    <span class="_cat-item"><?= $cat ?></span>
                    <?php endforeach ?>
                </div>
                <h3 class="_blog-title"><?= $blog->title ?></h3>
                <div class="_blog-user">
                    <img src="<?= $blog->user->profile ?>" alt="user profile" class="_profile">
                    <div class="_user-name-uploaded">
                        <p class="_username"><?= $blog->user->name ?></p>
                        <p class="_uploaded-at"><?= $blog->created_at ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </main>
    </section>

    <section id="wcu">
        <?php $wcu_data = json_decode(json_encode([
            ['title' => 'Experts Consulting', 'icon' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fchoose-icon-1.911a268d.png&w=96&q=75'],
            ['title' => 'Competitor Analysis', 'icon' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fchoose-icon-2.05fd4c8d.png&w=64&q=75'],
            ['title' => 'Responsive Support', 'icon' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fchoose-icon-3.aee636fe.png&w=96&q=75'],
        ])) ?>
        <div class="_wcu-wrapper">
            <div class="_wcu-image-wrapper">
                <img src="https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fchoose-2.500f6674.png&w=1080&q=75"
                    alt="image" class="_wcu-image">
                <img src="https://seomy-nextjs.netlify.app/_ipx/w_1080,q_75/%2F_next%2Fstatic%2Fmedia%2Fchoose-shape-1.6d9be24a.png?url=%2F_next%2Fstatic%2Fmedia%2Fchoose-shape-1.6d9be24a.png&w=1080&q=75"
                    alt="element" class="_wcu-element-1">
                <img src="https://seomy-nextjs.netlify.app/_ipx/w_828,q_75/%2F_next%2Fstatic%2Fmedia%2Fchoose-shape-2.c469cb3e.png?url=%2F_next%2Fstatic%2Fmedia%2Fchoose-shape-2.c469cb3e.png&w=828&q=75"
                    alt="element" class="_wcu-element-2">
            </div>
            <div class="_wcu-content-wrapper">
                <header class="_wcu-header">
                    <div class="_wcu-welcome _welcome">
                        <img class="_welcome-wavy"
                            src="https://jwc.gotra-resources.my.id/web-upload/1747190765-14-05-2025-yOv5TugpDNRILwz3nBKZEX6iG8jb0kF2.svg"
                            alt="wavy">
                        <span>Why Choose us</span>
                    </div>
                    <h2 class="_wcu-title">What makes Us Different from Others</h2>
                    <p class="_wcu-desc">Migrating your rank tracking tool is like migrating from Google Analytics to
                        another solution.</p>
                </header>
                <main class="_wcu-content">
                    <?php foreach ($wcu_data as $wcu): ?>
                    <a href="#" class="_wcu-card">
                        <img src="<?= $wcu->icon ?>" alt="icon" class="_wcu-card-icon">
                        <h3 class="_wcu-card-title"><?= $wcu->title ?></h3>
                        <span class="_wcu-card-arrow"><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                    <?php endforeach; ?>
                </main>
            </div>
        </div>
    </section>

    <section id="pricing">
        <?php $pricing_data = json_decode(json_encode([
            ['title' => 'Diamond Pack', 'icon' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpricing-icon-1.9cd24067.png&w=96&q=75', 'list' => ['999 Email', '3gb Hosting', 'Email & Live chat', '1 Domain'], 'price' => '209.99', 'description' => 'up to 10 user + 1.99 per user'],
            ['title' => 'Gold Plan', 'icon' => 'https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpricing-icon-2.088afd5c.png&w=48&q=75', 'list' => ['499 Email', '2gb Hosting', 'Email & Live chat', '1 Domain'], 'price' => '320.99', 'description' => 'up to 10 user + 1.99 per user'],
        ])) ?>
        <div class="_pricing-wrapper">
            <header class="_pricing-header">
                <div class="_pricing-welcome _welcome">
                    <img class="_welcome-wavy"
                        src="https://jwc.gotra-resources.my.id/web-upload/1747190765-14-05-2025-yOv5TugpDNRILwz3nBKZEX6iG8jb0kF2.svg"
                        alt="wavy">
                    <span>Our Pricing</span>
                </div>
                <h2 class="_pricing-title">Choose Your Product.</h2>
                <div class="_pricing-toggle-wrapper">
                    <span>Pay Monthly</span>
                    <div class="_pricing-toggle">
                        <input type="checkbox">
                        <b class="_toggle-switch"></b>
                    </div>
                    <span>Pay Yearly</span>
                </div>
            </header>
            <main class="_pricing-content">
                <?php foreach ($pricing_data as $price): ?>
                <div class="_pricing-card">
                    <header class="_pricing-card-header">
                        <img src="<?= $price->icon ?>" alt="icon" class="_pricing-card-icon">
                        <h3 class="_pricing-card-title"><?= $price->title ?></h3>
                    </header>

                    <div class="_pricing-list">
                        <?php foreach ($price->list as $l): ?>
                        <div class="_pricing-l">
                            <span><i class="fa-solid fa-check"></i></span>
                            <p><?= $l ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="_pricing-card-price">
                        <h3 class="_pricing-card-p">$<?= $price->price ?></h3>
                        <p class="_pricing-card-desc"><?= $price->description ?></p>
                    </div>

                    <a href="#" class="_pricing-card-cta">Get Started</a>
                </div>
                <?php endforeach; ?>
            </main>
        </div>
        <div class="_pricing-elements">
            <img src="https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fhand-shape.07783d45.png&w=828&q=75"
                alt="element" class="_element-1">
            <img src="https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fsave.84c9cb2c.png&w=256&q=75"
                alt="element" class="_element-2">
            <img src="https://seomy-nextjs.netlify.app/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fpricing-1-shape-1.e43b07b3.png&w=1920&q=75"
                alt="element" class="_element-3">
        </div>
    </section>

    <section id="contact">
        <div class="_contact-wrapper">
            <div class="_contact-header">
                <span class="_contact-welcome">Contact Us</span>
                <h2 class="_contact-title">Ready to get started? Let's chat.</h2>
                <div class="_contact-header-content">
                    <a href="#" class="_header-email"><i class="fa-solid fa-envelope"></i> nfo@gmail.com</a>
                    <a href="#" class="_header-address"><i class="fa-solid fa-location-dot"></i> 3rd Street, London,
                        UK</a>
                    <a href="#" class="_header-phone"><i class="fa-solid fa-phone-volume"></i> +44 123 654 7890</a>
                    <div class="_header-socials">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                    </div>
                </div>
            </div>
            <form class="_contact-content">
                <h3 class="_contact-content-title">Send a message</h3>
                <input class="_contact-name" type="text" placeholder="Full Name">
                <input class="_contact-email" type="email" placeholder="Email Address">
                <input class="_contact-phone" type="tel" placeholder="Phone number">
                <input class="_contact-website" type="text" placeholder="Website">
                <textarea class="_contact-message" name="" id="" placeholder="Message"></textarea>
                <button class="_contact-submit" type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <section id="footer">
        <div class="_footer-wrapper">
            <div class="_footer-sec-1">
                <a class="_footer-brand" href="#">
                    <img src="https://jwc.gotra-resources.my.id/web-upload/1747107528-13-05-2025-9oiB1qSVYwRF0XdagesUDZtAfLClbhPx.png"
                        alt="brand">
                </a>
                <p class="_footer-desc">This SEO is most reputed firm which provides various online marketing</p>

                <div class="_footer-socials-wrapper">
                    <p class="_socials-title">Follow Us On</p>
                    <div class="_footer-socials">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                    </div>
                </div>
            </div>
            <div class="_footer-sec-2">
                <h3 class="_section-title">Information</h3>
                <ul class="_list-wrapper">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Project</a></li>
                    <li><a href="#">Plan & Pricing</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="_footer-sec-3">
                <h3 class="_section-title">Services</h3>
                <ul class="_list-wrapper">
                    <li><a href="#">SEO Audit</a></li>
                    <li><a href="#">SEO Services</a></li>
                    <li><a href="#">SEO Marketing</a></li>
                    <li><a href="#">SEO Analysis</a></li>
                    <li><a href="#">SEO Optimization</a></li>
                    <li><a href="#">Social Media</a></li>
                </ul>
            </div>
            <div class="_footer-sec-4">
                <h3 class="_section-title">Subsribe</h3>
                <p class="_sec4-desc">Our conversation is just getting started</p>
                <div class="_sec4-input">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Enter Email">
                </div>
                <a href="#" class="_sec4-cta">Subsribe.</a>
            </div>
        </div>
        <div class="_footer-cpy">
            <p>©2023 Copyrights by company. All Rights Reserved. Designed by <span>Theme_Pure.</span></p>
        </div>
    </section>

    <section style="height: 100vh;"></section>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.js"></script>
    <script>
    const {
        animate,
        scroll
    } = Motion

    document.addEventListener('DOMContentLoaded', () => {
        $('#review ._review-list').slick({
            centerMode: true,
            centerPadding: '60px',
            variableWidth: true,
            slidesToShow: 3,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
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
        })
        $('#featured ._featured-content').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 2,
            prevArrow: $('._featured-arrow-left'),
            nextArrow: $('._featured-arrow-right'),
            responsive: [{
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }]
        });
    })

    const elPeople = document.querySelector('#slider ._element-people')
    const elDna = document.querySelector('#slider ._element-dna')
    const elCoconut = document.querySelector('#slider ._element-coconut')
    const elSpeaker = document.querySelector('#slider ._element-speaker')
    const elDart = document.querySelector('#slider ._element-dart')

    scroll(animate(elPeople, {
        y: [25, -25]
    }, {
        ease: "linear"
    }), {
        target: elPeople,
    })

    scroll(animate(elDna, {
        y: [5, -5]
    }, {
        ease: "linear"
    }), {
        target: elDna,
    })


    scroll(animate(elCoconut, {
        y: [10, -10]
    }, {
        ease: "linear"
    }), {
        target: elCoconut,
    })

    scroll(animate(elDart, {
        y: [5, -5]
    }, {
        ease: "linear"
    }), {
        target: elDart,
    })

    scroll(animate(elSpeaker, {
        y: [70, -70]
    }, {
        ease: "linear"
    }), {
        target: elSpeaker,
    })
    </script>
</body>

</html>
