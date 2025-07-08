<style type="text/css">
.btn-book-wa {
    background: var(--colors);
    padding: 10px 25px;
    border-radius: 5px;
    color: black;
    margin-top: 5px;
    width: 100%;
    font-family: var(--primtext);
    text-transform: uppercase;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 3px;
    transition: all ease 500ms;
}

.btn-book-wa:hover {
    transition: all ease 500ms;
    color: white;
    background: black;
}

.form-style {
    background: white;
    padding: 35px;
    border-radius: 10px;
    font-family: var(--subtext);
}

.form-style h2 {
    font-family: var(--primtext);
    text-transform: uppercase;
    letter-spacing: 0px;
    font-weight: 600;
    font-size: 35px;
    margin-bottom: 30px;
    line-height: 35px;
}

.form-style label {
    font-family: var(--subtext);
    font-size: 14px;
}

label.titt {
    color: black;
    font-weight: 600;
    font-size: 30px;
    margin-bottom: 30px;
    margin-top: 19px;
    font-family: var(--primtext);
}

</style>

<?php 

$repl = str_replace('&', 'And', $data->result->title);

 ?>

<?php
// Tangkap data POST dari form
$from_route = isset($_POST['from_route']) ? htmlspecialchars($_POST['from_route']) : '';
$to_route = isset($_POST['to_route']) ? htmlspecialchars($_POST['to_route']) : '';
$pickup_date = isset($_POST['pickup_date']) ? htmlspecialchars($_POST['pickup_date']) : '';
$pickup_time = isset($_POST['pickup_time']) ? htmlspecialchars($_POST['pickup_time']) : '';
$passangers = isset($_POST['passangers']) ? htmlspecialchars($_POST['passangers']) : '';
$luggage_pieces = isset($_POST['baggage_quantity']) ? htmlspecialchars($_POST['baggage_quantity']) : '';

// Tampilkan data yang diterima
?>

