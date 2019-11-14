<?php

class Cadastro
{
    public function getAll()
    {
        try {
            $db= new PDO('mysql:host=localhost;dbname=contato_db', 'root', '');

            $sth = $db->prepare('Select id, nome, email, celular, cep, endereco, complemento, bairro, cidade, estado, sexo from contato;');
    
            $sth->execute();    
            
            if ($sth->rowCount() > 0) {
                return $sth->fetchAll();;
            }          
            else{
                return false;
            }
        } catch (Exception $e) {
            echo 'Erro ' . $e->getMessage();
            exit;
        }

    }

     public function insertContato($dados){
         try {
            $db= new PDO('mysql:host=localhost;dbname=contato_db', 'root', '');

            $sth = $db->prepare('Select email, senha from contato where email=:email and senha=:senha; ');
    
            //$sth->execute(array(":email" => $email, ":senha" => $senha ));    
            
            if ($sth->rowCount() > 0) {
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