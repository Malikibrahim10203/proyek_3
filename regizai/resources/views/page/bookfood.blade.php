<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Food</title>


    <link rel="stylesheet" href="{{ asset('css/styleBookfood.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>
<body>
    <div class="area-sidebar">
        <div class="sidebar-menu">
            <a href="{{ ROUTE('profile') }}"class="btn btn-transparent mt-4"><i class="fa-solid fa-user"></i></a>
            <a href="{{ url('/dashboard') }}" class="btn btn-transparent mt-4"><i class="fa-solid fa-house-chimney"></i></a>
            <a href="" class="btn btn-transparent mt-4"><i class="fa-solid fa-bell"></i></a>
            <a href="{{ url('/bookfood') }}" class="btn btn-transparent mt-4"><i class="fa-solid fa-book side-book"></i></a>
        </div>
    </div>
    <div class="wrap-menu">
        <form action="/bookfood" method="get" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
            <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <div class="list-food mt-5">
            <div class="card mr-3" style="width: 13rem;">
                <img class="card-img-top" src="{{ url('/img/ayam-geprek.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 10pt;"><i class="fa-solid fa-tags" style="font-size: 15pt;"></i> Ayam Geprek</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card mr-3" style="width: 13rem;">
                <img class="card-img-top" src="{{ url('/img/ayam-geprek.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 10pt;"><i class="fa-solid fa-tags" style="font-size: 15pt;"></i> Ayam Geprek</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card mr-3" style="width: 13rem;">
                <img class="card-img-top" src="{{ url('/img/ayam-geprek.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 10pt;"><i class="fa-solid fa-tags" style="font-size: 15pt;"></i> Ayam Geprek</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>