<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 11:47
 */

namespace Shoplo\ShipX\Resource;

use Shoplo\ShipX\Model\Shipment\Request\ShipmentLabelRequest;
use Shoplo\ShipX\Model\Shipment\Request\ShipmentRequest;
use Shoplo\ShipX\Model\Shipment\Response\ShipmentResponse;
use Shoplo\ShipX\ShipXClient;

class ShipmentResource
{
    /** @var ShipXClient */
    private $shipXClient;

    /**
     * ShipmentResource constructor.
     * @param ShipXClient $shipXClient
     */
    public function __construct(ShipXClient $shipXClient)
    {
        $this->shipXClient = $shipXClient;
    }

    private function createShipmentUrl($id = null)
    {
        return sprintf('/v1/organizations/%s/shipments', $this->shipXClient->organizationId);
    }

    private function buyShipmentUrl($id = null)
    {
        return sprintf('/v1/shipments/%s/buy', $id);
    }

    private function labelShipmentUrl()
    {
        return sprintf('/v1/organizations/%s/shipments/labels', $this->shipXClient->organizationId);
    }

    private function labelShipmentReturnUrl()
    {
        return sprintf('/v1/organizations/%s/shipments/return_labels', $this->shipXClient->organizationId);
    }

    private function getShipmentsUrl($id)
    {
        return sprintf('/v1/organizations/%s/shipments?id=%s', $this->shipXClient->organizationId, $id);
    }

    private function shipmentUrl($shipmentId)
    {
        return sprintf('/v1/shipments/%s', $shipmentId);
    }

    public function createShipment(ShipmentRequest $request)
    {
        $response = $this->shipXClient->post(
            $this->createShipmentUrl(),
            $this->shipXClient->serializer->serialize(
                $request,
                'json'
            )
        );

        return $this->shipXClient->serializer->deserialize($response, ShipmentResponse::class, 'json');
    }

    public function buyShipment($shipmentId, $offerId)
    {
        $response = $this->shipXClient->post(
            $this->buyShipmentUrl($shipmentId),
            $this->shipXClient->serializer->serialize(
                ["offer_id" => $offerId],
                'json'
            )
        );

        return $this->shipXClient->serializer->deserialize($response, ShipmentResponse::class, 'json');
    }

    public function cancelShipment($shipmentId)
    {
        return $this->shipXClient->delete(
            $this->shipmentUrl($shipmentId)
        );
    }

    public function getShipmentLabel(ShipmentLabelRequest $request)
    {
        return $this->shipXClient->post(
            $this->labelShipmentUrl(),
            $this->shipXClient->serializer->serialize(
                $request,
                'json'
            )
        );
    }

    public function getShipmentReturnLabel(ShipmentLabelRequest $request)
    {
        return $this->shipXClient->post(
            $this->labelShipmentReturnUrl(),
            $this->shipXClient->serializer->serialize(
                $request,
                'json'
            )
        );
    }

    public function getShipments($id)
    {
        return $this->shipXClient->get(
            ShipmentResponse::class,
            $this->getShipmentsUrl($id)
        );
    }
}