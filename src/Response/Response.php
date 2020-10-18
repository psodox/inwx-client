<?php

namespace Psodox\InwxClient\Response;

use Psodox\InwxClient\Exception\RequestException;

class Response
{
    private const SUCCESSFULLY = 1000;

    public array $data = [];

    public function __construct(array $inwxResponseData)
    {
        $code = $inwxResponseData['code'];

        if (!$code === self::SUCCESSFULLY) {
            throw new RequestException($inwxResponseData['msg'], $code);
        }

        $this->data = $inwxResponseData['respData'];
    }
}