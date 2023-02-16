<?php

class Users extends Controller
{

    private $userModel;
    public function __construct()
    {
        if (isLoggedIn()) {
            redirect('Products/dashboardAdmin');
        }
        $this->userModel = $this->model('Admin');
    }
    public function register()
    {
        //check for post 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Proccess form

        } else {
            // load form
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];
            // load view
            $this->view('users/register', $data);
        }
    }

    public function login()
    {

        //check for post 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Proccess form
            //Sanatize post data 
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //Init data
            $data = [
                'email' =>  trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];
            //validate eamail 
            if (empty($data['email'])) {
                $data['email_err'] = 'please enter email';
            }
            //validate password 
            if (empty($data['password'])) {
                $data['password_err'] = 'please enter password';
            }
            if (!$this->userModel->checkEmail($data['email'])) {
                $data['email_err'] = 'User Not Found';
            }
            //make sure errors are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {

                //validated
                //check and set logged in user
                $loggedInUser = $this->userModel->login($data['email'],$data['password']);

                if ($loggedInUser) {
                    //creat a session 
                    $this->createUserSession($loggedInUser);

                } else {
                    $data['password_err'] = 'Password incorrect';
                    $this->view('users/login', $data);
                }
            } else {
                //load view with errors
                $this->view('users/login', $data);
            }
        } else {
            // load form
            $data = [

                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];
            // load view
            $this->view('users/login', $data);
        }
    }
    public function createUserSession($user)
    {
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        redirect('Products/dashboardAdmin');
    }
    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        session_destroy();
        redirect('pages/index');
    }
}
