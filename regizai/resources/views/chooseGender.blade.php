<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Choose Gender</title>

    <link rel="stylesheet" href="{{ asset('css/styleGender.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>
<body>

    <div class="content-perent">
         <div class="content-text">
            <h1 class="judul">CHOOSE GENDER</h1>
            <p class="judul-dalam">Just only two</p>
        </div>
       <div class="content-gender">
            <div class="icon1 mr-5">
                <img src="{{URL::asset('/img/gcowo.jpg')}}" alt="profile Pic" height="200" width="200">
                <p class="description">Male</p>

                <div class="radio">

                     <input type="radio" aria-label="Radio button for following text input">

                </div>

            </div>
            <div class="ml-5">
                <img src="{{URL::asset('/img/gcewe.jpg')}}" alt="profile Pic" height="200" width="200">
                <p class="description">Female</p>

                <div class="radio">

                     <input type="radio" aria-label="Radio button for following text input">

                </div>

            </div>
       </div>
        <div class="buton">
            <button class="btn btn-primary tombol" type="submit">Next</button>

        </div>
    </div>

</body>
</html>
