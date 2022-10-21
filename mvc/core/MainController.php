<?php
//controller này sẽ gọi đến model, view tương ứng
class MainController
{
    protected function getModel($model)
    {
        if (file_exists('./mvc/models/' . $model . '.php'))
            require_once('./mvc/models/' . $model . '.php');
        return new $model;
    }
    //$data truyền dữ liệu để tương tác bên view
    protected function getView($view, $data = [])
    {
        if (file_exists('./mvc/views/' . $view . '.php'))
            require_once('./mvc/views/' . $view . '.php');
    }
}
