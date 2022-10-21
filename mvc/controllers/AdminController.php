<?php
class Admin extends MainController
{
    function main()
    {
        //tạo model
        //tạo view
        $this->getView('dashboard', ['detail' => 'main']);
    }

    function category()
    {
        //tạo model
        //tạo view
        $this->getView('dashboard', ['detail' => 'category']);
    }
    function news()
    {
        //tạo model
        //tạo view
        $this->getView('dashboard', ['detail' => 'news']);
    }
    function subCategory()
    {
        //tạo model
        //tạo view
        $this->getView('dashboard', ['detail' => 'subCategory']);
    }
}
