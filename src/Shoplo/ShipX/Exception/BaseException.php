<?php
/**
 * Created by PhpStorm.
 * User: adrianadamiec
 * Date: 12.05.2017
 * Time: 15:06
 */

namespace Shoplo\ShipX\Exception;

class BaseException extends \Exception
{
    protected $responseParsed;

    public function __construct(\Throwable $previous, $body = null)
    {
        $code = $previous->getCode();
        $msg  = $previous->getMessage();

        if (null !== $body) {
            $code = $body['status'];
            $msg  = $body['message'];
            $body = $body['details'];
        }
        $this->responseParsed = serialize($body);
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
        return unserialize($this->responseParsed);
    }
}