<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="./css/process.css">

</head>

<body>
    <?php
    $process_items = json_decode(json_encode(
        [
            [
                'title' => 'Initial Consultation',
                'description' => 'We begin by understanding your vision, needs, and the unique elements you wish to incorporate into your project. Our team listens carefully to your ideas and collaborates to define the project’s goals.',
                'background' => 'https://images.unsplash.com/photo-1741851374674-e4b7e573a9e7?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            [
                'title' => 'Concept Design & Planning',
                'description' => 'Once we understand your requirements, we create detailed conceptual designs. We integrate traditional Balinese art, bamboo structures, and sustainable materials to craft the perfect design that aligns with your vision.',
                'background' => 'https://images.unsplash.com/photo-1741866987680-5e3d7f052b87?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            [
                'title' => 'Approval & Finalization',
                'description' => 'After presenting the concept, we work with you to refine the design until it perfectly fits your expectations. We ensure that all details are approved before moving to the next stage.',
                'background' => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            [
                'title' => 'Art Creation & Material Selection',
                'description' => 'Our artisans begin creating custom pieces, such as wood carvings and other design elements. We carefully select materials like bamboo, wood, and stone to ensure each project reflects the essence of Balinese craftsmanship.',
                'background' => 'https://images.unsplash.com/photo-1623298317883-6b70254edf31?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            [
                'title' => 'Construction & Implementation',
                'description' => 'With everything in place, we begin the construction phase. Our experienced team uses sustainable methods to build the structure while incorporating the artistic elements into the final product.',
                'background' => 'https://images.unsplash.com/photo-1626249893783-cc4a9f66880a?q=80&w=3132&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            [
                'title' => 'Quality Check & Final Touches',
                'description' => 'We conduct thorough quality checks to ensure that every element meets our high standards. The finishing touches are added to perfect the design and ensure it aligns with both aesthetic and functional goals.',
                'background' => 'https://images.unsplash.com/photo-1510009489794-352fba39a0b8?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            [
                'title' => 'Project Handover & Client Review',
                'description' => 'Upon completion, we hand over the project to you. We encourage you to review the final outcome, ensuring it exceeds expectations. Any final adjustments are made before the project is fully closed.',
                'background' => 'https://images.unsplash.com/photo-1591474200742-8e512e6f98f8?q=80&w=3174&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ]
        ]
    ));
    ?>
    <div class="" style="height: 200vh;"></div>
    <article id="_process-root">
        <section class="_process-wrapper">
            <div>
                <div class="_process-header">
                    <span class="_span">Our Process</span>
                    <h2 class="_title">Our Proven Process</h2>
                </div>
                <ul class="_process-group">
                    <?php foreach ($process_items as $item): ?>
                    <li class="_process-item">
                        <div class="_process-item-wrapper">
                            <div class="_item-img-wrapper">
                                <div class="_item-img-overlay"></div>
                                <img src="<?= $item->background ?>" alt="cover">
                            </div>
                            <div class="_item-desc">
                                <h3 class="_item-title"><?= $item->title ?> </h3>
                                <p class="_item-description"><?= $item->description ?></p>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    </article>

    <article id="_process-root-mobile">
        <div class="_process-wrapper-mobile">
            <div class="_process-header-mobile">
                <span class="_span">Our Process</span>
                <h2 class="_title">Our Proven Process</h2>
            </div>

            <?php foreach ($process_items as $key => $item): ?>
            <div class="_process-card-mobile" style="z-index: <?= $key + 1 ?>">
                <div class="_card-content">
                    <h4 class="_card-title"><?= $item->title ?></h4>
                    <p class="_card-desc"><?= $item->description ?></p>
                </div>
                <div class="_card-overlay"></div>
                <img src="<?= $item->background ?>" alt="cover">
            </div>
            <?php endforeach; ?>

        </div>
    </article>

    <div class="" style="height: 200vh;"></div>

    <script src="https://cdn.jsdelivr.net/npm/motion@latest/dist/motion.js"></script>
    <script>
    const {
        animate,
        scroll,
        inView
    } = Motion

    document.addEventListener("DOMContentLoaded", () => {
        const process_items = document.querySelectorAll("._process-item")
        scroll(
            animate("._process-group", {
                transform: ["none", `translateX(-${process_items.length - 1}00vw)`],
            }), {
                target: document.querySelector("._process-wrapper")
            }
        )
        const processRoot = document.querySelector("#_process-root")

        document.querySelectorAll("._process-item").forEach((item, index) => {
            const processImg = item.querySelector('img')
            const processDesc = item.querySelector('._item-desc')



            scroll(animate(processImg, {
                x: [100, -400]
            }, {
                ease: "linear"
            }), {
                target: processRoot,
            })

            scroll(animate(processDesc, {
                x: [200, -800]
            }, {
                ease: "linear"
            }), {
                target: processRoot,
            })
        })
    })
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const mobileCardContents = document.querySelectorAll("#_process-root-mobile ._card-content")
        const mobileCardBackgroundOverlays = document.querySelectorAll("#_process-root-mobile ._card-overlay")

        mobileCardBackgroundOverlays.forEach((item) => {
            inView(item, (element) => {
                animate(element, {
                    opacity: [0, 1]
                }, {
                    duration: 2,
                    ease: "anticipate",
                    delay: 0.6
                })
            })
        })
        mobileCardContents.forEach((item) => {
            inView(item, (element) => {
                animate(element, {
                    y: [400, 0]
                }, {
                    duration: 2,
                    ease: "anticipate",
                    delay: 0.6
                })
            })
        })
    })
    </script>

</body>

</html>