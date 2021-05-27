                <?php echo $this->session->flashdata('msg-edit');?>
                    <?php
                        if(isset($_SESSION['msg-edit'])){
                        unset($_SESSION['msg-edit']);
                    }
                    ?>
                <article class="content dashboard-page">
                    <div class="title-block">
                        <h3 class="title"> <?= $title;?> </h3>
                        <p class="title-description"> Description your Profile </p>
                    </div>
                    <section class="section">
                        <div class="row sameheight-container">
                            <div class="col-md-9">
                                <div class="card card-block sameheight-item">
                                    <form role="form">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $data_user['name-user'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $data_user['email-user'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Alamat</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $data_user['alamat'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Nomor Handphone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $data_user['no-hp'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Bagian</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $data_user['bagian'];?></p>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <label class="control-label">Active</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p> : <?= $data_user['status'];?></p>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#EditDataModal<?= $data_user['id-user'];?>">
                                          Edit Profile
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>

                        <!-- Show Edit Table Modal-->
                        <div class="modal" id="EditDataModal<?= $data_user['id-user'];?>" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                    </div>

                                    <div class="modal-body">
                                        <form action="<?= base_url('Pages/Profile_c/edit_profile');?>" method="post">
                                            <div class="form-group row">
                                                <div class="col-sm-5">
                                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $data_user['id-user'] ?>" >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                            <label for="status" class="col-sm-6 col-form-label">Nama</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" name="nama" value="<?= $data_user['name-user'] ?>" >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                            <label for="status" class="col-sm-6 col-form-label">Alamat</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" name="alamat" value="<?= $data_user['alamat'] ?>" >
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                            <label for="status" class="col-sm-6 col-form-label">Nomor Handphone</label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" name="no-hp" value="<?= $data_user['no-hp'] ?>" >
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                <button class="btn btn-primary" type="submit">OK</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </article>
                

