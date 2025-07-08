<?php $title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle_2 = $item->setting->subtitle2; ?>

<style>
    .review .card img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        margin-right: 1rem;
        border: 1px solid #fff;
    }
    .review .card h3 {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 0px;
        font-family: var(--primtext);
    }
    .review .card p {
        font-family: var(--primtext);
        font-size: 16px;
        font-weight: 400;
        margin-bottom: 0;
    }
    .review .card .profile {position: relative;}
    .review .card .profile .icon {
        position: absolute;
        right: 1rem;
        top: 0;
        font-size: 2.5rem;
        opacity: .6;
        color: var(--color2);
    }

    .review .card.ctr {background: var(--colors);}
    .review .card.ctr p {color: #f6f6f6;}
    .review .card.ctr h3 {color: #fff;}
    .review .card.ctr .icon {color: #fff;}
    
    .review .card.ctr .read-more,
    .review .card.ctr .read-less {
        color: #ededed;
    }
</style>

<section class="pad6rem review" style="background: ;">
    <div class="container-global wow fadeIn" wow-data-duration="2s">

        <div class="title-general text-center">
            <span class="tag-ats">Our Testimonials</span>
            <h2 class="title"><?= $title ?></h2>
        </div>

        <div class="review-slide revrev ss-arrow mt-5">
        <?php $i = 1; sort($item->data); foreach ($item->data as $items): ?>
            <div class="px-2 h-100">
                <?php $cardClass = (($i - 2) % 3 == 0) ? 'card h-100 ctr' : 'card h-100'; ?>
                <div class="<?= $cardClass ?>">
                    <div class="card-body">
                        <p class="review-message" id="message-<?= $items->id ?>"
                        data-full-message="<?= htmlspecialchars($items->message) ?>"
                        data-short-message="<?= htmlspecialchars(strlen($items->message) > 160 ? substr($items->message, 0, 160) . '...' : $items->message) ?>">
                            <?= strlen($items->message) > 160 ? substr($items->message, 0, 160) . '...' : $items->message ?>
                        </p>
                        <?php if (strlen($items->message) > 160): ?>
                            <a class="read-more" onclick="toggleMessage('message-<?= $items->id ?>', true)">Read More</a>
                            <a class="read-less d-none" onclick="toggleMessage('message-<?= $items->id ?>', false)">Read Less</a>
                        <?php endif; ?>
                        <div class="profile d-flex align-items-center pt-3 mt-3">
                            <div class="icon"><i class="fa-solid fa-quote-right"></i></div>
                            <div class="foto"><img src="<?= $items->img ?>" alt="<?= $items->guest ?>"></div>
                            <div class="name">
                                <h3><?= $items->guest ?></h3>
                                <p><?= $items->title ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php $i++; endforeach; ?>


        </div>


    </div>
</section>
