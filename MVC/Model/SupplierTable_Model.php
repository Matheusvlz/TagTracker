<?php
require '/var/www/html/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
class SupplierTable_Model
{
   
    function carregarTabela($idempresa)
    {
        $client = new Client();
        try 
        {
            $response = $client->post('http://127.0.0.1:8000/api/buscar-tabela-fornecedor', [
                'json' => ['idempresa' => $idempresa],
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            if ($response->getStatusCode() == 200)
            {
              
                $fornecedores = json_decode($response->getBody(), true);
                return $fornecedores;
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

    function deletarFornecedor($nome, $idempresa)
    {
        $client = new Client(['base_uri' => 'http://localhost:8000/api/']);

        try 
        {
            $response = $client->delete('deletar-fornecedor', [
                'json' => [
                    'nome_fornecedor' => $nome,
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

    function editarFornecedor($fornecedor_nome, $idempresa, $novo_nome, $novo_endereco, $novo_email)
    {
        $client = new Client(['base_uri' => 'http://localhost:8000/api/']);

        try 
        {
            $response = $client->put('editar-fornecedor', [
                'json' => [
                    'nome_fornecedor' => $fornecedor_nome,
                    'idempresa' => $idempresa,
                    'novo_nome' => $novo_nome,
                    'novo_endereco' => $novo_endereco,
                    'novo_email' => $novo_email,
                    
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