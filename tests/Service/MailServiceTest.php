<?php

namespace App\Tests\Service;

use App\Service\MailService;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Mailer\Transport\TransportInterface;
use Symfony\Component\Mime\Email;

class MailServiceTest extends TestCase
{
    public function testSendMail(): void
    {
        $transport = $this->createMock(TransportInterface::class);

        $transport->expects($this->once())
            ->method('send');

        $mailService = new MailService($transport);

        $subject = 'Sujet du courrier de test';
        $recipient = 'destinataire@example.com';
        $message = 'Contenu du courrier de test';

        $mailService->sendMail($recipient, $subject, $message);
    }
}
