<?php
require '/var/www/html/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
class UserTable_Model
{
    function carregarUsuarios($idempresa)
    {
        $client = new Client();

        try 
        {
          
            $response = $client->post('http://127.0.0.1:8000/api/buscar-dados-usuario', [
                'json' => ['idempresa' => $idempresa],
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            if ($response->getStatusCode() == 200)
            {
              
                $usuarios = json_decode($response->getBody(), true);
                return $usuarios;
            } else {
                echo "Erro: " . $response->getStatusCode();
                return [];
            }
        } 
        catch (Exception $e) 
        {
            echo "Erro ao conectar com a API: " . $e->getMessage();
            return [];
        }
    }

    function carregarTabela($idempresa)
    {
        $client = new Client();
        try 
        {
            $response = $client->post('http://127.0.0.1:8000/api/buscar-tabela-usuario', [
                'json' => ['idempresa' => $idempresa],
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            if ($response->getStatusCode() == 200)
            {
              
                $usuarios = json_decode($response->getBody(), true);
                return $usuarios;
            } 
            else 
            {
                echo "Erro: " . $response->getStatusCode();
                return [];
            }
        } 
        catch (Exception $e) 
        {
            echo "Erro ao conectar com a API: " . $e->getMessage();
            return [];
        }
    }

    function deletarUsuario($user, $idempresa)
    {
        $client = new Client(['base_uri' => 'http://localhost:8000/api/']);

        try 
        {
            $response = $client->delete('deletar-usuario', [
                'json' => [
                    'nome_usuario' => $user,
                    'idempresa' => $idempresa,
                ],
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            $responseData = json_decode($response->getBody(), true);
            echo $responseData['message']; 
        }
         catch (RequestException $e) 
         {
            echo "Erro ao deletar usuario: " . $e->getMessage();
         }
    }

    function editarUsuario($user, $idempresa, $senha, $nivel)
    {
        $client = new Client(['base_uri' => 'http://localhost:8000/api/']);

        try 
        {
            $response = $client->put('editar-usuario', [
                'json' => [
                    'nome_usuario' => $user,
                    'idempresa' => $idempresa,
                    'senha' => $senha,
                    'nivel' => $nivel,
                    
                ],
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            $responseData = json_decode($response->getBody(), true);
            echo $responseData['message']; 
        } 
        catch (RequestException $e) 
        {
            echo "Erro ao editar produto: " . $e->getMessage();
        }
    }
}