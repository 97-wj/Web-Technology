<?php
require_once __DIR__ . '/../model/User.php';
require_once __DIR__ . '/../config/Database.php';

class AuthController {
    private $user;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->user = new User($db);
    }

    public function login() {
        session_start();
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            
            if (empty($email) || empty($password)) {
                $msg = "Please fill all fields";
                include __DIR__ . '/../View/auth/login.php';
                return;
            }

            $user = $this->user->findByEmail($email);
            
            if ($user && $user['password'] === $password) {
                $_SESSION['user'] = $user['email'];
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_type'] = $user['user_type'];
                
                // Fixed paths with absolute URLs
                $base_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);
                
                if ($user['user_type'] == 'admin') {
                    header('Location: ' . $base_url . '/View/admin/dashboard.php');
                } else {
                    header('Location: ' . $base_url . '/View/user/dashboard.php');
                }
                exit();
            } else {
                $msg = "Incorrect email or password!";
                include __DIR__ . '/../View/auth/login.php';
            }
        } else {
            include __DIR__ . '/../View/auth/login.php';
        }
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $cpassword = trim($_POST['cpassword']);
            $user_type = $_POST['user_type'];
            
            // Validation
            if (empty($name) || empty($email) || empty($password) || empty($cpassword)) {
                $msg = "Please fill all fields";
                include __DIR__ . '/../View/auth/register.php';
                return;
            }
            
            if ($password !== $cpassword) {
                $msg = "Passwords don't match!";
                include __DIR__ . '/../View/auth/register.php';
                return;
            }
            
            if ($this->user->emailExists($email)) {
                $msg = "Email already exists!";
                include __DIR__ . '/../View/auth/register.php';
                return;
            }

            if ($this->user->create($name, $email, $password, $user_type)) {
                header('Location: index.php?action=login');
                exit();
            } else {
                $msg = "Registration failed!";
                include __DIR__ . '/../View/auth/register.php';
            }
        } else {
            include __DIR__ . '/../View/auth/register.php';
        }
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header('Location: index.php');
        exit();
    }
}
?>