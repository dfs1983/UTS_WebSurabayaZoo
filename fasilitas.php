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
    <br>
    <!-- Spot Foto -->
    <div class="container-fluid">
        <h4 style="text-align: center;"><i class="fa-solid fa-camera"></i><b>&nbsp;SPOT FOTO</b></h4>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card text-bg-dark">
                    <img src="images/fasilitas/JEMBATAN CINTA-01.png" class="card-img" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-dark">
                    <img src="images/fasilitas/ATAS BUAYA FIX.png" class="card-img" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-dark">
                    <img src="images/fasilitas/TAMAN SELFIE FIX.jfif" class="card-img" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-dark">
                    <img src="images/fasilitas/PLASTIK.jpg" class="card-img" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-dark">
                    <img src="images/fasilitas/PLASTIK2.jpg" class="card-img" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-dark">
                    <img src="images/fasilitas/PLASTIK4.jpg" class="card-img" alt="...">
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Informasi hiburan -->
    <div class="container-fluid  bg-light p-3">
        <h4 style="text-align: center;"><i class="fa-solid fa-feather"></i><b>&nbsp;FASILITAS KBS</b></h4>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="images/fasilitas/LITERASI.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            Baca Lebih Lanjut
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Literasi</b></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="images/fasilitas/LITERASI.jfif" class="card-img" alt="...">
                                        Kegiatan Literasi adalah kegiatan meningkatkan pengetahuan dan kemampuan memahami informasi dalam membuat suatu karya tulis dan penelitian dengan cara membaca.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/fasilitas/DONGENG SATWA.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            Baca Lebih Lanjut
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Dongeng Satwa</b></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="images/fasilitas/DONGENG SATWA.jfif" class="card-img" alt="...">
                                        Dongeng Satwa adalah kegiatan membentuk karakter anak dalam beretika baik dan mengenalkan nilai - nilai kehidupan melalui bercerita menggunakan ilustrasi satwa sebagai tokohnya.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/fasilitas/KEEPER TALK.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                            Baca Lebih Lanjut
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Keeper Talk</b></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="images/fasilitas/KEEPER TALK.jfif" class="card-img" alt="...">
                                        Event dimana keeper akan menjelaskan mengenai kehidupan satwa, acara ini dibuat sangat interaktif, sehingga pengunjung dapat mengajukan pertanyaan sesuai dengan satwa yang telah dijelaskan..
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/fasilitas/PAKET EDUKASI.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                            Baca Lebih Lanjut
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Paket Edukasi</b></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="images/fasilitas/PAKET EDUKASI.jfif" class="card-img" alt="...">
                                        Adalah kegiatan pembelajaran seputar satwa yang diberikan oleh pemandu untuk siswa - siswi sekolah mulai PAUD hingga SMA. Tersedia berbagai jenis paket edukasi dengan fasilitas pemandu, masuk wahana Kidzoo, Wahana Aquarium, Wahana Animal Edutainment, dan Feeding Time.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/fasilitas/pkl-01.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                            Baca Lebih Lanjut
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Penelitian dan Praktek Kerja Lapang</b></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="images/fasilitas/pkl-01.jfif" class="card-img" alt="...">
                                        Adalah kegiatan mahasiswa dari jurusan kedokteran hewan dan paramedis veteriner untuk menerapkan materi yang diperoleh saat dibangku kuliah ke realita di lapangan, guna mendapatkan pengalaman dan pengetahuan baru dalam menghadapi suatu kasus.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/fasilitas/HANDLING.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                            Baca Lebih Lanjut
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Pelatihan Instansi terkait Konservasi</b></h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="images/fasilitas/HANDLING.jfif" class="card-img" alt="...">
                                        Adalah kegiatan pendidikan tambahan untuk suatu perangkat pemerintah mengenai konservasi, seperti bagaimana cara yang tepat untuk menangani, menjinakkan, dan mengamankan satwa liar tanpa menyakiti atau membunuh satwa itu sendiri.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Informasi Event -->
    <div class="container-fluid mt-4 mb-4 text-black text-center">
        <h3 style="text-align: center; padding: 15px;"><b>EVENT YANG AKAN DATANG</b></h3>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card text-bg-dark">
                    <img src="images/LiveIG-feed.jpg" class="card-img" alt="Live IG KBS">
                </div>
            </div>
            <div class="col">
                <div class="card text-bg-dark">
                    <img src="images/elephantday.jpg" class="card-img" alt="Elephant Day">
                </div>
            </div>
        </div>
        <br>
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