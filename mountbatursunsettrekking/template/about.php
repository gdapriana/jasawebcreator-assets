<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>moutbatursunsettrekking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <style>
      :root {
        --colors: red;
        --dark: black;
      }
      #_about-root * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
      }
      #_about-root {
        background-color: var(--dark);
      }
      #_about-root ._about-title-wrapper span {
        color: var(--colors)
      }
      #_about-root ._about-image, #_about-root ._about-grid {
        width: 50%;
      }
      #_about-root ._about-quote {
        background-color: var(--colors);
        border-radius: 0 999em 999em 0;
      }
      #_about-root ._about-cta {
        background-color: var(--colors);
        text-decoration: none;
        border-radius: 999em 0 0 999em;
        text-transform: uppercase;
        font-weight: bold;
      }
    </style>
  </head>
  <body>
    <section id="_about-root" class="w-100 d-flex justify-content-center align-items-center">
      <?php
        $_about = json_decode(json_encode([
          'span'    => [
            'text' => 'About Us',
            'icon' => '',
          ],
          'title'   => 'From The Handlebars to Heart Introducing Vroom.',
          'content' => 'From scenic rides to thrilling encounters, our videos showcase the beauty and camaraderie of motorcycling. Whether an experienced rider or a curious newcomer, there\'s something for everyone to enjoy in our content of moto vloggers.',
          'actions' => [
            'button' => [
              'text' => 'Contact Us',
              'icon' => 'fa-solid fa-arrow-right',
              'link' => '#'
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
              'src' => 'https://images.unsplash.com/photo-1496521061024-90e1c1221555?q=80&w=2942&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
              'alt' => 'atv',
            ]
          ]
        ]))
      ?>
      <div class="_about-wrapper w-100 row">
        <div class="col-md-6 p-5" style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('<?= $_about->images->background->src ?>'); background-size: cover;">
<!--          <img class="_about-image" src="--><?php //= $_about->images->image_1->src ?><!--" alt="--><?php //= $_about->images->image_1->alt ?><!--">-->
        </div>
        <div class="col-md-6 row gap-4 py-5">
          <div class="_about-title-wrapper px-5 col-12">
            <span><?= $_about->span->text ?></span>
            <h2 class="fw-bold text-white"><?= $_about->title ?></h2>
          </div>
          <p class="col-12 text-secondary px-5"><?= $_about->content ?></p>
          <div class="row col-12 mt-5 gap-4">
            <div class="_about-quote d-flex gap-1 col-md-7 col-11 px-5 py-3 text-white">
              <i class="fa-solid fa-quote-left"></i>
              <i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, molestiae?</i>
            </div>
            <a class="_about-cta ms-auto gap-2 d-flex justify-content-center align-items-center col-8 col-md-4 text-white col-4 px-5 py-3" href="<?= $_about->actions->button->link ?>">
              <?= $_about->actions->button->text ?> <i class="<?= $_about->actions->button->icon?>"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>