<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:21
 */

namespace Shoplo\ShipX\Model\DispatchOrder;

use JMS\Serializer\Annotation as Serializer;

class DispatchOrderManifestRequest
{
    /**
     * @var integer
     * @Serializer\Type("integer")
     */
    public $dispatchOrderId;

    /**
     * @var integer[]
     * @Serializer\Type("array<integer>")
     */
    public $shipmentIds;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $format;

    public function converToParams() {
        return [
            'dispatch_order_id' => $this->dispatchOrderId,
            'shipment_ids' => $this->shipmentIds,
            'format' => $this->format
        ];
    }
}