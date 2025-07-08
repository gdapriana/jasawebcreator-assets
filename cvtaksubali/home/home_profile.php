<style>

.profile {
    position: relative;
}
.profile p span, 
.profile p strong, 
.profile p b {
  color: var(--color2);
  font-weight: 600;
}
.about .title-general p {
  max-width: none;
}
.about .btn {
    border-radius: 0px;
    color: #fff;
    position: relative;
    background: var(--colors);
    font-family: var(--subtext);
    font-size: 15px;
    font-weight: 500;
    line-height: 25px;
    margin-top: 10px;
    padding: .6rem 2rem;
    letter-spacing: .5px;
    transition: ease-in-out .25s;
    align-item: center;
    overflow: hidden;

}
.about .btn .shadow {
    position: absolute;
    left: -100%;
    top: -10%;
    width: 100%;
    height: 20px;
    opacity: .8;
    transition-delay: .2s;
    background-color: #ffffff;
    filter: blur(20px);
    transform: rotate(-45deg);
}
.about .btn:hover .shadow {
    right: 110%;
    transition-delay: .2s;
    transition: .5s;
    transform: translateX(200%) rotate(-45deg);
}
.about .btn:hover {
    background: var(--color2);
    color: #fff;
}

.about .ctr img {
  /*transform: translateY(30%);*/
  margin-top: 30%;
}
.about .img img {
  object-fit: cover;
  height: 500px
}

.about .facility .faci-items {
    background-color: #fffdf7; 
    backdrop-filter: blur(5px);
    border: 1px solid var(--colors);
    padding: 30px;
    margin: 5px 15px;
    transition: all ease 300ms;
}
.about .facility .faci-items i {
    width: 100%;
    color: var(--colors);
    margin-bottom: 10px;
    font-size: 20px;
    text-align: center;
}
.about .facility .faci-items .txt-faci {
    color: var(--colors);
    font-family: var(--subtext);
    font-weight: 300;
    text-transform: uppercase;
    font-size: 11px;
    letter-spacing: 1.5px;
}
.about .facility a:hover .faci-items {
    transform: scale(.94);
}

.visi  img {
  object-fit: cover;
  height: 400px;
}

@media screen and (max-width: 768px) {
  .about .img img {
    height: 250px
  }
  .about .ctr img {
    margin-top: 0;
  }

.about {
    padding-bottom: 1rem!important;
}
.visi {
    padding-top: 1rem!important;
}


    .about .facility {
        position: relative;
        right: auto;
    }
    .about .facility .faci-items {
        padding: 20px;
        margin: 5px;
    }
    .about .facility .faci-items i {
        font-size: 18px;
    }
    .about .facility .faci-items .txt-faci {
        font-size: 10px;
    }
    .visi  img {
        height: 200px;
    }
}
</style>

<div class="pad6rem about animate-items">
    <div class="container-global">
        <div class="row justify-content-between">
            <div class="col-md-5">
                <div class="title-general">
                    <span class="tag-ats">About Us</span>
                    <h2><?= $data->company->company_name ?></h2>
                    <p class="text-justify">
                        <?= $data->company->company_desc ?>
                    </p>
                    <img class="w-100 mt-3" src="https://jwc.gotra-resources.my.id/web-upload/1744356169-11-04-2025-KL2IQZYkfEualpGsTAnmSzBcxjRUM53v.webp" alt="about" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="title-general">
                    <p class="text-justify mt-md-0 mt-3">
                        <?= $data->result->custom_field_1 ?>
                    </p>
                </div>
                <img class="w-100 mt-3" src="https://jwc.gotra-resources.my.id/web-upload/1744356168-11-04-2025-gInJsae8NSYDbR3BPd0vfFkC7iu6Q5lV.webp" alt="about" />

                

            </div>
        </div>
    </div>
</div>

