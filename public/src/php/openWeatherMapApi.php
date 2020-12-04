<?php
use Cmfcmf\OpenWeatherMap;
use Cmfcmf\OpenWeatherMap\Exception as OWMException;
use Http\Factory\Guzzle\RequestFactory;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;

require 'src/vendor/autoload.php';

$httpRequestFactory = new RequestFactory();
$httpClient = GuzzleAdapter::createWithConfig([]);

$own = new OpenWeatherMap('2be75ff732e7ec46598d2b21fce52817', $httpClient, $httpRequestFactory);



try {
    $weather = $own->getWeather('Berlin', 'metric', 'de');
} catch (OWMException $e) {
    echo 'OpenWeatherMap exception: ' . $e->getMessage() . '  (Code' . $e->getCode() . ').';
} catch (\Exception $e) {
    echo 'General exception: ' .  $e->getMessage() . '(Code' . $e->getCode() . ').';
}

