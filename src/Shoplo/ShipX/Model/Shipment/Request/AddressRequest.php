<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 07:52
 */

namespace Shoplo\ShipX\Model\Shipment\Request;

use JMS\Serializer\Annotation as Serializer;

class AddressRequest
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $line1;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $city;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $postCode;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $countryCode;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $street;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $buildingNumber;
}