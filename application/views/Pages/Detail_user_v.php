                <article class="content dashboard-page">
                    <div class="title-block">
                        <h3 class="title"> <?= $title2?> </h3>
                        <p class="title-description"> Berikut adalah data detail User</p>
                    </div>

                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-9">
                                <div class="card card-block sameheight-item">
                                    <form role="form">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Id User</label>
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
                                                <p> : <?= $detail['name'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $detail['email'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Nomor Induk Kependudukan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $detail['nik'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Nomor Kartu Keluarga</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $detail['no-kk'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Alamat</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $detail['address'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Jenis Kelamin</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $detail['gender'];?></p>
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
                                <a href="<?= base_url('Pages/Data_users_c')?>"><button class="btn-primary">Back</button></a>
                            </div>
                        </div>
                    </section>

                </article>

