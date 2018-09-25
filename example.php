<?php
//echo phpinfo();exit;
require_once __DIR__.'/autoload.php';

ini_set('display_errors', 'TRUE');
error_reporting(E_ALL);

$guzzleAdapter = new \Shoplo\ShipX\Guzzle\GuzzleAdapter(
    new \GuzzleHttp\Client(['base_uri' => \Shoplo\ShipX\ShipXClient::API_BASE_URI])
);

$client = new \Shoplo\ShipX\ShipXClient($guzzleAdapter, \JMS\Serializer\SerializerBuilder::create()->build(),\Shoplo\ShipX\ShipXClient::API_BASE_URI);
$organizationResource = new \Shoplo\ShipX\Resource\OrganizationResource($client);
$rsp = $organizationResource->getOrganizations();

print_r($rsp);exit;
exit;
