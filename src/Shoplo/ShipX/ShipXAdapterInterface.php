<?php

namespace Shoplo\ShipX;

interface ShipXAdapterInterface
{
    public function get($url, $parameters = [], $headers = []);

    public function post($url, $data, $headers = []);

    public function put($url, $data, $headers = []);

    public function delete($url);

    public function setAccessToken($accessToken);
}
