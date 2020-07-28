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
            $body = $body['details'];

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
        return unserialize($this->responseParsed) ?? [];
    }

    public function getBody(): array
    {
        return $this->body ?? [];
    }
}
