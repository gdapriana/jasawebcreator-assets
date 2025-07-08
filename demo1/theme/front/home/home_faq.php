<style type="text/css">

    <?php if ($data->site_position == 'home'): ?>
        .faq {
            background: #0C6FF20d;
        }
    <?php else: ?>
        .faq {
            background: #fff;
        }
    <?php endif ?>

html .faq .toggle-primary .toggle label {
    border-radius: 0px;
    font-family: var(--primtext);
    font-weight: 800;
    text-transform: uppercase;
    padding: 15px ;
    line-height: 30px;
    font-size: 20px;
    color: var(--colors);
    letter-spacing: 1px;
    margin-bottom: 0px;
    padding-right: 30px;
    border: none;
    background: transparent;
    border-bottom: 1px solid #00000050;
}
html .faq .toggle-primary .toggle.active>label {
    background-color: transparent;
    border-color: var(--colors);
    color: #000;
}

.toggle>label:before {
    clip-path: polygon(20% 0%, 0% 20%, 30% 50%, 0% 80%, 20% 100%, 50% 70%, 80% 100%, 100% 80%, 70% 50%, 100% 20%, 80% 0%, 50% 30%);
    border: none;
    background: var(--colors);
    width: 10px;
    height: 10px;
}

.faq .toggle.active>label:before {
    transform: rotate(0deg) translate3d(0,-50%,0);
    top: calc(50% + 1px);
}

.faq .toggle>label:before { 
    transform: rotate(135deg);
    top: calc(50% - 8px);
}

.faq .toggle-content {
    padding: 25px 10px;
    border: none;
    margin-bottom: 25px;
    font-family: var(--subtext);
    background: transparent;
}

.faq .toggle-content p {
    padding: 0 !important;
    margin-bottom: 15px !important;
    color: #333;
}

.faq .toggle>label { background:white; }

.faq .toggle label h3 {
    margin-bottom: 0;
    text-transform: capitalize;
    font-size: 16px;
    line-height: 30px;
    font-weight: 600;
    letter-spacing: .5px;
    font-family: var(--primtext);
}

html .faq .toggle-primary .toggle.active>label h3 { color: #000; }

@media (max-width: 768px) {
    .faq .toggle label h3 {
        padding: 5px;
        font-size: 14px;
        line-height: 23px;
        letter-spacing: .3px;
        padding-right: 50px;
    }
    html .faq .toggle-primary .toggle label {
        padding: 5px 0 ;
    }
    .faq .toggle { margin-bottom:0; }
}
</style>

<section class="pad6rem faq" style="">

    <?php 
        $_faq = json_decode(json_encode([
            'span' => 'Before You Book',
            'title' => 'Have Questions? We’ve Got Answers!',
            'items' => [
                'left' => [
                    [
                        'title' => 'What types of tour packages does Bali Excited offer?',
                        'description' => 'We offer private and group tours in Bali and Nusa Penida, including day trips, multi-day packages, cultural tours, nature adventures, and snorkeling or island-hopping options.'
                    ],
                    [
                        'title' => 'Are the tours private or shared?',
                        'description' => 'Most of our Bali tours are private by default, ensuring a more personal and flexible experience. Group tours are available on request for selected destinations.'
                    ],
                    [
                        'title' => 'Can I customize my Bali tour itinerary?',
                        'description' => 'Yes, all packages are fully customizable. Whether you prefer temples, waterfalls, beaches, or hidden spots, our team will tailor the itinerary to your preferences.'
                    ],
                    [
                        'title' => 'How do I book a Bali Excited tour?',
                        'description' => 'You can book directly through our website, WhatsApp, or email. We confirm all bookings quickly and offer secure payment options.'
                    ],
                    [
                        'title' => 'What’s included in the tour package price?',
                        'description' => 'Our Bali tour packages typically include private transport, an English-speaking local guide, entrance tickets, parking fees, and bottled water.'
                    ],
                ],
                'right' => [
                    [
                        'title' => 'Is hotel pickup and drop-off included?',
                        'description' => 'Yes, free pickup and drop-off are included for most areas in Bali and Sanur (for Nusa Penida tours). We also offer pickup from the airport or custom locations.'
                    ],
                    [
                        'title' => 'What should I bring on my Bali day tour?',
                        'description' => 'Bring sunscreen, sunglasses, a camera, comfortable shoes, and some cash for personal expenses. Swimwear is recommended for beach or snorkeling tours.'
                    ],
                    [
                        'title' => 'Are your tours suitable for families or seniors?',
                        'description' => 'Absolutely! We design our tours to be safe and enjoyable for all ages, including kids and older travelers. Let us know your group needs during booking.'
                    ],
                    [
                        'title' => 'Do you offer tours to Nusa Penida?',
                        'description' => 'Yes, we have full-day and 2-day Nusa Penida packages including fast boat tickets, guided tours, transport on the island, and scenic spots like Kelingking Beach.'
                    ],
                    [
                        'title' => 'What happens if it rains during my tour?',
                        'description' => 'Tours operate rain or shine, but we’ll adjust the itinerary if needed for safety or comfort. Flexible rescheduling is available for extreme weather.'
                    ],
                ]
            ]
        ]));
    ?>

    <div class="container-global">
        <div class="mar10">

            <div class="title-general text-center">
                <span class="tag-ats"><?= $_faq->span; ?></span>
                <h2><?= $_faq->title ?></h2>
            </div>
       
        <div class="row" >

            <div class="col-md-6" >
                <div class="toggle toggle-primary" data-plugin-toggle>
                    <?php foreach($_faq->items->left as $item): ?>
                    <section class="toggle">
                        <label><h3><?= $item->title; ?></h3></label>
                        <div class="toggle-content">
                            <p><?= $item->description; ?></p>
                        </div>
                    </section>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-md-6" >
                <div class="toggle toggle-primary" data-plugin-toggle>
                    <?php foreach($_faq->items->right as $item): ?>
                    <section class="toggle">
                        <label><h3><?= $item->title; ?></h3></label>
                        <div class="toggle-content">
                            <p><?= $item->description; ?></p>
                        </div>
                    </section>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>


       
       </div>
    </div>
</section>



