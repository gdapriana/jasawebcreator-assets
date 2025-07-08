<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/root.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/slider.css">
    <link rel="stylesheet" href="./css/seo.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/services.css">
    <link rel="stylesheet" href="./css/blog.css">
    <link rel="stylesheet" href="./css/faq.css">
    <link rel="stylesheet" href="./css/testimonials.css">
    <link rel="stylesheet" href="./css/pricing.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/works.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Manrope:wght@200..800&display=swap"
        rel="stylesheet">

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

</head>

<body>
    <section id="_header">
        <?php $navigations = json_decode(json_encode([
            ['title' => 'Home', 'link' => '#'],
            ['title' => 'Services', 'link' => '#'],
            ['title' => 'Pages', 'link' => '#', 'childs' => [
                ['title' => 'About', 'link' => '#'],
                ['title' => 'Pricing', 'link' => '#'],
                ['title' => 'FAQ', 'link' => '#'],
                ['title' => '404 Page', 'link' => '#'],
            ]],
            ['title' => 'Blog', 'link' => '#', 'childs' => [
                ['title' => 'Blog', 'link' => '#'],
                ['title' => 'Single Post', 'link' => '#'],
            ]],
            ['title' => 'Contact', 'link' => '#'],
        ]))
        ?>

        <div class="_header-wrapper">
            <a href="#" class="_brand">
                <img src="https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/logo-brisx.png" alt="brand">
            </a>

            <div class="_header-navs">
                <?php foreach ($navigations as $nav): ?>
                <?php if (!empty($nav->childs)): ?>
                <div class="_nav-wrapper">
                    <?= $nav->title ?> <i class="fa-solid fa-chevron-down"></i>

                    <div class="_float-wrapper _dnone">
                        <?php foreach ($nav->childs as $child): ?>
                        <a href="#"><?= $child->title ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php else: ?>
                <a href="" class="_nav-link"><?= $nav->title ?></a>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>

            <a href="#" class="_header-cta">
                <span><i class="fa-solid fa-phone"></i> Contact Us</span>
            </a>

            <button class="_hamburger-btn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </section>

    <div class="_hamburger-wrapper">
        <div class="_hamburger-header">
            <a href="#" class="_brand">
                <img src="https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/logo-brisx.png" alt="brand">
            </a>
            <button class="_hamburger-close-btn">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>
        <div class="_hamburger-content">
            <?php foreach ($navigations as $nav): ?>
            <?php if (!empty($nav->childs)): ?>
            <div class="_nav-wrapper">
                <div class="_nav-name-icon">
                    <?= $nav->title ?> <i class="fa-solid fa-chevron-down"></i>
                </div>

                <div class="_float-wrapper _dnone">
                    <?php foreach ($nav->childs as $child): ?>
                    <a href="#"><?= $child->title ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php else: ?>
            <a href="" class="_nav-link"><?= $nav->title ?></a>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <?php
      $companies = json_decode(json_encode([
        ['title' => 'jambe asri', 'link' => 'https://jambeasriatv.com/', 'logo' => 'https://jwc.gotra-resources.my.id/web-upload/1685329064-29-05-2023-KSTMxdPtD6ZzAp7bluBUihqeJc5vwsrX.png'],
        ['title' => 'kuber adventure', 'link' => 'https://kuberbaliadventure.com/', 'logo' => 'https://jwc.gotra-resources.my.id/web-upload/1745736237-27-04-2025-7fvhyk0SKjAb9I3BrGP4CoXgU1R8mati.webp'],
        ['title' => 'excurtioninbali', 'link' => 'https://excurtioninbali.com/', 'logo' => 'https://jwc.gotra-resources.my.id/web-upload/1741928556-14-03-2025-K6vtxOHVm9BLepkMGJu3afjzsrhSUqNC.png'],
        ['title' => 'wonderlandbalitour', 'link' => 'https://wonderlandbalitour.com/', 'logo' => 'https://jwc.gotra-resources.my.id/web-upload/1747892493-22-05-2025-ZWmPTqQpzS9tbv3kwMG7dfLCNRaDxo20.png'],
        ['title' => 'bannytoursbali', 'link' => 'https://bannytoursbali.com/', 'logo' => 'https://jwc.gotra-resources.my.id/web-upload/1747809782-21-05-2025-40abECDs1cHuQplwZdJjge7Pxim3KO2T.webp'],
      ]));
    ?>
    <section id="_slider">
        <div class="_slider-wrapper">
            <div class="_slider-content">
                <img src="https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/tst-growth.png"
                    alt="element" class="_element-5">
                <h2 class="_slider-title">Creative Agency Terpercaya untuk Bisnis Digital</h2>
                <p class="_slider-subtitle">Mulai dari Rp500.000 saja, kamu sudah bisa bekerja sama dengan tim profesional yang bantu brand kamu tampil lebih kuat secara online. <br> Fokus ke bisnisnya, biar urusan digitalnya kami yang tangani.</p>
                <div class="_slider-cta-wrapper">
                    <a href="" class="_slider-cta">
                        <span>Hubungi Kami <i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                    <a href="" class="_slider-cta">
                      <span>Lihat Portfolio</span>
                    </a>

                    <div class="_slider-users">
                        <div class="_img-wrapper">
                            <img src="https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/review-B3X9P3L.jpg"
                                alt="profile" class="_img">
                        </div>
                        <div class="_img-wrapper">
                            <img src="https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/review-B3X9P3L.jpg"
                                alt="profile" class="_img">
                        </div>
                        <div class="_img-wrapper">
                            <img src="https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/review-B3X9P3L.jpg"
                                alt="profile" class="_img">
                        </div>
                        <div class="_additional">
                            10K+
                        </div>
                    </div>
                </div>
            </div>
            <div class="_slider-image">
                <div class="_img-back">
                    <img class="_element-1"
                        src="https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/asian-girl-shouting-at-megaphone-young-activist-p-DC9ADVL.png"
                        alt="element">

                    <img src="https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/graphic-statistic.png"
                        alt="element" class="_element-2">

                    <img src="https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/graphic-total-revenue.png"
                        alt="element" class="_element-3">

                    <img src="https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/test-grid-2.png"
                        alt="element" class="_element-4">
                </div>
            </div>
            <div class="_slider-companies">
                <h3 class="_slider-companies-title">Trusted by Big Companies</h3>
                <div class="_companies-list">

                  <?php foreach ($companies as $company): ?>
                    <a href="<?= $company->link ?>" class="_company-wrapper">
                      <img src="<?= $company->logo ?>"
                           alt="company">
                    </a>
                  <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="_seo">
        <?php
        $seo_data = json_decode(json_encode([
            [
                'icon' => 'https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/icon-2.png',
                'title' => 'Social Media Management',
                'description' => 'Perencanaan, desain, upload, dan maintain konten sosial media.'
            ],
            [
                'icon' => 'https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/icon-growth.png',
                'title' => 'Content & Creative Production',
                'description' => ' Pembuatan foto, video, reels, dan desain konten marketing.'
            ],
            [
                'icon' => 'https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/icon-4.png',
                'title' => 'Ads & Paid Campaign',
                'description' => 'Strategi dan manajemen iklan (FB Ads, IG Ads, Google Ads) yang fokus pada hasil.'
            ],
            [
                'icon' => 'https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/icon3.png',
                'title' => 'Web & SEO Presence',
                'description' => 'Pembuatan website dan penguatan visibilitas di pencarian Google.'
            ],
        ]))
        ?>

        <div class="_seo-wrapper">
            <header class="_seo-header">
                <h3 class="_seo-title">All in One Digital Marketing Service untuk Bisnis yang Mau Naik Level</h3>
                <p class="_seo-description">Gak perlu repot mikirin semuanya sendiri. Creacy bantu kamu urus konten, ads, sampai strategi digital
                  <br>biar kamu bisa fokus ngembangin bisnis.</p>
            </header>
            <main class="_seo-content">
                <?php foreach ($seo_data as $seo): ?>
                <div class="_seo-card">
                    <div class="_img-wrapper">
                        <img src="<?= $seo->icon ?>" alt="icon" class="_card-icon">
                    </div>
                    <h4 class="_card-title"><?= $seo->title ?></h4>
                    <p class="_card-desc"><?= $seo->description ?></p>
                </div>
                <?php endforeach; ?>
            </main>
        </div>
    </section>

    <section id="_about">
        <div class="_about-wrapper">
            <div class="_about-image">
                <div class="_image-back">
                    <img src="http://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/test-grid-2.png"
                        alt="element" class="_background">
                </div>
                <img src="https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/man-outside-4JWATE7.png"
                    alt="element" class="_image-people">
            </div>
            <div class="_about-content">
                <div class="_pill">
                    <p>About Brisx</p>
                </div>

                <h3 class="_about-title">
                    A Decade and a Half of SEO Excellence
                </h3>

                <p class="_about-desc">
                    Consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Utenim minim veniam quis nostrud exercitation.
                </p>

                <div class="_about-additional">
                    <p><span>35% <i class="fa-solid fa-arrow-trend-up"></i></span><br>Account Reached</p>
                    <p>Consectetur ndipiscing elit sed do eiusmod tempor incididunt et dolore magna aliqua minim veniam
                        quis.</p>
                </div>

                <div class="_about-cta-wrapper">
                    <a href="#" class="_about-cta">
                        <span>
                            More About Us <i class="fa-solid fa-arrow-right"></i>
                        </span>
                    </a>

                    <a href="#" class="_about-video-cta">
                        <div class="_video-cta-btn">
                            <i class="fa-solid fa-play"></i>
                        </div>

                        <span>Watch intro</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="_services">
        <?php
        $services_data = json_decode(json_encode([
            [
                'icon' => 'https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/icon-seo.png',
                'title' => 'SEO Services',
                'description' => 'Consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore.',
                'class' => '_seo'
            ],
            [
                'icon' => 'https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/icon-ppc.png',
                'title' => 'PPC Advertising',
                'description' => 'Consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore.',
                'class' => '_ppc'
            ],
            [
                'icon' => 'https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/icon-content.png',
                'title' => 'Content Marketing',
                'description' => 'Consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore.',
                'class' => '_content'
            ],
            [
                'icon' => 'https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/icon-social-media.png',
                'title' => 'Social Media Marketing',
                'description' => 'Voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. Consectetur adipiscing elit sed do eiusmod tempor.',
                'class' => '_social'
            ],
            [
                'icon' => 'https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/icon-email.png',
                'title' => 'Email Marketing',
                'description' => 'Voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi. Consectetur adipiscing elit sed do eiusmod tempor.',
                'class' => '_email'
            ],
        ]));
        ?>

        <div class="_services-wrapper">
            <div class="_services-content-wrapper">
                <div class="_pill">
                    <p>Our Services</p>
                </div>
                <header class="_services-header">
                    <h3 class="_services-title">Best SEO Service Just For You</h3>
                    <p class="_services-desc">Consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Utenim minim veniam quis nostrud exercitation. </p>
                </header>
                <main class="_services-content">

                    <?php foreach ($services_data as $ser): ?>
                    <div class="<?= $ser->class ?> _service-card">
                        <div class="_card-img"><img src="<?= $ser->icon ?>" alt="icon"></div>
                        <h3 class="_card-title"><?= $ser->title ?></h3>
                        <p class="_card-desc"><?= $ser->description ?></p>
                    </div>
                    <?php endforeach; ?>
                </main>
            </div>
        </div>
    </section>

    <section id="_testimonials">
        <?php
        $testimonials_data = json_decode(json_encode([
            ['message' => 'Our startup was struggling to make a mark in the digital world until we partnered with Brisx. Their guidance and marketing tactics have propelled us to success. Highly recommended!', 'user' => ['name' => 'Romeo Wiley', 'profile' => 'https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/testimonial-CASCKD8-300x300.jpeg', 'as' => 'Bussinessman']],
            ['message' => 'Our startup was struggling to make a mark in the digital world until we partnered with Brisx. Their guidance and marketing tactics have propelled us to success. Highly recommended!', 'user' => ['name' => 'Romeo Wiley', 'profile' => 'https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/testimonial-CASCKD8-300x300.jpeg', 'as' => 'Bussinessman']],
            ['message' => 'Our startup was struggling to make a mark in the digital world until we partnered with Brisx. Their guidance and marketing tactics have propelled us to success. Highly recommended!', 'user' => ['name' => 'Romeo Wiley', 'profile' => 'https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/testimonial-CASCKD8-300x300.jpeg', 'as' => 'Bussinessman']],
            ['message' => 'Our startup was struggling to make a mark in the digital world until we partnered with Brisx. Their guidance and marketing tactics have propelled us to success. Highly recommended!', 'user' => ['name' => 'Romeo Wiley', 'profile' => 'https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/testimonial-CASCKD8-300x300.jpeg', 'as' => 'Bussinessman']],
            ['message' => 'Our startup was struggling to make a mark in the digital world until we partnered with Brisx. Their guidance and marketing tactics have propelled us to success. Highly recommended!', 'user' => ['name' => 'Romeo Wiley', 'profile' => 'https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/testimonial-CASCKD8-300x300.jpeg', 'as' => 'Bussinessman']],
        ]));
        ?>
        <div class="_testimonials-wrapper">
            <div class="_testimonials-header">
                <div class="_pill">
                    <p>Testimonials</p>
                </div>

                <h3 class="_testimonials-title">Kami Tumbuh Bersama Brand yang Siap Berkembang Lebih Jauh</h3>
                <p class="_testimonials-desc">Melalui strategi yang tepat dan eksekusi yang konsisten, Creacy hadir untuk menjadi mitra yang ikut mendorong pertumbuhan nyata.
                  <br>Inilah cerita mereka yang telah mempercayakan proses kreatif dan digitalnya kepada kami.</p>
            </div>

            <div class="_testimonials-content">
                <?php foreach ($testimonials_data as $testi): ?>
                <div class="_testi-card">
                    <p class="_testi-message">
                        <?= $testi->message ?>
                    </p>

                    <div class="_testi-stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <div class="_testi-user">
                        <div class="_user-img-wrapper">
                            <img src="<?= $testi->user->profile ?>" alt="profile" class="_user-img">
                        </div>
                        <div class="_user-name-as">
                            <p class="_user-name"><?= $testi->user->name ?></p>
                            <p class="_user-as"><?= $testi->user->as ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <cdiv>
            </div>
    </section>

    <section id="_blog">
        <?php $blog_data = json_decode(json_encode([
            ['title' => 'PPC vs. SEO: Which Digital Advertising Strategy Is Right for You?', 'category' => 'Marketing', 'description' => 'Donec nec scelerisque leo Nam massa dolor imperdiet nec consequat a, congue id sem. Maecenas male suada faucibus finibus. Donec vitae libero porttitor, laoreet sapien a, ultrices leo. Duis dictum vestibulum ante vitae ullamcorper. Phasellus ullam corper, odio vitae eleifend ultricies, lectus orci congue magna, in egestas nulla libero non nisl.', 'cover_url' => 'https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/team-work-process-marketing-strategy-brainstormin-5Q59XTL.jpg', 'class' => '_card-a'],
            ['title' => 'The Ultimate Guide to SEO: Boosting Your Website’s Visibility', 'category' => 'Insight', 'description' => 'Donec nec scelerisque leo Nam massa dolor imperdiet nec consequat a, congue id sem. Maecenas male suada faucibus finibus. Donec vitae libero porttitor, laoreet sapien a, ultrices leo. Duis dictum vestibulum ante vitae ullamcorper. Phasellus ullam corper, odio vitae eleifend ultricies, lectus orci congue magna, in egestas nulla libero non nisl.', 'cover_url' => 'https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/teamwork-process-brainstorming-3JMXLNK.jpg', 'class' => '_card-b'],
            ['title' => 'Social Media Marketing Strategies for Small Businesses', 'category' => 'Insight', 'description' => 'Donec nec scelerisque leo Nam massa dolor imperdiet nec consequat a, congue id sem. Maecenas male suada faucibus finibus. Donec vitae libero porttitor, laoreet sapien a, ultrices leo. Duis dictum vestibulum ante vitae ullamcorper. Phasellus ullam corper, odio vitae eleifend ultricies, lectus orci congue magna, in egestas nulla libero non nisl.', 'cover_url' => 'https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/business-people-meeting-working-with-talk-consult-FX9U5ZM.jpg', 'class' => '_card-c'],
        ])) ?>
        <div class="_blog-wrapper">
            <header class="_blog-header">
                <div class="_pill">
                    <p>Our Blog</p>
                </div>
                <h2 class="_blog-title">Explore Our Blog and Articles</h2>
                <p class="_blog-desc">Consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua. Utenim minim veniam quis nostrud exercitation.</p>
            </header>
            <main class="_blog-content">
                <?php foreach ($blog_data as $blog): ?>
                <a href="#" class="_blog-card <?= $blog->class ?>">
                    <img src="<?= $blog->cover_url ?>" alt="cover" class="_card-img">
                    <div class="_card-content">
                        <p class="_card-cat"><?= $blog->category ?></p>
                        <h3 class="_card-title"><?= $blog->title ?></h3>
                        <p class="_card-desc"><?= $blog->description ?></p>
                    </div>
                </a>
                <?php endforeach; ?>
            </main>
        </div>
    </section>

    <section id="_pricing">
        <?php
        $pricing_data = json_decode(json_encode([
            ['price' => '$49,9', 'per' => 'month', 'plan_name' => 'Basic Plan', 'list' => ['5 Analytics Campaigns', 'Marketing Automation', '100 Keywords for SEO', '24/7 Customer Support']],
            ['price' => '$89,9', 'per' => 'month', 'plan_name' => 'Personal Plan', 'list' => ['10 Analytics Campaigns', 'Marketing Automation', '300 Keywords for SEO', '24/7 Customer Support']],
            ['price' => '$149,9', 'per' => 'month', 'plan_name' => 'Enterprise Plan', 'list' => ['20 Analytics Campaigns', 'Marketing Automation', '1000 Keywords for SEO', 'Research & Analysis', 'Weekly Reporting', '24/7 Customer Support']],
        ]));
        ?>

        <div class="_pricing-wrapper">
            <div class="_pricing-header">
                <div class="_pricing-pill-title">
                    <div class="_pill">
                        <p>Pricing</p>
                    </div>
                    <h3 class="_pricing-title">Choose The Right Plan For You</h3>
                </div>

                <p class="_pricing-description">Adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore
                    magna
                    aliqua. Utenim ad minim veniam quis nostrud exercitation ullamco laboris dolore magna aliqua.</p>
            </div>

            <main class="_pricing-content">
                <?php foreach ($pricing_data as $price): ?>
                <div class="_pricing-card">
                    <div class="_price-element">
                        <img src="https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/icon-2.png"
                            alt="element">
                    </div>
                    <h3 class="_price">
                        <?= $price->price ?><span>/<?= $price->per ?></span>
                    </h3>
                    <p class="_plan"><?= $price->plan_name ?></p>

                    <a href="#" class="_price-cta">
                        <span>Get Started <i class="fa-solid fa-arrow-right"></i></span>
                    </a>

                    <div class="_price-add">
                        <?php foreach ($price->list as $l): ?>
                        <p class="_price-list"><i class="fa-solid fa-check"></i> <?= $l ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </main>

        </div>
    </section>

    <section id="_faq">
        <?php
        $faq_data = json_decode(json_encode([
            [
                'title' => 'Can I Upgrade my Subscription?',
                'description' => 'Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.',
            ],
            [
                'title' => 'First-Page Google Guarantee?',
                'description' => 'Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.',
            ],
            [
                'title' => 'Customized Marketing Strategies?',
                'description' => 'Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.',
            ],
            [
                'title' => 'Do You Offer Local SEO Services?',
                'description' => 'Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.',
            ],
            [
                'title' => 'Is Blogging Essential for SEO Success?',
                'description' => 'Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.',
            ],
            [
                'title' => 'What is the ROI of Digital Marketing?',
                'description' => 'Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.',
            ],
        ]));
        ?>
        <div class="_faq-wrapper">
            <div class="_faq-header">
                <div class="_faq-pill-title">
                    <div class="_pill">
                        <p>FAQ</p>
                    </div>
                    <h3 class="_faq-title">Get Your Questions Answered Here</h3>

                </div>

                <p class="_faq-description">Adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Utenim ad minim veniam quis nostrud exercitation ullamco laboris dolore magna aliqua.</p>
            </div>

            <div class="_faq-content">
                <?php foreach ($faq_data as $faq): ?>
                <div class="_faq-card">
                    <h4 class="_card-title"><?= $faq->title ?></h4>
                    <p class="_card-desc"><?= $faq->description ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <section id="_works">
      <?php
        $works_data = json_decode(json_encode([
          ['title' => 'Work Title A', 'desc' => 'Description title A', 'cover' => 'https://askproject.net/median/wp-content/uploads/sites/46/2021/12/aesop-wines-Qj8Czw3lEuw-unsplash.jpeg'],
          ['title' => 'Work Title A', 'desc' => 'Description title A', 'cover' => 'https://askproject.net/median/wp-content/uploads/sites/46/2021/12/aesop-wines-Qj8Czw3lEuw-unsplash.jpeg'],
          ['title' => 'Work Title A', 'desc' => 'Description title A', 'cover' => 'https://askproject.net/median/wp-content/uploads/sites/46/2021/12/aesop-wines-Qj8Czw3lEuw-unsplash.jpeg'],
          ['title' => 'Work Title A', 'desc' => 'Description title A', 'cover' => 'https://askproject.net/median/wp-content/uploads/sites/46/2021/12/aesop-wines-Qj8Czw3lEuw-unsplash.jpeg'],
          ['title' => 'Work Title A', 'desc' => 'Description title A', 'cover' => 'https://askproject.net/median/wp-content/uploads/sites/46/2021/12/aesop-wines-Qj8Czw3lEuw-unsplash.jpeg'],
          ['title' => 'Work Title A', 'desc' => 'Description title A', 'cover' => 'https://askproject.net/median/wp-content/uploads/sites/46/2021/12/aesop-wines-Qj8Czw3lEuw-unsplash.jpeg'],
          ['title' => 'Work Title A', 'desc' => 'Description title A', 'cover' => 'https://askproject.net/median/wp-content/uploads/sites/46/2021/12/aesop-wines-Qj8Czw3lEuw-unsplash.jpeg'],
          ['title' => 'Work Title A', 'desc' => 'Description title A', 'cover' => 'https://askproject.net/median/wp-content/uploads/sites/46/2021/12/aesop-wines-Qj8Czw3lEuw-unsplash.jpeg'],
        ]));
      ?>

      <div class="_works-wrapper">
        <div class="_works-header">
          <div class="_works-pill-title">
            <div class="_pill">
              <p>OUR WORKS</p>
            </div>
            <h3 class="_works-title">We Deal in Briliant Creativity</h3>
          </div>

          <p class="_works-description">Setiap proyek adalah wujud kolaborasi dan strategi yang dirancang untuk memberikan hasil nyata. Kami bangga telah dipercaya berbagai brand dari beragam industri untuk menghidupkan identitas mereka secara digital.</p>
        </div>
        <main class="_works-content">
          <?php foreach ($works_data as $work): ?>
            <div class="_work-card">
              <img src="<?= $work->cover ?>" alt="cover" class="_work-card-image">
              <p class="_work-card-desc"><?= $work->desc ?></p>
              <h3 class="_work-card-title"><?= $work->title ?></h3>
            </div>
          <?php endforeach; ?>
        </main>
      </div>
    </section>

    <footer id="_footer">
        <div class="_footer-wrapper">
            <header class="_footer-header">
                <div class="_elements">
                    <img src="https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/overlay-grid.png"
                        alt="element" class="_element">
                </div>
                <div class="_header-content">
                    <div class="_left">
                        <img src="https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/image-GPPATQ6.png"
                            alt="element" class="_element-2">
                    </div>
                    <div class="_right">
                        <h3 class="_header-right-title">Mulai dari Rp500.000, Bangun Kerja Sama Strategis Bersama Creacy</h3>
                        <p class="_header-right-desc">Dengan investasi yang terjangkau, Anda sudah bisa memulai langkah awal menuju digital presence yang kuat dan profesional.
                          <br><br>
                          Layanan all-in-one kami mencakup manajemen konten, iklan, desain, hingga strategi yang disesuaikan dengan kebutuhan brand Anda.
                        </p>

                        <a href="#" class="_cta">
                            <span>Mulai Sekarang <i class="fa-solid fa-arrow"></i></span>
                        </a>
                    </div>
                </div>
            </header>
            <main class="_footer-content">
                <div class="_footer-section">
                    <h3 class="_footer-section-title">Quick Links</h3>
                    <div class="_footer-section-list">
                        <a href="#" class="_link">About</a>
                        <a href="#" class="_link">Services</a>
                        <a href="#" class="_link">Pricing</a>
                        <a href="#" class="_link">Pricing</a>
                    </div>
                </div>
                <div class="_footer-section">
                    <h3 class="_footer-section-title">Services</h3>
                    <div class="_footer-section-list">
                        <a href="#" class="_link">SEO Services</a>
                        <a href="#" class="_link">PPC Advertising</a>
                        <a href="#" class="_link">Content Marketing</a>
                        <a href="#" class="_link">Social Media Marketing</a>
                    </div>
                </div>
                <div class="_footer-section">
                    <h3 class="_footer-section-title">Support</h3>
                    <div class="_footer-section-list">
                        <a href="#" class="_link">Support</a>
                        <a href="#" class="_link">Term & Conditions</a>
                        <a href="#" class="_link">Contact</a>
                        <a href="#" class="_link">Privacy Policy</a>
                    </div>
                </div>
                <div class="_footer-section">
                    <h3 class="_footer-section-title">Contact Info</h3>
                    <div class="_footer-section-add">
                        <p class="_add-phone"><i class="fa-solid fa-phone"></i> Phone Number: <span>(+021) 885 148
                                11</span></p>
                        <p class="_add-email"><i class="fa-solid fa-envelope"></i> Email Us:
                            <span>support@domain.com</span>
                        </p>

                        <div class="_add-socials">
                            <a href="#" class="_social"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="_social"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="_social"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="_social"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>
                </div>

            </main>

            <footer class="_footer-footer">
                <div class="_left">
                    <img src="https://kit.baliniz.com/brisx/wp-content/uploads/sites/66/2023/10/logo-footer.png"
                        alt="brand" class="_footer-brand">

                    <p class="_left-text">SEO & Digital Marketing Agency Template Kit
                    </p>
                </div>
                <p class="_right">Copyright © 2023 Baliniz. All rights reserved.</p>
            </footer>
        </div>
    </footer>

    <section style="height: 100vh;"></section>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
        integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        $('._companies-list').slick({
            infinite: true,
            arrows: false,
            variableWidth: true,
            slidesToShow: 4,
            slidesToScroll: 1
        });

    })
    document.addEventListener('DOMContentLoaded', () => {
      $('#_works ._works-content').slick({
        infinite: true,
        arrows: false,
        dots: true,
        variableWidth: false,
        slidesToShow: 3,
        slidesToScroll: 1
      });

    })

    document.addEventListener('DOMContentLoaded', () => {
        $('._testimonials-content').slick({
            infinite: true,
            autoscroll: true,
            arrows: false,
            variableWidth: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                    }
                },
            ]
        });

    })

    const {
        animate,
        scroll
    } = Motion

    document.addEventListener('DOMContentLoaded', () => {
        const hbgCloseBtn = document.querySelector('._hamburger-close-btn')
        const hbgBtn = document.querySelector('._hamburger-btn')
        const hbgWrapper = document.querySelector('._hamburger-wrapper')

        hbgBtn.addEventListener('click', () => {
            animate(hbgWrapper, {
                left: '0'
            })
        })
        hbgCloseBtn.addEventListener('click', () => {
            animate(hbgWrapper, {
                left: '-100%'
            })
        })
    })

    // document.addEventListener('DOMContentLoaded', () => {
    //     const headerRoot = document.querySelector('#_header')
    //     scroll(prog => {
    //         if (prog > 0) {
    //             animate(headerRoot, {
    //                 backgroundColor: 'rgba(255,255,255,1)',
    //                 border: '1px solid rgba(0, 0, 0, 0.1)'
    //             })
    //         } else {
    //             animate(headerRoot, {
    //                 backgroundColor: 'rgba(255,255,255,0)',
    //                 border: '1px solid rgba(0, 0, 0, 0)'
    //             })
    //         }
    //     })
    //
    // })

    document.addEventListener('DOMContentLoaded', () => {
        const navWrapper = document.querySelectorAll('._nav-wrapper')

        navWrapper.forEach(item => {
            const floatWrapper = item.querySelector('._float-wrapper');
            item.addEventListener("mouseenter", () => {
                floatWrapper.classList.toggle('_dnone')
            })
            item.addEventListener("mouseleave", () => {
                floatWrapper.classList.toggle('_dnone')
            })
        })
    })
    </script>
</body>

</html>