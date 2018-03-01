<?php

    namespace Src\Controller;


    /**
     * Class LoginController
     *
     * @package Src\Controller
     */
    class LoginController extends Controller
    {
        public function __construct()
        {
            parent::__construct();

            $this->cookieConnect();
            $this->stayConnect();
            $this->connect();


        }

        public function connect(){

            if (isset($_POST['pseudo'])
            AND $_POST['pseudo'] == "vincent"
            AND isset($_POST['pass'])
            AND $_POST['pass'] == "123456")
                {

                    $_SESSION['connect'] = 1;
                    //Variable de session
                    $_SESSION['pseudo'] = $_POST['pseudo'];



                    header('Location: ?page=logout');
                    exit;
                }
        }

        public function stayConnect(){
            if(isset($_POST['remember_me']) && $_POST['remember_me'] === 'ok'){
                //Variable de cookies
                setcookie('connect',1);
            }
        }

        public function cookieConnect(){
            if (isset($_COOKIE['connect']) && $_COOKIE['connect']==1){
                header('Location: ?page=logout');
                exit;
            }
        }
    }