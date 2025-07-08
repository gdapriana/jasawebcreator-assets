<style>
	
input#exampleCheck1 {
    margin-left: 5px;
    transform: scale(1.5);
    margin-top: 10px;
}

.form-check-label { padding-left: 30px; }

.form-check-label a, .p-check a { color:blue; font-weight:500; }

</style>

<form id="contactForm" action="https://secure-booking.gotrabook.com/direct" method="POST">
	<input type="hidden" name="to" value="<?= $data->company->company_email ?>">
    <!-- <input type="hidden" name="to" value="jasawebcreator@gmail.com"> -->

	<input type="hidden" name="web" value="<?= $data->web->site_domain ?>">
	<input type="hidden" name="logo" value="<?= $data->web->site_logo_alternative ?>">

    <input type="hidden" name="success_title" value="Your Booking Has Been Sent!">
    <input type="hidden" name="success_text" value="We will respond via email as soon as possible! Make sure the email you entered earlier is correct!">

    <div class="row">
        <div class="col-12">
            <div class="form-group">
              <label for="exampleInputName">Full Name</label>
              <input value="" name="Full Name" type="text" class="form-control" id="exampleInputName" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
              <label for="exampleInputAlamat">Address as per ID</label>
              <input value="" name="Address as per ID" type="text" class="form-control" id="exampleInputAlamat" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
              <label for="exampleInputHp">Phone Number/Whatsapp</label>
              <input value="" name="Phone Number/WA" type="text" class="form-control" id="exampleInputHp" required>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
              <label for="exampleInputEmail">Email</label>
              <input value="" name="Email" type="email" class="form-control" id="exampleInputEmail">
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
              <label for="exampleNamaUnit">Unit Name</label>
              <input value="<?= $data->result->title ?>" name="Unit Name" type="text" class="form-control" id="exampleNamaUnit" readonly>
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
              <label for="exampleInputDateStart">Start Date</label>
              <input value="" name="Start Date" type="date" class="form-control" id="exampleInputDateStart" required>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
              <label for="exampleInputTimeStart">Start Time</label>
              <input value="" name="Start Time" type="time" class="form-control" id="exampleInputTimeStart">
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
              <label for="exampleInputDateEnd">Return Date</label>
              <input value="" name="Return Date" type="date" class="form-control" id="exampleInputDateEnd" required>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
              <label for="exampleInputTimeEnd">Return Time</label>
              <input value="" name="Return Time" type="time" class="form-control" id="exampleInputTimeEnd">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
              <label for="exampleInputLocateStart">Handover Location</label>
              <input value="" name="Handover Location" type="text" class="form-control" id="exampleInputLocateStart">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
              <label for="exampleInputLocateEnd">Return Location</label>
              <input value="" name="Return Location" type="text" class="form-control" id="exampleInputLocateEnd">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Special Notes</label>
              <textarea value="" name="Special Notes" class="form-control w-100" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
              <label for="exampleInputTotal">Total Rental Cost</label>
              <input readonly value="Rp. <?= number_format($data->result->price) ?>" name="Total Rental Cost" type="text" class="form-control" id="exampleInputTotal">
            </div>
        </div>


        <div class="col-12">
            <div class="form-group">
              <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    		  <label class="form-check-label" for="exampleCheck1">I agree to the <a href="<?= base_url() ?>terms-conditions">Terms and Conditions</a> and <a href="<?= base_url() ?>privacy-policy">Privacy Policy</a>.</label>

    		  <p class="p-check mt-3">*The unit booked may not be available. We will confirm your booking as soon as possible after you fill out the form above.</p>

            </div>
        </div>


        <div class="col-12">
            <div class="form-group">
              <input type="submit" name="booking" value="Book Now" class="btn book w-100" data-loading-text="Loading...">
            </div>

        </div>
    </div>
</form>


<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mendapatkan elemen input Tanggal Mulai dan Tanggal Kembali
    var startDateInput = document.getElementById('exampleInputDateStart');
    var endDateInput = document.getElementById('exampleInputDateEnd');
    var totalPriceInput = document.getElementById('exampleInputTotal');
    var pricePerDay = <?= $data->result->price ?>; // Harga per hari (misalnya dalam Rupiah)

    // Mendengarkan perubahan pada kedua input tanggal
    startDateInput.addEventListener('change', updateTotalPrice);
    endDateInput.addEventListener('change', updateTotalPrice);

    // Fungsi untuk menghitung total biaya sewa berdasarkan selisih hari
    function updateTotalPrice() {
        var startDate = new Date(startDateInput.value);
        var endDate = new Date(endDateInput.value);

        // Validasi jika tanggal kembali lebih awal dari tanggal mulai
        if (endDate < startDate) {
            alert('Return Date cannot be earlier than Start Date.');
            endDateInput.value = ''; // Mengosongkan input tanggal kembali
            return; // Menghentikan proses perhitungan
        }

        // Menghitung selisih hari
        var timeDiff = Math.abs(endDate.getTime() - startDate.getTime());
        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

        // Menghitung total biaya berdasarkan harga per hari dan selisih hari
        var total = pricePerDay * diffDays;

        // Menampilkan total biaya dalam elemen input Total Biaya Sewa
        totalPriceInput.value = 'Rp. ' + total.toLocaleString();
    }
});
</script>