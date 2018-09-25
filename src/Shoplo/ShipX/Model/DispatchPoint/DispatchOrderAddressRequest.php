<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 13:14
 */

namespace Shoplo\ShipX\Model\DispatchPoint;

use JMS\Serializer\Annotation as Serializer;

class DispatchOrderAddressRequest
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
    public $street;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $buildingNumber;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $postCode;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $city;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $countryCode;
}