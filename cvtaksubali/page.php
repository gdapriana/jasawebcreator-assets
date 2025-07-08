<style>
    .content-page {
        position: relative;
        font-family: var(--subtext);
    }

    .content-page p {
        font-size: 15px;
        line-height: 30px;
        color: #333;
    }

    .content-page ul li {
        font-size: 15px;
        line-height: 30px;
        color: #333;
        margin-bottom: 10px;
    }

    .content-page h2 {
        line-height: 50px;
        color: var(--colors);
        letter-spacing: 0px;
        font-weight: 600;
        margin-bottom: 5px;
    }
</style>

<section class="section-allpage lazyload" data-bgset="https://jwc.gotra-resources.my.id/web-upload/1742788760-24-03-2025-cy81hUEGeHqIjwkp7JiWMvQsZ0NbuCAO.webp">
    <div class="text wow fadeIn" data-wow-duration="2s">
        <h1><?= $data->result->title ?></h1>
        <p>Home - <?= $data->result->title ?></p>
    </div>
</section>

<?php if ($data->result->title == 'About Us'): ?>
<style>
    .faq{background: #fff !important;}
</style>
<?= $func->load('home/home_profile') ?>

<?= $func->load('home/home_reviewcut') ?>
<?php else: ?>

<section class="pad6rem">
    <div class="container-global content-page">
        <h2><?= $data->result->title ?></h2>
        <?= $data->result->content ?>
    </div>
</section>

<?php endif ?>

<?= $func->load('home/home_why') ?>

<?= $func->load('home/home_faq') ?>
