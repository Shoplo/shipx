<?php

namespace Shoplo\ShipX\Model\Shipment\Response;

use JMS\Serializer\Annotation as Serializer;

class OfferResponse
{
    /**
     * @var int
     * @Serializer\Type("int")
     */
    public $id;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $status;

    /**
     * @var UnavailabilityReasonResponse[]
     * @Serializer\Type("array<Shoplo\ShipX\Model\Shipment\Response\UnavailabilityReasonResponse>")
     */
    public $unavailabilityReasons;
}
