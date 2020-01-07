<?php

namespace Shoplo\ShipX\Model\Shipment\Response;

use JMS\Serializer\Annotation as Serializer;

class TransactionDetailsResponse
{
    /**
     * @var int
     * @Serializer\Type("int")
     */
    public $status;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $error;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $message;
}
