<?php
  $defaultHeader = "behave"; // "https://behave.co.uk/";

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
  <link rel="stylesheet" href="./css/behave.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color: #122223">


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
</script>
</body>

</html>
