<?php
  $defaultHeader = "amaliproperties"; // "https://amaliproperties.com/villa/aurora-grande/";

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
        ],
        15272 => (object)[
          'parent' => 15229,
          'label' => 'test 2',
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
      'id' => 15230,
      'child' => (object)[
        15232 => (object)[
          'parent' => 15230,
          'label' => 'test',
          'link' => '#',
          'language' => '',
          'id' => 15270
        ],
        15274 => (object)[
          'parent' => 15230,
          'label' => 'test 2',
          'link' => '#',
          'language' => '',
          'id' => 15270
        ]
      ]
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
  <link rel="stylesheet" href="./css/amaliproperties.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color: #122223">


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


<section style="height: 200vh">
</section>
<script src="https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.js"></script>
<script>
  const {
    animate,
    scroll,
    stagger
  } = Motion

  let burgeredOpen = false
  let phoneMode = false
  const defaultAnimation = {duration: 1, ease: [0.52, 0.51, 0, 1]}
  const hamburgerBtn = document.querySelector("#_header-root ._hamburger-btn")
  const hamburgerContent = document.querySelector("#_header-root ._hamburger-content")
  const linksWrapper = document.querySelector("#_header-root ._links-wrapper")
  const linkWrapper = document.querySelectorAll("#_header-root ._link-wrapper")
  const links = document.querySelectorAll("#_header-root ._link")
  const headerHamburgerBtnLine1 = document.querySelector("#_header-root ._hamburger-btn ._line-1")
  const headerHamburgerBtnLine2 = document.querySelector("#_header-root ._hamburger-btn ._line-2")
  const mediaQuery = window.matchMedia('(min-width: 570px)')

  linkWrapper.forEach((item) => {
    const sub = item.querySelector("._sublinks-wrapper")
    const link = item.querySelector("._link")
    if (sub !== null) {
      item.addEventListener("mouseenter", () => {
        animate(link, { opacity: [1, 0.5] }, defaultAnimation)
        animate(sub, { opacity: [0, 1] }, defaultAnimation)
      })
      item.addEventListener("mouseleave", () => {
        animate(link, { opacity: [0.5, 1] }, defaultAnimation)
        animate(sub, { opacity: [1, 0] }, defaultAnimation)
      })
    }
  })

  hamburgerBtn.addEventListener("click", () => {
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
</script>
</body>

</html>
