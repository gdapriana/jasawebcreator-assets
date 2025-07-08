<style type="text/css">
    
    #_header-root  {
        background: var(--color2)!important;

    }

    .btn-book-atas:hover {
        color: var(--colors);
        background: #fff;
    }

    * { font-family:var(--subtext); }

  

    .pad8 {
        padding-left: 0px;
        align-self: center;
    }
    /*=============== Head ==============*/
    .head-single .wrap-headsing {
        position: relative;
      }
      .head-single .text {
        position: absolute;
        bottom: 2rem;
        left: 0;
        padding: 1rem 5%;
        width: 100%;
      }
      .head-single img {
        height: 500px;
        object-position: center;
        object-fit: cover;
        filter: brightness(0.5);
      }
      .head-single .text h1 {
        font-family: var(--primtext);
        font-size: 45px;
        line-height: 55px;
        font-weight: 600;
        letter-spacing: .5px;
        color: #fff;
        max-width: 650px;
      }
      .head-single .text p {
        font-family: var(--subtext);
        font-size: 17px;
        line-height: 25px;
        font-weight: 400;
        letter-spacing: .5px;
        color: #fff;
      }
    /*=============== Head ==============*/

    .blogsing-style .title {
        margin-bottom: 0px;
        color: #00001C;
        font-weight: 600;
        font-size: 15px;
    }

    .blogsing-style .date {
        margin-bottom: 0px;
        font-weight: 400;
    }

    .pad8-kanan {
        text-align: right;
        display: flex;
        justify-content: flex-end;
        align-self: center;
    }

    .image-cover {
        height: 500px;
        width: 100%;
        object-fit: cover;
        border-radius: 5px;
        margin-bottom: 30px;
    }

    .content-blog p {
        font-family: var(--subtext);
        color: #444;
        font-size: 15px;
        text-align: justify;
        line-height: 28px;
        margin-bottom: 20px;
        letter-spacing: .3px;
    }
    .content-blog p strong,
    .content-blog p b {
        font-weight: 600 !important;
    }

    .content-blog h3, .content-blog h2, .content-blog h4 {
        letter-spacing: 0px;
        margin: 25px 0px;
        font-weight: 600;
        font-size: 20px;
        font-family:var(--subtext);
    }
    .content-blog h3 {
        text-transform: capitalize;
    }

    .content-blog p a { color: black; font-weight:600; }

    .content-blog li {
        font-family: var(--subtext);
        color: #444;
        font-size: 15px;
        text-align: justify;
        line-height: 28px;
    }

    .content-blog img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 5px;
        margin: 15px 0px;
    }

    .side-blog {
        background: #f5f5f5;
        padding: 1rem 2rem;
        border: .5px solid #00000020;
        box-shadow: 3px 3px 10px #00000010;
    }
    .side-blog .title-sd {
        margin-bottom: 20px;
        padding-left: 45px;
        position: relative;
    }
    .side-blog h2 {
        font-weight: 700;
        font-size: 24px;
        letter-spacing: 0.5px;
        color: #212121;
        padding-bottom: 0px;
        margin-bottom: 0px;
        position: relative;
        font-family:var(--primtext);

    }
    .side-blog .title-sd:before {
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        content: "";
        height: 4px;
        width: 18px;
        border-radius: 5px;
        position: absolute;
        background-color: var(--colors);
    }
    .side-blog .title-sd:after {
        left: 22px;
        top: 50%;
        transform: translateY(-50%);
        content: "";
        height: 4px;
        width: 4px;
        border-radius: 50%;
        position: absolute;
        background-color: var(--colors);
    }
    .side-blog img {
        height: 105px;
        object-fit: cover;
        border-radius: 5px;
        width: 100%;
        margin-bottom: 20px;
    }

    .side-blog h3 {
        text-transform: capitalize;
        font-size: 16px;
        font-weight: 600;
        letter-spacing: 0.5px;
        font-family:var(--primtext);
        line-height: 22px;
        margin-bottom: 10px;
    }

    .side-blog p {
        font-size: 13px;
        line-height: 23px;
        margin-bottom: 20px;
        color: #333;
    }
    .side-blog p i {color: var(--colors)}

    .pad7 {
        padding-right: 0px;
        padding-left: 5px;
    }

