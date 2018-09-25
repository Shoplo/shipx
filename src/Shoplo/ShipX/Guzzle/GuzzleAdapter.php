<?php

namespace Shoplo\ShipX\Guzzle;

use Shoplo\ShipX\ShipXAdapterInterface;

class GuzzleAdapter implements ShipXAdapterInterface
{
    private $accessToken;
    /** @var  \GuzzleHttp\Client */
    private $guzzle;

    public function __construct(\GuzzleHttp\Client $guzzle, $accessToken = null)
    {
        $this->guzzle      = $guzzle;
        $this->accessToken = $accessToken;
    }

    /**
     * @param null $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    public function getHeaders()
    {
        return !$this->accessToken
            ? []
            : [
                'Authorization' => "Bearer {$this->accessToken}",
                'Content-Type'  => 'application/json; charset=utf-8',
            ];
    }

    /**
     * @param       $url
     * @param array $parameters
     * @param array $headers
     *
     * @return string
     * @throws \Exception
     */
    public function get($url, $parameters = [], $headers = [])
    {
        $headers = array_merge($headers, $this->getHeaders());

        try {
            $rsp = $this->guzzle->request(
                'GET',
                $url,
                [
                    'headers' => $headers,
                ]
            );

            return json_decode($rsp->getBody()->getContents(), true);
        } catch (\GuzzleHttp\Exception\ServerException $e) {
            throw $e;
        }
    }

    /**
     * @param       $url
     * @param $data
     * @param array $headers
     *
     * @return string
     * @throws \Exception
     */
    public function put($url, $data, $headers = [])
    {
        try {
            $headers = array_merge($headers, $this->getHeaders());
            $rsp     = $this->guzzle->request(
                'PUT',
                $url,
                [
                    'headers' => $headers,
                    'query'   => http_build_query($data),
                ]
            );

            return json_decode($rsp->getBody()->getContents(), true);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * @param       $url
     * @param $data
     * @param array $headers
     *
     * @return string
     * @throws \Exception
     */
    public function post($url, $data, $headers = [])
    {
        try {
            $headers = array_merge($headers, $this->getHeaders());
            $rsp     = $this->guzzle->request(
                'POST',
                $url,
                [
                    'headers' => $headers,
                    'query'   => http_build_query($data),
                ]
            );

            return json_decode($rsp->getBody()->getContents(), true);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * @param       $url
     * @param array $headers
     *
     * @return mixed
     * @throws \Exception
     */
    public function delete($url, $headers = [])
    {
        try {
            $headers = array_merge($headers, $this->getHeaders());
            $rsp     = $this->guzzle->delete(
                $url,
                [
                    'headers' => $headers,
                ]
            );

            $json = json_decode($rsp->getBody(), true);

            return $json;
        } catch (\Exception $e) {
            throw $e;
        }
    }

}