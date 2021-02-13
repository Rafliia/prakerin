<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LIVE COVID-19</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="" alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>

            <body class="antialiased">

    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-heading text-uppercase">LIVE COVID-19</div>
        </div>
    </header>

    <body>
        <?php
        $positif = file_get_contents('https://api.kawalcorona.com/positif');
        $positif = json_decode($positif, true);
        $sembuh = file_get_contents('https://api.kawalcorona.com/sembuh');
        $sembuh = json_decode($sembuh, true);
        $meninggal = file_get_contents('https://api.kawalcorona.com/meninggal');
        $meninggal = json_decode($meninggal, true);
        $dataid = file_get_contents('https://api.kawalcorona.com/indonesia');
        $id = json_decode($dataid, true);
        $dataidprovinsi = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
        $idprovinsi = json_decode($dataidprovinsi, true);
        $datadunia = file_get_contents('https://api.kawalcorona.com/');
        $dunia = json_decode($datadunia, true);
        ?>

        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

                <h1 class="logo mr-auto"><a href="{{ url('login') }}">Home</a></h1>
                <ul>
                    <li><a href="#kasus">Data Kasus</a></li>
                    <li><a href="#kasusdunia">Data Kasus Dunia</a></li>
                    <li><a href="#kasusindonesia">Data Kasus Indonesia</a></li>
                </ul>
                </nav><!-- .nav-menu -->
            </div>
        </header><!-- End Header -->
        <main id="main">
            <!-- ======= About Section ======= -->
            <section id="kasus" class="kasus">
                <div class="container-fluid">
                    <div class="container ">
                        <p class="lead m-0 text-center">Coronavirus Global &amp; Indonesia Live Data</p>

                        <div class="row">
                            <div class="col-sm">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card bg-danger img-card box-primary-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <p class="text-white mb-0">TOTAL POSITIF</p>
                                                <h2 class="mb-0 number-font"><?php echo
                                                    $positif['value']; ?></h2>
                                                <p class="text-white mb-0">ORANG</p>
                                            </div>
                                            <div class="ml-auto"> <img src="{{ asset('assets/img/sedih2.png') }}"
                                                    width="40" height="40" alt="Positif"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card bg-success img-card box-secondary-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <p class="text-white mb-0">TOTAL SEMBUH</p>
                                                <h2 class="mb-0 number-font"><?php echo $sembuh['value'];
                                                    ?></h2>
                                                <p class="text-white mb-0">ORANG</p>
                                            </div>
                                            <div class="ml-auto"> <img src="{{ asset('assets/img/senang.png') }}"
                                                    width="40" height="40" alt="Positif"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card  bg-secondary img-card box-success-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <p class="text-white mb-0">TOTAL MENINGGAL</p>
                                                <h2 class="mb-0 number-font"><?php echo
                                                    $meninggal['value']; ?></h2>
                                                <p class="text-white mb-0">ORANG</p>
                                            </div>
                                            <div class="ml-auto"> <img src="{{ asset('assets/img/sedih.png') }}"
                                                    width="40" height="40" alt="Positif"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card  bg-info img-card box-success-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <h2 class="text-white mb-0">INDONESIA</h2>
                                                <p class="mb-0 number-font"><?php echo $id[0]['positif'];
                                                    ?>&nbsp; POSITIF,<?php echo
                                                    $id[0]['sembuh']; ?>SEMBUH, <?php
                                                    echo $id[0]['meninggal']; ?>MENINGGAL</p>
                                            </div>
                                            <div class="ml-auto"> <img src="{{ asset('assets/img/indo.png') }}"
                                                    width="40" height="40" alt="Positif"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                        </div>
            </section><!-- End About Section -->

            <div class="card-header ">
                &nbsp;
                <section class="showcase">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <div class="card">
                                    <section id="kasusdunia" class="kasusdunia">
                                        <center>
                                            <div class="card-header">Data Kasus Corona Virus Berdasarkan Negara</div>
                                        </center>
                                        <div class="card-body">
                                            <div style="height:600px;overflow:auto;margin-right:15px;">
                                                <table class="table table-striped">
                                                    <div class="card-body">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Nomor</th>
                                                                <th scope="col">Negara</th>
                                                                <th scope="col">Kasus Positif</th>
                                                                <th scope="col">Kasus Sembuh</th>
                                                                <th scope="col">Kasus Meninggal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                            @php
                                                                $no = 1;
                                                            @endphp
                                                            <?php for ($i = 0; $i <= 191; $i++) { ?> <tr>
                                                                <td> <?php echo $i + 1; ?></td>
                                                                <td> <?php echo
                                                                    $dunia[$i]['attributes']['Country_Region']; ?></td>
                                                                <td> <?php echo
                                                                    $dunia[$i]['attributes']['Confirmed']; ?></td>
                                                                <td><?php echo
                                                                    $dunia[$i]['attributes']['Recovered']; ?></td>
                                                                <td><?php echo
                                                                    $dunia[$i]['attributes']['Deaths']; ?></td>
                                                                </tr>
                                                                <?php } ?>
                                                        </tbody>
                                                </table>


                                            </div>
                                        </div>
                                        <br>

                                        <div class="card-header ">
                                            &nbsp;
                                            <section class="showcase">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-lg-1"></div>
                                                        <div class="col-lg-10">
                                                            <div class="card">
                                                                <section id="kasusindonesia" class="kasusindonesia">
                                                                    <center>
                                                                        <div class="card-header">Data Kasus Corona Virus
                                                                            Berdasarkan Provinsi</div>
                                                                    </center>
                                                                    <div class="card-body">
                                                                        <div
                                                                            style="height:600px;overflow:auto;margin-right:15px;">
                                                                            <table class="table table-striped">
                                                                                <thead>
                                                                                    <th>No</th>
                                                                                    <th>Provinsi</th>
                                                                                    <th>Positif</th>
                                                                                    <th>Sembuh</th>
                                                                                    <th>Meninggal</th>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @php
                                                                                        $no = 1;
                                                                                    @endphp
                                                                                    @foreach ($provinsi as $data)
                                                                                        <tr>
                                                                                            <td>{{ $no++ }}</td>
                                                                                            <td>{{ $data->nama_provinsi }}
                                                                                            </td>
                                                                                            <td>{{ $data->positif }}
                                                                                            </td>
                                                                                            <td>{{ $data->sembuh }}
                                                                                            </td>
                                                                                            <td>{{ $data->meninggal }}
                                                                                            </td>
                                                                                        </tr>
                                                                                    @endforeach

                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                            </div>


                                            </section>
                                            &nbsp;
                                            <div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12 col-xl-6">
                                                        <a href="https://www.unicef.org/indonesia/id/coronavirus">
                                                            <div class="card text-white bg-orange">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Novel coronavirus (COVID-19):
                                                                        Hal-hal yang perlu Anda ketahui</h4>
                                                                    <p class="card-text">Unicef Indonesia</p>
                                                                </div>
                                                            </div>
                                                    </div></a><!-- COL END -->
                                                    <div class="col-md-12 col-xl-6">
                                                        <a
                                                            href="https://www.kompas.com/tren/read/2020/03/03/183500265/infografik-daftar-100-rumah-sakit-rujukan-penanganan-virus-corona">
                                                            <div class="card text-white bg-secondary">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Daftar 100 Rumah Sakit
                                                                        Rujukan Penanganan Virus Corona</h4>
                                                                    <p class="card-text">Kompas</p>
                                                                </div>
                                                            </div>
                                                    </div></a><!-- COL END -->
                                                    <div class="col-md-12 col-xl-6">
                                                        <a href="https://infeksiemerging.kemkes.go.id/">
                                                            <div class="card text-white bg-success">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Media Informasi Resmi
                                                                        Penyakit Infeksi Emerging</h4>
                                                                    <p class="card-text">Kementrian Kesehatan </p>
                                                                </div>
                                                            </div>
                                                    </div></a><!-- COL END -->
                                                    <div class="col-md-12 col-xl-6">
                                                        <a
                                                            href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">
                                                            <div class="card text-white bg-danger">
                                                                <div class="card-body">
                                                                    <h4 class="card-title">Coronavirus Disease
                                                                        (COVID-19) Advice for The Public</h4>
                                                                    <p class="card-text">WHO</p>
                                                                </div>
                                                            </div>
                                                    </div></a><!-- COL END -->
                                                </div>
                                                <!-- FOOTER -->
                                            </div>
                                            <div class="container">


                                                <footer class="footer py-4">
                                                    <div class="container">
                                                        <div class="row align-items-center">
                                                            <div class="col-lg-4 text-lg-left">Copyright © Your Website
                                                                2020
                                                            </div>
                                                            <div class="col-lg-4 my-3 my-lg-0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </footer>
                                                <!-- Bootstrap core JS-->
                                                <script
                                                    src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
                                                </script>
                                                <script
                                                    src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js">
                                                </script>
                                                <!-- Third party plugin JS-->
                                                <script
                                                    src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js">
                                                </script>
                                                <!-- Contact form JS-->
                                                <script src="assets/mail/jqBootstrapValidation.js"></script>
                                                <script src="assets/mail/contact_me.js"></script>
                                                <!-- Core theme JS-->
                                                <script src="js/scripts.js"></script>
    </body>

</html>
