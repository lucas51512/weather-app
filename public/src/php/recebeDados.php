<?php
require_once 'openWeatherMapApi.php';
require_once 'enviaDados.php';

if(isset($_POST['dados'])){
    $usuario = $_POST['dados'];
    $dados = json_decode($usuario, true);
    $cidade = $dados["cidade"];
}



    



