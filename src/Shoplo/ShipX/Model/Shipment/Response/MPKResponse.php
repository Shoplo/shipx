<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 26.09.2018
 * Time: 11:03
 */

namespace Shoplo\ShipX\Model\Shipment\Response;

use JMS\Serializer\Annotation as Serializer;

class MPKResponse
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $id;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $name;
}