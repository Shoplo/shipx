<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 24.09.2018
 * Time: 15:27
 */

namespace Shoplo\ShipX;

use JMS\Serializer\Serializer;
use Shoplo\ShipX\Guzzle\GuzzleAdapter;

class ShipXClient
{
    const API_BASE_URI = 'https://api-shipx-pl.easypack24.net';
    const API_SANDBOX_BASE_URI = 'https://sandbox-api-shipx-pl.easypack24.net';

    /** @var ShipXAdapterInterface */
    public $requestAdapter;

    /** @var Serializer */
    public $serializer;

    /** @var string */
    public $organizationId;

    /**
     * ShipXClient constructor.
     * @param ShipXAdapterInterface $requestAdapter
     * @param Serializer $serializer
     */
    public function __construct(ShipXAdapterInterface $requestAdapter, Serializer $serializer)
    {
        $this->requestAdapter = $requestAdapter;
        $this->serializer     = $serializer;
    }

    public function getPoints()
    {
        $pointsUri = '/v1/points';

        return $this->requestAdapter->get($pointsUri);
    }

    public function get($type, $url, array $parameters = [], array $headers = [])
    {
        $response = $this->requestAdapter->get(
            $url,
            $parameters,
            $headers
        );

        return $this->serializer->deserialize($response, $type, 'json');
    }

    public function post($url, $data, array $headers = [])
    {
        return $this->requestAdapter->post($url, $data, $headers);
    }

    public function put($url, $data, array $headers = [])
    {
        return $this->requestAdapter->put($url, $data, $headers);
    }

    public function delete($url)
    {
        return $this->requestAdapter->delete($url);
    }
}