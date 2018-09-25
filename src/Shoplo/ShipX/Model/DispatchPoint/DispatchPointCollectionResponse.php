<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 07:46
 */

namespace Shoplo\ShipX\Model\DispatchPoint;

use JMS\Serializer\Annotation as Serializer;
use Shoplo\ShipX\Model\Organization\AddressResponse;

class DispatchPointCollectionResponse
{
    /**
     * @var DispatchPointResponse[]
     * @Serializer\Type("array<Shoplo\ShipX\Model\DispatchPoint\DispatchPointResponse>")
     */
    public $items;
}