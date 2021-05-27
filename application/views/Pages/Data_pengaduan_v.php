                <article class="content dashboard-page">
                    <div class="title-block">
                        <h3 class="title"> <?= $title?> </h3>
                        <p class="title-description"> Description <?= $title?> </p>
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
                                                        foreach($data as $datas):
                                                    ?>
                                                        <tr class="text-center">
                                                            <td><?= $datas['id']?></td>
                                                            <td><?= $datas['nama']?></td>
                                                            <td><?= $datas['status_pelapor']?></td>
                                                            <td><?= $datas['jns_kekerasan']?></td>
                                                            <td><?= $datas['tgl_kejadian']?></td>
                                                            <td><?= $datas['status']?></td>
                                                            <td>
                                                                <a href="<?= base_url('Pages/Data_pengaduan_c/Detail_pengaduan/').$datas['id'];?>"><button class="btn-primary">Detail</button></a>
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

