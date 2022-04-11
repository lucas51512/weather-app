<?php
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;
use Http\Factory\Guzzle\RequestFactory;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

require '../vendor/autoload.php';
require 'recebeDados.php';


$httpRequestFactory = new RequestFactory();
$httpClient = GuzzleAdapter::createWithConfig([]);

$own = new OpenWeatherMap('2be75ff732e7ec46598d2b21fce52817', $httpClient, $httpRequestFactory);

if(isset($_POST['dados'])){
    try {

        $weather = $own->getWeather("$cidade", 'metric', 'de');
    } catch (OWMException $e) {
        echo 'OpenWeatherMap exception: ' . $e->getMessage() . '  (Code' . $e->getCode() . ').';
    } catch (\Exception $e) {
        echo 'General exception: ' .  $e->getMessage() . '(Code' . $e->getCode() . ').';
    }

    $dados = json_encode($weather->temperature);

    echo $dados;
}

