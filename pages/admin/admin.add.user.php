<?php include('admin.header.php'); ?>

    <main id="main">
        <div class="container">
            <h2 class="mt-4"><i class="fas fa-user-plus"></i>&nbsp;Add New User</h2><hr />

            <div class="card mt-4">
                <div class="card-body">
                    <?php if (!empty($error)) : ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                    <?php if (!empty($success)) : ?>
                        <div class="alert alert-success"><?php echo $success; ?></div>
                    <?php endif; ?>
                    <form action="process.register.php" method="post" style="padding: 20px 60px;">
                        <div class="mb-3 input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                        </div>
                        <div class="mb-3 input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="mb-3 input-group">
                            <span class="input-group-text"><i class="fas fa-user-tag"></i></span>
                            <select class="form-control" id="role" name="role" onchange="toggleBranchSelection()" required>
                                <option value="" hidden>Select Role</option>
                                <option value="admin">Admin</option>
                                <option value="it">IT</option>
                                <option value="maintenance">Maintenance</option>
                                <option value="office">Office</option>
                                <option value="outlet">Outlet</option>
                            </select>
                        </div>
                        <button type="submit" class="btn w-100 btn-warning btn-block">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

<?php include('admin.footer.php'); ?>