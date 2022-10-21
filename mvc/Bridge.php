<?php
//làm cầu nối, index sẽ gọi bridge, bridge gọi app, còn app sẽ thao tác với các file trong mvc
//bridge còn chứa code xác nhận login trước khi vào thao tác
require_once('./mvc/core/App.php');
require_once('./mvc/core/MainController.php');
require_once('./mvc/core/Database.php');
require_once('./mvc/core/filter.php');
