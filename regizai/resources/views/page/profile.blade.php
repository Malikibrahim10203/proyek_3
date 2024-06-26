<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>

    <link rel="stylesheet" href="{{ asset('css/styleProfile.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body>
    <div class="keseluruhan">
        <div class="wrap">
            <div class="group-1">
                <div class="kembali">
                    <a href="{{ url('dashboard') }}"><i class="fas fa-arrow-left"></i></a>
                </div>
                <div class="foto">
                    <img src="{{URL::asset('/img/gcowo.jpg')}}" alt="profile Pic" height="100" width="100">
                </div>
                <div class="nama-profile">
                    <h1 class="nama">{{ $user->name }}</h1>
                    <p class="text-profile">profile</p>
                </div>
                <div class="titik-tiga">
                    <a href="{{ url('edit_profil') }}"><i class="fa-solid fa-ellipsis-vertical titik-tiga"></i></a>
                </div>
            </div>
            <div class="group-2">
                <div class="umur">
                    <p> Umur </p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $y }}" disabled>
                    </div>
                </div>
                <div class="width">
                    <p> Wight </p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $user->wight}}" disabled>
                    </div>
                </div>
                <div class="height">
                    <p> Height </p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $user->height}}" disabled>
                    </div>
                </div>
                <div class="group-3">
                    <div class="goals">
                        <p> Goals </p>
                    </div>
                <div class="group-4">
                    <div class="gambar-goals">
                        <img src="{{URL::asset('/img/goals.png')}}">
                    </div>
                    <div class="kalori">
                        <h5 class="kalorii-text"> Kalori Harian</h5>
                        <p> 2500 Kkal </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
