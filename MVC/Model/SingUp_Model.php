<?php
require '/var/www/html/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class SingUp_Model
{
 private static $idemp;
public function __construct()
{

}    
    public function novaEmpresa($nome, $email, $senha, $senha_usuario, $nome_usuario, $email_usuario)
    {
        $client = new Client(['base_uri' => 'http://localhost:8000/api/']);
        

        try 
        {
            
            $response = $client->request('POST', 'enviar-empresa', [
                'form_params' => [
                    'nome' => $nome,
                    'email' => $email,
                    'senha' => $senha
                ]
            ]);

      
            $responseData = json_decode($response->getBody(), true);
            
            
            print_r($responseData);
            
            $valor = $this->setIdempresa($email);
            if($valor < 0)
            {
                echo "valor errado";
                return false;
            }
            else
            {
                $bolean = $this->novoUsuario($nome_usuario, $email_usuario, $valor, $senha_usuario);
                return $bolean;
            }
        } 
        catch (RequestException $e) 
        {
            
            echo "Erro ao adicionar Empresa: " . $e->getMessage();
            return false;
        }
    }

    public function setIdempresa($email)
    {
        $client = new Client(['base_uri' => 'http://localhost:8000/api/']);
    try
    {
        $response = $client->request('GET', "empresa-id?email={$email}");
        $responseData = json_decode($response->getBody(), true);
        
        if (isset($responseData['id'])) 
        {
            $idempresa = $responseData['id'];
            $this->idemp = $idempresa;
            echo "ID da Empresa: " . $idempresa;
            return $idempresa;
        } 
        else 
        {
            echo "Erro: " . $responseData['error'];
            return -1;
        }
    }
    catch (RequestException $e) 
    {
            
        echo "Erro ao procurar idempresa: " . $e->getMessage();
    }  
    }

    public function novoUsuario($nome_usuario, $email_usuario, $id_empresa, $senha_usuario)
    {
        echo "nome_usuario = {$nome_usuario}, email: {$email_usuario}, id= {$id_empresa}, senha = {$senha_usuario}";
        $client = new Client(['base_uri' => 'http://localhost:8000/api/']);
        

        try 
        {
            $nome = "Usuario_Primario";
            $nivel = 3;
            $response = $client->request('POST', 'enviar-usuario', [
                'form_params' => [
                    'nome' => $nome,
                    'nome_usuario' => $nome_usuario,
                    'email' => $email_usuario,
                    'senha' => $senha_usuario,
                    'nivel' => $nivel,
                    'idempresa' => $id_empresa
                ]
            ]);

      
            $responseData = json_decode($response->getBody(), true);
            
            
            print_r($responseData);
            return true;
           
        } 
        catch (RequestException $e) 
        {
            
            echo "Erro ao adicionar Empresa: " . $e->getMessage();
            return false;
        }

    }
    
}


?>