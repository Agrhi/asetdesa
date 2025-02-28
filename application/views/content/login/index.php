<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SIPEDES</title>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/main/app.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/pages/auth.css">
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/logo/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/logo/favicon.png" type="image/png">

    <!-- CDN Js -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-4 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div id="auth-left" style="padding: 5rem 1rem;">
                    <div style="text-align: center;">
                        <?php
                        if ($this->session->flashdata('pesan')) {
                            echo '<div class="alert alert-success alogin" role="alert">';
                            echo $this->session->flashdata('pesan');
                            echo '</div>';
                        }
                        ?>
                        <img src="<?= base_url(); ?>/assets/images/logo/favicon.png" alt="Logo" width="20%">
                        <h3 class="auth-title" style="align-items: center;">Log in.</h3>
                    </div>
                    <form role="form" action="<?= base_url('login/prosses'); ?>" method="post">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="username" class="form-control form-control-xl" placeholder="Username" required>
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" class="form-control form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-2">Log in</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>


</body>

<script>
    window.setTimeout(function() {
        $(".alogin").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script>

</html>