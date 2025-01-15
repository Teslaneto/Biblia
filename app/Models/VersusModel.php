<?php
namespace App\Models;

class VersusModel
{

    public static function apiVersus()
    {
        $url = "https://bible-api.com/Genesis+1?translation=almeida";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        $response = curl_exec($ch);

        if($response === false){
            die("Erro na requisição com a API". curl_error($ch));
        }

        curl_close($ch);

        $data = json_decode($response, true);

        if(json_last_error()!== JSON_ERROR_NONE){
            die("Error ao decodificar o Json". json_last_error());
        }

        if(!isset($data['verses'])){
            die("A resposta da API não contem a chave 'verses'");
        }

        return $data;
    }
    public static function apiLivro($livroCapitulo)
    {
        $url = "https://bible-api.com/".$livroCapitulo."?translation=almeida";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        $response = curl_exec($ch);

        if($response === false){
            die("Erro na requisição com a API". curl_error($ch));
        }

        curl_close($ch);

        $data = json_decode($response, true);

        if(json_last_error()!== JSON_ERROR_NONE){
            die("Error ao decodificar o Json". json_last_error());
        }

        if(!isset($data['verses'])){
            die("A resposta da API não contem a chave 'verses'");
        }

        return $data;
    }

}

