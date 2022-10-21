<!DOCTYPE html>
<html>

<head>
    <title>Soka - Tìm kiếm</title>
    <?php include './mvc/views/blocks/head.php'; ?>
</head>

<body>
    <!--menu-->
    <?php
    include './mvc/views/blocks/searchBar.php';
    include './mvc/views/blocks/navbar.php';
    ?>
    <div class="container" id="search-page">
        <!-- Page content-->
        <div class="row mt-3 mb-4">
            <form action="" method="GET">
                <div class="input-group">
                    <input type="hidden" name="controller" value="Search">
                    <input type="hidden" name="action" value="show">
                    <input class="form-control" name="key" id="search-input" type="text" placeholder="Nhập từ khóa" />
                    <div class="input-group-btn">
                        <button class="btn btn-search">Tìm kiếm</button>
                    </div>
                </div>
            </form>
        </div>
        <h3 class="text-center mb-3">Kết quả tìm kiếm cho '<?php echo $_GET['key'] ?>'</h3>
        <?php
        $result = $data['new_by_name'];
        ?>
        <div class="row result">
            <!-- Blog post-->
            <?php
            foreach ($result as $n) {
            ?>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="thumbnail-wrap"><a href=""><img class="card-img-top" src="<?php echo $n['thumbnail'] ?>" alt="..." /></a></div>
                    <div class="card mb-4 post">
                        <a class="read-post" href="index.php?controller=Home&action=detail&id=<?php echo $n['id'] ?>">
                            <div class="card-body">
                                <div class="small text-muted"></div>
                                <h4 class="card-title"><?php echo $n['title'] ?></h4>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <!--footer-->
    <?php include './mvc/views/blocks/footer.php'; ?>

    <!-- back to top -->
    <button onclick="topFunction()" id="backToTop" title="Go to top"><span><i class="fa-sharp fa-solid fa-arrow-up"></i></span></button>
    <!--scripts-->
    <?php include './mvc/views/blocks/scripts.php'; ?>
</body>

</html>