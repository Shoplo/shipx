<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:00
 */

namespace Shoplo\ShipX\Model\Shipment\Request;

use JMS\Serializer\Annotation as Serializer;

class DimensionsRequest
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $height;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $length;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $width;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $unit;
}