<style type="text/css">

html .faq .toggle-primary .toggle label {
    border-radius: 0px;
    font-family: var(--subtext);
    font-weight: 600;
    text-transform: unset;
    padding: 15px;
    line-height: 30px;
    font-size: 15px;
    color: var(--colors);
    letter-spacing: 0.1px;
    margin-bottom: 0px;
    background: #f0f0f0;
}

html .faq .toggle-primary .toggle.active>label {
    background-color: var(--colors);
    border-color: var(--colors);
    color: #fff;
}

.faq .toggle.active>label:before {
    transform: rotate(-45deg) translate3d(0,-50%,0);
    top: calc(50% + 1px);
}

.faq .toggle>label:before { 
    transform: rotate(135deg);
    top: calc(50% - 8px);
}

.faq .toggle-content {
    padding: 25px 30px;
    border: 1px solid #ccc;
    margin-bottom: 25px;
    font-family: var(--subtext);
    background: white;
}

.faq .toggle-content p {
    padding: 0 !important;
    margin-bottom: 15px !important;
    color: var(--color2);
}

.faq .toggle>label { background:white; }

.faq .toggle label h3 {
    margin-bottom: 0;
    text-transform: unset;
    font-size: 17px;
    line-height: 30px;
    font-weight: 600;
    letter-spacing: 0px;
    font-family: var(--primtext);
}

html .faq .toggle-primary .toggle.active>label h3 { color:white; }

@media (max-width: 768px) {
    .faq .toggle label h3 {
        padding: 5px;
        font-size: 15px;
        padding-right: 50px;
    }

    .faq .toggle { margin-bottom:0; }
}
</style>

<section class="pad6rem faq" >


    <?php 
        $_faq = json_decode(json_encode([
            'span' => 'Before you book',
            'title' => 'Have Questions? <span>We’ve Got Answers!</span>',
            'items' => [
                'left' => [
                    [
                        'title' => 'What is the best way to get around Bali?',
                        'description' => 'The best way to get around Bali is by hiring a private car with a driver. It provides comfort, flexibility, and safety, allowing you to explore Bali without worrying about traffic or navigation.'
                    ],
                    [
                        'title' => 'How do I book a private taxi in Bali?',
                        'description' => 'You can book a private taxi in Bali through our website, WhatsApp, or by calling us directly. Advance booking is recommended to secure your preferred schedule.'
                    ],
                    [
                        'title' => 'Is it cheaper to use a private driver or ride-hailing apps in Bali?',
                        'description' => 'A private driver is more cost-effective for full-day trips compared to ride-hailing apps. You get fixed pricing, no surge rates, and personalized service, making it a better value for money.'
                    ],
                    [
                        'title' => 'How much does it cost to hire a private driver in Bali?',
                        'description' => 'The cost to hire a private car with a driver in Bali depends on the duration and destinations. Daily rates typically range from IDR 500,000 – 1,000,000 (~$35–$70) for a full-day trip, including fuel and parking fees.'
                    ],
                    [
                        'title' => 'Can I customize my itinerary when booking a private taxi?',
                        'description' => 'Yes! Our private taxi service in Bali is fully customizable. You can choose which attractions to visit, how long to stay, and where to go next, ensuring a tailor-made travel experience.'
                    ],
                ],
                'right' => [
                    [
                        'title' => 'Do your drivers speak English?',
                        'description' => 'Yes! All of our drivers are English-speaking and knowledgeable about Bali’s top attractions, culture, and best-hidden gems, making your trip more enjoyable and informative.'
                    ],
                    [
                        'title' => 'Do you offer airport transfers in Bali?',
                        'description' => 'Yes, we provide Bali airport transfers to and from Ngurah Rai International Airport. Our reliable drivers ensure a smooth pickup or drop-off, whether you’re arriving or departing.'
                    ],
                    [
                        'title' => 'Are private taxis in Bali safe?',
                        'description' => 'Yes! Hiring a private driver in Bali is one of the safest transport options. Our drivers are experienced, fully licensed, and follow all safety protocols to ensure a worry-free ride.'
                    ],
                    [
                        'title' => 'Can I book a Bali taxi for half-day or full-day tours?',
                        'description' => 'Absolutely! We offer both half-day and full-day private taxi services in Bali. A half-day tour is great for quick sightseeing, while a full-day hire is perfect for exploring multiple destinations.'
                    ],
                    [
                        'title' => 'Why should I choose Your Bali Taxi over other transport options?',
                        'description' => 'Your Bali Taxi offers professional, reliable, and affordable private transport services with English-speaking drivers, fixed pricing, and flexible itineraries. Our 5-star customer reviews speak for themselves!'
                    ],
                ]
            ]
        ]))
    ?>


    <div class="container-global">
        <div class="mar10">

            <div class="title-product text-center">
                <span class="tag-atas"><?= $_faq->span; ?></span>
                <h2><?= $_faq->title ?></h2>
            </div>
       
        <div class="row">

            <div class="col-md-6">
                
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

            <div class="col-md-6">
                
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



