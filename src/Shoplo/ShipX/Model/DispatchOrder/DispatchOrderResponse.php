<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:21
 */

namespace Shoplo\ShipX\Model\DispatchOrder;

use JMS\Serializer\Annotation as Serializer;
use Shoplo\ShipX\Model\DispatchPoint\DispatchOrderAddressRequest;

class DispatchOrderResponse
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $href;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $id;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $status;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $externalId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $price;

    /**
    /**
     * @var DispatchOrderAddressRequest
     * @Serializer\Type("Shoplo\ShipX\Model\DispatchPoint\DispatchOrderAddressRequest")
     */
    public $address;

    /**
     * @var DispatchOrderShipmentResponse[]
     * @Serializer\Type("array<Shoplo\ShipX\Model\DispatchOrder\DispatchOrderShipmentResponse>")
     */
    public $shipments;

    /**
     * @var DispatchOrderCommentResponse[]
     * @Serializer\Type("array<Shoplo\ShipX\Model\DispatchOrder\DispatchOrderCommentResponse>")
     */
    public $comments;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $updatedAt;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $createdAt;
}