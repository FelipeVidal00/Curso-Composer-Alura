<?php

//Importações.
require 'vendor/autoload.php';


use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

//$client = new Client();

//Site da dos Cursos da Alura.
$client = new Client (['base_uri' => 'https://www.alura.com.br']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);

$cursos = $buscador->buscar( url: '/cursos-online-programacao/php');


//Loop para filtrar os cursos e imprimir.
foreach ($cursos as $curso) {
    echo exibeMensagem ($curso);
}

