<style>
   .why-section {
        position: relative;
        font-family: var(--subtext);
   }

    .tit-why { color:white !important; }

    .why-section {
        position: relative;
        transition: all ease 500ms;
    }

     .why-section:hover i {
        background: var(--color2) !important;
        color: var(--colors) !important;
    }

    .why-section i {
        background: white;
        font-size: 35px;
        width: 80px;
        height: 80px;
        line-height: 80px;
        text-align: center;
        border-radius: 100px;
        margin-bottom: 30px;
        color: var(--colors);
        transition: all ease 500ms;
    }

    .why-section h3 {
        font-family: var(--subtext);
        font-weight: 600;
        text-transform: capitalize;
        font-size: 22px;
        color: white;
        letter-spacing: 0px;
        margin-bottom: 15px;
    }

    .why-section p {
        color: #f1f1f1;
        font-size: 14px;
        letter-spacing: .3px;
        font-family: var(--subtext);
    }

@media (max-width: 768px) {
    .why-section { text-align: center;}

    .title-primary { margin-bottom:30px; }

    .title-primary span {
        font-size: 14px;
        margin-bottom: 4px;
    }

    .title-primary h2 { font-size: 30px; }

    .conti { padding: 0px 20px; }

    .why-section i {
        font-size: 40px;
    }

    .why-section h3 {
        font-size: 16px;
        margin-bottom: 6px;
    }

    .why-section p {
        font-size: 13px;
    }

    .col3636 { padding: 0 5px; }
}

</style>

<section class="py-5 wow fadeIn" data-wow-duration="2s" style="background: var(--colors);">
    <div class="container-global">

        <div class="title-product text-center">
          <span class="mb-0" style="color: white; font-family: var(--subtext)">Why Choose Us?</span>
          <h2 class="tit-why mt-2">Why Should <span style="color: white;"><?= $data->web->site_name ?></span></h2>
        </div>
        
       <div class="row">
            <div class="col-md-3 col-6 col3636">
                <div class="why-section">
                    <i class="fa-solid fa-map-location"></i>
                    <h3>Authentic Experience</h3>
                    <p>As the original ATV provider, we offer exclusive tracks through Bali’s stunning landscapes.</p>
                </div>
            </div>

            <div class="col-md-3 col-6 col3636">
                <div class="why-section">
                    <i class="fa-solid fa-shield"></i>
                    <h3>Safety First</h3>
                    <p>Professional guides and quality equipment ensure a safe and thrilling adventure.</p>
                </div>
            </div>

            <div class="col-md-3 col-6 col3636">
                <div class="why-section">
                    <i class="fa-solid fa-leaf"></i>
                    <h3>Eco-Friendly</h3>
                    <p>We prioritize sustainable tourism, protecting Bali's natural beauty.</p>
                </div>
            </div>

            <div class="col-md-3 col-6 col3636">
                <div class="why-section">
                    <i class="fa-solid fa-users"></i>
                    <h3>Tailored Packages</h3>
                    <p>Our adventures are customizable to fit solo travelers, families, or groups.</p>
                </div>
            </div>
        </div>


    </div>
</section>