<?php
namespace src\controllers;

use \core\Controller;
use \src\handlers\LoginHandler; //classe responsavel para fazer a verificação de login

class LoginController extends Controller {


        public function signin(){
            echo 'login';
        }

        public function signup (){
            echo 'cadastro';
        }

}