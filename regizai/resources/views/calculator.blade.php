<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kalkulator-BMI</title>

    <link rel="stylesheet" href="{{ asset('css/styleCalculator.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>

<body>
<div class="container">
    <div class="center-content mt-5">
        <div class="header">
            <h1 class="kalkulator">CALCULATOR BMI</h1>
            <p class="description">Calculate your ideal weight</p>
        </div>
        <div class="area-form">
        <div class="area-input">
            <div class="input-group mb-1">
                <input class=" mt-4 " type="number" placeholder="weight">
            </div>
            <div class="input-group mb-1">
                <input class=" mt-4" type="number" placeholder="height">
            </div>
        </div>
        <div class="next mt-4"> 
            <button class="btn btn-primary tombol" type="submit">Next</button>
        </div>
    </div>
</div>
</body>
</html>