<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:21
 */

namespace Shoplo\ShipX\Model\DispatchOrder;

use JMS\Serializer\Annotation as Serializer;

class DispatchOrderResponse
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $href;

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
     * @var integer
     * @Serializer\Type("integer")
     */
    public $address;

    /**
     * @var string[]
     * @Serializer\Type("array<string>")
     */
    public $shipments;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $comments;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $updatedAt;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $createdAt;
}