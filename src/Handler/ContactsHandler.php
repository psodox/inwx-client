<?php

namespace Psodox\InwxClient\Handler;

use Psodox\InwxClient\ClientAwareTrait;
use Psodox\InwxClient\Object\Contact;
use Psodox\InwxClient\Request\ContactListRequest;
use Psodox\InwxClient\Response\Response;

class ContactsHandler
{
    use ClientAwareTrait;

    public function get(int $roId): ?Contact
    {
        $contactListRequest = new ContactListRequest();
        $contactListRequest->parameters['roId'] = $roId;

        $response = new Response($this->client->run($contactListRequest));

        if (!empty($response->data[0])) {
            $contactData = $response->data[0];
            $contact = new Contact($contactData['roId']);
            $contact->name = $contactData['name'];

            return $contact;
        }

        return null;
    }
}