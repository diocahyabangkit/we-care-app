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
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Email</th>  
                                                            <th>NIK</th>
                                                            <th>NO KK</th>
                                                            <th>Address</th>
                                                            <th>Gender</th>
                                                            <th>Foto</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $no = 1;
                                                        foreach($data_users as $data):
                                                    ?>
                                                        <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $data['name']?></td>
                                                            <td><?= $data['email']?></td>
                                                            <td><?= $data['nik']?></td>
                                                            <td><?= $data['no-kk']?></td>
                                                            <td><?= $data['address']?></td>
                                                            <td><?= $data['gender']?></td>
                                                            <td><?= $data['foto']?></td>
                                                            <td><?= $data['status']?></td>
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

