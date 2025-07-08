<?php
  $defaultHeader = "creativelayers_2";

  $raw_menu = (object)[
    15229 => (object)[
      'parent' => 0,
      'label' => 'About Us',
      'link' => 'http://demo3.jasawebcreator.com/about-us',
      'language' => '',
      'id' => 15229,
      'child' => (object)[
        15270 => (object)[
          'parent' => 15229,
          'label' => 'test',
          'link' => '#',
          'language' => '',
          'id' => 15270
        ]
      ]
    ],
    15230 => (object)[
      'parent' => 0,
      'label' => 'Rooms & Suites',
      'link' => 'http://demo3.jasawebcreator.com/category/rooms-suites',
      'language' => '',
      'id' => 15230
      // tidak ada child
    ],
    15231 => (object)[
      'parent' => 0,
      'label' => 'Experiences',
      'link' => 'http://demo3.jasawebcreator.com/category/experiences',
      'language' => '',
      'id' => 15231
    ],
    15232 => (object)[
      'parent' => 0,
      'label' => 'Destinations',
      'link' => 'http://demo3.jasawebcreator.com/article-category/nearby-attractions',
      'language' => '',
      'id' => 15232
    ],
    15233 => (object)[
      'parent' => 0,
      'label' => 'Blogs',
      'link' => 'http://demo3.jasawebcreator.com/article-category/blog-news',
      'language' => '',
      'id' => 15233
    ]
  ];


  function transformMenu($HeaderMenuData): array
  {
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

  $header_links = json_decode(json_encode(transformMenu($raw_menu)));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header</title>
  <link rel="stylesheet" href="./css/villadellatorre.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color: #122223">


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
      <img src="https://jwc.gotra-resources.my.id/web-upload/1742791133-24-03-2025-rcH53iBWJjA96d2K4tY8ESyLOQpI0qCU.webp"
           alt="logo">
    </div>
    <div class="_header-language">EN <i class="fa-solid fa-chevron-down"></i></div>
    <a href="#" class="_header-book-btn">Book Your Stay</a>
  </div>
</header>

<div id="_hamburger-content"
     style="background-image: url('https://images.unsplash.com/photo-1531971589569-0d9370cbe1e5?q=80&w=2962&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')">
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


<section style="height: 200vh"></section>


<script src="https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.js"></script>
<script>
  const {
    animate,
    scroll,
    stagger
  } = Motion
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
        backdropFilter: "blur(20px)"
      }, {
        duration: 1
      });
      isScrolled = true;
    } else if (progress === 0 && isScrolled) {
      animate(headerRoot, {
        backdropFilter: "blur(0px)"
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
</script>
</body>

</html>
