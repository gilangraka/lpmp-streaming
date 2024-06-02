<!doctype html>
<html lang="en">

<head>
    <title>LPMP Streaming : Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="icon" href="<?php echo base_url('assets/images/lpmpjatenglogo.png') ?>" type="image/icon type">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/template-login/css/style.css') ?>">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>
                        <h3 class="text-center mb-4">Login Admin</h3>                      
                        <?= $this->session->flashdata('message') ?>
                        <form action="<?php echo site_url('Login/CekLogin') ?>" method="post" class="login-form">
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" class="form-control rounded-left" name="password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
                            </div>
                        </form>
                        <p class="text-center pt-4">&copy; Copyright 2021 LPMP Jawa Tengah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo base_url('assets/template-login/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/template-login/js/popper.js') ?>"></script>
    <script src="<?php echo base_url('assets/template-login/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/template-login/js/main.js') ?>"></script>

</body>

</html>