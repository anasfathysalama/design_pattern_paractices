<?php

namespace OOP\SOLID\LSP;

class ServiceOne implements EmailServiceInterface
{

    public function send(): void
    {
        echo "email sending";
    }
}