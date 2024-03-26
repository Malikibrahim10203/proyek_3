<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>

    <link rel="stylesheet" href="{{ asset('css/styleBiodata.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script>
        $(function() {
            $("#datePicker").datepicker();
        });
        function showDp(){
            $("#datePicker").datepicker('show');
        }
    </script>

</head>
<body>
    <div class="center-content mt-5">
        <div class="header">
            <h1 class="biodata">BIODATA</h1>
            <p class="description">Fill in your biodata</p>
        </div>
        <div class="form-content">
            <form action="" method="post">
                <input class="form-control form-control-lg mt-4" type="text" placeholder="Name">
                <div class="tgl">
                    <input class="form-control form-control-lg input-date mt-4" type="text" id="datePicker" placeholder="Select your birth" disabled>
                    <button type="button" class="btn btn-outline-secondary mt-4 ml-2" onclick="showDp();"><i class="fa-solid fa-calendar-days"></i></button>
                </div>

                <input class="form-control form-control-lg mt-4" type="number" placeholder="Width :" min="0" max=1000>
                <input class="form-control form-control-lg mt-4" type="number" placeholder="Height :" min="0" max=1000>

                <div class="kirim mt-5">
                    <button class="btn btn-primary tombol" type="submit">Next</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>