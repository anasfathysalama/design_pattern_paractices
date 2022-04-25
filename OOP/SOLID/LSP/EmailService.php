<?php

namespace OOP\SOLID\LSP;

class EmailService
{
    public function send(EmailServiceInterface $emailService): void
    {
        $emailService->send();
    }
}