<?php

namespace Shoplo\ShipX\Resource;

use Shoplo\ShipX\Model\Service\ServiceCollectionResponse;
use Shoplo\ShipX\ShipXClient;

class ServiceResource
{
    /** @var ShipXClient */
    private $shipXClient;

    /**
     * ServiceResource constructor.
     * @param ShipXClient $shipXClient
     */
    public function __construct(ShipXClient $shipXClient)
    {
        $this->shipXClient = $shipXClient;
    }

    private function servicesUrl()
    {
        return '/v1/services';
    }

    public function getServices()
    {
        $rsp = $this->shipXClient->requestAdapter->get($this->servicesUrl());
        $rsp = json_decode($rsp, true);
        $servicesResponse['items'] = $rsp;

        return $this->shipXClient->serializer->deserialize(json_encode($servicesResponse), ServiceCollectionResponse::class, 'json');
    }

}