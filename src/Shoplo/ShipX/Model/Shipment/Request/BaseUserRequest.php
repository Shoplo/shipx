<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 07:50
 */

namespace Shoplo\ShipX\Model\Shipment\Request;

use JMS\Serializer\Annotation as Serializer;

abstract class BaseUserRequest
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $companyName;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $email;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $phone;
    /**
     * @var AddressRequest
     * @Serializer\Type("Shoplo\ShipX\Model\Shipment\Request\AddressRequest")
     */
    public $address;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $firstName;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $lastName;
}