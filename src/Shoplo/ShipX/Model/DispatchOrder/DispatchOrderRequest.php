<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:21
 */

namespace Shoplo\ShipX\Model\DispatchOrder;

use JMS\Serializer\Annotation as Serializer;

class DispatchOrderRequest
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $dispatchPointId;

    /**
     * @var string[]
     * @Serializer\Type("array<string>")
     */
    public $shipments;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $comment;

    /**
     * @var DispatchOrderAddressRequest
     * @Serializer\Type("Shoplo\ShipX\Model\DispatchOrder\DispatchOrderAddressRequest")
     */
    public $address;
}