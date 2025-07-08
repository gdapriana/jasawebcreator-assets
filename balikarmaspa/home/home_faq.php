<style type="text/css">

    <?php if ($data->site_position == 'home'): ?>
        .faq {
            background: #de1d0c0d;
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
            'items' => [
                'left' => [
                    [
                        'title' => 'What is Mount Batur Sunset Trekking?',
                        'description' => 'Mount Batur Sunset Trekking is a guided hike to the summit of Mount Batur, an active volcano in Bali, offering a spectacular sunset view. This experience provides a peaceful and less crowded alternative to the popular sunrise trek, allowing hikers to enjoy breathtaking scenery and cooler evening temperatures.'
                    ],
                    [
                        'title' => 'How difficult is the Mount Batur Sunset Trek?',
                        'description' => 'The trek is of moderate difficulty and suitable for most people with a reasonable fitness level. The hike to the summit takes approximately 1.5 to 2 hours, with some steep and rocky paths. A guide will accompany you to ensure safety and provide assistance along the way.'
                    ],
                    [
                        'title' => 'How long does the Mount Batur Sunset Trek take?',
                        'description' => 'The entire trek takes around 4 to 5 hours, including the ascent, time spent at the summit enjoying the sunset, and the descent back to the starting point.'
                    ],
                    [
                        'title' => 'What is the best time of year to do the Mount Batur Sunset Trek?',
                        'description' => 'The best time for Mount Batur Sunset Trekking is during the dry season, from April to October. During these months, the weather is more predictable, with clearer skies and lower chances of rain, ensuring the best visibility and a safer hiking experience.'
                    ],
                    [
                        'title' => 'What should I bring for the Mount Batur Sunset Trek?',
                        'description' => 'It is recommended to wear comfortable trekking shoes with good grip and bring a light jacket or sweater as temperatures can drop at the summit. A flashlight or headlamp is essential for the descent after sunset. Other essentials include enough drinking water to stay hydrated, a small backpack to carry personal items, and a camera or smartphone to capture the stunning views.'
                    ],
                ],
                'right' => [
                    [
                        'title' => 'Is Mount Batur Sunset Trekking safe?',
                        'description' => 'Yes, Mount Batur Sunset Trekking is generally safe, especially when done with an experienced guide. Guides are familiar with the safest routes and will help you navigate the terrain. It is important to follow their instructions, wear proper footwear, and be cautious on rocky or steep sections.'
                    ],
                    [
                        'title' => 'Do I need a guide for Mount Batur Sunset Trekking?',
                        'description' => 'Although Mount Batur can technically be hiked without a guide, it is highly recommended to go with a professional guide. They ensure you stay on the correct trail, provide insights into the volcano’s history, and enhance the overall experience with their knowledge of the area.'
                    ],
                    [
                        'title' => 'Can I combine Mount Batur Sunset Trekking with other activities?',
                        'description' => 'Yes, many travelers choose to combine their trek with additional activities for a more complete adventure. Popular options include a Mount Batur Jeep Tour to explore the volcanic lava fields, an ATV adventure through rugged terrain, or a visit to the natural Batur Hot Springs to relax after the hike.'
                    ],
                    [
                        'title' => 'What is the weather like on Mount Batur during the sunset trek?',
                        'description' => 'The weather on Mount Batur can vary, but it is generally cooler at the summit, especially in the late afternoon and evening. During the dry season, conditions are mostly clear, providing excellent views. However, during the wet season, there is a higher chance of rain, which can make the trails slippery. Checking the weather forecast before your trek is advisable.'
                    ],
                    [
                        'title' => 'How can I prepare for the Mount Batur Sunset Trek?',
                        'description' => 'To prepare for the trek, get enough rest the night before, wear comfortable and breathable clothing, and eat a light meal before starting. If you are not used to hiking, doing light cardio exercises in the weeks leading up to the trek can help improve endurance. Bringing necessary items like a jacket, flashlight, and enough water will also enhance your experience.'
                    ],
                ],
            ]
        ]))
    ?>



    <div class="container-global">
        <div class="mar10">

            <div class="title-product text-center">
                <span class="tag-atas"><i class="fa-solid fa-star-of-life mr-3"></i><?= $_faq->span; ?></span>
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



