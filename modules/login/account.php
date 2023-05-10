<?php

    class account
    {
        function __construct()
        {
            if(!isset($_SESSION))
            {
                session_start();
            }
        }
    

        public function login($user, $password)
        {
            if(!empty($user) && !empty($password))
            {
                if(($user == 'VSB') &&($password == 'PASSword'))
                {
                    $_SESSION['logged_in'] = true;
                    return true;
                }
                
            }

                $this->logout();
        }

        public function logout()
        {
            unset($_SESSION['logged_in']);
        }

        public function isLoggedIn()
        {
            if(isset($_SESSION['logged_in']))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
?>
