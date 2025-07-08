

<style>
  :root {
    --colors: #DE1D0C;
    --dark: #000;
  }
  <?php if ($data->site_position == 'home'): ?>
        #_about-root {
            background-color: #de1d0c0d;
        }
    <?php else: ?>
        #_about-root {
            background-color: #fff;
        }
    <?php endif ?>
  #_about-root * {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
  }
  #_about-root {
    font-family: var(--primtext);
  }
  #_about-root ._about-title-wrapper {
    padding-left: 7%;
    padding-right: 7%;
  }
  #_about-root ._about-title-wrapper span {
    color: var(--colors)
  }
  #_about-root ._about-title-wrapper h2 {
    font-weight: bold;
  }
  #_about-root ._about-image, #_about-root ._about-grid {
    width: 100%;
  }
  #_about-root ._about-content-wrapper {
    padding-top: 0;
    padding-bottom: clamp(3rem, 2vw, 12rem); 
  }
  #_about-root ._about-content {
    padding-left: 7%;
    padding-right: 7%;
  }
  #_about-root ._about-content p {
    color: #444;
    font-family: var(--subtext);
    margin-bottom: 10px;
  }
  #_about-root ._about-quote {
    background-color: var(--colors);
    border-radius: 0 ;
    clip-path: polygon(0 0, 100% 0%, 97% 100%, 0% 100%);
  }

  #_about-root ._about-cta {
    background-color: var(--colors);
    text-decoration: none;
    border-radius:  0 ;
    text-transform: uppercase;
    clip-path: polygon(4% 0, 100% 0%, 100% 100%, 0 100%);
    font-weight: bold;
  }

  @media(min-width: 768px) {
    #_about-root ._about-content-wrapper {
      padding: clamp(6rem, 2vw, 12rem) 0;
    }
    #_about-root ._about-content {
      padding-right: 14%;
      padding-left: 0;
    }
    #_about-root ._about-title-wrapper {
      padding-right: 14%;
      padding-left: 0;
    }
  }
</style>

<section id="_about-root" class="w-100  d-flex justify-content-center align-items-center">
  <?php
    $_about = json_decode(json_encode([
      'span'    => [
        'text' => 'About Us',
        'icon' => '',
      ],
      'title'   => $data->company->company_name,
      'content' => $data->company->company_desc,
      'actions' => [
        'button' => [
          'text' => 'Contact Us',
          'icon' => 'fa-solid fa-arrow-right',
        ]
      ],
      'images' => [
        'background' => [
          'src' => 'https://images.unsplash.com/photo-1616584743489-41c917198ee6?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
          'alt' => 'about background'
        ],
        'grid' => [
          'src' => './src/grid.png',
          'alt' => 'grid',
        ],
        'image_1' => [
          'src' => 'https://jwc.gotra-resources.my.id/web-upload/1742538898-21-03-2025-VTh0q4SdE6GnbsYeOgivFuAU89I5XLtx.webp',
          'alt' => 'about image',
        ]
      ]
    ]))
  ?>
  <div class="_about-wrapper w-100 row">
    <div class="col-md-6 p-md-5 p-4 pt-5 d-flex justify-content-center align-items-center">
      <img class="_about-image" src="<?= $_about->images->image_1->src ?>" alt="<?= $_about->images->image_1->alt  ?>">
    </div>
    <div class="_about-content-wrapper col-md-6 row gap-4">

      <div class="_about-title-wrapper title-product pr-5 col-12">
        <span class="tag-atas mb-md-3 mb-2"><i class="fa-solid fa-star-of-life mr-3"></i><?= $_about->span->text ?></span>
        <h2 class="text-bold "><?= $_about->title ?></h2>
      </div>
      <div class="_about-content mt-md-4 mt-3 col-12 text-secondary"><?= $_about->content ?></div>
      <div class="row col-12 mt-md-5 mt-3">
        <div class="_about-quote d-flex gap-1 col-md-7 col-11 px-4 py-3 text-white">
          <i class="fa-solid fa-quote-left mr-2"></i>
          <i>Mount Batur Sunset Trekking is your gateway to nature, adventure, and once-in-a-lifetime experiences in Bali.</i>
        </div>
        <a class="_about-cta ml-auto gap-2 d-flex mt-md-0 mt-3 justify-content-center align-items-center col-8 col-md-4 text-white col-4 px-5 py-3" href="<?= $func->dm_whatsapp() ?>">
          <?= $_about->actions->button->text ?> <i class="<?= $_about->actions->button->icon?> ml-2"></i>
        </a>
      </div>
    </div>
  </div>
</section>




