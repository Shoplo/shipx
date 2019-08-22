<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:10
 */

namespace Shoplo\ShipX\Model\Shipment\Response;

use JMS\Serializer\Annotation as Serializer;
use Shoplo\ShipX\Model\Shipment\Request\ShipmentRequest;

class ShipmentResponse extends ShipmentRequest
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $href;

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
     * @var MPKResponse
     * @Serializer\Type("Shoplo\ShipX\Model\Shipment\Response\MPKResponse")
     */
    public $mpk;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $comments;

    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'', '', 'Y-m-d\TH:i:s.uP'>")
     */
    public $createdAt;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $createdById;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $reference;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $isReturn;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $trackingNumber;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $externalCustomerId;
}
