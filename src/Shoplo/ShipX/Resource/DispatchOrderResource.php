<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 11:47
 */

namespace Shoplo\ShipX\Resource;

use Shoplo\ShipX\Model\DispatchOrder\DispatchOrderRequest;
use Shoplo\ShipX\Model\DispatchOrder\DispatchOrderResponse;
use Shoplo\ShipX\ShipXClient;

class DispatchOrderResource
{
    /** @var ShipXClient */
    private $shipXClient;

    /**
     * DispatchOrderResource constructor.
     * @param ShipXClient $shipXClient
     */
    public function __construct(ShipXClient $shipXClient)
    {
        $this->shipXClient = $shipXClient;
    }

    private function dispatchOrderUrl($id = null)
    {
        if (null === $id) {
            return sprintf('/v1/organizations/%s/dispatch_orders', $this->shipXClient->organizationId);
        }

        return sprintf('/v1/dispatch_orders/%s', $id);
    }

    public function createDispatchOrder(DispatchOrderRequest $request)
    {
        $response = $this->shipXClient->post(
            $this->shipXClient->serializer->serialize(
                $request,
                'json'
            ),
            $this->dispatchOrderUrl()
        );

        return $this->shipXClient->serializer->deserialize($response, DispatchOrderResponse::class, 'json');
    }

    public function getDispatchOrder($dispatchOrderId)
    {
        return $this->shipXClient->get(
            DispatchOrderResponse::class,
            $this->dispatchOrderUrl($dispatchOrderId)
        );
    }

    public function cancelDispatchOrder($dispatchOrderId)
    {
        return $this->shipXClient->delete(
            $this->dispatchOrderUrl($dispatchOrderId)
        );
    }
}