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
    <!--slide show-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/bg_kbs_02.jpg" class="d-block w-100" alt="Kandang KBS">
                <div class="carousel-caption d-none d-md-block">
                    <h5>KONSERVASI</h5>
                    <p>Benteng Terakhir Dalam Penyelamatan Satwa Yang Terancam Punah.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/bg_kbs_01.jpg" class="d-block w-100" alt="Sangkar KBS">
                <div class="carousel-caption d-none d-md-block">
                    <h5>EDUKASI</h5>
                    <p>Menanam Rasa Cinta Serta Peduli Terhadap Satwa, Flora Dan Lingkungan.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/bg_kbs_03.jpg" class="d-block w-100" alt="Aquarium KBS">
                <div class="carousel-caption d-none d-md-block">
                    <h5>REKREASI</h5>
                    <p>Wisata Alternatif Yang Layak Dan Terjangkau.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <br>
    <!--Three Button-->
    <div class="container text-center">
        <div class="row row-cols-3">
            <div class="col">
                <a href="peta.php" class="btn btn-warning" style="--bs-btn-padding-y: .2rem; --bs-btn-padding-x: 5.5rem; --bs-btn-font-size: 30px;">
                    <img src="images/icons8-map-48.png">
                    <b>&nbsp;PETA</b>
                </a>
            </div>
            <div class="col">
                <a href="tiket.php" class="btn btn-warning" style="--bs-btn-padding-y: .2rem; --bs-btn-padding-x: 5rem; --bs-btn-font-size: 30px;">
                    <img src="images/icons8-train-ticket-48.png">
                    <b>&nbsp;TIKET</b>
                </a>
            </div>
            <div class="col">
                <a href="fasilitas.php" class="btn btn-warning" style="--bs-btn-padding-y: .2rem; --bs-btn-padding-x: 3rem; --bs-btn-font-size: 30px;">
                    <img src="images/icons8-playground-48.png">
                    <b>&nbsp;FASILITAS</b>
                </a>
            </div>
        </div>
    </div>
    <!-- Sekilas Info -->
    <div class="container pt-4">
        <div class="row g-0">
            <div class="col">
                <img src="images/foto_dpnkbs.jfif" class="img-fluid rounded" alt="Gerbang Utama KBS" style="height: 350px; width:550px;">
            </div>
            <div class="col m-2 p-2">
                <div class="card-body mt-4">
                    <h5 class="card-title pb-3" style="font-size: 35px;"><b>Tentang PD. Taman Satwa KBS</b></h5>
                    <p class="card-text" style="font-size: 20px;">Kebun Binatang Surabaya (KBS)adalah salah satu kebun binatang yang populer di Indonesia dan terletak di Surabaya.
                        KBS merupakan kebun binatang yang pernah terlengkap se-Asia Tenggara, di dalamnya terdapat lebih dari 211 spesies satwa yang berbeda yang terdiri lebih dari 2.236 binatang.
                        Termasuk di dalamnya satwa langka Indonesia maupun dunia terdiri dari Mamalia, Aves, Reptilia, dan Pisces.</p>
                    <p class="card-text"><small class="text-muted">Sumber : www.surabayazoo.co.id</small></p>
                </div>
            </div>
        </div>
    </div>
    <!--Informasi-->
    <div class="container-fluid mt-4 mb-4 bg-light text-black">
        <h3 style="text-align: center; padding: 15px;"><b>WHAT'S UP KBS</b></h3>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card text-bg-dark">
                    <img src="images/web-bursapariwisata.jpg" class="card-img" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-dark">
                    <img src="images/web - parkir resmi.jpg" class="card-img" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-dark">
                    <img src="images/105.jpg" class="card-img" alt="...">
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
        <div class="container-fluid text-center bg-success">
            <h3 style="color: #f5f5f5; font-size: 15px; padding:10px;">2022 &emsp;&emsp; UTS Pemrograman Website
                &emsp;&emsp;
                20051204104 &emsp;&emsp; Daniel Frederico Soegiharto</h3>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>