<?php
$list = $data['cat'];
$sub_cat = $data['sub_cat'];
?>
<section class="container bottom-cat">
    <div class="row">
        <?php foreach ($list as $item) { ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <ul class="catMenu">

                    <li class="catTitle">
                        <h4>
                            <a href="index.php?controller=Home&action=subCat&id=<?php echo $item['cat_id'] ?>"><?php echo $item['name'] ?></a>
                        </h4>
                    </li>
                    <?php
                    $result = [];
                    $result[] = $sub_cat->get_sub_by_cat_id($item['cat_id']);
                    for ($i = 0; $i < count($result); $i++) {
                        foreach ($result[$i] as $sb) {
                    ?>
                            <li class="subCat">
                                <h5>
                                    <a class="text-secondary" href="index.php?controller=Home&action=subCat&id=<?php echo $item['cat_id'] ?>"><?php echo $sb['sub_name'] ?></a>
                                </h5>
                            </li>
                    <?php }
                    } ?>

                </ul>
            </div>
        <?php } ?>
    </div>
</section>