<?php
session_start();
?>
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
                <h4 class="text-center mb-4">Trang đăng nhập dành cho admin</h4>
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <?php $er = $data['error'] ?>
                                <form action="" method="POST" class="mb-md-2">
                                    <h4 class="fw-bold mb-4 text-uppercase">Đăng nhập</h4>
                                    <small class="text-danger text-left"><?php echo $er['loginFail'] ?></small>
                                    <div class="form-outline form-white mb-4">
                                        <small class="text-danger text-left"><?php echo $er['username'] ?></small>
                                        <input type="text" id="typeUsernameX" class="form-control" name="username" placeholder="Nhập tên đăng nhập" />
                                        <label class="form-label sr-only" for="typeUsernameX">Username</label>

                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <small class="text-danger"><?php echo $er['pass'] ?></small>
                                        <input type="password" id="typePasswordX" class="form-control" name="password" placeholder="Nhập mật khẩu" />
                                        <label class="form-label sr-only" for="typePasswordX">Password</label>

                                    </div>

                                    <p class="small pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                                    <button class="btn btn-search" type="submit" name="btn-login" value="login">Đăng nhập</button>

                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                        <a href="#!"><i class="fab fa-facebook-f fa-lg"></i></a>
                                        <a href="#!"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                        <a href="#!"><i class="fab fa-google fa-lg"></i></a>
                                    </div>
                                </form>

                                <div>
                                    <p class="mb-0"><a href="index.php?controller=Register&action=show" class="text-white-50 fw-bold">Đăng ký tài khoản</a>
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