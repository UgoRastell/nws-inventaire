<?php

namespace App\Test\Controller;

use App\Entity\Materiel;
use App\Repository\MaterielRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MaterielControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private MaterielRepository $repository;
    private string $path = '/materiel/';
    private EntityManagerInterface $manager;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Materiel::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Materiel index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        // Créez la variable $currentDateTime pour contenir la date actuelle
        $currentDateTime = new \DateTime();

        $this->client->submitForm('Save', [
            'materiel[nom]' => 'Testing',
            'materiel[description]' => 'Testing',
            'materiel[quantity]' => 'Testing',
            'materiel[date_ajout]' => $currentDateTime->format('Y-m-d H:i:s'),
            'materiel[etat]' => 'Testing',
        ]);

        self::assertResponseRedirects('/materiel/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }


    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Materiel();
        $fixture->setNom('My Title');
        $fixture->setDescription('My Title');
        $fixture->setQuantity('My Title');
        $fixture->setDateAjout(new \DateTime());
        $fixture->setEtat('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Materiel');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Materiel();
        $fixture->setNom('My Title');
        $fixture->setDescription('My Title');
        $fixture->setQuantity('My Title');
        $fixture->setDateAjout(new \DateTime());
        $fixture->setEtat('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'materiel[nom]' => 'Something New',
            'materiel[description]' => 'Something New',
            'materiel[quantity]' => 'Something New',
            'materiel[date_ajout]' => (new \DateTime())->format('Y-m-d H:i:s'),
            'materiel[etat]' => 'Something New',
        ]);

        self::assertResponseRedirects('/materiel/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getDescription());
        self::assertSame('Something New', $fixture[0]->getQuantity());
        self::assertEquals(new \DateTime(), $fixture[0]->getDateAjout());
        self::assertSame('Something New', $fixture[0]->getEtat());
    }


    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Materiel();
        $fixture->setNom('My Title');
        $fixture->setDescription('My Title');
        $fixture->setQuantity('My Title');
        $fixture->setDateAjout(new \DateTime());
        $fixture->setEtat('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/materiel/');
    }
}
