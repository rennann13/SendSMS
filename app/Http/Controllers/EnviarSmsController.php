<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnviarSmsController extends Controller
{
    public function enviarSms()
    {
        $usuario = "bisporenan03@gmail.com";
        $senha = "Teste@2024";
        $nome = "Senna";
        $celular = "11995123956";

        $mensagem = urlencode("$nome, seu código de verificação: 123");

        $url_api = "https://api.iagentesms.com.br/webservices/http.php?metodo=envio&usuario=$usuario&senha=$senha&celular=$celular&mensagem={$mensagem}";

        $api_http = file_get_contents($url_api);

        echo $api_http;
    }
}
