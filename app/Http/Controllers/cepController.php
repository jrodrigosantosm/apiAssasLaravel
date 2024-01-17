<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cepController extends Controller
{
    public function show(string $id)
    {   die('aqui');     
        $url = 'https://viacep.com.br/ws/' . $id . '/json/';
        $response = file_get_contents($url);
        
        if ($response === false) {
            die('Erro ao acessar a API');
        }
        
        $data = json_decode($response, true);
        
        if ($data === null) {
            die('Erro ao decodificar o JSON da API');
        }
        print_r($data);
    }

}
