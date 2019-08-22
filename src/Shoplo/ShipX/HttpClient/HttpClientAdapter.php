<?php

namespace Shoplo\ShipX\HttpClient;

use Shoplo\ShipX\Exception\ExceptionManager;
use Shoplo\ShipX\ShipXAdapterInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class HttpClientAdapter implements ShipXAdapterInterface
{
    /**
     * @var string|null
     */
    private $accessToken;

    /**
     * @var HttpClientInterface
     */
    private $httpClient;

    public function __construct(HttpClientInterface $client, ?string $accessToken)
    {
        $this->httpClient = $client;
        $this->accessToken = $accessToken;
    }

    /**
     * @param null $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    private function getHeaders(): array
    {
        return !$this->accessToken
            ? []
            : [
                'Authorization' => "Bearer {$this->accessToken}",
                'Content-Type'  => 'application/json; charset=utf-8',
            ];
    }

    public function get($url, $parameters = [], $headers = [])
    {
        try {
            $response = $this->httpClient->request('GET', $url, [
                'headers' => array_merge($headers, $this->getHeaders()),
                'query' => $parameters,
            ]);

            return $response->getContent();
        } catch (\Throwable $e) {
            ExceptionManager::throwException($e);
        }
    }

    public function put($url, $data, $headers = [])
    {
        try {
            $response = $this->httpClient->request('PUT', $url, [
                'headers' => array_merge($headers, $this->getHeaders()),
                'body' => $data,
            ]);

            return $response->getContent();
        } catch (\Throwable $e) {
            ExceptionManager::throwException($e);
        }
    }

    public function post($url, $data, $headers = [])
    {
        try {
            $response = $this->httpClient->request('POST', $url, [
                'headers' => array_merge($headers, $this->getHeaders()),
                'body' => $data,
            ]);

            return $response->getContent();
        } catch (\Throwable $e) {
            ExceptionManager::throwException($e);
        }
    }

    public function delete($url, $headers = [])
    {
        try {
            $response = $this->httpClient->request('DELETE', $url, [
                'headers' => array_merge($headers, $this->getHeaders()),
            ]);

            return $response->getContent();
        } catch (\Throwable $e) {
            ExceptionManager::throwException($e);
        }
    }
}
