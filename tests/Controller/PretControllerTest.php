<?php

use App\Entity\Pret;
use App\Entity\Materiel;
use App\Entity\User; // Assurez-vous d'importer la classe User si ce n'est pas déjà fait
use App\Repository\PretRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PretControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private PretRepository $repository;
    private string $path = '/pret/';
    private EntityManagerInterface $manager;

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Pret::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Pret index');
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $materiels = new ArrayCollection();

        $materiel1 = new Materiel();
        $materiel2 = new Materiel();

        $materiels->add($materiel1);
        $materiels->add($materiel2);

        $user = new User(); // Créez un utilisateur pour la relation OneToMany avec User

        $this->client->submitForm('Save', [
            'pret[date_pret]' => (new \DateTime())->format('Y-m-d H:i:s'),
            'pret[date_rendu_prevue]' => (new \DateTime())->format('Y-m-d H:i:s'),
            'pret[date_rendu_user]' => (new \DateTime())->format('Y-m-d H:i:s'),
            'pret[statut]' => 'Testing',
            'pret[materiel_emprunte]' => $materiels,
            'pret[user_emprunteur]' => $user,
        ]);

        self::assertResponseRedirects('/pret/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    /*public function testShow(): void
    {
        
        $fixture = new Pret();
        $fixture->setDatePret(new \DateTime());
        $fixture->setDateRenduPrevue(new \DateTime());
        $fixture->setDateRenduUser(new \DateTime());
        $fixture->setStatut('My Title');
        $fixture->setMaterielEmprunte(new ArrayCollection()); // Utilisez une collection vide
        $fixture->setUserEmprunteur(new User()); // Utilisez un utilisateur

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Pret');

        // Use assertions to check that the properties are properly displayed.
    }*/

    public function testEdit(): void
    {
        $fixture = new Pret();
        $fixture->setDatePret(new \DateTime());
        $fixture->setDateRenduPrevue(new \DateTime());
        $fixture->setDateRenduUser(new \DateTime());
        $fixture->setStatut('My Title');
        $fixture->setMaterielEmprunte(new ArrayCollection());
        $fixture->setUserEmprunteur(new User());

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'pret[date_pret]' => (new \DateTime())->format('Y-m-d H:i:s'),
            'pret[date_rendu_prevue]' => (new \DateTime())->format('Y-m-d H:i:s'),
            'pret[date_rendu_user]' => (new \DateTime())->format('Y-m-d H:i:s'),
            'pret[statut]' => 'Something New',
            'pret[materiel_emprunte]' => new ArrayCollection(),
            'pret[user_emprunteur]' => new User(),
        ]);

        self::assertResponseRedirects('/pret/');

        $fixtures = $this->repository->findAll();

        self::assertEquals(new \DateTime(), $fixtures[0]->getDatePret());
        self::assertEquals(new \DateTime(), $fixtures[0]->getDateRenduPrevue());
        self::assertEquals(new \DateTime(), $fixtures[0]->getDateRenduUser());
        self::assertSame('Something New', $fixtures[0]->getStatut());
    }

    public function testRemove(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Pret();
        $fixture->setDatePret(new \DateTime());
        $fixture->setDateRenduPrevue(new \DateTime());
        $fixture->setDateRenduUser(new \DateTime());
        $fixture->setStatut('My Title');
        $fixture->setMaterielEmprunte(new ArrayCollection());
        $fixture->setUserEmprunteur(new User());

        $this->manager->persist($fixture);
        $this->manager->flush();

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/pret/');
    }
}
