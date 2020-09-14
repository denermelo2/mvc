<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

   //Guarda o usuário logado
   private $loggedUser;
    
   //Primeira coisa que executa
   public function __construct(){

        $this->loggedUser = LoginHandler::checkLogin();
        if($this->loggedUser === false){ 
            $this->redirect("/login");
        }
   }
    public function index() {
        $this->render('home', ['nome' => 'Dener']);
    }


}