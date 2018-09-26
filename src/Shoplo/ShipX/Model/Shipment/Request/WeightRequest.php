<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:00
 */

namespace Shoplo\ShipX\Model\Shipment\Request;

use JMS\Serializer\Annotation as Serializer;

class WeightRequest
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $amount;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $unit;
}