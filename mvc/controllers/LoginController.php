<?php
class Login extends MainController
{
    function show()
    {
        //kiểm tra nếu đã đăng nhập r và có lưu session r thì chuyển hướng đến trang dashboard
        if (!empty($_SESSION['admin'])) header('Location: views/dashboard');
        else {
            //nếu không thì ktr đăng nhập
            $model = $this->getModel('UserModel');
            $error = $this->loginAdmin($model);
            $view = $this->getView('login', ['error' => $error]);
        }
    }
    public function loginAdmin($model)
    {
        $username = $password = null;
        $error = [];
        $error['username'] = $error['pass'] = $error['loginFail'] = null;

        //nếu đã nhấn nút login r thì kiểm tra các trường
        if (!empty($_POST['btn-login'])) {
            //trường username
            if (empty($_POST['username'])) $error['username'] = '*Cần nhập username';
            else
                $username = $_POST['username'];

            //trường pass
            if (empty($_POST['password'])) $error['pass'] = '*Cần nhập password';
            else
                //mã háo mật khẩu
                $password = $_POST['password'];

            // kiểm tra đăng nhập
            if ($username && $password) {
                $result = $model->login($username, $password);
                //kiểm tra nếu có kết quả trả về thì lưu vào session
                $check = $result->num_rows;

                if ($check > 0) {
                    $data = $result->fetch_array();
                    $_SESSION['admin'] = $data;
                    header('Location: index.php?controller=Admin&action=main');
                } else {
                    $error['loginFail'] = '*Sai thông tin đăng nhập';
                }
            }
        }
        return $error;
    }
}
