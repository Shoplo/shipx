<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 25.09.2018
 * Time: 11:47
 */

namespace Shoplo\ShipX\Resource;

use Shoplo\ShipX\Model\Organization\OrganizationCollectionResponse;
use Shoplo\ShipX\Model\Organization\OrganizationResponse;
use Shoplo\ShipX\ShipXClient;

class OrganizationResource
{
    /** @var ShipXClient */
    private $shipXClient;

    /**
     * OrganizationResource constructor.
     * @param ShipXClient $shipXClient
     */
    public function __construct(ShipXClient $shipXClient)
    {
        $this->shipXClient = $shipXClient;
    }

    private function getOrganizationsUrl($id = null)
    {
        $url = '/v1/organizations';
        if (null !== $id) {
            $url .= '/'.$id;
        }

        return $url;
    }

    public function getOrganizations(array $parameters = [])
    {
        return $this->shipXClient->get(
            OrganizationCollectionResponse::class,
            $this->getOrganizationsUrl(),
            $parameters
        );
    }

    public function getOrganization($organizationId)
    {
        return $this->shipXClient->get(
            OrganizationResponse::class,
            $this->getOrganizationsUrl($organizationId)
        );
    }
}