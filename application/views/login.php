<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?php echo base_url('assets/img/B logo.png'); ?>" rel="icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">

    <style>
        body {
            background-color: #;
        }
    </style>
</head>

<body>

    <!-- <section class="m-5">
    <div class="card">
        <div class="card-body">
        <h2 class="card-title text-center">Login</h2>
    <?php echo validation_errors(); ?>
    <?php echo form_open('auth/login'); ?>
    <form method="post" action="<?php echo site_url('auth/login'); ?>">
    <div class="col-12">
        <input type="email" name="email" placeholder="Email"><br>
        </div>
        
        <div class="col-12">
        <input type="password" name="password" placeholder="Password"><br>
        </div>
        <button type="submit">Login</button>
    </form>
        </div>
    </div>
    </section> -->

    <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                    <span class="d-block">Login</span>
                                </a>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">

                                <form method="post" action="<?php echo site_url('blog/login'); ?>">

                                        <div class="col-12">
                                            <label for="email" class="form-label">Email id <span
                                                    class="text-danger">*</span></label>
                                                    <input type="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="col-12">
                                            <label for="password" class="form-label">Password <span
                                                    class="text-danger">*</span></label>
                                                    <input type="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>
                                    <div class="col-12">
                                        <br>
                                        <div class="form-check">
                                            <p>Create an account ?
                                                <a href="#">Register</a>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

</body>
</html>
