<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 07:06
 */

namespace Shoplo\ShipX\Model\Service;

use JMS\Serializer\Annotation as Serializer;
use Shoplo\ShipX\Model\BaseCollectionResponse;

class ServiceCollectionResponse extends BaseCollectionResponse
{
    /**
     * @var ServiceResponse[]
     * @Serializer\Type("array<Shoplo\ShipX\Model\Service\ServiceResponse>")
     */
    public $items;
}