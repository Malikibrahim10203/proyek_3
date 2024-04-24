<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>


    <link rel="stylesheet" href="{{ asset('css/styleDashboard.css') }}">
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
            <a href="{{ url('/profile') }}"class="btn btn-transparent mt-4"><i class="fa-solid fa-user"></i></a>
            <a href="{{ url('/dashboard') }}" class="btn btn-transparent mt-4"><i class="fa-solid fa-house-chimney"></i></a>
            <a href="" class="btn btn-transparent mt-4"><i class="fa-solid fa-bell"></i></a>
            <a href="{{ url('/bookfood') }}" class="btn btn-transparent mt-4"><i class="fa-solid fa-book side-book"></i></a>
        </div>
    </div>
    <div class="wrap-menu ml-5">
        <div class="area-content">
            <div class="text-dashboard">
                <h2>Hello, {{ Auth::User()->name }}</h2>
                <p>Dashboard Regizai...</p>
            </div>
            <div class="menu-dashboard mt-5">
                <div class="kamera">
                    <a href="{{ url('') }}" class="btn btn-outline-secondary mr-4"><i class="fa-solid fa-camera icon-menu"></i></a>
                    <p class="mt-2">Camera</p>
                </div>
                <div class="kalkulator">
                    <a href="{{ url('/calculator') }}" class="btn btn-outline-secondary mr-4"><i class="fa-solid fa-calculator icon-menu"></i></a>
                    <p class="mt-2">BMI</p>
                </div>
                <div class="book">
                    <a href="{{ url('/bookfood') }}" class="btn btn-outline-secondary mr-4"><i class="fa-solid fa-book-open icon-menu"></i></a>
                    <p class="mt-2">FoodBook</p>
                </div>
            </div>
            <div class="judul mt-3 mb-3">
                    <h5>Artikel Makanan</h5>
                    <p>Beragam makanan sehat ala diet</p>
            </div>
            <div class="area-article mt-3">
                <a href="{{ url('/artikel') }}" class="mr-1" style="text-decoration: none; color: black;">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('/img/nasi-campur.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Rekomendasi buah diet</h5>
                            <p class="card-text">Sarapan pagi, Cemilan diet.</p>
                        </div>
                    </div>
                </a>
                <a href="" class="mr-1" style="text-decoration: none; color: black;">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ url('/img/ayam-geprek.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Rekomendasi buah diet</h5>
                            <p class="card-text">Sarapan pagi, Cemilan diet.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="logout">
        <a href="{{ url('/logout') }}" class="btn btn-outline-dark mt-5"><i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
</body>
</html>
