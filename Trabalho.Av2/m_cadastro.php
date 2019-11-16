<?php

class Cadastro
{
    public function getAll()
    {
        try {
            $db= new PDO('mysql:host=localhost;dbname=id11614512_contato_db', 'root', '123456');

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
            $db= new PDO('mysql:host=localhost;dbname=id11614512_contato_db', 'root', '123456');

            $sth = $db->prepare("INSERT INTO contato (nome, email, celular, cep, endereco, complemento, bairro, cidade, estado, sexo, senha)
            VALUES (:nome, :email, :celular, :cep, :endereco, :complemento, :bairro, :cidade, :estado, :sexo, :senha)");
            
    
            $sth->execute(array(":nome" => $dados["nome"], ":email" => $dados["email"], ":celular" => $dados["celular"],
             ":cep" => $dados["cep"],  ":endereco" => $dados["endereco"], ":complemento"  => $dados["complemento"], 
             ":bairro" => $dados["bairro"], ":cidade" => $dados["cidade"] , ":estado" => $dados["estado"]
            , ":sexo" => $dados["sexo"], ":senha" => $dados["senha"] ));    
            
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