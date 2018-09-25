<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 11:47
 */

namespace Shoplo\ShipX\Resource;

use Shoplo\ShipX\Model\DispatchPoint\DispatchPointCollectionResponse;
use Shoplo\ShipX\Model\DispatchPoint\DispatchPointResponse;
use Shoplo\ShipX\ShipXClient;

class DispatchPointResource
{
    /** @var ShipXClient */
    private $shipXClient;

    /**
     * DispatchPointResource constructor.
     * @param ShipXClient $shipXClient
     */
    public function __construct(ShipXClient $shipXClient)
    {
        $this->shipXClient = $shipXClient;
    }

    private function getDispatchPointsUrl($id = null)
    {
        if (null === $id) {
            return sprintf('/v1/organizations/%s/dispatch_points', $this->shipXClient->organizationId);
        }

        return sprintf('/v1/dispatch_points/%s', $id);
    }

    public function getDispatchPoints(array $parameters = [])
    {
        return $this->shipXClient->get(
            DispatchPointCollectionResponse::class,
            $this->getDispatchPointsUrl(),
            $parameters
        );
    }

    public function getDispatchPoint($dispatchPointId)
    {
        return $this->shipXClient->get(
            DispatchPointResponse::class,
            $this->getDispatchPointsUrl($dispatchPointId)
        );
    }
}