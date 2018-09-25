<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 07:43
 */

namespace Shoplo\ShipX\Model\Organization;

use JMS\Serializer\Annotation as Serializer;

class AddressResponse
{
    /**
     * @var integer
     * @Serializer\Type("integer")
     */
    public $id;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $line1;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $line2;
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
}