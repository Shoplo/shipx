<?php

namespace Shoplo\ShipX\Exception;

class ExceptionManager
{
    public static function throwException(\Throwable $e)
    {
        $body = null;

        if (method_exists($e, 'getResponse')) {
            $headers = $e->getResponse()->getHeaders();
            $contentType = $headers['content-type'][0] ?? 'application/json';
            if ($contentType === 'application/json') {
                $body = \json_decode($e->getResponse()->getBody()->getContents(), true);
            }
        }

        switch ($e->getCode()) {
            case 400:
                throw new ValidationException($e, $body);
                break;
            case 401:
            case 403:
                throw new AuthorizationException($e, $body);
                break;
            case 404:
                throw new NotFoundException($e, $body);
                break;
            case 500:
                throw new BackendException($e, $body);
                break;
            default:
                throw $e;
        }
    }
}
