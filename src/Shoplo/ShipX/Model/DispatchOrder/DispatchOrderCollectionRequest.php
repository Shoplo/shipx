<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:21
 */

namespace Shoplo\ShipX\Model\DispatchOrder;

use JMS\Serializer\Annotation as Serializer;

class DispatchOrderCollectionRequest
{
    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $createdAtGteq;

    /**
     * @var string|null
     * @Serializer\Type("string")
     */
    public $status;

    public function __construct(?string $createdAtGteq, ?string $status)
    {
        $this->createdAtGteq = $createdAtGteq;
        $this->status = $status;
    }

    public function converToParams() {
        return [
            'created_at_gteq' => $this->createdAtGteq,
            'status' => $this->status
        ];
    }
}