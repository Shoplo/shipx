<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 13:14
 */

namespace Shoplo\ShipX\Model\DispatchOrder;

use JMS\Serializer\Annotation as Serializer;

class DispatchOrderAddressResponse extends DispatchOrderAddress
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $id;
}