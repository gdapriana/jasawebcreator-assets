<style>
    
* { font-family:var(--subtext); }

</style>

<section class="section-allpage lazyload back-patt">
    <img class="patern w-100 bottom" src="https://jwc.gotra-resources.my.id/web-upload/1725527048-05-09-2024-patc0TP4528VGhEq1MH9dWNbnIzurigU.png" alt="Patern">
    <div class="background w-100" style="filter: brightness(1); background-image: url(https://jwc.gotra-resources.my.id/web-upload/1724661938-26-08-2024-7RrwxcP0elhoEnTMGaN93XAKkUjzSJiY.png);"></div>
    <div class="text wow fadeIn" data-wow-duration="2s" style="position:relative; z-index: 10">
        <h1><?= $data->result->title ?></h1>
        <p>Home - <?= $data->result->title ?></p>
    </div>
</section>


<style>

.content-page p {
    font-family: var(--subtext);
    font-size: 16px;
    letter-spacing: .3px;
    text-align: left;
    color: #555;
    line-height: 32px;
    font-weight: 300;
    margin-bottom: 30px;
}

.content-page li {
    font-family: var(--subtext);
    font-size: 17px;
    text-align: left;
    color: #333;
    line-height: 32px;
    margin-bottom: 10px;
}

.content-page h3 {
    font-family: var(--primtext);
    letter-spacing: 0px;
    color: var(--colors);
    font-style: normal;
    text-transform: capitalize;
    font-weight: 700;
    font-size: 45px;
    line-height: 50px;
}

.content-page td {
    color: #000;
    padding: 10px;
}
.content-page th {
    background: var(--colors);
    color: white;
    padding: 10px;
    font-size: 16px;
}

@media (max-width: 768px) {

    .content-page h3 { font-size: 30px; line-height: 40px; }

}

@media (max-width: 768px) {
    .content-page p, .content-page li { font-size:15px; line-height:28px }
}

</style>

<?php if ($data->result->title == 'Reservation'): ?>

<section class="pad6rem">
    <div class="container-global content-page text-center wow fadeIn" data-wow-duration="2s">
        
        <div class="load-turitop" data-service="P1" data-lang="en"  data-embed="box"></div>

        <script id="js-turitop" src="https://app.turitop.com/js/load-turitop.min.js" data-company="F223" data-ga="no" data-buttoncolor="green" data-afftag="ttafid"></script>

    </div>
</section>
    
<?php else: ?>

<section class="pad6rem">
    <div class="container-global content-page  wow fadeIn" data-wow-duration="2s">
        <?= $data->result->content ?>
    </div>
</section>

<?php endif ?>

<?= $func->load('home/home_why2') ?>

<?= $func->load('home/home_faq') ?>