<?php
require '/var/www/html/vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Login_Model
{

    public function validateLogin($email, $senha)
    {
        $client = new Client(['base_uri' => 'http://localhost:8000/api/']);
        try 
        {
            $response = $client->request('POST', 'login', [
                'form_params' => [
                    'email' => $email,
                    'senha' => $senha,
                ]
            ]);

            $responseData = json_decode($response->getBody(), true);   
            if (isset($responseData['id'])) 
            {
            $boleano = $responseData['id'];
         
            return $boleano;
            } 
            else 
            {
            echo "Erro: ";
            return false;
            }

        } 
        catch (RequestException $e) 
        {
            
            echo "Erro ao adicionar Empresa: " . $e->getMessage();
            return false;
        }
    }
    

    public function setId($email)
    {
        $client = new Client(['base_uri' => 'http://localhost:8000/api/']);
        try
        {
            $response = $client->request('GET', "usuario-id?email={$email}");
            $responseData = json_decode($response->getBody(), true);
            
            if (isset($responseData['idempresa'])) 
            {
                $idempresa = $responseData['idempresa'];
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

    public function setNivel($email)
    {
        $client = new Client(['base_uri' => 'http://localhost:8000/api/']);
        try
        {
            $response = $client->request('GET', "usuario-nivel?email={$email}");
            $responseData = json_decode($response->getBody(), true);
            
            if (isset($responseData['nivel'])) 
            {
                $nivel = $responseData['nivel'];
                return $nivel;
            } 
            else 
            {
                echo "Erro: " . $responseData['error'];
                return -1;
            }
        }
        catch (RequestException $e) 
        {          
            echo "Erro ao procurar nivel: " . $e->getMessage();
        }  
    }
}


?>