<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner</title>
    <link rel="stylesheet" href="./css/client.css">
</head>

<body>

    <?php
    $_client_data = json_decode(json_encode([
        'title' => 'Trusted by Our Clients',
        'span' => 'Our Clients',
        'items' => [
            ['logo' => ['link' => 'https://ibuku.com/wp-content/uploads/2022/04/Vogue-publication-logo-home.svg', 'alt' => 'client logo']],
            ['logo' => ['link' => 'https://ibuku.com/wp-content/uploads/2022/04/CNBC-publication-logo-home.svg', 'alt' => 'client logo']],
            ['logo' => ['link' => 'https://ibuku.com/wp-content/uploads/2022/04/TED-publication-logo-home.svg', 'alt' => 'client logo']],
            ['logo' => ['link' => 'https://ibuku.com/wp-content/uploads/2022/04/BBC-publication-logo-home.svg', 'alt' => 'client logo']],
            ['logo' => ['link' => 'https://ibuku.com/wp-content/uploads/2022/04/apple-tv-publication-logo-home.svg', 'alt' => 'client logo']],
            ['logo' => ['link' => 'https://ibuku.com/wp-content/uploads/2022/04/decor-publication-logo-home.svg', 'alt' => 'client logo']],
            ['logo' => ['link' => 'https://ibuku.com/wp-content/uploads/2022/04/AD-publication-logo-home.svg', 'alt' => 'client logo']],
            ['logo' => ['link' => 'https://ibuku.com/wp-content/uploads/2022/04/autodesk-publication-logo-home.svg', 'alt' => 'client logo']],
            ['logo' => ['link' => 'https://ibuku.com/wp-content/uploads/2022/04/RSA-publication-logo-home.svg', 'alt' => 'client logo']],
        ],
        'background' => [
            'link' => 'https://ibuku.com/wp-content/uploads/2022/02/4043b9b40003aa6e6d51a40042e10f07-1.jpg',
            'alt' => 'background'
        ]
    ]))
    ?>
    <div class="" style="height: 100vh;"></div>
    <section id="_client-root-mobile">
        <header class="_client-header">
            <span class="_client-span"><?= $_client_data->span ?></span>
            <h2 class="_client-title"><?= $_client_data->title ?></h2>
        </header>
        <main class="_client-image">
            <img src="<?= $_client_data->background->link ?>" alt="<?= $_client_data->background->alt ?>">
        </main>
        <footer class="_client-logos">
            <?php foreach ($_client_data->items as $item): ?>
            <div class="_client-logo-wrapper">
                <img class="_client-logo" src="<?= $item->logo->link ?>" alt="<?= $item->logo->alt ?>">
            </div>
            <?php endforeach; ?>
        </footer>
    </section>
    <section id="_client-root-desktop">
        <header class="_client-header">
            <span class="_client-span"><?= $_client_data->span ?></span>
            <h2 class="_client-title"><?= $_client_data->title ?></h2>
        </header>
        <main class="_client-main">
            <div class="_client-logos">
                <?php foreach ($_client_data->items as $item): ?>
                <div class="_client-logo-wrapper">
                    <img class="_client-logo" src="<?= $item->logo->link ?>" alt="<?= $item->logo->alt ?>">
                </div>
                <?php endforeach; ?>
            </div>
            <div class="_client-image">
                <img src="<?= $_client_data->background->link ?>" alt="<?= $_client_data->background->alt ?>">
            </div>
        </main>
    </section>
    <div class="" style="height: 100vh;"></div>
    <script src="https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.js"></script>
    <script>
    const {
        animate,
        scroll,
        inView
    } = Motion

    const desktopImage = document.querySelector('#_client-root-desktop ._client-image img')
    const desktopLogos = document.querySelectorAll('#_client-root-desktop ._client-logo')

    desktopLogos.forEach((item) => {
        inView(item, (element) => {
            animate(element, {
                opacity: [0, 1],
                y: [20, 0]
            }, {
                duration: 1,
                ease: "anticipate",
            })
            return () => {
                animate(element, {
                    opacity: [0, 1]
                })
            }
        })
    })

    inView(desktopImage, (element) => {
        animate(element, {
            height: [0, '170%']
        }, {
            duration: 2.5,
            ease: "anticipate",
        })
        return () => {
            animate(element, {
                height: ['170%', 0]
            })
        }
    })
    </script>

</body>

</html>