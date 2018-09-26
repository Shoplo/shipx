<?php
//echo phpinfo();exit;
require_once __DIR__.'/autoload.php';

ini_set('display_errors', 'TRUE');
error_reporting(E_ALL);

$accessToken = 'xxx';

$guzzleAdapter = new \Shoplo\ShipX\Guzzle\GuzzleAdapter(
    new \GuzzleHttp\Client(['base_uri' => \Shoplo\ShipX\ShipXClient::API_SANDBOX_BASE_URI])
);
$guzzleAdapter->setAccessToken($accessToken);
$client = new \Shoplo\ShipX\ShipXClient($guzzleAdapter, \JMS\Serializer\SerializerBuilder::create()->build(),\Shoplo\ShipX\ShipXClient::API_BASE_URI);

//$organizationResource = new \Shoplo\ShipX\Resource\OrganizationResource($client);
//$rsp = $organizationResource->getOrganizations();
//$rsp = $organizationResource->getOrganization(111);

//$address = new \Shoplo\ShipX\Model\Shipment\Request\AddressRequest();
//$address->line1 = 'Do Przystani 123';
//$address->city = 'Kraków';
//$address->countryCode = 'PL';
//$address->postCode = '30-255';
//
//$receiver = new \Shoplo\ShipX\Model\Shipment\Request\ReceiverRequest();
//$receiver->firstName = 'Adrian';
//$receiver->lastName = 'Adamiec';
//$receiver->phone = '123123123';
//$receiver->email = 'adrian.adamiec@shoplo.com';
//$receiver->address = $address;
//
//$dimensions = new \Shoplo\ShipX\Model\Shipment\Request\DimensionsRequest();
//$dimensions->height = '80';
//$dimensions->length = '80';
//$dimensions->width = '80';
//$dimensions->unit = 'mm';
//
//$weight = new \Shoplo\ShipX\Model\Shipment\Request\WeightRequest();
//$weight->amount = '1';
//
//$customAttr = new \Shoplo\ShipX\Model\Shipment\Request\CustomAttributesRequest();
//$customAttr->targetPoint = 'KRA010';
//
//$parcel = new \Shoplo\ShipX\Model\Shipment\Request\ParcelRequest();
//$parcel->dimensions = $dimensions;
//$parcel->weight = $weight;
//
//$shipment = new \Shoplo\ShipX\Model\Shipment\Request\ShipmentRequest();
//$shipment->comments = 'lorem ipsum';
//$shipment->receiver = $receiver;
//$shipment->parcels[] = $parcel;
//$shipment->customAttributes = $customAttr;
//$shipment->service = 'inpost_locker_standard';
//
//$client->organizationId = '123';
//$shipmentResource = new \Shoplo\ShipX\Resource\ShipmentResource($client);
//$rsp = $shipmentResource->createShipment($shipment);

//$shipmentId = 102920;
//$labelRequest = new \Shoplo\ShipX\Model\Shipment\Request\ShipmentLabelRequest();
//$labelRequest->format = \Shoplo\ShipX\Model\Shipment\Request\ShipmentLabelRequest::SHIPMENT_LABEL_FORMAT_PDF;
//$labelRequest->shipmentIds[] = $shipmentId;
//$labelRequest->type = \Shoplo\ShipX\Model\Shipment\Request\ShipmentLabelRequest::SHIPMENT_LABEL_TYPE_NORMAL;
//$rsp = $shipmentResource->getShipmentLabel($labelRequest);

$dispatchPointResource = new \Shoplo\ShipX\Resource\DispatchPointResource($client);
$rsp = $dispatchPointResource->getDispatchPoints();
print_r($rsp);exit;
exit;
