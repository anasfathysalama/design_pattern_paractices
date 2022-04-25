<?php

namespace OOP\SOLID\LSP;

class ServiceTwo implements EmailServiceInterface
{
    public function send(): void
    {
        echo "email sending";
    }
}