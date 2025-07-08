<style type="text/css">
    .experience .crd-exp {
        position: relative;
        border: none;
        border-radius: 10px;
        overflow: hidden;
    }
    .experience .crd-exp .crd-img {
        height: 100%;
        filter: brightness(.6);
        object-fit: cover;
    }
    .experience .crd-exp h2 {
        color: #fff;
        font-size: 30px;
        font-family: var(--primtext);
        font-weight: 600;
        text-transform: capitalize;
        margin-bottom: 15px;
    }
    .experience .card-img-overlay .box-corner {
        position: absolute;
        left: -.5px;
        bottom: -.5px;
        background-color: #fff;
        padding: .8rem 1.6rem;
        border-radius: 0 10px 0 0;
        
        font-size: 17px;
        font-family: var(--primtext);
        font-weight: 500;
        color: var(--colors);
        text-transform: capitalize;
    }
    .experience .card-img-overlay .box-corner .corner-shape{
        position: absolute;
        width: 15px;
        height: 15px;
        content: "";
    }
    .experience .card-img-overlay .box-corner .corner-shape.top {
        left: 0;
        top: .5px;
        transform: translateY(-99%);
    }
    .experience .card-img-overlay .box-corner .corner-shape.right {
        right: 0;
        bottom: -.5px;
        transform: translateX(99%);
    }

    .experience .item-crd .card {
        border-radius: 15px;
        background: #f7f7f7;
        border: none;
        overflow: hidden;
        position: relative;
    }
    .experience .item-crd .card:after {
        width: 50%;
        height: 55%;
        content: "";
        position: absolute;
        right: 0;
        top: 0;
        background-image: linear-gradient(-135deg, #002DC659, transparent);
        filter: blur(15px);
    }
    .experience .item-crd .card-body {
        padding: 20px;
    }
    .experience .item-crd .icon {
        width: 3rem;
        height: 3rem;
        border-radius: 50%;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 15px;
        color: var(--colors);
        font-size: 1.1rem;
    }
    .experience .card .card-body h3 {
        font-size: 25px;
        font-family: var(--primtext);
        font-weight: 600;
        text-transform: capitalize;
        margin-bottom: 15px;
        letter-spacing: .3px;
    }
    .experience .card .card-body p {
        font-size: 20px;
        font-family: var(--primtext);
        font-weight: 400;
        text-transform: capitalize;
        margin-bottom: 0;
    }
    @media screen and (max-width: 576px) {
        .experience .card .card-body h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }
        .experience .card .card-body p {
            font-size: 14px;
        }
    }

</style>

<div class="experience pad6rem pb-0">
    <div class="container-global">
        <div class="row">
            <div class="col-md-6 d-flex align-item-center">
                <div class="card crd-exp mb-md-0 mb-4">
                    <img src="https://jwc.gotra-resources.my.id/web-upload/1746500631-product_image-06-05-2025-B78KQX3uwLRkN5ai.jpg" alt="experience" class="crd-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <h2>Plan Your Bali <br>Adventure with Bali Excited</h2>
                        <div class="box-corner">
                            <?= $data->web->site_name ?>
                            <img src="https://jwc.gotra-resources.my.id/web-upload/1746589137-07-05-2025-b4DB2VnRKG5UlpJmjy80CizIOM7tv6Fo.webp" alt="corner" class="corner-shape top">
                            <img src="https://jwc.gotra-resources.my.id/web-upload/1746589137-07-05-2025-b4DB2VnRKG5UlpJmjy80CizIOM7tv6Fo.webp" alt="corner" class="corner-shape right">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 px-md-0 d-flex align-item-center">
                <div class="row mx-0 px-0 item-crd">
                    <div class="col-6 pb-3 px-md-2 px-1">
                        <div class="card h-100">
                            <div class="card-body d-flex align-items-end">
                                <div class="">
                                    <div class="icon"><i class="fa-solid fa-face-smile-wink"></i></div>
                                    <h3>1.000+</h3>
                                    <p>Happy Travelers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 pb-3 px-md-2 px-1">
                        <div class="card h-100">
                            <div class="card-body d-flex align-items-end">
                                <div class="">
                                    <div class="icon"><i class="fa-solid fa-star"></i></div>
                                    <h3>4.9 Rated</h3>
                                    <p>Top Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 px-md-2 px-1">
                        <div class="card h-100">
                            <div class="card-body d-flex align-items-end">
                                <div class="">
                                    <div class="icon"><i class="fa-solid fa-handshake"></i></div>
                                    <h3>Global</h3>
                                    <p>Trusted Partners</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 px-md-2 px-1">
                        <div class="card h-100">
                            <div class="card-body d-flex align-items-end">
                                <div class="">
                                    <div class="icon"><i class="fa-solid fa-user-shield"></i></div>
                                    <h3>20+ Tours</h3>
                                    <p>Curated Experiences</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>