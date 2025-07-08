<style>
  
/* Cate */
.title-blog { position:relative; font-family:var(--subtext); padding-right:35px; }

    .title-blog span {
        text-transform: uppercase;
        font-weight: 600;
        display: block;
        letter-spacing: 1px;
        font-size: 120px;
        line-height: 100px;
        margin-bottom: 10px;
        font-family: var(--primtext);
        color: white;
        position: absolute;
        transform: rotate(270deg);
        left: -20%;
        top: 14%;
        opacity: 0.1;
        text-shadow: 1px 1px 0 rgba(0,0,0 , .5), 
                     -1px -1px 0 rgba(0,0,0 , .5), 
                     1px -1px 0 rgba(0,0,0 , .5), 
                     -1px 1px 0 rgba(0,0,0 , .5), 
                     1px 1px 0 rgba(0,0,0 , .5);
        -webkit-text-fill-color: #fff;
    }

    .title-blog h2 {
        font-size: 50px;
        line-height: 55px;
        color: #000;
        font-weight: 600;
        margin-bottom: 10px;
        letter-spacing: .3px;
        text-transform: uppercase;
        font-family: var(--primtext);
    }

    .title-blog h2 span {
        color: #000;
        font-weight: 800;
        font-size: unset;
        text-transform: unset;
        display: unset;
        letter-spacing: unset;
    }

    .title-blog p {
        color: #444;
        font-size: 16px;
        line-height: 30px;
        font-family: var(--subtext);
    }

    .btn-lpm {
      background: var(--colors);
      color: #fff;
      font-family: var(--subtext);
      border: 1px solid;
      text-transform: uppercase;
      padding: 10px 28px;
      font-size: 14px;
      letter-spacing: 1px;
      font-weight: 600;
      margin-top: 5px;
      transition: all ease 500ms;
  }

    .btn-lpm:hover {
        background: white;
        color: var(--colors);
    }

.wrap-cate {
    font-family: var(--primtext);
    position: relative;
    border-radius: 0px;
    overflow: hidden;
    margin-bottom: 3px;
    transition: all ease 500ms;
    background: black;
    clip-path: polygon(15% 0%, 100% 0, 100% 87%, 85% 100%, 0 100%, 0% 13%);
}

.wrap-cate img {
    height: 500px;
    width: 100%;
    object-fit: cover;
    transition: all ease 500ms !important;
}

