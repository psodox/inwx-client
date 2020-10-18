<?php

namespace Psodox\InwxClient;

interface RequestInterface
{
    public function getObject(): string;

    public function getMethod(): string;

    public function getParameters(): array;
}