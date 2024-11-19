<?php
require '/var/www/html/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
class ProductTable_Model
{
    function carregarProduto($idempresa)
    {
        $client = new Client();

        try 
        {
          
            $response = $client->post('http://127.0.0.1:8000/api/buscar-dados-produto', [
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
          
            $response = $client->post('http://127.0.0.1:8000/api/buscar-tabela-produto', [
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

    function deletarProduto($produto_nome, $idempresa)
    {
        $client = new Client(['base_uri' => 'http://localhost:8000/api/']);

        try 
        {
            $response = $client->delete('deletar-produto', [
                'json' => [
                    'produto_nome' => $produto_nome,
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

    function editarProduto($produto_nome, $idempresa, $novo_nome, $novo_fornecedor)
    {
        $client = new Client(['base_uri' => 'http://localhost:8000/api/']);

        try 
        {
            $response = $client->put('editar-produto', [
                'json' => [
                    'produto_nome' => $produto_nome,
                    'idempresa' => $idempresa,
                    'novo_nome' => $novo_nome,
                    'novo_fornecedor' => $novo_fornecedor,
                    
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