<form id="contactForm" action="https://secure-booking.gotrabook.com/direct" method="POST">
    <input type="hidden" name="to" value="<?= $data->company->company_email ?>">
    <!-- <input type="hidden" name="to" value="info@successtransbali.com"> -->

    <input type="hidden" name="web" value="<?= $data->web->site_domain ?>">
    <input type="hidden" name="logo" value="<?= $data->web->site_logo_alternative ?>">

    <input type="hidden" name="booking type" value="Airport Transfer">

    <input type="hidden" name="success_title" value="Your Booking Has Been Sent!">
    <input type="hidden" name="success_text" value="Thank you for your booking. We will respond immediately via email! Please ensure the email you provided is correct. Our office operates daily from 8:00 AM to 11:00 PM. If you don’t want to wait, feel free to visit our domestic or international arrival counters for immediate assistance.">

     <div class="form-row">

        <div class="form-group col-12">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="form-group col-12">
            <label>Phone</label>
            <div class="input-group">
                <select class="custom-select" id="countryCode" name="countryCode" required onchange="toggleManualCode()">
                    <option value="+62">🇮🇩 +62 (Indonesia)</option>
                    <option value="+1">🇺🇸 +1 (USA)</option>
                    <option value="+44">🇬🇧 +44 (UK)</option>
                    <option value="+61">🇦🇺 +61 (Australia)</option>
                    <option value="+65">🇸🇬 +65 (Singapore)</option>
                    <option value="+91">🇮🇳 +91 (India)</option>
                    <option value="+81">🇯🇵 +81 (Japan)</option>
                    <option value="+86">🇨🇳 +86 (China)</option>
                    <option value="+33">🇫🇷 +33 (France)</option>
                    <option value="+49">🇩🇪 +49 (Germany)</option>
                    <option value="+34">🇪🇸 +34 (Spain)</option>
                    <option value="+39">🇮🇹 +39 (Italy)</option>
                    <option value="+971">🇦🇪 +971 (UAE)</option>
                    <option value="manual">🔧 Enter Manually</option>
                </select>
                <input type="text" class="form-control" id="manualCountryCode" placeholder="Enter country code" style="display: none;" oninput="handleManualInput()">
                <input type="text" class="form-control" name="phone" id="phone" required placeholder="Enter phone number">
            </div>
        </div>

        <div class="form-group col-6">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group col-6">
            <label>Flight Code</label>
            <input type="text" name="Flight Code" class="form-control" required>
        </div>

    </div>

    <div class="form-row">

        <div class="form-group col-12 mb-0">
            <label class="titt">Your Route</label>
        </div>

        <div class="form-group col-12">
            <label>From</label>
            <input type="text" value="<?= $from_route ?>" placeholder="From ( Airport, Port, Address )" class="form-control" name="From ( Airport, Port, Address )" id="From ( Airport, Port, Address )" required>
        </div>

        <div class="form-group col-12">
            <label>To</label>
            <input type="text" value="<?= $to_route ?>" placeholder="To ( Airport, Port, Address )" class="form-control" name="To ( Airport, Port, Address )" id="To ( Airport, Port, Address )" required>
        </div>

        <div class="form-group col-12">
            <label>Car Choice</label>

            <select id="car choice" name="car choice" class="form-control" required>
                <option value="" hidden>Please Select</option>
                <option value="Standard MPV">Standard MPV</option>
                <option value="New Innova Zenix">New Innova Zenix</option>
                <option value="Toyota Hiace Premio">Toyota Hiace Premio</option>
                <option value="Toyota Hiace Commuter">Toyota Hiace Commuter</option>
                <option value="Alphard Transformer">Alphard Transformer</option>
            </select>

        </div>


    </div>

    <div class="form-row">

        <div class="form-group col-6">
            <label>Pickup Date</label>
            <input type="date" value="<?= $pickup_date ?>" name="pickup date" class="form-control">
        </div>

        <div class="form-group col-6">
            <label>Time</label>
            <input type="time" value="<?= $pickup_time ?>" name="pickup time" class="form-control">
        </div>


        <div class="form-group col-6">
            <label>Passangers</label>
            <input type="number" value="<?= $passangers ?>" name="passangers" class="form-control">
        </div>

        <div class="form-group col-6">
            <label>Baggage Quantity</label>
            <input type="number" value="<?= $luggage_pieces ?>" name="baggage_quantity" class="form-control">
        </div>

    </div>

    <div class="form-row">
        <div class="form-group col-12">
            <input type="submit" name="booking" value="Booking Now!" class="btn btn-book-wa" data-loading-text="Loading...">
        </div>
    </div>

</form>

<script>
    function toggleManualCode() {
        var countryCodeSelect = document.getElementById("countryCode");
        var manualInput = document.getElementById("manualCountryCode");

        if (countryCodeSelect.value === "manual") {
            manualInput.style.display = "block";
            manualInput.setAttribute("required", "required");
        } else {
            manualInput.style.display = "none";
            manualInput.removeAttribute("required");
        }
    }
</script>

<style>
    
.icon-bawah {
    display: flex;
    position: relative;
    margin-top: 15px;
}

.icon-bawah i {
    color: black;
    width: 45px;
    height: 45px;
    line-height: 45px;
    background: var(--colors);
    border-radius: 100px;
    text-align: center;
    font-size: 20px;
}

.icon-bawah p {
    color: #777;
    font-size: 14px;
    line-height: 23px;
    margin-bottom: 0;
}

.icon-bawah a { color: #2f5fe4; }

</style>

<div class="icon-bawah">
    <div class="icon mr-4 align-self-center">
        <i class="fas fa-users"></i>
    </div>

    <div class="content align-self-center">
        <p>Before You Book. Please take a moment to review our <a href="<?= base_url() ?>terms-conditions"><strong>Terms &amp; Conditions</strong></a> and <a href="<?= base_url() ?>privacy-policy"><strong>Privacy Policy</strong></a> to ensure you have a clear understanding of our services. By proceeding with the booking form, you acknowledge and agree to the terms outlined.</p>
    </div>
</div>