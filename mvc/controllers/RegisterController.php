<?php
class Register extends MainController
{

    function show()
    {
        $view = $this->getView('register', []);
    }
}
