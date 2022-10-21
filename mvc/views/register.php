<!DOCTYPE html>
<html>

<head>
    <title>Soka - Đăng nhập</title>
    <?php include './mvc/views/blocks/head.php'; ?>
</head>

<body>
    <!--menu-->
    <div class="container">
        <!-- Page content-->
        <section class="vh-100 mt-5" id="form-login">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <form class="mb-md-2">
                                    <h5 class="fw-bold mb-4 text-uppercase">Đăng ký tài khoản</h5>
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="typeFullName" class="form-control" name="fullName" placeholder="Nhập họ và tên" />
                                        <label class="form-label sr-only" for="typeFullName">Full name</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="typeEmailX" class="form-control" name="email" placeholder="Nhập email đăng nhập" />
                                        <label class="form-label sr-only" for="typeEmailX">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" class="form-control" name="password" placeholder="Nhập mật khẩu" />
                                        <label class="form-label sr-only" for="typePasswordX">Password</label>
                                    </div>
                                    <div class="form-outline form-white mb-3">
                                        <input type="password" id="typePasswordAgain" class="form-control" name="retype" placeholder="Nhập lại mật khẩu" />
                                        <label class="form-label sr-only" for="typePasswordAgain">Retype Password</label>
                                    </div>
                                    <button class="btn btn-search" type="submit">Đăng ký</button>

                                </form>

                                <div>
                                    <p class="mb-0">Đã có tài khoản? <a href="index.php?controller=Login&action=show" class="text-white-50 fw-bold">Đăng nhập</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- back to top -->
    <button onclick="topFunction()" id="backToTop" title="Go to top"><span><i class="fa-sharp fa-solid fa-arrow-up"></i></span></button>
    <!--scripts-->
    <?php include './mvc/views/blocks/scripts.php'; ?>
</body>

</html>