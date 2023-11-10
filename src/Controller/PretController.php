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
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/pret')]
class PretController extends AbstractController
{
    #[Route('/', name: 'app_pret_index', methods: ['GET'])]
    public function index(PretRepository $pretRepository): Response
    {
        return $this->render('pret/index.html.twig', [
            'prets' => $pretRepository->findAll(),
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
            $entityManager->persist($pret);
            $entityManager->flush();

            $destinaire = $pret->getUserEmprunteur();
            $messageSubject = "Mail de confirmation emprunt";
            $materiel = $pret->getMaterielEmprunte();
            $dateEmprunt = $pret->getDatePret();
            $dateRendu = $pret->getDateRenduPrevue();
            $messageBody = "
            <h1>Mail de confirmation emprunt</h1>
            <p>
            A la date a la quelle vous avez emprunté : $dateEmprunt  <br/>
            Vous avez emprunté le matériel  : $materiel <br/>
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
    public function show(Pret $pret): Response
    {
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

    #[Route('/{id}', name: 'app_pret_delete', methods: ['POST'])]
    public function delete(Request $request, Pret $pret, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pret->getId(), $request->request->get('_token'))) {
            $entityManager->remove($pret);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_pret_index', [], Response::HTTP_SEE_OTHER);
    }
}
