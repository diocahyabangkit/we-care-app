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

                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </article>

