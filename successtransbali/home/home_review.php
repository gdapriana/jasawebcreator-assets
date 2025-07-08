<?php $title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle_2 = $item->setting->subtitle2; ?>


<style>
    .revieww .title-product h2 span:before { display:none; }
</style>

<section class="pad6rem revieww" style="background: var(--color2);">
    <div class="container-global wow fadeIn" wow-data-duration="2s">

        <div class="title-product text-center">
            <span class="tag-atas"><?= $subtitle ?></span>
            <h2 style="color: white;"><?= $title ?></h2>
        </div>

        <div class="review-slide revrev ss-arrow mt-md-5 mt-1">
        <?php sort($item->data); foreach ($item->data as $items): ?>

            <div class="rev-card">
                <div class="card p-4">
                    <div class="profile mb-4 d-flex align-items-center">
                        <img src="<?= $items->img ?>" alt="<?= $items->guest ?>" class="" />

                        <div class="txt-rev">
                            <h3 class="name mb-1"><?= $items->guest ?></h3>
                            <span class="from"><?= $items->title ?></span>
                        </div>
                    </div>
                    <div class="caption">
                        <p class="review-message" id="message-<?= $items->id ?>" data-full-message="<?= htmlspecialchars($items->message) ?>" data-short-message="<?= htmlspecialchars(strlen($items->message) > 300 ? substr($items->message, 0, 300) . '...' : $items->message) ?>">
                            <?= strlen($items->message) > 300 ? substr($items->message, 0, 300) . '...' : $items->message ?>
                        </p>
                        <?php if (strlen($items->message) > 300): ?>
                            <a class="read-more" onclick="toggleMessage('message-<?= $items->id ?>', true)">Read More</a>
                            <a class="read-less d-none" onclick="toggleMessage('message-<?= $items->id ?>', false)">Read Less</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        </div>


        <!-- <div class="text-center mt-4">
            <a class="btn btn-book-atas" target="_blank" href="#">View More Reviews</a>
        </div> -->

    </div>
</section>
