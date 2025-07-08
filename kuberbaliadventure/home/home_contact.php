 <?php
$title = $item->setting->title;
$subtitle = $item->setting->subtitle;
?>

<style>
    .contact .box {
        background-image: url("https://gotra.sgp1.digitaloceanspaces.com/web-upload/1718180708-12-06-2024-wEqFLCzaMGf12vP9ieVHBAXxk5pu6csn.webp");
        background-size: cover;
        background-position: center;
        padding: 10vh 2rem 10vh 0;
        box-shadow: -5px -5px 10px #00000010;
        font-family: var(--primtext);
      }
      .contact .box .text {
        width: 45%;
        background-color: white;
        padding: 2rem;
      }

      .contact .box .text p {
        color: var(--color2);
        font-weight: 500;
        margin-bottom: 15px;
      }
      .contact .box .text h3 {
        color: var(--colors);
        font-size: 22px;
        font-weight: 600;
        line-height: 26px;
        text-transform: uppercase;
        letter-spacing: 1.4px;
      }
      @media screen and (max-width: 576px) {
        .contact .box .text {
          width: 85%;
        }
      }
</style>

<section class="mb-5 contact d-none d-md-block">
    <div class="container">
        <div class="box w-100 d-flex align-item-center">
          <div class="text">
            <a href="<?= $func->dm_whatsapp() ?>"><p>Contact Us Now at <?= $data->company->company_telp ?></p></a>
            <a href="<?= $func->dm_whatsapp() ?>"><h3>
              Experience the magic of Nusa Penida with Nusa Penida Natural. Book your tour now and create lasting memories!
            </h3></a>
          </div>
        </div>
      </div>
</section>