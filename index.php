<?php

require_once "./vendor/autoload.php";

// "willdurand/geocoder": "~2.8"
$geocoderAdapter = new \Geocoder\HttpAdapter\SocketHttpAdapter();
$geocoderProvider = new \Geocoder\Provider\GoogleMapsProvider($geocoderAdapter);
$geocoder = new \Geocoder\Geocoder($geocoderProvider);

// geocode() retorna un objeto GeoCodedº
$obj = $geocoder->geocode('Kokoriko, Bogotá, Colombia');

// se pueden ver los datos del objeto usando print_r
print_r( $obj );

// se pueden obtener los datos usando los métodos del objeto
echo "Longitud : " . $obj->getLongitude() . "\n";
echo "Latitud  : " . $obj->getLatitude() . "\n";