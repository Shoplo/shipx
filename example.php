<?php
//echo phpinfo();exit;
require_once __DIR__.'/vendor/autoload.php';

ini_set('display_errors', 'TRUE');
error_reporting(E_ALL);


$accessToken = 'XXX';

$guzzleAdapter = new \Shoplo\ShipX\Guzzle\GuzzleAdapter(
    new \GuzzleHttp\Client(['base_uri' => \Shoplo\ShipX\ShipXClient::API_SANDBOX_BASE_URI])
);
$guzzleAdapter->setAccessToken($accessToken);
$client = new \Shoplo\ShipX\ShipXClient($guzzleAdapter, \JMS\Serializer\SerializerBuilder::create()->build());

//$organizationResource = new \Shoplo\ShipX\Resource\OrganizationResource($client);
//$rsp = $organizationResource->getOrganizations();
//$rsp = $organizationResource->getOrganization(111);
//print_r($rsp);exit;

$address = new \Shoplo\ShipX\Model\Shipment\Request\AddressRequest();
//$address->line1 = 'Do Przystani 123';
$address->city = 'Kraków';
$address->countryCode = 'PL';
$address->postCode = '30-255';
$address->street = 'ulica';
$address->buildingNumber = '123';

$receiver = new \Shoplo\ShipX\Model\Shipment\Request\ReceiverRequest();
$receiver->firstName = 'Adrian';
$receiver->lastName = 'Adamiec';
$receiver->phone = '123123123';
$receiver->email = 'adrian.adamiec@shoplo.com';
$receiver->address = $address;

$dimensions = new \Shoplo\ShipX\Model\Shipment\Request\DimensionsRequest();
$dimensions->height = '80';
$dimensions->length = '80';
$dimensions->width = '80';
$dimensions->unit = 'mm';

$weight = new \Shoplo\ShipX\Model\Shipment\Request\WeightRequest();
$weight->amount = '1';

//$customAttr = new \Shoplo\ShipX\Model\Shipment\Request\CustomAttributesRequest();
//$customAttr->targetPoint = 'KRA010';

$parcel = new \Shoplo\ShipX\Model\Shipment\Request\ParcelRequest();
$parcel->dimensions = $dimensions;
$parcel->weight = $weight;


$shipment = new \Shoplo\ShipX\Model\Shipment\Request\ShipmentRequest();
$shipment->comments = 'lorem ipsum';
$shipment->receiver = $receiver;
$shipment->parcels[] = $parcel;
$shipment->isReturn = true;
//$shipment->customAttributes = $customAttr;
$shipment->service = 'inpost_courier_standard';//inpost_courier_standard | inpost_locker_standard
$shipment->onlyChoiceOfOffer = false;

$client->organizationId = '111';
$shipmentResource = new \Shoplo\ShipX\Resource\ShipmentResource($client);
//$serviceResource = new \Shoplo\ShipX\Resource\ServiceResource($client);
try {
    /** @var \Shoplo\ShipX\Model\Shipment\Response\ShipmentResponse $rsp */
//    $rsp = $shipmentResource->createShipment($shipment);
//    $rsp = $shipmentResource->getShipments(163640);
//    $rsp = $shipmentResource->buyShipment(162501, 243087);
//    $rsp = $shipmentResource->cancelShipment(161122);
//    $rsp = $serviceResource->getServices();
//    print_r($rsp);exit;
} catch(\Shoplo\ShipX\Exception\BaseException $e) {
    print_r($e->getResponseParsed());exit;
}

$shipmentId = 163640;
//$labelRequest = new \Shoplo\ShipX\Model\Shipment\Request\ShipmentLabelRequest();
//$labelRequest->format = \Shoplo\ShipX\Model\Shipment\Request\ShipmentLabelRequest::SHIPMENT_LABEL_FORMAT_PDF;
//$labelRequest->shipmentIds[] = $shipmentId;
//$labelRequest->type = \Shoplo\ShipX\Model\Shipment\Request\ShipmentLabelRequest::SHIPMENT_LABEL_TYPE_NORMAL;
//$rsp = $shipmentResource->getShipmentLabel($labelRequest);
//
//header("Content-type:application/pdf");
//echo $rsp;exit;

$labelRequest = new \Shoplo\ShipX\Model\Shipment\Request\ShipmentLabelRequest();
$labelRequest->format = \Shoplo\ShipX\Model\Shipment\Request\ShipmentLabelRequest::SHIPMENT_LABEL_FORMAT_PDF;
$labelRequest->shipmentIds[] = $shipmentId;
$labelRequest->type = \Shoplo\ShipX\Model\Shipment\Request\ShipmentLabelRequest::SHIPMENT_LABEL_TYPE_NORMAL;
$rsp = $shipmentResource->getShipmentReturnLabel($labelRequest);

header("Content-type:application/pdf");
echo $rsp;exit;

//$dispatchPointResource = new \Shoplo\ShipX\Resource\DispatchPointResource($client);
$dispatchOrder = new \Shoplo\ShipX\Resource\DispatchOrderResource($client);
//$createDispatchOrderRequest = new \Shoplo\ShipX\Model\DispatchOrder\DispatchOrderRequest();
//$createDispatchOrderRequest->shipments = [$shipmentId];
//
//$addressReq = new \Shoplo\ShipX\Model\DispatchPoint\DispatchOrderAddressRequest();
//$addressReq->city = 'Kraków';
//$addressReq->countryCode = 'PL';
//$addressReq->postCode = '30-255';
//$addressReq->street = 'ulica';
//$addressReq->buildingNumber = '123';
//
//$createDispatchOrderRequest->address = $addressReq;
//$rsp = $dispatchOrder->createDispatchOrder($createDispatchOrderRequest);
$rsp = $dispatchOrder->getDispatchOrder(6010);
//$rsp = $dispatchOrder->cancelDispatchOrder(6009);
print_r($rsp);exit;
//6009
//exit;
