<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 07:06
 */

namespace Shoplo\ShipX\Model\Organization;

use JMS\Serializer\Annotation as Serializer;

class OrganizationCollectionResponse
{
    /**
     * @var OrganizationResponse[]
     * @Serializer\Type("array<Shoplo\ShipX\Model\Organization\OrganizationResponse>")
     */
    public $items;
}