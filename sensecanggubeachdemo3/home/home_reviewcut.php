<section class="pad6rem revieww" style="background: var(--color2);">
    <div class="container-global wow fadeIn" wow-data-duration="2s">

        <div class="title-general text-center">
            <span class="tag-ats">What Our Guests Are Saying</span>
            <h2 class="title text-light">Real Stories and <span>Reviews</span> from Travelers</h2>
        </div>

        <div class="review-slide revrev ss-arrow mt-5">
        <?php $review_single = $func->get_review() ?>

        <?php foreach ($review_single as $items): ?>

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


        <div class="text-center mt-4">
            <a class="btn btn-book-atas" target="_blank" href="https://www.google.com/travel/search?q=water%20blow%20huts%20lembongan&g2lb=4965990%2C4969803%2C72277293%2C72302247%2C72317059%2C72406588%2C72414906%2C72421566%2C72471280%2C72472051%2C72481459%2C72485658%2C72499705%2C72614662%2C72616120%2C72619927%2C72647020%2C72648289%2C72658035%2C72686036%2C72760082%2C72803964%2C72808078&hl=en-ID&gl=id&ssta=1&ts=CAEaRwopEicyJTB4MmRkMjZkYjZlODBmNDBkZjoweDQzMTQzMDlkMTQ5NmYwNzESGhIUCgcI6A8QDBgUEgcI6A8QDBgVGAEyAhAA&qs=CAEyE0Nnb0k4ZURicE5HVGpJcERFQUU4AkIJCXHwlhSdMBRDQgkJcfCWFJ0wFEM&ap=ugEHcmV2aWV3cw&ictx=111&ved=0CAAQ5JsGahcKEwjAsI_A5JWKAxUAAAAAHQAAAAAQDw">View More Reviews</a>
        </div>

    </div>
</section>