@media (max-width: 768px) {
    .head-single img {
        height: 380px;
    }
    .head-single .text h1 {
        font-size: 30px;
        line-height: 40px;
        margin-bottom: 2px;
    }
    .head-single .text {
        bottom: 0rem;
    }
    .head-single .text p {
        font-size: 15px;
        line-height: 25px;
    }
    .content-blog p {
        font-size: 12px;
        line-height: 21px;
    }
    .content-blog li {
        font-size: 12px;
        line-height: 21px;
    }
    .pad8-kanan {
        justify-content: flex-start;
        margin-bottom: 10px;
    }

    .image-cover { height: 250px; }

    .pad7 {
        padding-right: 10px;
    }
}

.wrap-sidebar h3 {
    font-family: var(--primtext);
    color: var(--colors);
    font-weight: 600;
    font-size: 22px !important;
    margin-bottom: 30px !important;
    margin-top: 30px;
}

.wrap-sidebar h3:first-child { margin-top:0px; }


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
    letter-spacing: 0.5px;
    font-weight: 500;
    margin-bottom: 15px;
    padding-left: 40px;
    font-size: 14px;
    position: relative;
}

.wrap-sidebar li a { color:#444 !important; }

.wrap-sidebar li a:hover { color:var(--colors) !important; }

.info-blogsing .bx {
    font-size: 16px;
    font-weight: 600;
    color: var(--color2);
    font-family:var(--subtext);
    text-align: center;
    padding: 0.6rem 1rem;
    border: 1px solid #00000020;
}
.info-blogsing .bx.ctr {
    border-left: none;
    border-right: none;
}

.wrap-sidebar .bx i {
    position: absolute;
    left: 10px;
    font-size: 15px;
    top: 4px;
    color: var(--colors);
}

.info-blogsing .info-wr {
    list-style-type: none !important;
}
.info-blogsing .info-wr svg {
    margin-right: 0.5rem;
}
.search .search-box {
    border-radius: 24px;
    border: solid 1px var(--colors);
    overflow: hidden;
    background: #fff;
}
.search .search-box input {
    border: none;
    border-radius: 0;
    padding: 10px 14px;
    background: #fff;
}
.search .search-box .btn {
    background: var(--colors);
    color: white;
    font-size: 15px;
    border-radius: 25px 0 0 25px;
    transition: ease-in-out .3s;
}
.search .search-box .btn:hover {
    background: var(--color2);
}
@media (max-width: 768px) {

    .section-allpage { 
        margin-top:-10px !important; 
        height: 250px !important;
    }
    .info-blogsing .bx {
        padding: 0.4rem .6rem;
        font-size: 11px;
    }
}
@media (min-width: 768px) {
    .sdbr {
        position: sticky;
        top: 100px;
    }
}

</style>

    
<section class="pad6rem blogsing-style wow fadeIn" data-wow-duration="2s">
    <div class="head-single p-md-4">
        <div class="wrap-headsing">
            <img src="<?= $data->result->img_cover_url ?>" alt="<?= $data->result->title ?>" class="w-100 back-head" />
            <div class="text">
                <div class="box d-md-flex d-block justify-content-between align-items-end">
                    <div class="title">
                        <h1>
                            <?= $data->result->title ?>
                        </h1>
                    </div>
                    <div class="page">
                        <p>Home - <?= $data->cat_data->name ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-global mt-5">
        
        <div class="row">
            <div class="col-md-8">
                <!--<h1></h1>
                <img class="img-fluid image-cover" alt="<?= $data->result->title ?>" src="">-->
                <div class="info-blogsing mb-md-4 mb-2">
                    <div class="info-wr row p-0 m-0 mb-2 position-relative" style="flex-wrap: wrap;">
                        <div class="bx col mb-3">
                            <i class="fa-regular fa-user mr-2"></i>
                            <?= $data->web->site_name ?>
                        </div>
                        <div class="bx col ctr mb-3">
                            <i class="fa-regular fa-calendar mr-2"></i>
                            <?= date('d F Y', strtotime($data->result->created_at)) ?>
                        </div>
                        <div class="bx col mb-3">
                            <i class="fa-regular fa-map mr-2"></i>
                            <?= $data->cat_data->name ?>
                        </div>
                    </div>
                </div>
                <div class="content-blog">
                    <?= $data->result->content ?>
                </div>

            </div><!-- col-md-8 -->

            <div class="col-md-4">
                
                <div class="sdbr">
                    <?= $func->sidebar('mainblog') ?>
                </div>


            </div>
        </div> 

    </div>
</section>