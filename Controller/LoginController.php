<?php
class LoginController {
    private $userModel;

    public function __construct() {
        $this->userModel = new LoginModel();
    }

    public function login($username, $password) {
        // Call the login method of the LoginModel class
        $result = $this->userModel->login($username, $password);

        if ($result !== false) {
            $_SESSION['id_users'] = $result['id_users'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['level'] = $result['level'];

            if ($result['level'] == 'admin') {
                header("Location: view/admin.php");
            } else if ($result['level'] == 'super admin') {
                header("Location: view/superadmin.php");
            } else {
                header("Location: view/user.php");
            }

            exit();
        } else {
            echo "Username or password is incorrect";
        }
    }

    public function handleForm() {
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->login($username, $password);
        }
    }
}
