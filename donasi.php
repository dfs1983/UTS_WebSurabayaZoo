<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Surabaya Zoo</title>
    <link rel="icon" href="images/surabayazoo_500px.ico" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hammersmith+One&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7d288b9368.js" crossorigin="anonymous"></script>
</head>

<body>
    <!--Nav Bar-->
    <nav class="navbar navbar-expand-lg bg-success fixed-top">
        <div class="container-fluid" style="margin-left: 14px;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li><a class="navbar-brand" href="index.php">
                            <img src="images/logo_surabayazoo.png" alt="Logo KBS" width="28" height="50">
                        </a></li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="satwa.php">Animals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="donasi.php">Donate</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Information
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="peta.php">Map</a></li>
                            <li><a class="dropdown-item" href="tiket.php">Ticket</a></li>
                            <li><a class="dropdown-item" href="fasilitas.php">Facilities</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <!-- Informasi -->
    <div class="container-fluid text-light bg-warning">
        <div class="row" style="padding-left: 15px;">
            <div class="col-lg-6" style="padding-top: 2px;">
                <br>
                <h4 style="padding-top: 15px;"><b>Mari Donasi untuk Surabaya Zoo</b></h4>
                <p> Anda memiliki kekuatan untuk menjadi pahlawan konservasi! Donasi Anda ke PD. Taman Satwa KBS
                    memberikan harapan untuk spesies yang terancam punah dan mendanai tindakan konservasi.
                    PD. Taman Satwa KBS menyambut baik setiap sumbangan besar atau kecil, silakan menyumbang melalui formulir di bawah ini.</p>
            </div>
            <div class="col-lg-4">
                <img src="images/bg_kbs_01.jpg" alt="" style="height: 200px;width:717px; padding-right:15px;">
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="container-fluid bg-dark">
        <div class="row" style="padding: 15px;">
            <div class="container rounded" style="background-color: white;">
                <h4 style="padding: 5px 1px; font-size:16px; text-align:center;">PD.Taman Satwa KBS menyambut setiap sumbangan besar atau kecil, silakan menyumbang melalui formulir di bawah ini.</h4>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Your Email">
                </div>
                <h4 style="padding: 5px 1px; font-size:16px; text-align:center;">Detail Pembayaran</h4>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Jumlah Donasi (Rp)*</label>
                    <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="Rp 0,-">
                </div>
                <h4 style="padding: 5px 1px; font-size:16px;">Pilih Pembayaran</h4>
                <div class="form-check form-check-inline" style="padding-bottom: 10px;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        OVO
                    </label>
                </div>
                <div class="form-check form-check-inline" style="padding-bottom: 10px;">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        QRIS
                    </label>
                </div>
                <div class="text-center" style="padding-bottom: 10px;">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Donasi
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Terimakasih atas donasi yang diberikan.</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-white text-center text-black m-2" id="contact">
        <div class="container-fluid">
            <!--<h3>Dapatkan informasi lainnya di media sosial kami: </h3>-->
            <!-- Facebook -->
            <a class="link-secondary m-2" href="https://www.facebook.com/profile.php?id=100016964654721" role="button"><i class="fab fa-facebook-f"></i></a>
            <!-- Twitter -->
            <a class="link-secondary m-2" href="https://twitter.com/search?q=pdtskbs&src=typd" role="button"><i class="fab fa-twitter"></i></a>
            <!-- Instagram -->
            <a class="link-secondary m-2" href="https://www.instagram.com/kebunbinatangsurabaya/?hl=id" role="button"><i class="fa-brands fa-instagram"></i></a>
            <!-- Youtube -->
            <a class="link-secondary m-2" href="https://www.youtube.com/channel/UCbF6xcAoPLYvYiONEgcLJ6Q" role="button"><i class="fa-brands fa-youtube"></i></a>
        </div>
    </footer>
    <!-- Footer -->
    <!-- Label -->
    <div class="labeluts">
        <div class="container-fluid p-1 text-center bg-success">
            <h3 style="color: #f5f5f5; font-size: 15px; padding:5px;">2022 &emsp;&emsp; UTS Pemrograman Website
                &emsp;&emsp;
                20051204104 &emsp;&emsp; Daniel Frederico Soegiharto</h3>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>