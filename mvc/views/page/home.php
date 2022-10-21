<!-- Blog entries-->
<div class="col-lg-8">
    <h4 class="text-center">Tin nổi bật</h4>
    <div class="row newest">
        <div class="col-lg-9 col-md-9 col-sm-12 left">
            <?php
            $new = $data['newest'];
            ?>
            <div class="card mb-4">
                <a class="read-post" href="index.php?controller=Home&action=detail&id=<?php echo $new['id'] ?>">
                    <img class="card-img-top" src="<?php echo $new['thumbnail'] ?>" alt="..." />
                    <div class="card-body">
                        <div class="small text-muted"></div>
                        <h3 class="card-title"><?php echo $new['title'] ?></h3>
                        <p class="card-text"><?php echo $new['description'] ?></p>
                    </div>
                </a>
            </div>
        </div>
        <?php
        $list = $data['hot_new'];
        ?>
        <div class="col-lg-3 col-md-3 col-sm-12 right" style="padding:0">
            <ul id="sub-newest-post">
                <?php
                foreach ($list as $item) { ?>
                    <li class="sub-post"><a class="sub-content" href="index.php?controller=Home&action=detail&id=<?php echo $item['id'] ?>"><?php echo $item['title'] ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <!-- Nested row for non-featured blog posts-->
    <div class="cat-bar row mb-3">
        <a href="" alt="The gioi">Thế giới</a>
    </div>
    <?php $list_world = $data['world'] ?>
    <div class="row">
        <!-- Blog post-->
        <?php foreach ($list_world as $w) { ?>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="thumbnail-wrap"><a href=""><img class="card-img-top" src="<?php echo $w['thumbnail'] ?>" alt="..." /></a></div>
                <div class="card mb-4 post">
                    <a class="read-post" href="index.php?controller=Home&action=detail&id=<?php echo $w['id'] ?>">
                        <div class="card-body">
                            <div class="small text-muted"></div>
                            <h4 class="card-title h4"><?php echo $w['title'] ?></h4>
                        </div>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="cat-bar row mb-3">
        <a href="" alt="The gioi">Đời sống</a>
    </div>
    <?php $list_life = $data['life'] ?>
    <div class="row">
        <!-- Blog post-->
        <?php foreach ($list_life as $l) {
        ?>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="thumbnail-wrap"><a href="index.php?controller=Home&action=detail&id=<?php echo $l['id'] ?>"><img class="card-img-top" src="<?php echo $l['thumbnail'] ?>" alt="..." /></a></div>
                <div class="card mb-4 post">
                    <a class="read-post" href="index.php?controller=Home&action=detail&id=<?php echo $l['id'] ?>">
                        <div class="card-body">
                            <div class="small text-muted"></div>
                            <h4 class="card-title h4"><?php echo $l['title'] ?></h4>
                        </div>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>