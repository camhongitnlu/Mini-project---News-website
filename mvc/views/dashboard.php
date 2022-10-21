<!DOCTYPE html>
<html>

<head>
    <title>Soka - Trang quản trị</title>
    <?php include './mvc/views/blocks/head.php'; ?>
</head>

<body class='sb-nav-fixed'>
    <nav class="sb-topnav navbar navbar-expand">
        <!-- Navbar Brand-->
        <a class="navbar-brand ml-5" href="index.php?controller=Admin&action=main">Sokanews</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Tài khoản</a></li>
                    <li><a class="dropdown-item" href="#!">Cài đặt</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Đăng xuất</a></li>
                </ul>
            </li>
        </ul>
        <form class="form-inline ml-auto">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link border-bottom" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Quản lý tin tức
                        </a>
                        <a class="nav-link border-bottom" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Quản lý danh mục
                        </a>

                        <a class="nav-link border-bottom" href="">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Quản lý danh mục con
                        </a>
                        <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Quản lý tài khoản
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Tài khoản:</div>
                    <?php print_r($_SESSION)?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">

            <?php include './mvc/views/admin/' . $data['detail'] . '.php' ?>

        </div>
    </div>
    <!-- back to top -->
    <button onclick="topFunction()" id="backToTop" title="Go to top"><span><i class="fa-sharp fa-solid fa-arrow-up"></i></span></button>
    <!--scripts-->
    <?php include './mvc/views/blocks/scripts.php'; ?>
</body>

</html>