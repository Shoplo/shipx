<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:10
 */

namespace Shoplo\ShipX\Model\Shipment;

use JMS\Serializer\Annotation as Serializer;

class ShipmentLabelRequest
{
    const SHIPMENT_LABEL_TYPE_NORMAL = 'normal';
    const SHIPMENT_LABEL_TYPE_A6 = 'A6';

    const SHIPMENT_LABEL_FORMAT_PDF = 'Pdf';
    const SHIPMENT_LABEL_FORMAT_EPL = 'Epl';
    const SHIPMENT_LABEL_FORMAT_Zpl = 'Zpl';

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $type;

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
}