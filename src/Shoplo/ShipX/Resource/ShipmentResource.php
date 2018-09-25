<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 11:47
 */

namespace Shoplo\ShipX\Resource;

use Shoplo\ShipX\Model\Organization\OrganizationCollectionResponse;
use Shoplo\ShipX\Model\Shipment\ShipmentLabelRequest;
use Shoplo\ShipX\Model\Shipment\ShipmentRequest;
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

    private function labelShipmentUrl($id = null)
    {
        return sprintf('/v1/organizations/%s/shipments/labels', $this->shipXClient->organizationId);
    }

    private function shipmentUrl($shipmentId)
    {
        return sprintf('/v1/shipments/%s', $shipmentId);
    }

    public function createShipment(ShipmentRequest $request)
    {
        $response = $this->shipXClient->post(
            $this->shipXClient->serializer->serialize(
                $request,
                'json'
            ),
            $this->createShipmentUrl()
        );

        return $this->shipXClient->serializer->deserialize($response, ShipmentRequest::class, 'json');
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
            $this->shipXClient->serializer->serialize(
                $request,
                'json'
            ),
            $this->labelShipmentUrl()
        );
    }
}