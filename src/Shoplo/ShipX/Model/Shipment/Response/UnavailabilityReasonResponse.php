<?php

namespace Shoplo\ShipX\Model\Shipment\Response;

use JMS\Serializer\Annotation as Serializer;

class UnavailabilityReasonResponse
{
    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $receiver;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $trucker;
}
