<style type="text/css">

html .toggle-primary .toggle label {
    border-radius: 0;
    font-family: var(--subtext);
    font-weight: 600;
    text-transform: unset;
    padding: 15px;
    line-height: 30px;
    font-size: 15px;
    letter-spacing: 0.1px;
    margin-bottom: 0px;
    border-color: var(--color2);
    color: var(--color2);
}

html .toggle-primary .toggle.active>label {
    background-color: var(--color2);
    border-color: var(--color2);
    color: #fff;
}

.toggle.active>label:before {
    transform: rotate(-45deg) translate3d(0,-50%,0);
    top: calc(50% + 1px);
}

.toggle>label:before { 
    transform: rotate(135deg);
    top: calc(50% - 8px);
}

.toggle-content {
    padding: 25px 30px;
    border: 1px solid #ccc;
    margin-bottom: 25px;
    font-family: var(--subtext);
    background: white;
}

.toggle-content p {
    padding: 0 !important;
    margin-bottom: 15px !important;
    color: var(--color2);
}

.toggle>label { background:white; }

@media (max-width: 768px) {
    html .toggle-primary .toggle label {
        padding: 18px;
        font-size: 15px;
    }
}

</style>

<section class="pad6rem">
    <div class="container-global">
        <div class="mar10">

       <div class="row">
            <div class="col-xl-6 align-self-center mb-4 mb-xl-0">
                
                <div class="title-general text-center text-md-left">
                    <span class="tag-ats">Your Question</span>
                    <h2 class="title">Find quick <span>answers</span> to the most common questions</h2>

                    <a class="btn btn-book-atas ml-0" href="<?= $func->dm_whatsapp() ?>"><i class="fa-regular fa-calendar mr-2"></i>Reserve Now</a>
                </div>

            </div>

            <div class="col-xl-6">
                
                <div class="toggle toggle-primary" data-plugin-toggle data-plugin-options="{ 'isAccordion': true }">

                    <section class="toggle">
                        <label>What makes Water Blow Huts unique compared to other accommodations in Nusa Lembongan?</label>
                        <div class="toggle-content">
                            <p>Water Blow Huts offers an authentic Balinese experience with beachfront huts featuring traditional designs and modern comforts. Located near top attractions like Dream Beach and Devil’s Tear, our huts provide a serene and picturesque retreat for travelers.</p>
                        </div>
                    </section>

                    <section class="toggle">
                        <label>What room types are available at Water Blow Huts?</label>
                        <div class="toggle-content">
                            <p>We offer a variety of room types, including Deluxe Bungalow with Sea View, Deluxe Bungalow with Garden View, Deluxe Bungalow with Ocean View, and spacious family options like Three-Bedroom Family and Two-Bedroom Family bungalows.</p>
                        </div>
                    </section>

                    <section class="toggle">
                        <label>What amenities can I expect during my stay at Water Blow Huts?</label>
                        <div class="toggle-content">
                            <p>Guests enjoy premium amenities such as a beachfront location, infinity pool, traditional Balinese huts with air conditioning, beachfront dining, personalized service, and proximity to iconic attractions like the Yellow Bridge and Mushroom Bay.</p>
                        </div>
                    </section>

                    <section class="toggle">
                        <label>Are there nearby attractions to explore during my stay?</label>
                        <div class="toggle-content">
                            <p>Yes! Water Blow Huts is ideally located near top attractions like Dream Beach, Devil’s Tear, Mangrove Forest, and Yellow Bridge. These spots are just minutes away, offering plenty of opportunities for adventure and relaxation.</p>
                        </div>
                    </section>

                    <section class="toggle">
                        <label>How can I book my stay at Water Blow Huts?</label>
                        <div class="toggle-content">
                            <p>You can easily book your stay directly through our website. Visit the Book Now page, select your desired dates and room type, and secure your spot in paradise. For inquiries, contact our friendly team via email or phone.</p>
                        </div>
                    </section>

                </div>



            </div>
       </div>
       
       </div>
    </div>
</section>



