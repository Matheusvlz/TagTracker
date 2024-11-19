<?php
require '/var/www/html/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
class OutputTable_Model
{
    function carregarUID($idempresa)
    {
        $client = new Client();

        try 
        {
          
            $response = $client->post('http://127.0.0.1:8000/api/buscar-dados-saida', [
                'json' => ['idempresa' => $idempresa],
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            if ($response->getStatusCode() == 200)
            {
              
                $produtos = json_decode($response->getBody(), true);
                return $produtos;
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

    function carregarTabela($idempresa)
    {
        $client = new Client();

        try 
        {
          
            $response = $client->post('http://127.0.0.1:8000/api/buscar-tabela-saida', [
                'json' => ['idempresa' => $idempresa],
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            if ($response->getStatusCode() == 200)
            {
                $produtos = json_decode($response->getBody(), true);
                return $produtos;
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


    function deletarEntrada($uid, $idempresa)
    {
        $client = new Client(['base_uri' => 'http://localhost:8000/api/']);

        try 
        {
            $response = $client->delete('deletar-saida', [
                'json' => [
                    'uid' => $uid,
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
            echo "Erro ao deletar produto: " . $e->getMessage();
         }
    }
}