<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form BOOKING</title>
</head>
<body>
    <div class="conteiner">
        <h1 class="text-center">Rent Your Car Now!</h1>
        <form action="booking.php" methode="POST">
        <div class="col mb-3">
        <br>
            <label for="Nama">Name</label>
            <input type="text" class="form-control bg-light" id="Name" readonly="readonly" value="" name="Name" required>
          </div>

          <div class="mb-3">
            <label for="Date">Date</label>
            <input type="date" class="form-control" id="Date" name="Date" required>
          </div>

          <div class="mb-3">
            <label for="Start">Start Time</label>
            <input type="time" class="form-control" id="Start" name="Start" required>
          </div>

          <div class="mb-3">
            <label for="Duration">Duration</label>
            <input type="number" class="form-control" id="Duration" name="Duration" required>
          </div>
          <div class="mb-3">
            <label for="Type">Car Type</label>
            <select class="form-control" name="Type" id="Type" required>
            <option value="Toyota Rush">Toyota Vios</option>
            <option value="Toyota Ayla">Toyota Avanza</option>
            <option value="Honda Brio">Toyota Agya</option>

          <div class="mb-3">
            <label for="Phone">Phone Number</label>
            <input type="number" class="form-control" id="Phone" name="Phone" required>
          </div>

          <div class="mb-3">
            <li class="m-1">
              <label for="service">Add Service</label><br>
              <input class="form-check-input m-1" type="checkbox" name="checkbox[]" value="Health protocol" id="health"><label class="form-check-label" for="health">Health protocol / Rp25.000</label><br>
              <input class="form-check-input m-1" type="checkbox" name="checkbox[]" value="Driver" id="driver"><label class="form-check-label" for="driver">Driver / Rp100.000</label><br>
              <input class="form-check-input m-1" type="checkbox" name="checkbox[]" value="Fuel Filled" id="fuel"><label class="form-check-label" for="fuel">Fuel Filled / Rp.250.000</label><br>
            </li>
          </div>

          <div class="mb-3 d-grid gap-2">
            <button class="btn btn-primary btn-block" type="submit">Book</button>
          </div>
        </form>

    </div>
</body>
</html>