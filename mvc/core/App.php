<?php
class App
{
    protected $controller;
    protected $action;
    protected $param = [];

    function __construct()
    {
        //controller
        if (isset($_GET['controller'])) {
            $this->controller = test_input($_GET['controller']);
            //action
            if (isset($_GET['action']))
                $this->action = test_input($_GET['action']);
            else $this->action = 'show';
        } else {
            $this->controller = 'Home';
            $this->action = 'show';
        }

        if (isset($_GET['id'])) $this->param[] = test_input($_GET['id']);
        if (isset($_GET['key'])) $this->param[] = test_input($_GET['key']);
        //kiểm tra xem controller và action có tồn tại không
        $all_controllers = array(
            'Home' => ['show', 'detail', 'subCat'],
            'Login' => ['show'],
            'Register' => ['show'],
            'Admin' => ['main', 'category', 'news', 'subCategory'],
            'Search' => ['show'],
        );

        if (!array_key_exists($this->controller, $all_controllers) || !in_array($this->action, $all_controllers[$this->controller])) {
            $this->controller = 'Home';
            $this->action = 'show';
        }

        require_once('./mvc/controllers/' . $this->controller . 'Controller.php');
        //tạo đối tượng controller
        $this->controller = new $this->controller;

        call_user_func_array([$this->controller, $this->action], $this->param);
    }
}
