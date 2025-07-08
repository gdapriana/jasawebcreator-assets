<style type="text/css">
    
    /* ==================== Paralax =================== */
.paralax {
    height: 90vh;
    margin-top: 10vh;
    position: relative;
    margin-bottom: 10vh;
    font-family: var(--primtext);
    /* background: var(--colors); */
    padding-top: 10vh;
    padding-bottom: 10vh;
}
.paralax .background {
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    /* opacity: .7; */
    filter: brightness(.7);
    transform: scale(.95);
    clip-path: polygon(7% 0%, 100% 0, 100% 90%, 92% 100%, 0 100%, 0% 10%);
    position: absolute;
    background-size: cover;
    background-position: left;
    background-image: url("https://jwc.gotra-resources.my.id/web-upload/1738471728-02-02-2025-5bEBGN4cYODQ7Rtujq2zoxMAkVm3PUlT.webp");
}

/* .paralax .background:before {
    content: '';
    position: absolute;
    background: var(--colors);;  
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    opacity: .7;
} */

.paralax .container {
    display: flex;
    z-index: 5;
    position: relative;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    width:100%; 
    height: 100%;
}
.paralax p {
    letter-spacing: 0px;
    font-weight: 400;
    font-size: 16px;
    color: #f1f1f1;
    font-family: var(--primtext);
    margin-bottom: 35px;
    padding: 0px 120px;
}
.paralax h2 {
    font-size: 50px;
    line-height: 60px;
    letter-spacing: 2px;
    text-transform: uppercase;
    font-weight: 700;
    margin-bottom: 20px;
    text-shadow: 0px 5px 10px rgba(0,0,0,0.3);
}
.paralax .button {
    display: flex;
    align-items: center;
    justify-content: center;

}
.paralax .btn {
    color: #000;
    background-color: #ffffff;
    padding: .7rem 1.7rem;
    font-weight: 600;
    font-size: 16px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    border-radius: 0;
    overflow: hidden;
    transition: all ease 500ms;
}
.paralax .btn:hover {
    background-color: #1c1818;
    transition: .3s;
    color: #FFFFFF;
}


@media screen and (max-width: 576px) {
    .paralax h2 {
        font-size: 30px;
        line-height: 40px;
    }

    .paralax p { font-size: 14px; text-align:center; padding:0px; }

    .paralax .btn {
        font-size: 13px;
    }

    .paralax .container { padding:2vh 7% !important; }

    .paralax { height:45vh !important; margin-top:0; }
}
/* ==================== Paralax =================== */
    
</style>



<section class="paralax wow fadeIn lazyload mb-3" data-wow-duration="2s">
    

    <div class="background"></div>
        <div class="container w-100" style="max-width: none; padding: 10vh 7% ">
            <div class="text w-100">
                <h2 class=" text-light">
                    Your Next <br>Adventure Awaits!
                </h2>
                <a href="<?= $func->dm_whatsapp() ?>" class="btn">Reservation Now</a>
                
            </div>
        </div>



</section>

<!-- </div> -->