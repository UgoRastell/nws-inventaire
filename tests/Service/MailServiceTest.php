<?php

// tests/Service/MailServiceTest.php

namespace App\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Service\MailService;
use Symfony\Component\Mailer\MailerInterface;

class MailServiceTest extends WebTestCase
{
    public function testSendMail(): void
    {
        // Create a mock for MailerInterface
        $mailer = $this->createMock(MailerInterface::class);

        // Create an instance of MailService with the mocked mailer
        $mailService = new MailService($mailer);

        // Define your email parameters
        $destinaire = 'test@example.com';
        $messageSubject = 'Test Subject';
        $messageBody = '<p>Test Body</p>';

        // Set expectations on the mocked mailer
        $mailer->expects($this->once())
            ->method('send');

        // Call the sendMail method on MailService
        $mailService->sendMail($destinaire, $messageSubject, $messageBody);
    }
}
