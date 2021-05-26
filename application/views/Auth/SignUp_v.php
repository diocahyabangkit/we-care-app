    <body>
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
                           We Care
                        </h1>
                    </header>
                    <div class="auth-content">
                        <p class="text-center">SIGNUP</p>
                        <form method="post" action="<?= base_url('Auth_c/Act_SignUp');?>">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control underlined" name="name" id="name" placeholder="Enter Full Name" required="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control underlined" name="email" id="email" placeholder="Enter email address" required="">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control underlined" name="password" id="password" placeholder="Enter password" required="">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control underlined" name="retype_password" id="retype_password" placeholder="Re-type password" required="">
                                    </div>
                                </div>
                            </div>
                                <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                            <div class="form-group">
                                <p class="text-muted text-center">Already have an account? <a href="<?= base_url('Auth_c')?>">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script src="<?= base_url('Assets/modular-admin/dist/');?>js/vendor.js"></script>
        <script src="<?= base_url('Assets/modular-admin/dist/');?>js/app.js"></script>
    </body>
</html>