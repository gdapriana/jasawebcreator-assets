<?php $jsonData = file_get_contents("data.json"); ?>
<?php $data = json_decode($jsonData, true); ?>
<?php $data = json_decode(json_encode($data['data'])); ?>

<?php
$slider_items = json_decode(json_encode([
  [
    'icon' => 'fa-solid fa-user',
    'title' => 'Instruction'
  ],
  [
    'icon' => 'fa-solid fa-utensils',
    'title' => 'Lunch'
  ],
  [
    'icon' => 'fa-solid fa-wine-glass',
    'title' => 'Drinks'
  ],
  [
    'icon' => 'fa-solid fa-user-shield',
    'title' => 'Equipment'
  ],
  [
    'icon' => 'fa-solid fa-shower',
    'title' => 'Towel & Shower'
  ],
])) ?>

<?php
$booking_addons = json_decode(json_encode([
  [
    'title' => 'Free Cancellation',
    'icon' => 'fa-solid fa-clock',
    'description' => 'up to 24 hours before the experience starts (local time)'
  ],
  [
    'title' => 'Instant Confirmation',
    'icon' => 'fa-solid fa-comments',
    'description' => 'Secure a spot while remaining flexible'
  ],
])) ?>

<?php
$book_additionals = json_decode(json_encode([
  ['title' => 'Book now for tomorrow', 'icon' => 'fa-solid fa-calendar-days'],
  ['title' => 'Lowest Price Guarantee', 'icon' => 'fa-solid fa-money-bill'],
])); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/css/intlTelInput.css">
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
        font-family: Arial, sans-serif;
        margin-top: 20px;
        border-radius: 20px;
    }

    thead {
        background-color: #f2f2f2;
    }

    th,
    td {
        border: 1px solid #ddd;
        text-align: center;
        font-size: 14px;
    }

    th {
        background-color: var(--colors);
        color: white;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #e2f0d9;
    }
    </style>
</head>

<body>

    <section class="_prod-slider _prod-root">
        <div class="_prod-slider-wrapper _prod-wrapper">
            <div class="_prod-slider-content">
                <h2 class="_prod-slider-title"><?= $data->result->title ?></h2>
                <p class="_prod-slider-subtitle">
                    <?php if (!empty($data->result->custom_field_2) && $data->result->custom_field_2 != ""): ?>
                    <?= $data->result->custom_field_2 ?>
                    <?php else: ?>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet tenetur dolorem et harum quisquam
                    inventore. Ipsa nesciunt architecto eaque aspernatur?
                    <?php endif; ?>
                </p>
            </div>
            <div class="_prod-slider-cover-overlay"></div>
            <img class="_prod-slider-cover" src="<?= $data->result->img_cover_url ?>" alt="cover">
        </div>
    </section>

    <section class="_prod-content _prod-root">
        <div class="_prod-content-wrapper _prod-wrapper">
            <div class="_prod-content-booking-root">
                <div class="_prod-content-booking-wrapper">
                    <div class="_prod-content-booking-content _sidebar-fixed">
                        <form action="" class="_prod-form">
                            <h3 class="_prod-form-title"><i class="fa-solid fa-list-check"></i> Booking Now</h3>
                            <label for="name" class="_prod-form-name" style="grid-area: name;">
                                <span>Name</span>
                                <input placeholder="John Doe" required type="text" id="name" name="name">
                            </label>
                            <label for="email" class="_prod-form-email" style="grid-area: email;">
                                <span>Email</span>
                                <input placeholder="@gmail.com" required type="email" id="email" name="email">
                            </label>
                            <label for="whatsapp" class="_prod-form-wa" style="grid-area: wa;">
                                <span>Whatsapp</span>
                                <input placeholder="081..." required type="tel" id="whatsapp" name="whatsapp">
                            </label>
                            <label for="nop" class="_prod-form-nop" style="grid-area: nop;">
                                <span>People</span>
                                <input value="1" type="number" min="1" id="nop" name="Number of People">
                            </label>
                            <label for="phone" class="_prod-form-phone" style="grid-area: phone;">
                                <span>Phone</span>
                                <input required id="_prod-form-phone" name="Phone">
                            </label>
                            <label for="message" class="_prod-form-message" style="grid-area: message;">
                                <span>Messsage</span>
                                <textarea placeholder="your message..." name="message" id="message"></textarea>
                            </label>
                            <button class="_prod-form-btn" style="grid-area: submit;">Book Now</button>
                        </form>
                    </div>
                    <div class="_prod-content-booking-content">
                        <img class="_prod-map"
                            src="https://nusapenidatrip.com/wp-content/uploads/2024/12/1-day-trip-west-1.png" alt="map">
                    </div>
                </div>
            </div>
            <div class="_prod-content-description">
                <div class="_prod-content-item">
                    <h2 class="_prod-content-title"><?= $data->result->title ?></h2>
                    <?= $data->result->content ?>
                </div>
                <?php foreach ($data->addon_contents as $content): ?>
                <div class="_prod-content-item">
                    <strong style="color: var(--color3);">
                        <?php if ($content->slug == 'itinerary'): ?>
                        <i class="fa-solid fa-calendar-days"></i>
                        <?php elseif ($content->slug == 'included-excluded'): ?>
                        <i class="fa-solid fa-list"></i>
                        <?php elseif ($content->slug == 'price-trip'): ?>
                        <i class="fa-solid fa-dollar-sign"></i>
                        <?php else:  ?>
                        <?php endif; ?>
                        <?= $content->name ?></strong>
                    <?= $content->content ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="_prod-gallery _prod-root">
        <div class="_prod-gallery-wrapper _prod-wrapper"></div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/intlTelInput.min.js"></script>
    <script>
    const input = document.querySelector("#_prod-form-phone");
    window.intlTelInput(input, {
        initialCountry: "auto",
        loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.3.1/build/js/utils.js"),
    });
    </script>

    <script src="https://unpkg.com/lenis@1.2.3/dist/lenis.min.js"></script>
    <script>
    const lenis = new Lenis({
        autoRaf: true,
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.js"></script>
    <script>
    const {
        animate,
        scroll
    } = Motion

    const productCover = document.querySelector('._prod-slider ._prod-slider-cover')
    scroll(animate(productCover, {
        y: [0, 400]
    }, {
        ease: "linear"
    }), {})
    </script>
</body>

</html>