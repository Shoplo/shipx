<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 11:47
 */

namespace Shoplo\ShipX\Resource;

use Shoplo\ShipX\Model\Tracking\Response\TrackingResponse;
use Shoplo\ShipX\ShipXClient;

class TrackingResource
{
    /** @var ShipXClient */
    private $shipXClient;

    /**
     * TrackingResource constructor.
     * @param ShipXClient $shipXClient
     */
    public function __construct(ShipXClient $shipXClient)
    {
        $this->shipXClient = $shipXClient;
    }

    private function getTrackingStatusUrl(string $trackingNumber)
    {
        return sprintf('/v1/tracking/%s', $trackingNumber);
    }

    public function getTrackingHistory(string $trackingNumber)
    {
        return $this->shipXClient->get(
            TrackingResponse::class,
            $this->getTrackingStatusUrl($trackingNumber)
        );
    }
}