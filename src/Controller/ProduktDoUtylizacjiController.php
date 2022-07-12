<?php

namespace App\Controller;

use App\Entity\ProduktDoUtylizacji;
use App\Form\ProduktDoUtylizacjiType;
use App\Repository\ProduktDoUtylizacjiRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class ProduktDoUtylizacjiController extends AbstractController
{
    #[Route('/', name: 'app_produkt_do_utylizacji_index', methods: ['GET'])]
    public function index(ProduktDoUtylizacjiRepository $produktDoUtylizacjiRepository): Response
    {
        return $this->render('produkt_do_utylizacji/index.html.twig', [
            'produkt_do_utylizacjis' => $produktDoUtylizacjiRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_produkt_do_utylizacji_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ProduktDoUtylizacjiRepository $produktDoUtylizacjiRepository): Response
    {
        $produktDoUtylizacji = new ProduktDoUtylizacji();
        $form = $this->createForm(ProduktDoUtylizacjiType::class, $produktDoUtylizacji);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $produktDoUtylizacjiRepository->add($produktDoUtylizacji, true);

            return $this->redirectToRoute('app_produkt_do_utylizacji_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produkt_do_utylizacji/new.html.twig', [
            'produkt_do_utylizacji' => $produktDoUtylizacji,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_produkt_do_utylizacji_show', methods: ['GET'])]
    public function show(ProduktDoUtylizacji $produktDoUtylizacji): Response
    {
        return $this->render('produkt_do_utylizacji/show.html.twig', [
            'produkt_do_utylizacji' => $produktDoUtylizacji,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_produkt_do_utylizacji_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ProduktDoUtylizacji $produktDoUtylizacji, ProduktDoUtylizacjiRepository $produktDoUtylizacjiRepository): Response
    {
        $form = $this->createForm(ProduktDoUtylizacjiType::class, $produktDoUtylizacji);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $produktDoUtylizacjiRepository->add($produktDoUtylizacji, true);

            return $this->redirectToRoute('app_produkt_do_utylizacji_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('produkt_do_utylizacji/edit.html.twig', [
            'produkt_do_utylizacji' => $produktDoUtylizacji,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_produkt_do_utylizacji_delete', methods: ['POST'])]
    public function delete(Request $request, ProduktDoUtylizacji $produktDoUtylizacji, ProduktDoUtylizacjiRepository $produktDoUtylizacjiRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produktDoUtylizacji->getId(), $request->request->get('_token'))) {
            $produktDoUtylizacjiRepository->remove($produktDoUtylizacji, true);
        }

        return $this->redirectToRoute('app_produkt_do_utylizacji_index', [], Response::HTTP_SEE_OTHER);
    }
}
