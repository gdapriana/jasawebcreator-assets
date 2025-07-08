<style>
  .martop { padding-top:15px; }
  .wrap-resort.slick-slide .wrap-resort2  {
    transition: opacity 1s ease-out;
    opacity: 0;
    height: 0;
    overflow: hidden;
  }
  .wrap-resort.slick-slide.slick-current.slick-active.slick-center .wrap-resort2  {
    opacity: 1;
    height: auto;
  }
  .wrap-resort img {
    height: auto;
    width: 100%;
    object-fit: cover;
    border-radius: 20px;
  }
  .martop .slick-center .slick-list {
    padding: 0 13% 0 !important;
  }

  @media (max-width: 768px) {
    .wrap-resort img {
      height: auto;
      width: 100%;
      object-fit: cover;
      border-radius: 10px;
    }
  }
  .slick-slide.wrap-resort {
    margin: 0 10px;
  }
  @media (max-width: 768px) {
    .slick-center .slick-list, .slick-list.draggable { padding: unset !important; }
  }
  .slick-slide.wrap-resort img { opacity: 0.6; transition: opacity 500ms ease-in-out; }
  .slick-center.wrap-resort img { opacity: 1; transition: opacity 500ms ease-in-out; }
  .ss-arrow button {
    margin: 0;
    padding: 0;
    background: #000;
    border: none;
    height: 30px;
    width: 30px;
    transform: scale(1.0);
    color: #fff;
    border-radius: 100px;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
  }
  .ss-arrow .slide-arrow{
    position: absolute;
    top: 44% !important;
    margin-top: -15px;
  }
  .ss-arrow .prev-arrow{
    left: 13%;
    z-index: 1;
  }
  .ss-arrow .next-arrow{
    right: 13%;
    z-index: 1;
  }

  @media (max-width: 768px) {
    .ss-arrow button { transform: scale(0.8); }
    .ss-arrow .slide-arrow { top: 45%; }
    .martop .slick-center .slick-list {
      padding: 0 0% 0 !important;
    }
    .martop { padding-top:15px; }
    .ss-arrow .prev-arrow{
      left: 6%;
      z-index: 1;
    }
    .ss-arrow .next-arrow{
      right: 6%;
      z-index: 1;
    }
  }
</style>

<?php
  $item = json_decode(json_encode([
    'data' => [
      ['img' => 'https://images.unsplash.com/photo-1706516560059-b03772add416?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
      ['img' => 'https://jwc.gotra-resources.my.id/web-upload/1738315029-31-01-2025-kDzihZR1yf9mwtFBAXKVxjI0GNWTO5gp.png'],
      ['img' => 'https://images.unsplash.com/photo-1706516560059-b03772add416?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'],
      ['img' => 'https://jwc.gotra-resources.my.id/web-upload/1738315029-31-01-2025-kDzihZR1yf9mwtFBAXKVxjI0GNWTO5gp.png'],
    ]
  ]))
?>

<section class="slick-margin martop">
  <div class="slick-center ss-arrow">
    <?php foreach ($item->data as $slide): ?>
      <div class="wrap-resort wow fadeIn" data-wow-duration="2s">
        <a href="#"><img class="img-fluid w-100" style="aspect-ratio: 16/7; object-fit: cover" src="<?= $slide->img ?>" alt="Ongoing Promo Uncle Jo"></a>
      </div>
    <?php endforeach ?>

  </div>
</section>

<h1 class="invisible m-0 p-0" style="line-height: 0;">Site Name</h1>


<style>
  .merquee {
    overflow: hidden;
    white-space: nowrap;
    width: 100%;
    margin-top: 2rem;
    background-color: var(--colors);
    padding: 30px 0;
  }

  .merq-text {
    display: inline-block;
    white-space: nowrap;
    animation: merquee 10s linear infinite;
  }

  .merq-text span {
    display: inline-block;
    margin: 0 40px;
    font-size: 14px;
    letter-spacing: 1px;
    font-family: var(--primtext), sans-serif;
    font-weight: 600;
    text-transform: uppercase;
    color: #fff;
  }
  .merq-text i {
    font-size: 10px;
    color: #fff;
  }

  @media (max-width: 768px) {
    .merq-text span {
      margin: 0 30px;
      font-size: 11px;
    }

    .merquee {
      padding: 10px 0;
      margin-top: 15px;
    }

    .merq-text span { font-size:10px; }
  }

  @keyframes merquee {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-50%);

    }
  }
</style>

<div class="merquee">
  <div class="merq-text">
    <span>Fresh Products</span>
    <i class="fa-regular fa-circle"></i>
    <span>Affordable Prices</span>
    <i class="fa-regular fa-circle"></i>
    <span>Convenient Shopping</span>
    <i class="fa-regular fa-circle"></i>
    <span>Trusted by Many</span>
    <i class="fa-regular fa-circle"></i>
    <span>Fresh Products</span>
    <i class="fa-regular fa-circle"></i>
    <span>Affordable Prices</span>
    <i class="fa-regular fa-circle"></i>


    <span>Fresh Products</span>
    <i class="fa-regular fa-circle"></i>
    <span>Affordable Prices</span>
    <i class="fa-regular fa-circle"></i>
    <span>Convenient Shopping</span>
    <i class="fa-regular fa-circle"></i>
    <span>Trusted by Many</span>
    <i class="fa-regular fa-circle"></i>
    <span>Fresh Products</span>
    <i class="fa-regular fa-circle"></i>
    <span>Affordable Prices</span>
    <i class="fa-regular fa-circle"></i>

  </div>
</div>

