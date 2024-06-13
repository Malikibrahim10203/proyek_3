<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit_profil</title>

    <link rel="stylesheet" href="{{ asset('css/styleEdit.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
</head>
<body>
    <div class="keseluruhan">
        <div class="group9">
            <div class="kembali mt-5">
                <a href="{{ url('profile') }}"><i class="fas fa-arrow-left"></i></a>
                 <div class="grp_image">
        </div>
        <div class="group1 mt-5">
                  <img src="{{URL::asset('/img/gcowo.jpg')}}" alt="profile Pic" height="100" width="100">
             </div>
        </div>
        <div class="group2 mt-5">
            <div class="text1">
                <h2>Change Username</h2>
                <div class="coloum">
                        <input class="form-control form-control-lg input mt-4" type="text" name="username" placeholder="Username">
                </div>
            </div>
        </div>
        <div class="group3 mt-3">
            <div class="text2">
                <h2>Change Password</h2>
                 <div class="coloum2">
                     <div class="text2">
                    <input class="form-control form-control-lg input mt-4" type="text" name="username" placeholder="Password Old :">
                    <input class="form-control form-control-lg input mt-4" type="text" name="username" placeholder="Password New :">
                    <input class="form-control form-control-lg input mt-4" type="text" name="username" placeholder="Password Confirm">
                    </div>
                </div>
            </div>
        </div>
        <div class="group4 mt-3">
            <div class="button">
                <button class="btn btn-primary tombol" type="submit">Confirm</button>
            </div>
        </div>

    </div>
</body>
</html>
