<?php

namespace Acme;

class AuthController implements RespondsToUserRegistration
{
    protected $registration;
    public function __construct(RegisterUser $registration)
    {
        $this->registration = $registration;
    }

    public function register(RegisterUser $registration)
    {
        $this->registration->execute([],$this);
    }

    public function userRegisteredSuccessfully()
    {
        var_dump('created successfully.');
    }

    public function userRegisteredFailed()
    {
        var_dump('created unsuccessfully.');
    }
}