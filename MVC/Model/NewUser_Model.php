<?php
require '/var/www/html/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
class NewUser_Model
{
    function cadastrarUsuario($nome, $user, $email, $senha, $nivel)
    {
        $client = new Client(['base_uri' => 'http://localhost:8000/api/']);
    
       
        $idempresa =-3;
        session_start();
        if (isset($_SESSION['user']))
            {
            $idempresa = $_SESSION['empresa'];
            }

        try 
        {
            
            $response = $client->request('POST', 'enviar-usuario', [
                'form_params' => [
                    'nome' => $nome,
                    'nome_usuario' => $user,
                    'email' => $email,
                    'senha' => $senha,
                    'nivel' => $nivel,
                    'idempresa' => $idempresa
                ]
            ]);

      
            $responseData = json_decode($response->getBody(), true);
            
            
            print_r($responseData);
            
        
            echo "Usuário cadastrado com sucesso!";
        } 
        catch (RequestException $e) 
        {
            
            echo "Erro ao adicionar usuário: " . $e->getMessage();
        }
    }
}

?>