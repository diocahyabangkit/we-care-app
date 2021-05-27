                <article class="content dashboard-page">
                    <div class="title-block">
                        <h3 class="title"> <?= $title?></h3>
                        <p class="title-description"> Description Data Users We-Care Welcome </p>
                    </div>
                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Data Users We-Care Application We-Care </h3>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table id="table-users-app" class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>No</th>
                                                            <th>Name</th>  
                                                            <th>NIK</th>
                                                            <th>Status</th>
                                                            <th>Detail User</th>
                                                            <th>Detail Pengaduan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $no = 1;
                                                        foreach($data_users as $data):
                                                    ?>
                                                        <tr class="text-center">
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $data['name']?></td>
                                                            <td><?= $data['nik']?></td>
                                                            <td><?= $data['status']?></td>
                                                            <td>
                                                                <a href="<?= base_url('Pages/Data_users_c/detail_user/').$data['id'];?>"><button class="btn-success">Detail User</button></a>
                                                            </td>
                                                            <td>
                                                                <a href="<?= base_url('Pages/Data_users_c/detail_pengaduan/').$data['id'];?>"><button class="btn-primary">Detail</button></a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach;?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>

