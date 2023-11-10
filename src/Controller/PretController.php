<?php

namespace App\Controller;

use App\Entity\Pret;
use App\Form\PretType;
use App\Service\MailService;
use App\Repository\PretRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/pret')]
class PretController extends AbstractController
{

    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_pret_index', methods: ['GET'])]
    public function index(PretRepository $pretRepository): Response
    {
        $prets = $pretRepository->findAllWithUsers();

        return $this->render('pret/index.html.twig', [
            'prets' => $prets,
        ]);
    }

    #[Route('/new', name: 'app_pret_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, MailService $mailService): Response
    {
        $pret = new Pret();

        $form = $this->createForm(PretType::class, $pret);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $pret->setDatePret(new \DateTime());

            $materiel = $pret->getMaterielEmprunte();
            $materiel->setQuantity($materiel->getQuantity() - 1);

            $entityManager->persist($pret);
            $entityManager->flush();

            $destinaire = $pret->getUserEmprunteur();
            $messageSubject = "Mail de confirmation emprunt";
            $dateEmprunt = $pret->getDatePret()->format('Y-m-d H:i:s');
            $dateRendu = $pret->getDateRenduPrevue()->format('Y-m-d H:i:s');
            $messageBody = "
                <h1>Mail de confirmation emprunt</h1>
                <p>
                A la date à laquelle vous avez emprunté : $dateEmprunt  <br/>
                Vous avez emprunté le matériel : {$materiel->getNom()} <br/>
                La date à rendre :  $dateRendu    <br/>
                </p>";

            $mailService->sendMail($destinaire, $messageSubject, $messageBody);

            return $this->redirectToRoute('app_pret_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pret/new.html.twig', [
            'pret' => $pret,
            'form' => $form,
        ]);
    }


    #[Route('/{id}', name: 'app_pret_show', methods: ['GET'])]
    public function show(Request $request, PretRepository $pretRepository): Response
    {
        $pretId = $request->attributes->get('id');

        $pret = $pretRepository->findOneWithUser($pretId);

        return $this->render('pret/show.html.twig', [
            'pret' => $pret,
        ]);
    }



    #[Route('/{id}/edit', name: 'app_pret_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Pret $pret, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PretType::class, $pret);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_pret_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('pret/edit.html.twig', [
            'pret' => $pret,
            'form' => $form,
        ]);
    }

    #[Route('/pret/rendu/{id}', name: 'app_pret_rendu')]
    public function rendrePret(Pret $pret): RedirectResponse
    {
        if (!$pret) {
            throw $this->createNotFoundException('Pret non trouvé');
        }

        $pret->returnMateriel();

        $this->entityManager->flush();

        return $this->redirectToRoute('app_pret_index');
    }


    #[Route('/pret/rappele/{id}', name: 'app_pret_rappele')]
    public function rappelePret(Pret $pret, MailService $mailService): RedirectResponse
    {

        if (!$pret) {
            throw $this->createNotFoundException('Pret non trouvé');
        }

        $destinaire = $pret->getUserEmprunteur();
        $messageSubject = "Rappel: Date de rendu";
        $datePret = $pret->getDatePret()->format('Y-m-d H:i:s');
        $materielEmprunte = $pret->getMaterielEmprunte()->getNom();
        $dateRenduPrevue = $pret->getDateRenduPrevue()->format('Y-m-d H:i:s');
        $messageBody = "
        <h1>Rappel: Date de rendu</h1>
        <p>
        Date de prêt : $datePret <br/>
        Matériel emprunté : $materielEmprunte <br/>
        La date de rendu prévue est le : $dateRenduPrevue <br/>
        Merci de le rendre à temps.
        </p>";

        $mailService->sendMail($destinaire, $messageSubject, $messageBody);

        return $this->redirectToRoute('app_pret_index');
    }

    #[Route('/{id}', name: 'app_pret_delete', methods: ['POST'])]
    public function delete(Request $request, Pret $pret, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $pret->getId(), $request->request->get('_token'))) {
            $entityManager->remove($pret);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_pret_index', [], Response::HTTP_SEE_OTHER);
    }
}
