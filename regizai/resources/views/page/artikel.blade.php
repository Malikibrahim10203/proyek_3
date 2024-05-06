<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artikel</title>

    <link rel="stylesheet" href="{{ asset('css/styleArtikel.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>
<body>
    <div class="keseluruhan">
        <div class="group1">
            <img class="gambar" src="{{ URL:: asset('/img/artikel.jpg') }}" alt="">

        </div>
        <div class="group2">
            <h1 class="judul"> Rekomendasi Makanan Rendah Kalori </h1>
            <div class="group-text">
                <p class="p1">Untuk Sarapan pagi, cemilan diet</p>
                <p class="p2">Saat berencana menurunkan berat badan, maka beberapa pilihan makanan rendah kalori untuk diet berikut ini tak boleh dilewatkan. Pasalnya, sejumlah asupan ini tetap mengandung nutrisi yang dibutuhkan oleh tubuh meskipun kadar kalorinya cukup rendah. Sehingga, Anda pun bisa mencapai berat badan ideal yang sehat. Ada banyak jenis makanan rendah kalori yang dapat ditemukan di sekitar kita. Namun, tidak semuanya bisa memenuhi kebutuhan nutrisi tubuh. Terdapat beberapa contoh makanan rendah kalori untuk diet namun tetap kaya akan nutrisi, di antaranya:<br> </p>
                <div class="p3">1.Avocado Toast</div>
                <p class="p4">Apabila kamu tidak terbiasa sarapan, atau tidak ingin mengonsumsi makanan yang terlalu berat di pagi hari. Ada beberapa opsi sarapan pagi untuk diet lain untuk kamu. Salah satunya adalah avocado toast.
                               Kamu dapat memanggang roti, menambahkan alpukat yang dipotong atau dihaluskan di atas roti. Sarapan ini tinggi protein dan serat. Kamu bisa mendapatkan sekitar 4 gram protein dan 7,1 gram serat dengan kalori sekitar 225 kalori</p>
                <div class="p5">2.Oatmeal</div>
                <p class="p6">Alih-alih mengonsumsi sereal, kamu bisa membuat sereal sendiri dari campuran oat, susu coklat rendah lemak, dan chia seeds. Perpaduan ini totalnya sekitar 365 kalori. <br> Ini adalah makanan sarapan pagi untuk diet kaya serat, dengan total serat sekitar 13 gram. Tidak hanya itu, kandungan proteinnya juga cukup tinggi sekitar 13,1 gram.</p>
                <div class="p7">3.Sup Ayam</div>
                <p class="p8">Opsi menu sarapan pagi untuk diet lainnya yang juga bisa kamu coba adalah ​sup ayam. Menu yang enak disantap saat hangat ini 1 mangkoknya mengandung 168 kalori. Kandungan proteinnya cukup tinggi, sekitar 10 gram, ditambah serat sekitar 4,6 gram.</p>
            </div>

        </div>
        <div class="group3">
            <div class="area-artikel mt-3">
                <div class="card1" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('/img/avocado.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                    </div>
                </div>
                <div class="card2" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('/img/oat.png') }}" alt="Card image cap">
                    <div class="card-body">
                    </div>
                </div>
                <div class="card2" style="width: 18rem;">
                    <img class="card-img-top" src="{{ url('/img/sup.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>
