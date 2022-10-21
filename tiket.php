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
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action list-group-item-success active" id="list-tiket-list" data-bs-toggle="list" href="#list-tiket" role="tab" aria-controls="list-tiket"><i class="fa-solid fa-ticket"></i>&nbsp;&nbsp;&nbsp;&nbsp;Tiket Masuk</a>
                    <a class="list-group-item list-group-item-action list-group-item-success" id="list-jadwal-list" data-bs-toggle="list" href="#list-jadwal" role="tab" aria-controls="list-jadwal"><i class="fa-solid fa-clock"></i>&nbsp;&nbsp;&nbsp;&nbsp;Jadwal Operasional & Tiket Parkir</a>
                    <a class="list-group-item list-group-item-action list-group-item-success" id="list-paket-list" data-bs-toggle="list" href="#list-paket" role="tab" aria-controls="list-paket"><i class="fa-solid fa-school"></i>&nbsp;&nbsp;&nbsp;Paket Edukasi</a>
                </div>
                <aside class="pt-3 pb-3">
                    <img class="rounded" src="images/InfoQrisDkk.jpg" style="height: 440px;width: 415px;">
                </aside>
            </div>
            <div class="col-8">
                <div class="tab-content" id="nav-tabContent">
                    <!-- Tiket Masuk -->
                    <div class="tab-pane fade show active bg-light rounded" id="list-tiket" role="tabpanel" aria-labelledby="list-tiket-list">
                        <div class="container">
                            <h1 style="font-size: 25px; font-family: Hammersmith One; text-align:center; padding-top: 10px;"><b>HARGA TIKET MASUK</b></h1>
                            <h2 style="font-size: 12px; text-align:center; color:orange;">BERLAKU SEJAK OKTOBER TAHUN 2022</h2>
                            <h4 style="font-size: 18px;">Senin s.d. Jumat</h4>
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Usia</th>
                                        <th scope="col">Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Lansia</th>
                                        <td>60 Tahun ke atas</td>
                                        <td>Rp 8.000,- / orang</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Dewasa</th>
                                        <td>20 s.d. 60 Tahun</td>
                                        <td>Rp 10.000,- / orang</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Anak-anak</th>
                                        <td>5 s.d. 20 Tahun</td>
                                        <td>Rp 5.000,- / orang</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <h4 style="font-size: 18px;">Sabtu s.d. Minggu</h4>
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Usia</th>
                                        <th scope="col">Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Lansia</th>
                                        <td>60 Tahun ke atas</td>
                                        <td>Rp 10.000,- / orang</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Dewasa</th>
                                        <td>20 s.d. 60 Tahun</td>
                                        <td>Rp 12.000,- / orang</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Anak-anak</th>
                                        <td>5 s.d. 20 Tahun</td>
                                        <td>Rp 7.000,- / orang</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <h4 style="font-size: 15px;">Kategori Balita (Dibawah umur 5 Tahun) tiket masuk gratis.</h4>
                            <br>
                        </div>
                    </div>
                    <!-- Jadwal -->
                    <div class="tab-pane fade bg-light rounded" id="list-jadwal" role="tabpanel" aria-labelledby="list-jadwal-list">
                        <div class="container">
                            <h1 style="font-size: 25px; font-family: Hammersmith One; text-align:center; padding-top: 10px;"><b>JADWAL OPERASIONAL</b></h1>
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th scope="col">Status Operasional</th>
                                        <th scope="col">Senin s.d. Jumat</th>
                                        <th scope="col">Sabtu s.d. Minggu</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Buka</th>
                                        <td>09.00 WIB</td>
                                        <td>07.30 WIB</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Tutup</th>
                                        <td>15.00 WIB</td>
                                        <td>17.00 WIB</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <h1 style="font-size: 25px; font-family: Hammersmith One; text-align:center; padding-top: 10px;"><b>TIKET PARKIR</b></h1>
                            <h4 style="font-size: 18px;text-align:center;">Area Dalam KBS</h4>
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><i class="fa-solid fa-bus"></i>&nbsp;&nbsp;&nbsp;Bus / Mini Bus</th>
                                        <td>Rp 10.000,- / Hari</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="fa-solid fa-car"></i>&nbsp;&nbsp;&nbsp;Mobil</th>
                                        <td>Rp 8.000,- / Hari</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="fa-solid fa-motorcycle"></i>&nbsp;&nbsp;Motor</th>
                                        <td>Rp 5.000,- / Hari</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <h4 style="font-size: 18px;text-align:center;">Terminal Intermoda Joyoboyo (TIJ)</h4>
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Harga (2 Jam Pertama)</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Harga Maksimal (Hari)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row"><i class="fa-solid fa-bus"></i>&nbsp;&nbsp;&nbsp;Bus / Mini Bus</th>
                                        <td>Rp 3.000,-</td>
                                        <td>Per-jam berikutnya Rp 1.500,-</td>
                                        <td>Rp 20.000,-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="fa-solid fa-car"></i>&nbsp;&nbsp;&nbsp;Mobil</th>
                                        <td>Rp 3.000,-</td>
                                        <td>Per-jam berikutnya Rp 1.000,-</td>
                                        <td>Rp 20.000,-</td>
                                    </tr>
                                    <tr>
                                        <th scope="row"><i class="fa-solid fa-motorcycle"></i>&nbsp;&nbsp;Motor</th>
                                        <td>Rp 2.000,-</td>
                                        <td>Per-jam berikutnya Rp 500,-</td>
                                        <td>Rp 10.000,-</td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                        </div>
                    </div>
                    <!-- Paket Edukasi -->
                    <div class="tab-pane fade bg-light rounded" id="list-paket" role="tabpanel" aria-labelledby="list-paket-list">
                        <div class="container">
                            <h1 style="font-size: 25px; font-family: Hammersmith One; text-align:center; padding-top: 10px;"><b>HARGA PAKET EDUKASI</b></h1>
                            <table class="table table-stripped">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Paket</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Fasilitas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Jalak Bali</th>
                                        <td>Rp 40.000,-</td>
                                        <td>
                                            <ul>
                                                <li>Tiket Masuk</li>
                                                <li>Pemandu</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jerapah</th>
                                        <td>Rp 50.000,-</td>
                                        <td>
                                            <ul>
                                                <li>Tiket Masuk</li>
                                                <li>Pemandu</li>
                                                <li>Animal Story</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Bekatan</th>
                                        <td>Rp 60.000,-</td>
                                        <td>
                                            <ul>
                                                <li>Tiket Masuk</li>
                                                <li>Pemandu</li>
                                                <li>Animal Edutaiment</li>
                                                <li>Perahu</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Arwana</th>
                                        <td>Rp 75.000,-</td>
                                        <td>
                                            <ul>
                                                <li>Tiket Masuk</li>
                                                <li>Pemandu</li>
                                                <li>Animal Story</li>
                                                <li>Aquanoctudio Park</li>
                                                <li>Kids Zoo</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Komodo</th>
                                        <td>Rp 90.000,-</td>
                                        <td>
                                            <ul>
                                                <li>Tiket Masuk</li>
                                                <li>Pemandu</li>
                                                <li>Animal Story</li>
                                                <li>Animal Edutaiment</li>
                                                <li>Perahu</li>
                                                <li>Aquanoctudio Park</li>
                                                <li>Kids Zoo</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
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