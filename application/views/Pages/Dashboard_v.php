                <article class="content dashboard-page">
                    <div class="title-block">
                        <h3 class="title"> Dashboard </h3>
                        <p class="title-description"> Selamat datang di Halaman Website We Care</p>
                    </div>
                    <section class="section">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        <div class="header-block">
                                            <h5 class="text-center">Users App </h5>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <h1 class="text-center"><?= $count_user ?></h1>
                                    </div>
                                    <div class="card-footer">Jumlah Data Users We-Care App </div>
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
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header bg-dark text-white">
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
                        </div>
                    </section>
                </article>

