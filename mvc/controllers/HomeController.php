<?php
class Home extends MainController
{
    function show()
    {
        //tao model
        //goi method
        $new = $this->getModel('NewsModel');
        $subCat = $this->getModel('SubCategoryModel');
        $cat = $this->getModel('CategoryModel');
       
        //gọi view
        $view = $this->getView('main', [
            "detailPage" => "home", "newest" => $new->getNewest(),
            "hot_new" => $new->get_hot_news(),
            "life" => $new->get_six_new_by_cat_id(8),
            "world" => $new->get_six_new_by_cat_id(5),
            "cat" => $cat->get_all_cat(),
            "sub_cat" => $subCat,
        ]);
    }

    function detail($id)
    {
        // tao model
        // goi method
        $new = $this->getModel('NewsModel');
        $subCat = $this->getModel('SubCategoryModel');
        $cat = $this->getModel('CategoryModel');
       
        //gọi view
        $view = $this->getView('main', [
            "detailPage" => "detail",
            "new_by_id" => $new->get_new_by_id($id),
            "cat" => $cat->get_all_cat(),
            "sub_cat" => $subCat,
        ]);
    }
    function subCat($id)
    {
        // tao model
        // goi method
        $new = $this->getModel('NewsModel');
        $subCat = $this->getModel('SubCategoryModel');
        $cat = $this->getModel('CategoryModel');
        
        //gọi view
        $view = $this->getView('main', [
            "detailPage" => "subCat",
            "new_by_cat_id" => $new->get_new_by_cat_id($id),
            "cat" => $cat->get_all_cat(),
            "sub_cat" => $subCat,
        ]);
    }
    function get_sub_cat()
    {
    }
}
