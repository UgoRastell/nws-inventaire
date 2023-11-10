<?php

// src/Service/MailService.php

namespace App\Service;

use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\MailerInterface;

class MailService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendMail($destinaire, $messageSubject, $messageBody): void
    {
        $email = (new Email())->from('urastell@normandiewebschool.fr')->to($destinaire)->subject($messageSubject)->html($messageBody);
        $this->mailer->send($email);
    }
}
