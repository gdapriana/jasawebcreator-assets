<style type="text/css">
    
    /* ==================== Paralax =================== */
.paralax {
    height: 50vh;
    position: relative;
    font-family: var(--subtext);
    padding-top: 10vh;
    padding-bottom: 10vh;
}
.paralax .background {
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    filter: brightness(.7);
    position: absolute;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    background-image: url("https://gotra.sgp1.digitaloceanspaces.com/web-upload/1733304663-04-12-2024-TYPOl6H0uKnv85gBGoemN4SU9cAht12E.webp");
}

.paralax .container {
    display: flex;
    z-index: 5;
    position: relative;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    height: 100%;
}
.paralax p {
    letter-spacing: 0px;
    font-weight: 400;
    font-size: 16px;
    color: #f1f1f1;
    margin-bottom: 30px;
    padding: 0px 120px;
    font-family: var(--subtext);
}
.paralax h2 {
    font-size: 35px;
    line-height: 45px;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: white;
    font-family: var(--subtext);
    font-weight: 500;
    margin-bottom: 15px;
    text-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
}
.paralax .button {
    display: flex;
    align-items: center;
    justify-content: center;

}

.paralax .btn {
    color: white;
    background-color: var(--colors);
    padding: 10px 30px;
    font-weight: 400;
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 1px;
    border-radius: 0;
    font-family: var(--subtext);
    overflow: hidden;
    transition: all ease 500ms;
}

.paralax .btn:hover {
    background-color: var(--colors);
    transition: .3s;
    color: #FFFFFF;
}

@media screen and (max-width: 576px) {
    .paralax h2 {
        font-size: 22px;
        line-height: 35px;
    }

    .paralax {
        height: 35vh;
    }

    .paralax .background { background-attachment:unset; }

    .paralax p {
        font-size: 14px;
        text-align: center;
        padding: 0px;
    }

    .spn-paralax { font-size: 15px; }

    .paralax .btn {
        font-size: 13px;
    }
}
/* ==================== Paralax =================== */
    
</style>


<!-- <div class="container text-center" style="position: relative; z-index: 1; max-width: 1240px;"> -->

<section class="paralax wow fadeIn" data-wow-duration="2s">
    

    <div class="background"></div>
        <div class="container">
            <div class="text text-center">
                <h2>Book Your Dream Stay Today!</h2>
                <p>Secure your spot at Water Blow Huts and experience Nusa Lembongan's unmatched beauty.</p>

                <a class="btn btn-paralax" href="<?= $func->dm_whatsapp() ?>">Booking Now!</a>
            </div>
        </div>

</section>

<!-- </div> -->