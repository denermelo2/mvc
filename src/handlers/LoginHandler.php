<?php
namespace src\handlers;

use src\models\User;

 //classe responsavel por fazer a verificação de login
class LoginHandler {            
    
    public static function checkLogin(){
        if(!empty($_SESSION['token'])){

            $token = $_SESSION ['token'];

            $data = User::select()->where('token', $token)->one();
            if(count($data) > 0){

                $loggedUser = new User();
                $loggedUser->setId($data['codigo']);
                $loggedUser->setEmail($data['email']);
                

            }else{
                return false; 
            }



        } else{
            return false;
        }
    }

}