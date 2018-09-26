<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 07:58
 */

namespace Shoplo\ShipX\Model\Shipment\Request;

use JMS\Serializer\Annotation as Serializer;

class ParcelRequest
{
    /**
     * @var DimensionsRequest
     * @Serializer\Type("Shoplo\ShipX\Model\Shipment\Request\DimensionsRequest")
     */
    public $dimensions;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $template;

    /**
     * @var WeightRequest
     * @Serializer\Type("Shoplo\ShipX\Model\Shipment\Request\WeightRequest")
     */
    public $weight;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $id;

    /**
     * @var boolean
     * @Serializer\Type("boolean")
     */
    public $is_non_standard;
}