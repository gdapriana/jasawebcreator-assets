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

    .content-page li {
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


.wrap-sidebar h3 {
    font-family: var(--primtext);
    color: var(--color2);
    text-transform: capitalize;
    letter-spacing: 0px;
    font-weight: 600;
    font-size: 25px !important;
    margin-bottom: 25px !important;
}

.wrap-sidebar ul {
    padding-left: 0;
    list-style: none;
}
.wrap-sidebar {
    padding: 30px;
    box-shadow: 10px 10px 30px #00000029;
    border-radius: 10px;
    background: white;
    font-family: var(--primtext);
}

.wrap-sidebar li {
    letter-spacing: 0px;
    font-weight: 400;
    margin-bottom: 14px;
    padding-left: 40px;
    font-size: 14px;
    font-family: var(--subtext);
    position: relative;
    color: #333;
}

.wrap-sidebar li a { color:#444 !important; }

.wrap-sidebar li a:hover { color:var(--colors) !important; }

.wrap-sidebar ul li i {
    position: absolute;
    left: 10px;
    font-size: 15px;
    top: 4px;
    color: var(--colors);
}

.table-price { 
    border-radius: 10px;
    overflow: hidden;
    position: relative; 
}

.table-price td {
    padding: 13px 15px;
    border-color: #ccc;
    font-family: var(--subtext);
    color: #333;
}

.table-price th {
    background: black;
    font-family: var(--primtext);
    text-align: center;
    color: white;
    padding: 15px;
    font-size: 17px;
    text-transform: uppercase;
    letter-spacing: 1px;
    border: unset;
}
/* =========== Packages ========= */

.packages .col-cust {
    width: 17%;
    padding-right: 1%;
    margin-right: 3%;
}

.packages .card {
    background: white;
    border: 1px solid #ccc;
    border-radius: 10px;
    position: relative;
}

.packages .card-body { position:relative; }

.packages .card h3 {
    font-weight: 700;
    margin-bottom: 20px;
    font-size: 30px;
    line-height: 35px;
    letter-spacing: .3px;
    font-family: var(--primtext);
}
.packages .card h4 {
    font-weight: 600;
    margin-bottom: 4px;
    font-size: 20px;
    line-height: 25px;
    letter-spacing: .3px;
    font-family: var(--primtext);
}
.packages .card p {
    font-weight: 400;
    font-size: 14px;
    line-height: 23px;
    font-family: var(--subtext);
    color: #666;
}
.packages .card img {
    height: 400px;
    object-fit: cover;
}
.packages .price {
    font-weight: 400;
    margin-bottom: 10px;
    font-size: 15px;
    letter-spacing: 0px;
    font-family: var(--subtext);
    color: var(--color2);
}
.packages .price span {
    font-weight: 600;
    font-size: 21px;
    letter-spacing: .3px;
    padding-top: 3px;
    display: inline-block;
    font-family: var(--primtext);
    color: var(--colors);
}
.packages .include {
    font-size: 14px;
    color: var(--color2);
    font-family: var(--subtext);
}
.packages .include i {
    font-size: 15px;
    width: 17px;
    text-align: center;
    margin-right: 10px;
    margin-bottom: 10px;
    color: var(--color2);
}

.img-car {
    height: auto !important;
    margin-bottom: 10px;
}

.btn-air {
    position: absolute;
    right: 3%;
    background: var(--colors);
    color: var(--color2);
    font-family: var(--primtext);
    text-transform: uppercase;
    font-weight: 600;
    padding: 8px 23px;
    letter-spacing: 1px;
    font-size: 16px;
    border-radius: 100px;
    transition: all ease 500ms;
}

.btn-air:hover {
    background: black;
    color: white;
}

@media (min-width: 768px) {
    .packages .col-cust { border-right:1px solid #ccc; }

    .packages .colust-5 { border-right:unset !important; }
}

@media (max-width: 768px) {
    .packages .col-cust {
        width: 50%;
        padding: 10px 8px 15px 8px;
        padding-bottom: 15px;
        margin-right: unset;
        border-top: solid .5px #00000080;
    }
    .packages .col-cust.mob {
        background: #f9f9f9;
        width: 1000%;
        padding: unset 8px;
        text-align: center;
    }
    .packages .card img {
        height: 200px;
    }
    .packages .card h3 {
        margin-top: 15px;
        margin-bottom: 10px;
    }
    .packages .card h4 {
        font-size: 18px;
    }
    .packages .card p {
        margin-bottom: 5px;
    }
    .packages .include i {
        font-size: 13px;
        width: 15px;
    }.packages .include {
        font-size: 12px;
    }
    .packages .price {
        font-weight: 500;
        margin-bottom: 8px;
        font-size: 14px;
    }
    .packages .price span {
        font-weight: 600;
        font-size: 24px;
    }
}
/* =========== Packages ========= */
@media (max-width: 768px) {
    .table-price {
        overflow-x: scroll;
        position: relative;
    }

    .table-price table {
        width: 300% !important;
    }
}
</style>

<?php if ($data->result->title == 'About Us'): ?>

<?= $func->load('home/home_propil') ?>

<?php elseif ($data->result->title == 'Book Airport Transfer'): ?>

<section class="pad6rem" style="background: #f9f9f9;">
    <div class="container-global">
        
        <div class="row">
            <div class="col-md-8">
                <div class="form-style">
                    <h2>Booking Details</h2>
                    <?= $func->load('booking_form_final') ?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="wrap-sidebar">
                    <h3>Reserve Today with Full Flexibility</h3>
                    <ul>
                        <li><i class="fas fa-check"></i>Change your dates and times anytime without any extra charges.</li>
                        <li><i class="fas fa-check"></i>Secure your booking today. rates may increase later.</li>
                        <li><i class="fas fa-check"></i>Add more guests or update your details whenever you need.</li>
                        <li><i class="fas fa-check"></i>Don’t want to wait? Book directly at our domestic and international arrival counters for quick and convenient service.</li>
                    </ul>

                </div>


                <div class="wrap-sidebar mt-4">
                    <h3>Our Counter & Readyline</h3>

                    <img class="img-fluid w-100 mt-3" style="border-radius: 10px; overflow: hidden;" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737602860-23-01-2025-r7aLJP42xXuwiqIlyYO01RMF5jHfoQn8.png" alt="Counter & Ready Line">

                    <img class="img-fluid w-100 mt-3" style="border-radius: 10px; overflow: hidden;" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737190155-18-01-2025-qwRTF0uZQdti1CnkpIvOYDNKoBm2Ug65.webp" alt="Counter & Ready Line">

                <img class="img-fluid w-100 mt-3" style="border-radius: 10px; overflow: hidden;" src="https://gotra.sgp1.digitaloceanspaces.com/web-upload/1737366477-20-01-2025-wXklE8RA9qLdvgx1rsNuPJ6ayUBWVcOC.webp" alt="Counter & Ready Line">

                    <h3 class="mt-4">Our Office</h3>
                    
                    <iframe class="mb-2" src="<?= $data->google_maps ?>" width="100%" height="210" frameborder="0" style="border:0" allowfullscreen></iframe>

                </div>
            </div>
        </div>

    </div>
</section>

<?= $func->load('home/home_reviewcut') ?>

<?= $func->sidebar('airport') ?>

<?= $func->load('home/home_paralax') ?>

<?= $func->load('home/home_why') ?>

<?= $func->load('home/home_faq') ?>

<?php elseif ($data->result->title == 'Bali Airport Transfer Services'): ?>

<?= $func->sidebar('airport') ?>

<?= $func->load('home/home_how') ?>

<?= $func->load('home/home_why') ?>

<?= $func->load('home/home_paralax') ?>

<?= $func->load('home/home_counter') ?>

<?= $func->load('home/home_reviewcut') ?>

<?= $func->load('home/home_faq') ?>

<?php else: ?>

<section class="pad6rem">
    <div class="container-global content-page">
        <h2><?= $data->result->title ?></h2>
        <?= $data->result->content ?>
    </div>
</section>

<?= $func->load('home/home_paralax') ?>

<?= $func->load('home/home_why') ?>

<?= $func->load('home/home_faq') ?>

<?php endif ?>
