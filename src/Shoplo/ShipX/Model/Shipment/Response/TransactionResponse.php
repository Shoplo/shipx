<?php

namespace Shoplo\ShipX\Model\Shipment\Response;

use JMS\Serializer\Annotation as Serializer;

class TransactionResponse
{
    public const STATUS_FAILURE = 'failure';

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $id;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $status;

    /**
     * @var TransactionDetailsResponse
     * @Serializer\Type("Shoplo\ShipX\Model\Shipment\Response\TransactionDetailsResponse")
     */
    public $details;
}
