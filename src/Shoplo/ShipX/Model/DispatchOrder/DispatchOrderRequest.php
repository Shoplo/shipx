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
     * @var integer
     * @Serializer\Type("integer")
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
}