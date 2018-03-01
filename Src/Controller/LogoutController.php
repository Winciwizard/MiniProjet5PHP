<?php

    namespace Src\Controller;


    /**
     * Class LogoutController
     *
     * @package Src\Controller
     */
    class LogoutController extends Controller
    {
        public function __construct()
        {
            parent::__construct();

            $this->sessionProtect();
            $this->deConnect();

        }

        public function deConnect(){
            if(isset($_POST['logout'])){

                //suppression des variable de session et de la session
                $_SESSION = [];
                session_destroy();

                //Suppression des cookies
                setcookie('connect', '');

                header('Location: ?page=login');
                exit;
            }
        }

        public function sessionProtect(){
            if (!isset($_SESSION['connect'])||$_SESSION['connect']!==1){
                header('Location: ?page=login');
                exit;
            }
        }

    }