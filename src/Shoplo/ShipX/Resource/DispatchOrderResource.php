<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 11:47
 */

namespace Shoplo\ShipX\Resource;

use Shoplo\ShipX\Model\DispatchOrder\DispatchOrderCollectionRequest;
use Shoplo\ShipX\Model\DispatchOrder\DispatchOrderCollectionResponse;
use Shoplo\ShipX\Model\DispatchOrder\DispatchOrderManifestRequest;
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

    private function dispatchOrderManifestUrl($id = null)
    {
        if (null !== $id) {

            return sprintf('/v1/dispatch_orders/%s/printout', $id);
        }
        return sprintf('/v1/organizations/%s/dispatch_orders/printouts', $this->shipXClient->organizationId);
    }

    public function createDispatchOrder(DispatchOrderRequest $request)
    {
        $response = $this->shipXClient->post(
            $this->dispatchOrderUrl(),
            $this->shipXClient->serializer->serialize(
                $request,
                'json'
            )
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

    public function getDispatchOrderCollection(DispatchOrderCollectionRequest $request)
    {
        return $this->shipXClient->get(
            DispatchOrderCollectionResponse::class,
            $this->dispatchOrderUrl(null),
            $request->converToParams()
        );
    }

    public function cancelDispatchOrder($dispatchOrderId)
    {
        return $this->shipXClient->delete(
            $this->dispatchOrderUrl($dispatchOrderId)
        );
    }

    public function getDispatchManifest(DispatchOrderManifestRequest $request)
    {
        if ($request->dispatchOrderId) {

            $url = $this->dispatchOrderManifestUrl($request->dispatchOrderId);
        } else {

            $url = $this->dispatchOrderManifestUrl();
        }

        return $this->shipXClient->get(
            ShipXClient::MANIFEST_TYPE,
            $url,
            $request->converToParams()
        );
    }
}