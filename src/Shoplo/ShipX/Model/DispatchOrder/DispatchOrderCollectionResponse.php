<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:21
 */

namespace Shoplo\ShipX\Model\DispatchOrder;

use JMS\Serializer\Annotation as Serializer;

class DispatchOrderCollectionResponse
{
    /**
     * @var DispatchOrderResponse[]
     * @Serializer\Type("array<Shoplo\ShipX\Model\DispatchOrder\DispatchOrderResponse>")
     */
    public $items;
}