                <article class="content dashboard-page">
                    <div class="title-block">
                        <h3 class="title"> <?= $title2?> </h3>
                        <p class="title-description"> Data Detail Pengaduan Users </p>
                    </div>

                    <section class="section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="card-title-block">
                                            <h3 class="title"> Data Pengaduan We-Care Application We-Care </h3>
                                        </div>
                                        <section class="example">
                                            <div class="table-responsive">
                                                <table id="table-pengaduan" class="table table-striped table-bordered table-hover" >
                                                    <thead>
                                                        <tr class="text-center">
                                                            <th>No</th>
                                                            <th>Id Pengaduan</th>
                                                            <th>Name</th>
                                                            <th>Status Pelapor</th>
                                                            <th>Jenis Kekerasan</th>
                                                            <th>Tanggal Kejadian</th>
                                                            <th>Status</th>
                                                            <th>Detail</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $no = 1;
                                                        foreach($details as $data):
                                                    ?>
                                                        <tr class="text-center">
                                                            <td><?= $no++?></td>
                                                            <td><?= $data['id_user']?></td>
                                                            <td><?= $data['nama']?></td>
                                                            <td><?= $data['status_pelapor']?></td>
                                                            <td><?= $data['jns_kekerasan']?></td>
                                                            <td><?= $data['tgl_kejadian']?></td>
                                                            <td><?= $data['status']?></td>
                                                            <td>
                                                                <a href="<?= base_url('Pages/Data_pengaduan_c/Detail_pengaduan/').$data['id'];?>"><button class="btn-success">Detail</button></a>
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

