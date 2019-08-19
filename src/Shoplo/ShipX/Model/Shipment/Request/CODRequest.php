<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:08
 */

namespace Shoplo\ShipX\Model\Shipment\Request;

use JMS\Serializer\Annotation as Serializer;

class CODRequest
{
    /**
     * @var float
     * @Serializer\Type("float")
     */
    public $amount;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $currency = 'PLN';
}
