<?php

namespace Psodox\InwxClient\Response;

use Psodox\InwxClient\Response;

class LoginResponse extends Response
{
    private string $customerId = '';
    private string $customerNo = '';
    private string $accountId = '';
    private string $tfa = '';
    private string $buildDate = '';
    private string $version = '';

    public function __construct(array $inwxLoginResponse)
    {
        parent::__construct($inwxLoginResponse);

        if ($this->success) {
            $this->customerId = $inwxLoginResponse['resData']['customerId'];
            $this->customerNo = $inwxLoginResponse['resData']['customerNo'];
            $this->accountId = $inwxLoginResponse['resData']['accountId'];
            $this->tfa = $inwxLoginResponse['resData']['tfa'];
            $this->buildDate = $inwxLoginResponse['resData']['builddate'];
            $this->version = $inwxLoginResponse['resData']['version'];
        }
    }
}