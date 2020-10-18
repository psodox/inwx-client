<?php

namespace Psodox\InwxClient;

class Configuration
{
    private string $username = '';
    private string $password = '';
    public string $language = 'en';
    public bool $useOte = true;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}