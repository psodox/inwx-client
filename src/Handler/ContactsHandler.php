<?php

namespace Psodox\InwxClient\Handler;

use Psodox\InwxClient\ClientAwareTrait;
use Psodox\InwxClient\Request\ContactListRequest;
use Psodox\InwxClient\Response\Response;

class ContactsHandler
{
    use ClientAwareTrait;

    public function find(int $roId)
    {
        $contactListRequest = new ContactListRequest();
        $response = new Response($this->client->run($contactListRequest));
    }
}