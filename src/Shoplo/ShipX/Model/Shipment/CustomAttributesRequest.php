<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:04
 */

namespace Shoplo\ShipX\Model\Shipment;

use JMS\Serializer\Annotation as Serializer;

class CustomAttributesRequest
{
    const SENDING_METHOD_LOCKER = 'parcel_locker';
    const SENDING_METHOD_POK = 'pok';
    const SENDING_METHOD_POP = 'pop';
    const SENDING_METHOD_COURIER_POP = 'courier_pok';
    const SENDING_METHOD_BRANCH = 'branch';
    const SENDING_METHOD_DISPATCH_ORDER = 'dispatch_order';

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $targetPoint;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $dropoffPoint;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $allegroTransactionId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $allegroUserId;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $sendingMethod;
}