<?php $title = $item->setting->title;
$subtitle = $item->setting->subtitle;
$subtitle_2 = $item->setting->subtitle2; ?>


<section class="pad6rem revieww wow fadeIn animate-items" data-wow-duration="2s" >
    <div class="background"></div>
    <div class="container-global">
        <div class="row">
            <div class="col-md-5 mb-md-0 mb-4 d-flex align-items-center">
                <div class="title-general">
                    <span class="tag-ats"><?= $subtitle_2 ?></span>
                    <h2 class="card-title text-light"><?= $title ?></h2>
                    <p class=""><?= $subtitle ?></p>
                    
                    <div class="pt-4">
                        <a href="https://maps.app.goo.gl/kprDBwv2wa3yeKrv5" class="btn-rev">View More Reviews</a>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="review-slide revrev ss-arrow mt-5" style="background: var(--color2); ">
                    <?php sort($item->data); foreach ($item->data as $items): ?>
                        <div class="card d-flex align-items-center">
                            <div class="card-body d-flex align-items-center">
                                <div class="wrap h-100 ">
                                    <div class="star">
                                        <i class="fa-solid fa-star mr-1"></i>
                                        <i class="fa-solid fa-star mr-1"></i>
                                        <i class="fa-solid fa-star mr-1"></i>
                                        <i class="fa-solid fa-star mr-1"></i>
                                        <i class="fa-solid fa-star mr-1"></i>
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

                                    <div class="profile">
                                        <h3><?= $items->guest ?></h3>

                                        <?php if (!empty($items->title)): ?>
                                            <div class="who"><?= $items->title ?></div>
                                        <?php else: ?>
                                            <div class="who">Guest Review</div>
                                        <?php endif ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>
