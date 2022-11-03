<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
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
    <?php
    $Name = $_GET['Name'];
    $Date = $_GET['Date'];
    $Start= $_GET['Start'];
    $Duration= $_GET['Duration'];
    $phone= $_GET['phone'];
    
    ?>
        <div class="container">
            <h1 class="text-center">Thank you FARROS_1202200125 for reserving</h1>
            <h2 class="text-center">please double check your reservation details</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">name</th>
                        <th scope="col">date</th>
                        <th scope="col">start time</th>
                        <th scope="col">Duration</th>
                        <th scope="col">no Handphone</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $Name ?></td>
                        <td><?php echo $Date ?></td>
                        <td><?php echo $Start ?></td>
                        <td><?php echo $Duration ?></td>
                        <td><?php echo $phone?></td>
                        
                        
                    </tr>
                </tbody>
            </table>
            <div class="mb-3">
                <div class="d-flex justify-content-center">
                    <a href="home.php" class="btn btn-outline-primary w-50">Kembali</a>
                </div>
            </div>
        </div>
         
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<footer align="center">
    <div class="outer-footer">Copyright 2022 (HAIDAR FARROS_1202200125_SI4401)</div>
</footer>
</body>
</html>