<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form BOOKING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style type="text/css">
        a{text-decoration: none; font-size: 20px;font-family: sans-serif;padding: 14px 10px}
        ul{padding: 14px}
        li{list-style: none; display: inline;}
        li a{background: #222; color:#d4d4d4;}
        .navi{background: #222; height: 50px}
        h2{font-size: small;}
        </style>
</head>
<body>
  <div class="conteiner">
  <h1 class="text-center">Rent Your Car Now!</h1>
    <form action="output.php" methode="GET">
        <div class="col mb-3">
        <br>
            <label for="Nama">Name</label>
            <input type="text" class="form-control " id="Name" value="" name="Name" required>
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
            <label for="phone">No Handphone</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
          </div>
          <div class="mb-3">
            <label for="Type">Car Type</label>
            <select class="form-control" name="Type" id="Type" required>
            <option value="Toyota Rush">Toyota Vios</option>
            <option value="Toyota Ayla">Toyota Avanza</option>
            <option value="Honda Brio">Toyota Agya</option>
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
    
       
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<footer align="center">
    <div class="outer-footer">Copyright 2022 (HAIDAR FARROS_1202200125_SI4401)</div>
</footer>

    </div>
</body>
</html>