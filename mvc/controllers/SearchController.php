<?php
class Search extends MainController
{
    function show($key)
    {
        //tạo model
        $new = $this->getModel('NewsModel');
        $cat = $this->getModel('CategoryModel');
        //tạo view
        $view = $this->getView("searchPage", [
            "new_by_name" => $new->get_new_by_name($key),
            "cat" => $cat->get_all_cat()
        ]);
    }
}
