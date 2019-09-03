<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:10
 */

namespace Shoplo\ShipX\Model\Tracking\Response;

use JMS\Serializer\Annotation as Serializer;
use Shoplo\ShipX\Model\Shipment\Request\ShipmentRequest;

class TrackingResponse
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $trackingNumber;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $type;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $service;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $status;

    /**
     * @var TrackingDetailsResponse[]
     * @Serializer\Type("array<Shoplo\ShipX\Model\Tracking\Response\TrackingDetailsResponse>")
     */
    public $trackingDetails;

    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'', '', 'Y-m-d\TH:i:s.uP'>")
     */
    public $createdAt;

    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'', '', 'Y-m-d\TH:i:s.uP'>")
     */
    public $updatedAt;
}