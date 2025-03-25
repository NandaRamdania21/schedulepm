<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('header'); ?>
</head>

<body class="bg-gradient-primary" style="background: url('assets/img/PT.jpg') no-repeat center center fixed; background-size: cover;">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- Gambar -->
                            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                <img src="<?= base_url('assets/img/3.png'); ?>" alt="Company Logo" class="img-fluid" style="max-width: 90%; position: relative; top: -40px;">
                            </div>

                            <!-- Form Login -->
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Hello Engineer!</h1>
                                    </div>

                                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('js'); ?>

    <script>
        // Cegah tombol back (hanya aktif di halaman login)
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }

        window.onload = function () {
            window.history.pushState(null, "", window.location.href);
            window.onpopstate = function () {
                window.history.pushState(null, "", window.location.href);
            };
        };
    </script>
</body>
</html>
