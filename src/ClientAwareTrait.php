<?php


namespace Psodox\InwxClient;


trait ClientAwareTrait
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
}