.wrap-cate:before {
    position: absolute;
    content: '';
    top: 20%;
    left: 0;
    transition: all ease 500ms;
    right: 0;
    bottom: 0;
    z-index: 1;
    background: transparent linear-gradient(180deg, rgb(13 28 52 / 0) 0, #000000 100%) 0 0 no-repeat padding-box;
}

.wrap-cate2 {
    position: absolute;
    z-index: 2;
    left: 0;
    right: 0;
    bottom: 8%;
    padding: 0px 30px;
}

.wrap-cate2 h3 {
    color: white;
    text-transform: capitalize;
    font-weight: 700;
    font-size: 27px;
    line-height: 40px;
    letter-spacing: 0px;
    margin-bottom: 10px;
}

.wrap-cate2 p {
    color: #f1f1f1;
    font-size: 15px;
    line-height: 30px;
    font-weight: 400;
    padding: 0px;
    margin: 0;
    margin-bottom: 20px;
    font-family: var(--subtext);
}

.wrap-cate2 .price {
    font-size: 21px;
    margin-bottom: 20px;
}

.wrap-cate2 .btn-cate {
    background: var(--colors);
    color: #fff;
    border: 1px solid;
    text-transform: uppercase;
    padding: 8px 20px;
    font-size: 13px;
    letter-spacing: 1px;
    font-weight: 600;
    transition: all ease 500ms;
}

.wrap-cate2 .btn-cate:hover {
    transition: all ease 500ms;
    background: #111;
    color: #fff;
    border-color: #111;
}

.blog-slide .slick-list { width:120% }

.wrap-cate:hover img {
    transform: scale(1.1);
}

.blog-slide .slide-arrow {
    bottom: -9% !important;
    top: unset !important;
}

.blog-slide .prev-arrow {
    left: 50%;
    z-index: 1;
}

.blog-slide .next-arrow {
    right: 37%;
    z-index: 1;
}

@media (max-width : 768px) {

    .wrap-cate {
        margin-bottom: 20px;
        border: unset;
        box-shadow: unset;
    }

    .wrap-cate2 {
        bottom: 0%;
        padding: 35px;
        text-align: center;
    }

    .wrap-cate img {
        height: 350px !important;
    }

    .wrap-cate2 h3 {
        font-size: 20px;
        line-height: 30px;
        margin-bottom: 7px;
    }

    .catcat { margin-bottom:0px; }

    .wrap-cate2 p {
        font-size: 13px;
    }

    .wrap-cate2 .price {
        font-size: 18px;
        margin-bottom: 11px;
    }

    .wrap-cate2 .btn-cate {
        padding: 5px 20px;
        font-size: 11px;
    }

    .blog-slide .slick-list { width:100% }

    .blog-slide .prev-arrow {
        left: 35%;
        z-index: 1;
    }
}


@media (max-width: 768px) {
    .title-blog {
        text-align: center;
        padding: unset;
    }

    .title-blog h2 {
        font-size: 27px;
        line-height: 40px;
        margin-bottom: 20px;
    }

    .title-blog p { font-size: 15px; margin-bottom: 25px; }

    .title-blog span {
        font-size: 13px;
        margin-bottom: 10px;
    }

    .btn-lpm { margin-bottom:30px; font-size:13px; }
}

</style>

<section class="pad6rem">
    <div class="container-global wow fadeIn" wow-data-ruation="2s">
        
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="title-blog">
                    <span>About</span>
                    <h2>We're all about creating amazing experiences</h2>
                    <p>Kuber Bali Adventure is the official provider of exciting ATV tours in Bali, offering unique routes through lush forests, hidden tunnels, and rivers. With professional guides ensuring safety and an unforgettable experience, we invite you to explore Bali’s natural beauty in a thrilling, eco-friendly adventure.</p>
                    <a class="btn btn-lpm" href="https://kuberbaliadventure.com/about-us">Read More About Us<i class="fa-solid fa-chevron-right ml-2"></i></a>
                </div>
            </div>

            <div class="col-md-6">
                
                <div class="blog-slide ss-arrow">
                  <div class="px-2 text-md-left">
                       <div class="wrap-cate">
                           <img class="img-fluid" loading="lazy" src="https://jwc.gotra-resources.my.id/web-upload/1725442905-04-09-2024-TaLlthCiXwRjVP4nO0J62YgoSkIr3esA.webp" alt="Start Track">
                           <div class="wrap-cate2">
                                <h3>Start Track</h3>
                                <p>A smooth, easy introduction to the adventure.</p>
                                <a class="btn btn-cate" href="https://kuberbaliadventure.com/gallery/start-track">View More<i class="fa-solid fa-chevron-right ml-2"></i></a>
                           </div>
                       </div>
                  </div>

                  <div class="px-2 text-md-left">
                       <div class="wrap-cate">
                           <img class="img-fluid" loading="lazy" src="https://jwc.gotra-resources.my.id/web-upload/1725442903-04-09-2024-EFd5LbkZ9eTHtzuiXR8lmJAGWw4v3Iys.webp" alt="Rice Field Track">
                           <div class="wrap-cate2">
                                <h3>Rice Field Track</h3>
                                <p>Ride through beautiful green rice fields.</p>
                                <a class="btn btn-cate" href="https://kuberbaliadventure.com/gallery/rice-field-track">View More<i class="fa-solid fa-chevron-right ml-2"></i></a>
                           </div>
                       </div>
                  </div>

                  <div class="px-2 text-md-left">
                       <div class="wrap-cate">
                           <img class="img-fluid" loading="lazy" src="https://jwc.gotra-resources.my.id/web-upload/1738471741-02-02-2025-3TZf5NkY1m0duohc2Gtr9xzW7iXC6aLl.webp" alt="Jungle Track">
                           <div class="wrap-cate2">
                                <h3>Jungle Track</h3>
                                <p>Navigate winding paths through dense forest.</p>
                                <a class="btn btn-cate" href="https://kuberbaliadventure.com/gallery/jungle-track">View More<i class="fa-solid fa-chevron-right ml-2"></i></a>
                           </div>
                       </div>
                  </div>

                  <div class="px-2 text-md-left">
                       <div class="wrap-cate">
                           <img class="img-fluid" loading="lazy" src="https://jwc.gotra-resources.my.id/web-upload/1725442907-04-09-2024-gE8sWx01vZcrkiVKbAmwS9heJMRnzB5Y.webp" alt="Tunnel Track">
                           <div class="wrap-cate2">
                                <h3>Tunnel Track</h3>
                                <p>Explore a dark and mysterious tunnel.</p>
                                <a class="btn btn-cate" href="https://kuberbaliadventure.com/gallery/tunnel-track">View More<i class="fa-solid fa-chevron-right ml-2"></i></a>
                           </div>
                       </div>
                  </div>

                  <div class="px-2 text-md-left">
                       <div class="wrap-cate">
                           <img class="img-fluid" loading="lazy" src="https://jwc.gotra-resources.my.id/web-upload/1738471721-02-02-2025-8gf2aw5GL03oeQVEM9kpF6jnSximCRtb.webp" alt="River & Waterfall Track">
                           <div class="wrap-cate2">
                                <h3>River & Waterfall Track</h3>
                                <p>Cross rivers and enjoy stunning waterfalls.</p>
                                <a class="btn btn-cate" href="https://kuberbaliadventure.com/gallery/river-waterfall-track">View More<i class="fa-solid fa-chevron-right ml-2"></i></a>
                           </div>
                       </div>
                  </div>

                  <div class="px-2 text-md-left">
                       <div class="wrap-cate">
                           <img class="img-fluid" loading="lazy" src="https://jwc.gotra-resources.my.id/web-upload/1725442902-04-09-2024-oHhbfswRkyni5MCG9uvp841LTjBAcPeK.webp" alt="Finish Track">
                           <div class="wrap-cate2">
                                <h3>Finish Track</h3>
                                <p>A satisfying conclusion to your thrilling adventure.</p>
                                <a class="btn btn-cate" href="https://kuberbaliadventure.com/gallery/river-waterfall-track">View More<i class="fa-solid fa-chevron-right ml-2"></i></a>
                           </div>
                       </div>
                  </div>
              </div>

            </div>
          
        </div>

    </div>
</section>