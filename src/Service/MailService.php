<?php

namespace App\Service;

use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Message;

class MailService
{

    public function sendMail($destinaire, $messageSubject, $messageBody,): void
    {

        $tgv = Transport::fromDsn('smtp://urastell@normandiewebschool.fr:iouavodwvqcvewar@smtp.gmail.com:587');
        $mailer = new Mailer($tgv);
        $email = (new Email())->from('urastell@normandiewebschool.fr')->to($destinaire)->subject($messageSubject)->html($messageBody);
        $mailer->send($email);
    }
}
