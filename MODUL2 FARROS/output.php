<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
</head>
<body>
    <?php
    $bookingnumber = $_GET['bookingnumber'];
    $name = $_GET['name'];
    $checkin= $_GET['checkin'];
    $checkout= $_GET['checkout'];
    $cartype= $_POST['cartype'];
    $phonenumber= $_GET['phonenumber'];
    $service= $_GET['service'];
    $totalprice= $_GET['totalprice'];
    ?>
        <div class="container">
            <h1 class="text-center">Thank you FARROS_1202200125 for reserving</h1>
            <h2 class="text-center">please double check your reservation details</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">booking number</th>
                        <th scope="col">name</th>
                        <th scope="col">check in</th>
                        <th scope="col">check out</th>
                        <th scope="col">car type</th>
                        <th scope="col">phone number</th>
                        <th scope="col">service</th>
                        <th scope="col">total price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $bookingnumber ?></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $checkin ?></td>
                        <td><?php echo $checkout ?></td>
                        <td><?php echo $cartype ?></td>
                        <td><?php echo $phonenumber ?></td>
                        <td><?php echo $service ?></td>
                        <td><?php echo $totalprice ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="mb-3">
                <div class="d-flex justify-content-center">
                    <a href="from booking.php" class="btn btn-outline-primary w-50">Kembali</a>
                </div>
            </div>
        </div>
</body>
</html>