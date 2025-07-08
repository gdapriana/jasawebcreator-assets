<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>


    <style>
    @import url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Marcellus&display=swap');

    :root {
        --colors: #b37602;
        --primtext: "Marcellus", serif;
        --subtext: "Jost", sans-serif;
        --subtext-size: 16px;
        --subtext-size-desktop: 20px;
    }

    .container-global {
        width: 100%;
        padding: 0 7% !important;
    }

    ._home-form {
        position: relative;
        width: 100%;
    }

    ._home-form h1,
    h2,
    h3,
    h4 {
        font-family: var(--primtext);
    }

    ._home-form p {
        font-family: var(--subtext);
    }

    ._home-form ._home-form-content {
        gap: 2rem;
        z-index: 3;
    }


    ._home-form ._home-form-desc {
        gap: .8rem;
    }

    ._home-form ._home-form-title {
        font-size: 28px;
        font-family: var(--primtext);
        font-weight: 700;
        color: white;
    }

    ._home-form ._home-form-subtitle {
        font-size: var(--subtext-size);
        font-family: var(--subtext);
        font-weight: 300;
        text-align: center;
    }

    ._home-form ._home-form-form {
        background-color: var(--colors);
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: stretch;
        padding: clamp(2rem, 5vw, 10rem);
    }

    ._home-form ._home-form-form>label {
        color: white;
        font-weight: 500;
        font-family: var(--subtext);
        font-size: var(--subtext-size);
    }

    ._home-form ._home-form-form ._radios {
        margin-bottom: 1.5rem;
        font-family: var(--subtext);
        display: flex;
        flex-direction: column;
        justify-content: start;
        align-items: start;
        gap: .4rem;
        color: white;
        font-weight: 300;
    }

    ._home-form ._home-form-form ._form-double-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    ._home-form ._home-form-form input,
    ._home-form ._home-form-form textarea {
        padding: .8rem 1.2rem;
        background-color: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: white;
        outline: none;
        font-family: var(--subtext);
    }

    ._home-form ._home-form-form input::placeholder,
    ._home-form ._home-form-form textarea::placeholder {
        color: rgba(255, 255, 255, 0.4);
    }

    ._home-form ._home-form-form>input {
        margin-bottom: 1.4rem;
    }

    ._home-form ._home-form-form ._form-double-wrapper>input {
        width: 100%;
    }

    ._home-form ._home-form-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
    }

    ._home-form ._home-form-background-overlay {
        background-color: rgba(0, 0, 0, 0.7);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 2;
    }

    ._home-form ._home-form-location {
        color: white;
        font-size: 20px;
        font-weight: 700;
    }

    ._home-form ._home-form-address {
        color: var(--colors);
        text-align: center;
    }

    ._home-form ._home-form-phone-mail {
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    ._home-form ._home-form-phone-mail p {
        padding: 0;
        margin: 0;
    }

    ._home-form ._home-form-phone-mail p:last-child {
        color: var(--colors);
    }

    ._home-form ._home-form-btn {
        background-color: var(--colors);
        color: white;
        padding: 1rem 1.4rem;
        margin-top: 1rem;
        font-weight: 700;
    }

    @media (min-width: 768px) {
        ._home-form ._home-form-content {
            gap: 8rem;
        }

        ._home-form ._home-form-desc {
            width: 35%;
        }

        ._home-form ._home-form-form {
            flex: 1
        }

        ._home-form ._home-form-title {
            font-size: 32px;
        }

        ._home-form ._home-form-subtitle {
            font-size: var(--subtext-size-desktop);
            text-align: start;
        }


        ._home-form ._home-form-form>label {
            font-size: calc(var(--subtext-size-desktop) - 4px);
        }

        ._home-form ._home-form-form ._form-double-wrapper {
            flex-direction: row;
        }

        ._home-form ._home-form-form ._form-double-wrapper>input {
            width: 50%;
        }

        ._home-form ._home-form-address {
            text-align: start;
        }

        ._home-form ._home-form-phone-mail {
            justify-content: start;
            align-items: start;
        }
    }
    </style>
</head>

<body>

    <section class="_home-form py-5">
        <div class="container-global d-flex _home-form-content justify-content-center flex-column flex-md-row">
            <div class="_home-form-desc d-flex flex-column align-items-md-start align-items-center">
                <h2 class="_home-form-title">Contact Us</h2>
                <p class="text-white _home-form-subtitle">We’re here to answer your questions
                    and listen to your
                    requests.</p>

                <h3 class="_home-form-location">Nusa Dua, Bali</h3>
                <p class="_home-form-address">main gate, Jl. Raya Nusa Dua Selatan, Benoa, Kec. Kuta Sel., Kabupaten
                    Badung, Bali 80363</p>

                <div class="_home-form-phone-mail">
                    <p>+62 819-9941-9179</p>
                    <p>info@karmaspatherapy.com</p>
                </div>

                <a href="" class="_home-form-btn">Reservation Manager</a>
            </div>
            <form class="_home-form-form">
                <label class="_form-input-label">Name</label>
                <div class="_form-double-wrapper">
                    <input type="text" required placeholder="first name">
                    <input type="text" required placeholder="last name">
                </div>
                <label class="_form-input-label">Email</label>
                <input type="email" placeholder="your email @">
                <label class="_form-input-label">Phone Number</label>
                <input type="tel" placeholder="your phone">
                <label class="_form-input-label">Choose treatment</label>
                <div class="_radios">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="treatment">
                        <label class="form-check-label">
                            Balinese
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="treatment" checked>
                        <label class="form-check-label">
                            Lomi Lomi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="treatment" checked>
                        <label class="form-check-label">
                            Deep Tissue
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="treatment" checked>
                        <label class="form-check-label">
                            Hot Stone
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="treatment" checked>
                        <label class="form-check-label">
                            Back, Neck, Shoulder
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="treatment" checked>
                        <label class="form-check-label">
                            Foot Reflexology

                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="treatment" checked>
                        <label class="form-check-label">
                            Etc
                        </label>
                    </div>
                    <!-- Balinese
                    Lomi Lomi
                    Deep Tissue
                    Hot Stone
                    Back, Neck, Shoulder
                    Foot Reflexology -->
                </div>
                <label class="_form-input-label">Comment or Message</label>
                <textarea placeholder="your message"></textarea>
            </form>
        </div>
        <div class="_home-form-background-overlay"></div>
        <img class="_home-form-background"
            src="https://images.unsplash.com/photo-1570174006382-148305ce4972?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="cover">
    </section>


    <section class="_home-pricing py-5">
        <div class="container-global d-flex flex-column justify-content align-items-center" style="gap: 1rem;">
            <!-- HEADER -->
            <div class="">header</div>

            <div class="row w-100">

                <div class="col-12 col-sm-6 col-md-4 bg-danger">hello</div>
                <div class="col-12 col-sm-6 col-md-4 bg-primary">hello</div>
                <div class="col-12 col-sm-6 col-md-4 bg-secondary">hello</div>

            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>