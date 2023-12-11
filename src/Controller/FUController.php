<?php

namespace App\Controller;

use App\Entity\FF;
use App\Form\FUType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FUController extends AbstractController
{
    /**
     * @Route("/form", name="form")
     */
    public function form(ManagerRegistry $doctrine, Request $request): Response
    {

        $fu = new FF();
        $form = $this->createForm(FUType::class, $fu);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form->get('photo')->getData();
            $newFileName = uniqid().'.'.$uploadedFile->guessExtension();
            $uploadedFile->move('', $newFileName );
            $entityManager = $doctrine->getManager();
            $entityManager->persist($fu);
            $entityManager->flush();



        }

       return $this->render('FU/form.html.twig', [
            'form' => $form->createView()]);
    }

}

