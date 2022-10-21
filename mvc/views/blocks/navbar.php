<div class="container head-foot">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">Sokanew</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#category" aria-controls="category" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa-solid fa-sliders"></span>
        </button>

        <!--toggle-->
        <?php
        $list = $data['cat'];
        ?>
        <div class="collapse navbar-collapse" id="category">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Trang chủ <span class="sr-only">(current)</span></a>
                </li>
                <?php
                foreach ($list as $item) {
                ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?controller=Home&action=subCat&id=<?php echo $item['cat_id']?>"><?php echo $item['name']?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</div>