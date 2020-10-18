<?php

namespace Psodox\InwxClient;

use INWX\Domrobot;
use Psodox\InwxClient\Handler\ContactsHandler;
use Psodox\InwxClient\Response\LoginResponse;

class Client
{
    private Domrobot $domRobot;
    private Configuration $configuration;

    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        $this->domRobot = new Domrobot();
    }

    public function contacts()
    {
        return new ContactsHandler($this);
    }

    private function login()
    {
        new LoginResponse(
            $this->domRobot->login(
                $this->configuration->getUsername(),
                $this->configuration->getPassword()
            )
        );
    }

    public function run(RequestInterface $request): array
    {
        $this->login();
        return $this->domRobot->call($request->getObject(), $request->getMethod(), $request->getParameters());
    }
}