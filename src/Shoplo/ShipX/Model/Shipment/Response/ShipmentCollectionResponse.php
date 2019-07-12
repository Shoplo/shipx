<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:10
 */

namespace Shoplo\ShipX\Model\Shipment\Response;

use JMS\Serializer\Annotation as Serializer;
use Shoplo\ShipX\Model\BaseCollectionResponse;
use Shoplo\ShipX\Model\Shipment\Request\ShipmentRequest;

class ShipmentCollectionResponse extends BaseCollectionResponse
{
    /**
     * @var ShipmentResponse[]
     * @Serializer\Type("array<Shoplo\ShipX\Model\Shipment\Response\ShipmentResponse>")
     */
    public $items;
}