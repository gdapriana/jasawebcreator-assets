<style type="text/css">
	.btn-book-wa {
	    background: var(--color2);
	    padding: 14px 30px;
	    border-radius: 100px;
	    color: white;
	    margin-top: 15px;
	    width: 100%;
	    font-family: var(--subtext);
	    font-size: 17px;
	    letter-spacing: 1px;
	    transition: all ease 500ms;
	}

	.btn-book-wa:hover {
		transition: all ease 500ms;
		color: white;
		background: black;
	}
</style>


<form id="contactForm" action="https://secure-booking.gotrabook.com/direct" method="POST">
	<input type="hidden" name="to" value="<?= $data->company->company_email ?>">
	<input type="hidden" name="web" value="<?= $data->web->site_domain ?>">
	<input type="hidden" name="logo" value="<?= $data->web->site_logo_alternative ?>">
	<input type="hidden" name="link" value="<?= $func->link(ROUTE_PRODUCT_VIEW.$data->result->slug) ?>">
	<div class="form-row">

		<div class="form-group col-12">
			<label>Name</label>
			<input type="text" value="" class="form-control" name="name" id="name">
		</div>

		<div class="form-group col-12">
			<label>Email</label>
			<input type="email" value="" class="form-control" name="email" id="email">
		</div>

		<div class="form-group col-6">
			<label>Booking Date</label>
			<input type="date" value="" class="form-control" name="bookdate" id="bookdate">
		</div>

		<div class="form-group col-6">
			<label>People</label>
			<input type="number" value="" class="form-control" name="people" id="people">
		</div>

		<div class="form-group col-12">
			<label>Address</label>
			<input type="text" value="" class="form-control" name="address" id="address">
		</div>

		<div class="form-group col-12">
			<label>Your Notes</label>
			<textarea maxlength="5000" data-msg-required="Please enter your notes." rows="4" class="form-control" name="note" id="note"></textarea>
		</div>

		

	
		<input type="hidden" value="<?= $data->result->title ?>" class="form-control" name="roomname" id="roomname" readonly>
	</div>

	<div class="form-row">
		<div class="form-group col-12 mb-0">
			<input type="submit" name="booking" value="Check Availability" class="btn btn-book-wa" data-loading-text="Loading...">
		</div>
	</div>


</form>