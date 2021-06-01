<body>
    
    <nav class="navbar navbar-expand-custom navbar-mainbg fixed-top">
        <section class="container">
            <a class="navbar-brand navbar-logo" href="#">We Care</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
            <i class="fas fa-bars text-white">Menu</i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                    <li class="nav-item active">
                        <a class="nav-link" href="#slider"><i class="fas fa-tachometer-alt"></i>Home</a>
                    </li>
                    <li class="nav-item">
                        <a  class="nav-link" href="#tentang"><i class="far fa-address-book"></i>Data Pengaduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#hubungi"><i class="far fa-clone"></i>Chat Bot</a>
                    </li>
                </ul>
            </div>
        </section>
    </nav>

    <section id="slider" class="slider">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="height:800px; width:100%">
                <img class="h-100 w-100" src="<?= base_url('Assets/img/2.png')?>" alt="First slide">
                </div>
                <div class="carousel-item" style="height:800px; width:100%">
                <img class="h-100 w-100" src="<?= base_url('Assets/img/3.png')?>" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <div id="tentang"></div>
    <section style="height:400px; width:100%">
        <div class="title text-center" style="margin:100px 0 50px 0">
                <h1>Data Pengaduan</h1>
        </div>
        <section class="container" >
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        <div class="header-block">
                                            <h5 class="text-center">Data Pengaduan</h5>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <h1 class="text-center"><?= $count_pengaduan?></h1>
                                    </div>
                                    <div class="card-footer">Jumlah Data Pengaduan</div>
                                </div>
                            </div>
                            <!-- /.col-xl-4 -->
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header bg-success text-white">
                                        <div class="header-block">
                                            <h5> Pengaduan success </h5>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <h1 class="text-center"><?= $pengaduan_ok?></h1>
                                    </div>
                                    <div class="card-footer">Jumlah Data Pengaduan Success</div>
                                </div>
                            </div>
                            <!-- /.col-xl-4 -->
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header bg-danger text-white">
                                        <div class="header-block">
                                            <h5 class="">Pengaduan Not Success </h5>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <h1 class="text-center"><?= $pengaduan_NotOk?></h1>
                                    </div>
                                    <div class="card-footer">Jumlah Data Pengaduan Not Success</div>
                                </div>
                            </div>
                            <!-- /.col-xl-4 -->
                        </div>
                        <!-- /.row -->
        </section>
    </section>

    <di id="hubungi"></di>
    <section class="hubungi-kami text-center" style="height:500px; width:100%">
        <div class="title text-center" style="margin:50px 0 50px 0" >
            <h1>CHAT BOT</h1>
        </div>

        <button class="btn-succes"></button>
        <iframe
            allow="microphone;"
            width="350"
            height="430"
            src="https://console.dialogflow.com/api-client/demo/embedded/243d9454-4af3-42c3-9003-1446c61fcdd9">
        </iframe>
    </section>

    <section class="footer" style="height:500px; width:100%">

    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="<?= base_url('Assets/js/script.js')?>"></script>
</body>
</html>