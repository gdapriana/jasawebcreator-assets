

<style>


	#omnih-booking .form-booking {
		background: transparent;
	}
    #omnih-booking .form-booking .btn-submit {
        background: var(--colors);
        border: none;
        text-transform: uppercase;
        display: block;
        border-radius: 2px;
        width: 100%;
        height: 75px;
        font-size: 16px;
        letter-spacing: .3px;
        font-weight: 500;
        color: #fff;
        font-family: var(--subtext);
    }
#omnih-booking .form-booking .form-control::placeholder {
  color: #ffffff90;
    font-weight: 400;
	font-family: var(--subtext);
}
#omnih-booking .form-booking .form-control {
	color: #ffffff90;
    font-size: 16px;
    font-weight: 400;
	font-family: var(--subtext);
}
#omnih-booking .form-booking .form-label {
	color: #fff;
    font-weight: 500;
    font-size: 18px;
	font-family: var(--subtext);
}
#omnih-booking .select-custom:focus {
	background-image: url('https://jwc.gotra-resources.my.id/web-upload/1742793926-24-03-2025-10OgRCPnTecwrHqXAYzlL4BNyxt6G5DF.webp');
}
#omnih-booking .select-custom {
	background-image: url('https://jwc.gotra-resources.my.id/web-upload/1742793927-24-03-2025-Q86F74MTHBlVxaD2mhc3OgJPXqeWKALn.webp');
}
.wrap-booking {
	background: rgba(255, 255, 255, 0.1);
	backdrop-filter: blur(5px);
    border-radius: 0;
    box-shadow: 0px 0px 80px rgb(169 172 181 / 30%);
    position: absolute;
    z-index: 20;
	width: 80%;
	bottom: 6%;
	margin-left: auto;
	margin-right: auto;
    padding: 0;
    border: 1px solid #ffffff40;
}

#omnih-booking *, #omnih-booking ::after, #omnih-booking ::before {
    box-sizing: border-box;
    color: black;
}

@media (min-width: 768px) {
  #omnih-booking .form-booking .form-label {
        font-size: 16px;
        margin-bottom: 0;
    }

    #omnih-booking .form-booking .form-control {
        font-size: 14px;
    }

    #omnih-booking .form-booking .btn-submit {
        height: 70px;
        font-size: 13px;
    }
}

@media (min-width: 1280px) {
    #omnih-booking .form-booking .form-label {
        font-size: 18px;
    }

    #omnih-booking .form-booking .form-control {
        font-size: 15px;
    }

    #omnih-booking .form-booking .btn-submit {
        height: 75px;
        font-size: 16px;
    }
}

@media (max-width: 768px) {
    .wrap-booking {
        position: relative;
        width: 100%;
    }
    #omnih-booking form {
        background-color: transparent;
    }
    #omnih-booking .form-booking .form-control {
        background-color: transparent;
    }
}
</style>

<div class="container-global w-100 animate-items" >
	<div class="wrap-booking">


<div id="omnih-booking" class="part">
    <div class="part-center">
        <div class="container-fluid">
            <div class="row">
                <div class="form-booking w-100">
                    
                    <form action="https://sensecanggubeach.reserveonline.id/book/743" target="_blank">
                        <input type="hidden" name="checkin" id="checkin" value="">
                        <input type="hidden" name="checkout" id="checkout" value="">
                        <div class="d-flex flex-column flex-lg-row flex-wrap justify-content-center content-form">
                            <div class="form-group col-lg-3 col-12 custom-form-group">
                                <span class="form-label">Check in - Check out</span>
                                <input class="form-control" type="date-custom" name="daterange" required id="theDate" autocomplete="off">
                            </div>
                            <div class="d-flex col-lg-4 occupants">
                            <div class="form-group col">
                                <span class="form-label">Adult</span>
                                <div class="d-flex justify-content-between align-items-baseline select-wrapper" >
                                    <select name="adult" class="form-control select-custom">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                	</select>
                                </div>
                            </div>
                            <div class="form-group col">
                                <span class="form-label">Children</span>
                                    <div class="d-flex justify-content-between align-items-baseline select-wrapper" >
                                    <select name="child" class="form-control select-custom">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                	</select>
                                </div>
                            </div>
                            <div class="form-group col">
                                <span class="form-label">Infant</span>
                                    <div class="d-flex justify-content-between align-items-baseline select-wrapper" >
                                        <select name="infant" class="form-control select-custom">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                            </div>
                            </div>
                            <div class="form-group col-lg-2 col-12 custom-form-group">
                                <span class="form-label">Promo Code</span>
                                <input class="form-control" name="promocode" id="promocode" type="text" placeholder="Enter your code" autocomplete="off">
                            </div>
                            
                            <div class="btn-form col-lg-3 col-12">
                                <button class="btn-submit">Check availability</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

	</div>
</div>
<!-- Booking form end -->