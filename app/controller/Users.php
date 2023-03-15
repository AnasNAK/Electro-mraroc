<?php

class Users extends Controller
{

    public $clientModel;
    public $adminModel;
    public function __construct()
    {
        if (isLoggedIn()) {
            redirect('Products/dashboardAdmin');
        }
        $this->clientModel = $this->model('Client');
        $this->adminModel = $this->model('Admin');
    }
    public function register()
    {
        //check for post 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //Init data
            $data = [
                'fullname' => trim($_POST['fullname']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'phone' => trim($_POST['phone']),
                'confirm_password' => trim($_POST['confirm_password']),
                'fullname_err' => '',
                'phone_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];
            //validate eamail 
            if (empty($data['email'])) {
                $data['email_err'] = 'please enter email';
            }
            //validate password 
            if (empty($data['password'])) {
                $data['password_err'] = 'please enter password';
            }
            if (empty($data['password'])) {
                $data['password_err'] = 'please enter password';
            }
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'please enter password';
            }
            if (empty($data['fullname'])) {
                $data['fullname_err'] = 'please enter your fullname';
            }
            if (empty($data['phone'])) {
                $data['phone_err'] = 'please enter your phone number';
            }
           if($data['password'] != $data['confirm_password']){
            $data['confirm_password_err'] = 'pssword not match ';
           }

           $Registerduser = $this->clientModel->addUser($data);

           if($Registerduser){
                $this->createUserSession($Registerduser);
           }else{
                die("There's a problem in the registration seystem , please try later!");
           }

            // Proccess form

        } else {
            // load form
            $data = [
                'fullname' => '',
                'email' => '',
                'password' => '',
                'phone' => '',
                'confirm_password' => '',
                'name_err' => '',
                'phone_err' => '',
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
            if ($this->adminModel->checkEmailadmin($data['email'])) {
        
            }elseif($this->clientModel->checkEmail($data['email'])){
               
            }else{
                $data['email_err'] = 'User Not Found'; 
            }
          
            //make sure errors are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {

                //validated
                //check and set logged in user
                $loggedInclient = $this->clientModel->loginclient($data['email'], $data['password']);
                $loggedInadmin = $this->adminModel->loginadmin($data['email'], $data['password']);

                if ($loggedInclient) {
                    //creat a session 
                    $this->createUserSession($loggedInclient);
                } elseif($loggedInadmin) {
                    $this->createUserSession($loggedInadmin);
                redirect ('Products/dashboardAdmin') ;
                }else{
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
        $_SESSION['user_role'] = $user->status;
        if($_SESSION['user_role'] === 'admin') {
            redirect('Products/dashboardAdmin');
        }else{
            redirect('pages/index');
        }
    }
    public function logout()
    {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        session_destroy();
        redirect('pages/index');
    }
}
