<!DOCTYPE html>
<html>

<head>
    <title>Soka - Trang tin tức mới nhất</title>
    <?php include './mvc/views/blocks/head.php'; ?>
</head>

<body>
    <!--menu-->
    <?php
    include './mvc/views/blocks/searchBar.php';
    include './mvc/views/blocks/navbar.php';
    ?>
    <div class="container">
        <!-- Page content-->
        <div class="row mt-3">
            <!--phần trung tâm - change-->
            <?php include './mvc/views/page/' . $data['detailPage'] . '.php'; ?>

            <!--phần bên phải-->
            <?php include './mvc/views/blocks/sideBar.php'; ?>
        </div>


    </div>
    <?php include './mvc/views/blocks/bottomCategory.php' ?>
    <!--footer-->
    <?php include './mvc/views/blocks/footer.php'; ?>

    <!-- back to top -->
    <button onclick="topFunction()" id="backToTop" title="Go to top"><span><i class="fa-sharp fa-solid fa-arrow-up"></i></span></button>
    <!--scripts-->
    <?php include './mvc/views/blocks/scripts.php'; ?>
</body>

</html>