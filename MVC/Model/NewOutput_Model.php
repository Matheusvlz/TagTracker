<?php

require '/var/www/html/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class NewOutput_Model
{
    function registrarSaida($produto, $idempresa)
    {
        $valor = 2;

        $client = new Client(['base_uri' => 'http://localhost:8000/api/']);
        try 
        {
            
            $response = $client->request('POST', 'enviar-arduino', [
                'form_params' => [
                    'produto' => $produto,
                    'valor' => $valor,
                    'idempresa' => $idempresa
                   
                ]
            ]);

      
            $responseData = json_decode($response->getBody(), true);
            
            
            print_r($responseData);
            
        
            echo "Entrada Enviada com sucesso!";
        } 
        catch (RequestException $e) 
        {
            
            echo "Erro ao adicionar entrada: " . $e->getMessage();
        }
    }
}