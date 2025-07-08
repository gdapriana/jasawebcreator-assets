<style>
	
@media (max-width: 768px) {
    .wrap-booking {
        position: relative;
        width: 100%;
        margin-top: -15px;
        background: white;
        border-radius: 20px;
    }

    #omnih-booking .form-booking .form-label {
	    color: #5d5d5d;
	    font-weight: 500;
	    font-size: 15px;
	    font-family: var(--subtext);
	}

	#omnih-booking .form-booking .form-control {
        background-color: white;
        border: 1px solid rgba(0, 0, 0, .09);
    }

    .title-booking {
    	padding: 0px 25px;
	    padding-top: 25px;
	    text-align: center;
    }

    .title-booking h1 {
        font-family: var(--primtext);
        color: #333;
        font-weight: 500;
        letter-spacing: 0px;
        font-size: 23px;
        text-transform: capitalize;
        line-height: 30px;
        margin-bottom: 25px;
    }

	.title-booking span {
        text-transform: uppercase;
        font-family: var(--subtext);
        color: var(--color3);
        font-weight: 400;
        display: block;
        margin-bottom: 5px;
    }

    #omnih-booking .form-booking .form-control { color:#555; font-size:14px; }
}

</style>


<div class="wrap-booking">

<div class="title-booking">
	<span class="sp-slide">4-Star Resort</span>
	<h1>
	  Luxury Escape at <br>Sense Canggu Beach
	</h1>
</div>


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
