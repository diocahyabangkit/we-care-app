
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
                        <p class="text-center">LOGIN</p>
                        <?php echo $this->session->flashdata('msg');?>
                        <?php
                        if(isset($_SESSION['msg'])){
                            unset($_SESSION['msg']);
                        }
                        ?>
                        <form action="<?= base_url('Auth_c/Act_SignIn')?>" method="post" novalidate="">
                            <div class="form-group">
                                <label for="username">Email</label>
                                <input type="email" class="form-control underlined" name="email" id="username" placeholder="Your email address" required autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control underlined" name="password" id="password" placeholder="Your password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                            </div>
                            <!-- <div class="form-group">
                                <p class="text-muted text-center">Do not have an account? <a href="<?= base_url('Auth_c/Sign_up')?>">Sign Up</a></p>
                            </div> -->
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
        <script src="<?= base_url('Assets/modular-admin/dist/')?>js/vendor.js"></script>
        <script src="<?= base_url('Assets/modular-admin/dist/')?>js/app.js"></script>
    </body>
</html>