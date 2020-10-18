<?php

namespace Psodox\InwxClient\Request;

use Psodox\InwxClient\RequestInterface;

class ContactListRequest implements RequestInterface
{
    private const OBJECT = 'contact';
    private const METHOD = 'list';

    public array $parameters = [];

    public function getObject(): string
    {
        return self::OBJECT;
    }

    public function getMethod(): string
    {
        return self::METHOD;
    }

    public function getParameters(): array
    {
        return $this->parameters;
    }
}