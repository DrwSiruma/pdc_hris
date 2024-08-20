<?php include('header.php'); ?>

    <div class="login-form">
        <form id="loginForm" action="process.login.php" method="post">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="logo text-center mb-2">
                        <img src="../img/PDC-Logo.png" alt="Logo">
                    </div>
                    <div class="text-center mb-3">
                        <h5>IT & Maintenance Support</h5>
                    </div>
                    
                    <?php if (!empty($error)) : ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                    
                    <div class="mb-3 input-group">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" id="userId" name="username" placeholder="User ID" required>
                    </div>
                    <div class="mb-3 input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <span class="input-group-text" id="togglePassword"><i class="far fa-eye" style="color: #FFD700;"></i></span>
                    </div>
                    <div class="mb-3">
                        <label class="cyberpunk-checkbox-label">
                        <input type="checkbox" id="rememberMe" name="rememberMe" class="cyberpunk-checkbox">
                        Remember me</label>
                    </div>
                    <button type="submit" class="btn w-100 btn-primary btn-block">Login</button>
                </div>
            </div>
        </form>
    </div>

<?php include('footer.php'); ?>