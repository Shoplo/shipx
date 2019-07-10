<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:21
 */

namespace Shoplo\ShipX\Model\DispatchOrder;

use JMS\Serializer\Annotation as Serializer;

class DispatchOrderShipmentResponse
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
    public $trackingNumber;
}