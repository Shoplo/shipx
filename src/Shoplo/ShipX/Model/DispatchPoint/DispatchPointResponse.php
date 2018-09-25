<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 07:46
 */

namespace Shoplo\ShipX\Model\DispatchPoint;

use JMS\Serializer\Annotation as Serializer;
use Shoplo\ShipX\Model\Organization\AddressResponse;

class DispatchPointResponse
{
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $href;
    /**
     * @var integer
     * @Serializer\Type("integer")
     */
    public $id;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $name;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $officeHours;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $phone;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $email;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $comments;
    /**
     * @var AddressResponse
     * @Serializer\Type("Shoplo\ShipX\Model\Organization\AddressResponse")
     */
    public $address;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $status;
}