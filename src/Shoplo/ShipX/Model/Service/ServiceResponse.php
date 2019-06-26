<?php

namespace Shoplo\ShipX\Model\Service;

use JMS\Serializer\Annotation as Serializer;

class ServiceResponse
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
    public $name;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $description;

    /**
     * @var ServiceResponse[]
     * @Serializer\Type("array<Shoplo\ShipX\Model\Service\ServiceResponse>")
     */
    public $additional_services;
}