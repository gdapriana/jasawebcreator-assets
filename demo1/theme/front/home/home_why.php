<style>
    .why {
        position: relative;
    }

    .why .background {
        top: 0;
        left: 0;
        z-index: 1;
        width: 100%;
        height: 100%;
        filter: grayscale(1) brightness(.6);
        position: absolute;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-image: url(https://jwc.gotra-resources.my.id/web-upload/1747026479-12-05-2025-alqrZyH178xhkjICKDedcEf2Wv4iUmQ3.webp);
    }

    .why .card {
        border-radius: 10px;
        background: transparent;
        border: 1px solid #ffffff90;
        overflow: hidden;
    }

    .why .card h3 {
        font-family: var(--primtext);
        font-size: 22px;
        font-weight: 600;
        color: #fff;
        line-height: 35px;
        text-transform: capitalize;
        transition: all ease-in-out .35s;
        letter-spacing: 0px;
        margin-bottom: 10px;
    }

    .why .card p {
        margin-bottom: 0px;
        font-family: var(--subtext);
        font-size: 15px;
        line-height: 25px;
        font-weight: 400;
        letter-spacing: .5px;
        color: #fff;
        transition: all ease-in-out .35s;
    }

    .why .card-body {
        padding: 3rem 2.5rem;
        position: relative;
        z-index: 3;
    }

    .why .icon i {
        font-size: 35px;
        color: #fff;
        margin-bottom: 2rem;
        transition: all ease-in-out .35s;
    }

    .why .icon {
        padding-left: 0 !important;
        margin-left: 0;
    }

    .why .card .shadow {
        position: absolute;
        left: 50%;
        top: 50%;
        width: 5rem;
        height: 5rem;
        transition-delay: .2s;
        border-radius: 50%;
        z-index: 1;
        opacity: .95;
        background-color: #fff;
        /* filter: blur(20px); */
        transform: scale(.0) translate(50%, 50%);
        transition: all ease-in-out .35s;
    }

    .why .card.on .shadow,
    .why .card:hover .shadow {
        transform: scale(11);
    }

    .why .card.on .icon i,
    .why .card.on h3,
    .why .card.on p,
    .why .card:hover .icon i,
    .why .card:hover h3,
    .why .card:hover p {
        color: var(--colors);
    }

    @media (max-width: 768px) {
        .why .text-part {
            padding: 3rem 5%;
        }

        /* .why {
            padding-top: 0 !important;
        } */

        .why .card-body {
            padding: 20px;
        }

        .why .icon i {
            font-size: 30px;
            margin-bottom: 20px;
        }

        .why .card h3 {
            font-size: 16px;
        }

        .why .card p {
            margin-bottom: 0px;
            font-size: 13px;
            line-height: 22px;
        }

    }

    @media (max-width: 576px) {
        .foot-why .patern {
            height: 100%;
            transform: scale(1);
        }

        .foot-why .patern.left {
            left: -2rem;
            top: -1rem;
        }

        .foot-why .patern.right {
            right: -2rem;
            bottom: -1rem;
        }
    }
</style>

<section class="why pad6rem" style="background: var(--colors);">
    <div class="background"></div>
    <!-- <img src="https://jwc.gotra-resources.my.id/web-upload/1741153723-05-03-2025-Mz4Sh0OFUbeL6fsqvCREmaxBjQXkl3uP.webp" class="pat-parx" alt="patern"> -->

    <div class="container-global pb-5" style="position: relative; z-index: 5;">

        <div class="title-general text-center">
            <span class="tag-ats" style="color: white; border-color: white;">Why Book With Us</span>
            <h2 style="color: white;"><span style="color: white;">Top Reasons to</span> Choose Our Tours</h2>
        </div>

        <div class="row mx-0 w-100 px-0 mt-5">
            <div class="col-md-3 mb-md-3 mb-2 col-6 px-md-2 px-1">
                <div class="card h-100">
                    <div class="shadow"></div>
                    <div class="card-body">
                        <div class="icon">
                            <i class="fa-solid fa-user-tie"></i> <!-- Expert guide icon -->
                        </div>
                        <h3 class="card-title">Expert Local Guides</h3>
                        <p class="text-card">Explore Bali with certified, English-speaking locals who know every hidden gem.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-md-3 mb-2 col-6 px-md-2 px-1">
                <div class="card h-100">
                    <div class="shadow"></div>
                    <div class="card-body">
                        <div class="icon">
                            <i class="fa-solid fa-sliders-h"></i> <!-- Customizable packages icon -->
                        </div>
                        <h3 class="card-title">Customizable Tours</h3>
                        <p class="text-card">Flexible itineraries tailored to your interests — culture, adventure, or relaxation.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-md-3 mb-2 col-6 px-md-2 px-1">
                <div class="card on h-100">
                    <div class="shadow"></div>
                    <div class="card-body">
                        <div class="icon">
                            <i class="fa-solid fa-shield-alt"></i> <!-- Safe transport icon -->
                        </div>
                        <h3 class="card-title">Safe & Trusted</h3>
                        <p class="text-card">Licensed drivers, insured vehicles, and reliable transport across Bali and Nusa Penida.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-md-3 mb-2 col-6 px-md-2 px-1">
                <div class="card h-100">
                    <div class="shadow"></div>
                    <div class="card-body">
                        <div class="icon">
                            <i class="fa-solid fa-tags"></i> <!-- Transparent pricing icon -->
                        </div>
                        <h3 class="card-title">All-Inclusive Pricing</h3>
                        <p class="text-card">No hidden fees. Every tour includes transport, guide, and entrance tickets.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <img src="https://jwc.gotra-resources.my.id/web-upload/1741154675-05-03-2025-zAl89uM1w7X3iZhBtOPgd6FDkfxjUHpG.webp" class="pat-parxbtm" alt="patern">
</section>