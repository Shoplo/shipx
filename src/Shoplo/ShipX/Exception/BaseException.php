<?php

namespace Shoplo\ShipX\Exception;

class BaseException extends \Exception
{
    /**
     * @var string|null
     */
    protected $responseParsed;

    /**
     * @var array|null
     */
    private $body;

    public function __construct(\Throwable $previous, $body = null)
    {
        $code = $previous->getCode();
        $msg = $previous->getMessage();
        $this->body = $body;

        if (null !== $body) {
            $code = $body['status'];
            $msg = $body['message'];

            if (!empty($body['details'])) {
                $body = $body['details'];
            } elseif (array_key_exists('error', $body)) {
                $body = [
                    $body['error'] => $body['message'],
                ];
            }

            $this->responseParsed = serialize($body);
        }

        parent::__construct(
            $msg,
            $code,
            $previous
        );
    }

    /**
     * @return string[]
     */
    public function getResponseParsed(): array
    {
        $parsed = unserialize($this->responseParsed);

        return ($parsed === false || $parsed === null) ? [] : $parsed;
    }

    public function getBody(): array
    {
        return $this->body ?? [];
    }
}
