<?php
require '/var/www/html/vendor/autoload.php';
require 'Login_Model.php';
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class NewSupplier_Model
{
    public function addSupplier($nome, $endereco, $email, $cnpj)
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
            
            $response = $client->request('POST', 'enviar-fornecedor', [
                'form_params' => [
                    'nome_fornecedor' => $nome,
                    'endereco' => $endereco,
                    'email' => $email,
                    'cnpj' => $cnpj,
                    'idempresa' => $idempresa
                ]
            ]);

      
            $responseData = json_decode($response->getBody(), true);
            
            
            print_r($responseData);
            
        
            echo "Fornecedor adicionado com sucesso!";
        } 
        catch (RequestException $e) 
        {
            
            echo "Erro ao adicionar fornecedor: " . $e->getMessage();
        }
    }
}
?>
