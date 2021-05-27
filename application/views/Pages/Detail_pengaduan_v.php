                <article class="content dashboard-page">
                    <div class="title-block">
                        <h3 class="title"> <?= $title2?> </h3>
                        <p class="title-description"> Berikut adalah data detail pengaduan</p>
                    </div>

                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-9">
                                <div class="card card-block sameheight-item">
                                    <form role="form">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Id Pengaduan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $detail['id'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Nama</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $detail['nama'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Alamat</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $detail['alamat'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Status Pelapor</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $detail['status_pelapor'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Jenis Kekerasan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $detail['jns_kekerasan'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Deskripsi</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $detail['deskrpisi'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Tanggal Kejadian</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $detail['tgl_kejadian'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Bukti Kekerasan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $detail['bukti_kekerasan'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Status</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $detail['status'];?></p>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <a href="<?= base_url('Pages/Data_pengaduan_c')?>"><button class="btn-primary">Back</button></a>
                            </div>
                        </div>
                    </section>

                </article>

