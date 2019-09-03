<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 08:10
 */

namespace Shoplo\ShipX\Model\Tracking\Response;

use JMS\Serializer\Annotation as Serializer;

class TrackingDetailsResponse
{

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $status;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $originStatus;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    public $agency;

    /**
     * @var \DateTime
     * @Serializer\Type("DateTime<'', '', 'Y-m-d\TH:i:s.uP'>")
     */
    public $datetime;
}