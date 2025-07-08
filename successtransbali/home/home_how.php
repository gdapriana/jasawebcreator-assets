<style>
	
.wrap-prod {
    position: relative;
    font-family: var(--primtext);
}
.wrap-prod img {
    height: 260px;
    object-fit: cover;
    border-radius: 25px;
}

.wrap-prod2 p {
    font-size: 14px;
    color: #333;
    font-family: var(--subtext);
}

.wrap-prod2 h3 {
    color: var(--color2);
    text-transform: uppercase;
    letter-spacing: 0px;
    font-weight: 600;
    font-size: 21px;
    margin-bottom: 20px;
}
.wrap-prod2 {
    position: relative;
    background: white;
    padding: 30px;
    font-family: var(--primtext);
    border-radius: 25px;
    height: 260px;
}

.wrap-prod2 a {
    padding: 0;
    font-size: 15px;
    color: #000;
    text-transform: uppercase;
    font-weight: 500;
    letter-spacing: 1px;
    position: absolute;
    bottom: 10%;
    transition: all ease 500ms;
}

.wrap-prod2 a:hover {
    transition: all ease 500ms;
    color: var(--colors);
    transform: translateY(-3px);
}

.paducus {
    background: #f9f9f9; 
    margin: 0px 20px; 
    border-radius: 20px;
}


.concus {
    padding-left: 2%;
    padding-right: 2%;
}

@media (max-width: 768px) {

	.wrap-padd {
		padding: 5px;
    	margin-bottom: 10px !important;
	}

    .wrap-prod img {
        height: 135px;
        border-radius: 15px 15px 0px 0px;
    }

    .paducus {
        margin: 0px 0px;
    }

    .wrap-prod2 h3 {
	    font-size: 16px;
	    margin-bottom: 15px;
	}

	.wrap-prod2 p {
	    font-size: 12px;
	    line-height: 21px;
	}

	.wrap-prod2 a {
	    font-size: 13px;
	}

    .wrap-prod2 {
        border-radius: 0px 0px 15px 15px;
        height: 250px;
        padding: 20px;
    }
}

</style>

<section class="why pad6rem paducus">
  <div class="container-global">
    
    <div class="title-product text-center">
            <span class="tag-atas">How it Works</span>
            <h2>Simple Steps to <span>Your Destination</span></h2>
    </div>
    

    	<div class="row">
		    <!-- Reserve -->
		    <div class="col-md-6 col-6 mb-5 wrap-padd">
		        <div class="row">
		            <div class="col-md-6 align-self-center">
		                <div class="wrap-prod">
		                    <img class="img-fluid" src="https://jwc.gotra-resources.my.id/web-upload/1735721872-01-01-2025-lFaKBR1pXQGdTiNYgywo6vAuSzUWEJhb.webp" alt="Reserve">
		                </div>
		            </div>
		            <div class="col-md-6 align-self-center">
		                <div class="wrap-prod2">
		                    <h3>1. Reserve</h3>
		                    <p>Easily book your ride by filling out the online form with your details and preferred pick-up time.</p>
		                	<a class="btn" href="<?= $func->dm_whatsapp() ?>"><i class="fas fa-arrow-right mr-3"></i>Book Now</a>
		                </div>
		            </div>
		        </div>
		    </div>

		    <!-- Pick-Up -->
		    <div class="col-md-6 col-6 mb-5 wrap-padd">
		        <div class="row">
		            <div class="col-md-6 align-self-center">
		                <div class="wrap-prod">
		                    <img class="img-fluid" src="https://jwc.gotra-resources.my.id/web-upload/1735721871-01-01-2025-3mY61gFrXERGnKNzOSxfdiMyP7e9kbHq.webp" alt="Pick-Up">
		                </div>
		            </div>
		            <div class="col-md-6 align-self-center">
		                <div class="wrap-prod2">
		                    <h3>2. Pick-Up</h3>
		                    <p>Our team will meet you at the agreed time, ensuring a hassle-free start to your journey.</p>
		                	<a class="btn" href="<?= $func->dm_whatsapp() ?>"><i class="fas fa-arrow-right mr-3"></i>Book Now</a>
		                </div>
		            </div>
		        </div>
		    </div>

		    <!-- Meet Your Driver -->
		    <div class="col-md-6 col-6 mb-5 wrap-padd">
		        <div class="row">
		            <div class="col-md-6 order-md-2 align-self-center">
		                <div class="wrap-prod">
		                    <img class="img-fluid" src="https://jwc.gotra-resources.my.id/web-upload/1735721871-01-01-2025-5fa9GuZeEXdW6h2rcpBO7InPg4TzVNJQ.webp" alt="Meet Your Driver">
		                </div>
		            </div>
		            <div class="col-md-6 order-md-1 align-self-center">
		                <div class="wrap-prod2">
		                    <h3>3. Meet Your Driver</h3>
		                    <p>Connect with your driver in the premium parking area for quick and convenient access.</p>
		                	<a class="btn" href="<?= $func->dm_whatsapp() ?>"><i class="fas fa-arrow-right mr-3"></i>Book Now</a>
		                </div>
		            </div>
		        </div>
		    </div>

		    <!-- Drop-Off -->
		    <div class="col-md-6 col-6 mb-5 wrap-padd">
		        <div class="row">
		            <div class="col-md-6 order-md-2 align-self-center">
		                <div class="wrap-prod">
		                    <img class="img-fluid" src="https://jwc.gotra-resources.my.id/web-upload/1735721871-01-01-2025-GLm1d0X78D5gKPJFytuAaYjk42VHUfOB.webp" alt="Drop-Off">
		                </div>
		            </div>
		            <div class="col-md-6 order-md-1 align-self-center">
		                <div class="wrap-prod2">
		                    <h3>4. Drop-Off</h3>
		                    <p>Relax as we safely and comfortably transport you to your desired destination.</p>
		                	<a class="btn" href="<?= $func->dm_whatsapp() ?>"><i class="fas fa-arrow-right mr-3"></i>Book Now</a>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

    
  </div>
</section>