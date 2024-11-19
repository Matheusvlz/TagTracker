<?php

require '/var/www/html/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
class NewProduct_Model
{


    function __construct()
    {

    }

    function carregarBox($idempresa)
    {
        $client = new Client();

        try 
        {
          
            $response = $client->post('http://127.0.0.1:8000/api/buscar-dados-fornecedor', [
                'json' => ['idempresa' => $idempresa],
                'headers' => [
                    'Accept' => 'application/json',
                ],
            ]);

            if ($response->getStatusCode() == 200)
            {
              
                $nomesFornecedores = json_decode($response->getBody(), true);
                return $nomesFornecedores;
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

    function criarProduto($produto, $fornecedor)
    {
    $quantidade = 0;
    $idempresa = 0;

    session_start();
    if(isset($_SESSION['user']))
    {
        $idempresa = $_SESSION['empresa'];
    }
    $client = new Client(['base_uri' => 'http://localhost:8000/api/']);
        try 
        {
            
            $response = $client->request('POST', 'enviar-produto', [
                'form_params' => [
                    'produto_nome' => $produto,
                    'fornecedor' => $fornecedor,
                    'quantidade' => $quantidade,
                    'idempresa' => $idempresa
                   
                ]
            ]);

      
            $responseData = json_decode($response->getBody(), true);
            
            
            print_r($responseData);
            
        
            echo "Produto cadastrado com sucesso!";
        } 
        catch (RequestException $e) 
        {
            
            echo "Erro ao adicionar usuário: " . $e->getMessage();
        }
    
    }
}

?>