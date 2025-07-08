<?php
  $defaultHeader = "villadellatorre"; // "www.villadellatorre.it";

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
  <link rel="stylesheet" href="./css/villadellatorre.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color: #122223">


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

<section style="height: 200vh">
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam nam praesentium sunt velit voluptatum. Ad beatae consectetur fuga modi nihil pariatur quae sapiente veritatis. Commodi culpa deleniti maiores minima neque, quod repudiandae vero. Ad asperiores, dolor facere id inventore iure nam pariatur quo vero vitae. Aliquid architecto assumenda commodi cupiditate dicta distinctio dolore dolorem ducimus eos facilis hic illo ipsa laborum magni nesciunt non odio quisquam quos ratione repellat, rerum sunt veniam veritatis voluptas, voluptatum. Asperiores atque culpa doloremque eos error harum impedit obcaecati odio, perferendis quae ratione soluta totam voluptate. Aliquid animi atque, commodi consequuntur cumque deserunt dignissimos exercitationem expedita fugiat in ipsum laboriosam natus nemo obcaecati, pariatur possimus quis quo repellat suscipit tempore. Aliquid cumque dolore ducimus ea eius et ex facilis illum ipsam iure nisi numquam officiis porro provident quam, quia quidem repellendus, sed vitae voluptatibus! Aliquid amet animi dignissimos eaque explicabo, fugit minus natus non omnis quas quidem saepe sapiente tempore totam voluptates. Aliquam dolores et molestias, nostrum quaerat quo veniam. Assumenda dolor dolorum fuga, illum, ipsum magni nihil numquam officia quod similique ullam veniam veritatis, voluptates. A amet, asperiores aspernatur consectetur distinctio doloribus ea earum eius enim explicabo facere hic illo mollitia necessitatibus nobis non numquam provident quas quibusdam repellendus sequi, vel velit voluptas. Architecto eos ipsum perspiciatis? Blanditiis delectus eius excepturi modi, omnis vel? Consectetur consequatur dolor dolores hic ipsam itaque laboriosam magnam maiores minus necessitatibus porro ratione, rem repudiandae tenetur ullam vel vero. Accusamus asperiores consequatur cum mollitia perferendis perspiciatis repellat sunt veniam! Dolorem eaque eius fugiat id, impedit in iusto, labore laudantium maiores minus nam officiis optio quae, quas quo quos tenetur ullam! Alias, cupiditate facilis harum id modi officia pariatur perferendis porro quisquam reprehenderit? Accusamus ad adipisci, aliquam aliquid aspernatur autem consequatur distinctio eius eveniet expedita explicabo fuga impedit iusto modi mollitia natus neque nobis nostrum nulla numquam omnis perspiciatis provident quibusdam quis rem repellendus sint sunt unde ut veniam. Aliquam corporis, culpa cum debitis deserunt dolor est eum facere facilis id illum impedit maxime, molestias nesciunt ratione tempora voluptas. Accusamus alias, doloremque id ipsam maiores odio sed soluta veritatis! Aliquid architecto debitis in praesentium quae sed veritatis! Dignissimos pariatur quisquam veniam! Blanditiis, ea, odio. Alias aspernatur consectetur dicta id in ipsam iure laboriosam, molestias mollitia natus nesciunt nihil, odio quidem quod voluptas! Accusamus asperiores aut, consequatur consequuntur cumque delectus dolor, doloremque eaque esse, fugit in inventore nesciunt nobis numquam quae quidem quisquam repellat similique tempora temporibus? Aliquid asperiores atque aut cumque dolorum ducimus eius esse facere illum impedit in iure libero natus nesciunt non, pariatur quasi tenetur totam velit, voluptatem. Debitis dignissimos dolore dolores doloribus ducimus earum est eum hic in incidunt libero minus nam pariatur praesentium, qui rem saepe sint voluptate! Ad consequuntur facilis fugiat nesciunt numquam officiis quas quidem tempora vel voluptas? Aliquam beatae deleniti doloremque eos et nemo nostrum officia quam, quas quis quisquam reiciendis sed, ullam. Accusantium aut consequuntur delectus doloremque excepturi mollitia porro quae reprehenderit? Ex quisquam sit vero voluptas! Accusamus facilis in minus? A ab accusantium architecto aut autem consequatur consequuntur cupiditate dolorum enim illo impedit minus nobis numquam odit perspiciatis, praesentium recusandae voluptate voluptatum. Eaque, eius illo. Aspernatur consequatur, corporis deleniti dolore dolorum eum eveniet fuga, fugit incidunt ipsam maxime nemo nihil non numquam optio possimus quaerat quos rerum saepe sed sunt tempora unde? Commodi consequuntur debitis, eaque laudantium odit quod rem velit! Accusantium adipisci aperiam ex itaque necessitatibus odit officia omnis quam tempora voluptas? Et facere harum obcaecati placeat qui quod rem. Aliquid impedit, quisquam! Autem labore mollitia repellat voluptas. Ab, debitis eaque earum eveniet hic impedit iusto minima, molestiae nihil, perspiciatis porro quam quibusdam quis quos ratione reprehenderit suscipit voluptas! Animi architecto corporis deserunt distinctio dolores eligendi facilis inventore libero mollitia nobis obcaecati officia omnis, pariatur perspiciatis quam quas quia quis sint soluta suscipit unde vel voluptate! Accusamus ad culpa debitis dolore dolorem doloremque dolores dolorum earum esse est et eveniet ex excepturi fuga harum hic illo iure iusto laboriosam maiores molestias nisi nobis nulla officia perferendis possimus provident quod sapiente, sed tempora tempore vel vero voluptatem? Consequuntur labore qui repudiandae. Amet animi cupiditate dicta dolor dolores eius ex facilis ipsam, libero magnam minima nulla temporibus? Assumenda distinctio et molestias nostrum odio sit vel vero voluptate. Asperiores culpa dicta ducimus sed voluptatibus! Alias architecto assumenda corporis culpa debitis delectus distinctio doloribus ea, error est et ipsum iusto neque obcaecati omnis optio rem, rerum sed soluta tempore unde, velit vero voluptatum. Aliquam, asperiores culpa eius, enim error ipsa labore laboriosam, magni maxime odit quas quos repellendus sapiente sequi tenetur totam vitae. Cupiditate deserunt dolore doloribus nesciunt nostrum omnis possimus quaerat qui! A ipsa ipsam iusto nemo non quaerat quas quis reiciendis saepe voluptates. A accusantium aliquid beatae consectetur doloremque ex excepturi harum maxime neque perferendis perspiciatis placeat quaerat quidem repudiandae tempora ullam, unde vero voluptatem? Amet commodi excepturi iste, iure laborum nam officiis perferendis placeat quaerat qui quia quibusdam quidem quos ratione tempora! Aspernatur at debitis eveniet libero obcaecati sint veniam? Alias aut, autem consectetur consequuntur deleniti dolores earum eius est eveniet expedita fugit hic iusto maxime molestiae quidem ratione reiciendis sed sint sunt ut. Blanditiis commodi deserunt dolorem fugiat, ipsam iusto modi nihil placeat, quia quisquam recusandae reiciendis rerum suscipit! Accusantium aliquam aspernatur cupiditate dignissimos doloremque ea eos excepturi illum impedit in ipsa, ipsum iure labore magnam necessitatibus pariatur, repellat saepe sunt! Accusantium alias, deserunt iste minima nemo perspiciatis placeat! Architecto asperiores aspernatur atque blanditiis deleniti eligendi, eum ipsum magni molestiae nobis, officiis optio placeat quo tenetur unde ut voluptas. A aliquid dolore, ea eius eos, error et exercitationem facilis, fugiat impedit incidunt inventore ipsam ipsum laborum quidem sapiente sunt tempore ut voluptas voluptates. A, aperiam asperiores, at consequuntur deleniti eaque error eveniet excepturi, itaque molestiae mollitia neque perspiciatis qui quibusdam temporibus veritatis voluptatum. Architecto aspernatur at blanditiis commodi cumque debitis deleniti deserunt dicta dolores doloribus est expedita, fugiat incidunt ipsa ipsam laboriosam laborum minima odio officia pariatur quaerat quia quibusdam, quod quos repellat temporibus, tenetur velit veniam veritatis voluptatem voluptates!
</section>
<script src="https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.js"></script>
<script>
  const {
    animate,
    scroll,
    stagger
  } = Motion

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
      animate(hamburgerContentRight, { width: "55%" }, { duration: 1, ease: "anticipate" })
      animate(hamburgerContentLeft, { width: "55%" },  { duration: 1, ease: "anticipate" })

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
</script>
</body>

</html>
