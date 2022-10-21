<?php $new = $data['new_by_cat_id'];
$first = $new[0];
?>
<div class="col-lg-8">
    <h4 class="text-center"><?php echo $first['name']?></h4>
    <!-- Nested row for non-featured blog posts-->
    <div class="row">
        <!-- Blog post-->
        <?php
        foreach ($new as $n) {
        ?>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="thumbnail-wrap"><a href=""><img class="card-img-top" src="<?php echo $n['thumbnail'] ?>" alt="..." /></a></div>
                <div class="card mb-4 post">
                    <a class="read-post" href="index.php?controller=Home&action=detail&id=<?php echo $n['id'] ?>">
                        <div class="card-body">
                            <div class="small text-muted"></div>
                            <h4 class="card-title"><?php echo $n['title'] ?></h4>
                            <a class="badge text-decoration-none" href="#!"><?php echo $n['sub_name'] ?></a>
                        </div>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>