<style type="text/css">

.faq {
    background: #f681211a;
}

html .faq .toggle-primary .toggle label {
    border-radius: 0px;
    font-family: var(--subtext);
    font-weight: 600;
    text-transform: unset;
    padding: 15px ;
    line-height: 30px;
    font-size: 20px;
    color: var(--colors);
    letter-spacing: .5px;
    margin-bottom: 0px;
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
    color: var(--color2);
}

.faq .toggle>label { background:white; }

.faq .toggle label h3 {
    margin-bottom: 0;
    text-transform: unset;
    font-size: 16px;
    line-height: 30px;
    font-weight: 700;
    padding-right: 2rem;
    letter-spacing: 1px;
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
            'span' => 'Before you book',
            'title' => 'Have Questions? We’ve Got Answers!',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident reiciendis nulla ad nesciunt necessitatibus sit incidunt, nemo expedita dolorem perspiciatis similique recusandae eaque non excepturi error cumque ullam reprehenderit voluptatum.',
            'items' => [
                'left' => [
                    [
                        'title' => 'What are the check-in and check-out times at Sense Canggu Beach Resort?',
                        'description' => 'Check-in is from 2:00 PM to 12:00 AM, and check-out is until 12:00 PM. Early check-in or late check-out is subject to availability.'
                    ],
                    [
                        'title' => 'How far is Sense Canggu Beach from Echo Beach and Batu Bolong Beach?',
                        'description' => 'The resort is just 1 km from Echo Beach and 2 km from Batu Bolong Beach—both reachable within minutes on foot or by car.'
                    ],
                    [
                        'title' => 'Does Sense Canggu Beach offer airport transfer services?',
                        'description' => 'Yes, airport pick-up and drop-off are available at IDR 300,000 net per car per way. Advance booking is recommended.'
                    ],
                    [
                        'title' => 'What types of rooms are available at Sense Canggu Beach Resort?',
                        'description' => 'Room options include Suite Garden View, Suite Pool View, Lagoon Access Suite, Penthouse, and Honeymoon Suite—all with modern amenities.'
                    ],
                    [
                        'title' => 'Does the resort have a spa facility?',
                        'description' => 'Yes, 7 Sense Spa offers a variety of treatments such as massages, facials, and body scrubs in a serene, relaxing setting.'
                    ],
                ],
                'right' => [
                    [
                        'title' => 'Are there dining options available at the resort?',
                        'description' => 'Yes. Coming soon: Tipsy x Sense, a lively venue with signature cocktails, live music, and a vibrant social atmosphere.'
                    ],
                    [
                        'title' => 'Is Wi-Fi available throughout the resort?',
                        'description' => 'Absolutely. Free high-speed Wi-Fi is provided in all rooms and public areas for your convenience.'
                    ],
                    [
                        'title' => 'What popular attractions are located near Sense Canggu Beach?',
                        'description' => 'Nearby highlights include Tanah Lot Temple, Ubud, Seminyak, Echo Beach, Batu Bolong, and Canggu’s beach clubs.'
                    ],
                    [
                        'title' => 'Does the resort offer any guided tour experiences?',
                        'description' => 'Yes, the Sense Journey Package offers exclusive tours to Ubud, North Bali, Tanah Lot Temple, and Uluwatu.'
                    ],
                    [
                        'title' => 'Is Sense Canggu Beach Resort family-friendly?',
                        'description' => 'Yes. The resort offers spacious rooms, interconnecting options, and a peaceful setting suitable for couples and families alike.'
                    ],
                ],
            ]

        ]))
    ?>



    <div class="container-global">
        <div class="mar10">
            <div class="title-general text-center">    
                <span class="tag-ats"><?= $_faq->span; ?></span>
                <h2 class="title"><?= $_faq->title ?></h2>
                <p><?= $_faq->desc ?></p>
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



