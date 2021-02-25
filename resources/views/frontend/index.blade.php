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

                <i class="fas fa-bars ml-1"></i>
            </button>

            <body class="antialiased">

    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">

        </div>
    </header>
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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Welcome to Kawal Covid</h1>
            <h2>Kasus pertama penyakit ini terjadi di kota Wuhan, Cina, pada akhir Desember 2019. Setelah itu, COVID-19
                menular antarmanusia dengan sangat cepat dan menyebar ke puluhan negara, termasuk Indonesia, hanya dalam
                beberapa bulan.

                Penyebarannya yang cepat membuat beberapa negara menerapkan kebijakan untuk memberlakukan lockdown untuk
                mencegah penyebaran virus Corona. Di Indonesia, pemerintah menerapkan kebijakan Pembatasan Sosial
                Berskala Besar (PSBB) untuk menekan penyebaran virus ini.</h2>
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="kasus" class="kasus">
            <div class="container-fluid">
                <div class="container ">
                    <br>
                    <h1 class="display-3 text-center">Tracking Covid</h1>
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
                                            <h2 class="mb-0 number-font"><?php echo $posglobal['value'];
                                                ?></h2>
                                            <p class="text-white mb-0">ORANG</p>
                                        </div>
                                        <div class="ml-auto"> <img src="{{ asset('assets/img/sedih.png') }}"
                                                width="50" height="50" alt="Positif"> </div>
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
                                            <h2 class="mb-0 number-font"><?php echo $semglobal['value'];
                                                ?></h2>
                                            <p class="text-white mb-0">ORANG</p>
                                        </div>
                                        <div class="ml-auto"> <img src="{{ asset('assets/img/senang.png') }}"
                                                width="50" height="50" alt="Positif"> </div>
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
                                            <h2 class="mb-0 number-font"><?php echo $menglobal['value'];
                                                ?></h2>
                                            <p class="text-white mb-0">ORANG</p>
                                        </div>
                                        <div class="ml-auto"> <img src="{{ asset('assets/img/sedih2.png') }}"
                                                width="50" height="50" alt="Positif"> </div>
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
                                            <p class="mb-0 number-font"><b>{{ $positif }}</b> POSITIF,
                                                <b>{{ $sembuh }}</b> SEMBUH, <b>{{ $meninggal }}</b>MENINGGAL
                                            </p>
                                        </div>
                                        <div class="ml-auto"> <img src="{{ asset('assets/img/indo.png') }}" width="50"
                                                height="50" alt="Positif"> </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL END -->
                    </div>
                    <br>
        </section><!-- End About Section -->

        <div class="card-header ">
            &nbsp;
            <section class="showcase">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <div class="card">
                                <div class="col text-center">
                                    <h6><br>
                                        <p>Update terakhir : {{ $tanggal }}</p>
                                    </h6>
                                </div>
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
                                                            <th>NO.</th>
                                                            <th>NEGARA</th>
                                                            <th>POSITIF</th>
                                                            <th>SEMBUH</th>
                                                            <th>MENINGGAL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $no = 1;
                                                        @endphp
                                                        @foreach ($dunia as $data)
                                                            <tr>
                                                                <th>{{ $no++ }}</th>
                                                                <th> <?php echo
                                                                    $data['attributes']['Country_Region']; ?></th>
                                                                <th> <?php echo
                                                                    number_format($data['attributes']['Confirmed']); ?></th>
                                                                <th><?php echo
                                                                    number_format($data['attributes']['Recovered']); ?></th>
                                                                <th><?php echo
                                                                    number_format($data['attributes']['Deaths']); ?></th>
                                                            </tr>
                                                        @endforeach
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
                                                                                @php $no=1; @endphp
                                                                                @foreach ($tampil as $tmp)

                                                                                    <tr>
                                                                                        <th>{{ $no++ }}</th>
                                                                                        <th>{{ $tmp->nama_provinsi }}
                                                                                        </th>
                                                                                        <th>{{ number_format($tmp->Positif) }}
                                                                                        </th>
                                                                                        <th>{{ number_format($tmp->Sembuh) }}
                                                                                        </th>
                                                                                        <th>{{ number_format($tmp->Meninggal) }}
                                                                                        </th>
                                                                                    </tr>
                                                                                @endforeach

                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                        </div>


                                        </section>
                                        &nbsp;


                                        <!-- ======= Why Us Section ======= -->


                                        <!-- ======= About Section ======= -->

                                        <!-- ======= Counts Section ======= -->
                                        <!-- End Counts Section -->

                                        <!-- ======= Services Section ======= -->

                                        <!-- End Appointment Section -->

                                        <!-- ======= Departments Section ======= -->
                                        <!-- ======= Footer ======= -->
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
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js">
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
