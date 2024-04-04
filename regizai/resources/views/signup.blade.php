<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

<<<<<<< HEAD
    <link rel="stylesheet" href="{{ asset('css/styleSignup.css') }}">
=======
    <link rel="stylesheet" href="{{ asset('css/styleLogin.css') }}">
>>>>>>> main
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>
<body>
    <div class="wrap-content">
        <div class="area-login ml-5">
            <div class="area-logo">
                <img class="logo" src="{{url('/img/logo.png')}}" alt="Image"/>
            </div>
            <div class="area-text mt-4">
                <div class="area-judul">
                    <h1>Sistem Rekomendasi <br> 
                        Gizi Seimbang</h1>
                </div>
                <div class="area-deskripsi">
                    <p>Guna Mewujudkan Generasi <br>
                        Emas Indonesia</p>
                </div>
            </div>
            <div class="area-form">
<<<<<<< HEAD
                <form action="" method="post">
                    <div class="area-input">
                        <div class="input-group mb-1">
                            <input class="form-control mt-4 input" type="email" placeholder="Email">
                        </div>
                        <div class="input-group mb-1">
                            <input class="form-control  mt-4" type="password" placeholder="Password">
                        </div>
                    </div>
                     <div class="area-button mt-4">
                        <button type="button" class="btn btn-light mt-3 btn-login">Login</button>
=======
                <form action="{{ url('/actionsignup') }}" method="post">
                    @csrf
                    <div class="area-input">
                        <div class="input-with-icon mb-1">
                            <span class="input-icon"><i class="icon-fontawesome fa-regular fa-envelope"></i></span>
                            <input class="form-control form-control-lg mt-4 input email" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="input-with-icon mb-1">
                            <span class="input-icon"><i class="icon-fontawesome fa-solid fa-fingerprint"></i></span>
                            <input class="form-control form-control-lg input mt-4" type="password" name="password" placeholder="Password">
                        </div>
                    </div>
                     <div class="area-button tombol mt-4">
                        <button type="submit" class="btn btn-light mt-3 btn-login">SignUp</button>
>>>>>>> main
                    </div>
                </form>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    <div class="bg-icon">
        <div class="area-bingkai-atas">
            <img class="bingkai-atas" src="{{url('/img/atas.png')}}" alt="Image"/>
        </div>
        <div class="area-bingkai-bawah">
            <img class="bingkai-bawah" src="{{url('/img/bawah.png')}}" alt="Image"/>
        </div>
    </div>
    
=======
    
    <img src="{{ asset('/img/icon-food.png') }}" class="icon-item" alt="">

>>>>>>> main
</body>
</html>