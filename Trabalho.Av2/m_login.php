<?php


class Login
{
    public function get()
    {
    }

     public function isValidLogin($email, $senha){
         try {
            $db= new PDO('mysql:host=localhost;dbname=contato_db', 'root', '');

            $sth = $db->prepare('Select email, senha from contato where email=:email and senha=:senha; ');
    
            $sth->execute(array(":email" => $email, ":senha" => $senha ));    
            
            if ($sth->rowCount() == 1) {
                session_start();
                $_SESSION["AUTH"] = true;
                return true;
            }          
            else{
                return false;
            }
        } catch (Exception $e) {
            echo 'Erro ' . $e->getMessage();
            exit;
        }
    }


}