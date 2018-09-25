<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 07:06
 */

namespace Shoplo\ShipX\Model\Organization;

use JMS\Serializer\Annotation as Serializer;
use Shoplo\ShipX\Model\BaseCollectionResponse;
use Shoplo\ShipX\Model\BaseModelResponse;

class OrganizationCollectionResponse extends BaseCollectionResponse
{
    /**
     * @var OrganizationResponse[]
     * @Serializer\Type("array<Shoplo\ShipX\Model\Organization\OrganizationResponse>")
     */
    public $items;
}