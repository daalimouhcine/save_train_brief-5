<?php require_once APPROOT . '/views/inc/header.php'; ?>

    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mb-5">
                <h2>Create An Account</h2>
                <p>Please fill out this form to register with us</p>
                <form action="<?= URLROOT; ?>/users/register" method="POST">
                    <div class="form-group">
                        <label for="full_name">Full Name: <sup>*</sup></label>
                        <input type="text" name='full_name' class="form-control form-control-lg <?= (!empty($data['full_name_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['full_name']; ?>" >
                        <span class="invalid-feedback"><?= $data['full_name_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email: <sup>*</sup></label>
                        <input type="email" name="email" class="form-control form-control-lg <?= (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['email']; ?>" >
                        <span class="invalid-feedback"><?= $data['email_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password: <sup>*</sup></label>
                        <input type="password" name="password" class="form-control form-control-lg <?= (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['password']; ?>" >
                        <span class="invalid-feedback"><?= $data['password_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password: <sup>*</sup></label>
                        <input type="password" name="confirm_password" class="form-control form-control-lg <?= (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['confirm_password']; ?>">
                        <span class="invalid-feedback"><?= $data['confirm_password_err']; ?></span>
                    </div>

                    <div class="row">
                        <div class="col">
                            <input type="submit" class="btn btn-success btn-block" value="Register">
                        </div>
                        <div class="col">
                            <a href="<?= URLROOT; ?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php require_once APPROOT . '/views/inc/footer.php'; ?>