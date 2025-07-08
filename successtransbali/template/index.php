<?php $jsonData = file_get_contents("zones.json"); ?>
<?php $zones = json_decode($jsonData, true); ?>
<?php $zones = json_decode(json_encode($zones)); ?>

<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body class="m-10">
    <form class="flex justify-center gap-8 flex-col items-stretch w-[600px]">

      <!-- TODO: FROM -->
      <div class="flex justify-center items-center gap-2 w-full">
        <div class="flex flex-col justify-start flex-1 items-stretch">
          <label for="zone-from">Pilih Zona:</label>
          <select id="zone-from" class="border p-2 rounded-lg disabled:opacity-20" onchange="updateCoverageAndCarsFrom()">
            <option value="">Pilih Zona</option>
          </select>
        </div>

        <div class="flex flex-col justify-start flex-1 items-stretch">
          <label for="coverage-from">Pilih Area:</label>
          <select id="coverage-from" class="border p-2 rounded-lg disabled:opacity-20">
            <option value="">Pilih Area</option>
          </select>
        </div>

        <div class="flex flex-col justify-start flex-1 items-stretch">
          <label for="address-from">Alamat Lengkap:</label>
          <input type="text" required id="address-from" class="border p-2 rounded-lg disabled:opacity-20">
        </div>


        <div class="flex flex-col justify-start items-stretch">
          <label>
            <input type="checkbox" id="airport-check-from" onchange="airportCheckToggleFrom()"> Airport
          </label>
        </div>
      </div>

      <!--TODO:TO -->
      <div class="flex justify-center items-center gap-2 w-full">
        <div class="flex flex-col justify-start flex-1 items-stretch">
          <label for="zone-to">Pilih Zona:</label>
          <select id="zone-to" class="border p-2 rounded-lg disabled:opacity-20" onchange="updateCoverageAndCarsTo()">
            <option value="">Pilih Zona</option>
          </select>
        </div>

        <div class="flex flex-col justify-start flex-1 items-stretch">
          <label for="coverage-to">Pilih Area:</label>
          <select id="coverage-to" class="border p-2 rounded-lg disabled:opacity-20">
            <option value="">Pilih Area</option>
          </select>
        </div>

        <div class="flex flex-col justify-start flex-1 items-stretch">
          <label for="address-to">Alamat Lengkap:</label>
          <input type="text" required id="address-to" class="border p-2 rounded-lg disabled:opacity-20">
        </div>


        <div class="flex flex-col justify-start items-stretch">
          <label>
            <input type="checkbox" id="airport-check-to" onchange="airportCheckToggleTo()"> Airport
          </label>
        </div>
      </div>


      <div class="flex flex-col justify-start items-stretch gap-2">
        <div class="flex flex-col justify-start items-stretch">
          <label for="car">Pilih Mobil:</label>
          <select id="car" onchange="updatePrice()" class="border p-2 rounded-lg disabled:opacity-20">
              <option value="">Pilih Mobil</option>
          </select>
        </div>
        <input type="text" id="price" readonly class="border p-2 rounded-lg">
      </div>
    </form>




    <script>
    const jsonData = <?php echo json_encode($zones); ?>;

    const zoneFromSelect = document.getElementById("zone-from");
    const coverageFromSelect = document.getElementById("coverage-from");
    const airportCheckFrom = document.getElementById("airport-check-from");
    const addressFrom = document.getElementById("address-from");

    const zoneToSelect = document.getElementById("zone-to");
    const coverageToSelect = document.getElementById("coverage-to");
    const airportCheckTo = document.getElementById("airport-check-to");
    const addressTo = document.getElementById("address-to");

    const carSelect = document.getElementById("car");
    const priceInput = document.getElementById("price");

    function loadZones() {
      jsonData.zones.forEach(zone => {
        let option = document.createElement("option");
        option.value = zone.zone;
        option.textContent = `Zona ${zone.zone}`;
        zoneFromSelect.appendChild(option);
        zoneToSelect.appendChild(option);
      });
    }

    function updateCoverageAndCarsFrom() {
        let selectedZone = zoneFromSelect.value;
        priceInput.value = ""
        coverageFromSelect.innerHTML = "<option value=''>Pilih Area</option>";

        if (selectedZone) {
            let zoneData = jsonData.zones.find(zone => zone.zone == selectedZone);
            zoneData.coverage_area.forEach(area => {
                let option = document.createElement("option");
                option.value = area;
                option.textContent = area;
                coverageFromSelect.appendChild(option);
            });
            Object.entries(zoneData.package_car).forEach(([car, price]) => {
                let option = document.createElement("option");
                option.value = price;
                option.textContent = `${car}`;
                carSelect.appendChild(option);
            });
        }
    }

    function updatePrice() {
        let selectedPrice = carSelect.value;
        priceInput.value = selectedPrice ? selectedPrice : "IDR 0";
    }

    function airportCheckToggle() {
        let isDisabled = airportCheck.checked;
        zoneSelect.disabled = isDisabled;
        coverageSelect.disabled = isDisabled;
        address.disabled = isDisabled;
    }

    loadZones();
    </script>
  </body>
</html>
