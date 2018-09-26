<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 07:06
 */

namespace Shoplo\ShipX\Model\Organization;

use JMS\Serializer\Annotation as Serializer;
use Shoplo\ShipX\Model\BaseModelResponse;

class OrganizationResponse extends BaseModelResponse
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
     * @var integer
     * @Serializer\Type("integer")
     */
    public $ownerId;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $name;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $taxId;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'', '', 'Y-m-d\TH:i:s.uP'>")
     */
    public $createdAt;
    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'', '', 'Y-m-d\TH:i:s.uP'>")
     */
    public $updatedAt;
    /**
     * @var string[]
     * @Serializer\Type("array<string>")
     */
    public $services;
    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $bankAccountNumber;
    /**
     * @var AddressResponse
     * @Serializer\Type("Shoplo\ShipX\Model\Organization\AddressResponse")
     */
    public $address;
}