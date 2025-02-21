<?php

namespace App\Controller;

use App\Entity\Photo;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\PhotoType;

class GalerieController extends AbstractController
{
    #[Route('/galerie', name: 'galerie')]
    public function galerie(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        
        if (!$user) {
            throw $this->createAccessDeniedException("Vous devez être connecté pour voir votre galerie.");
        }
    
        $photos = $em->getRepository(Photo::class)->findBy(['user' => $user], ['orderNumber' => 'ASC']);
    
        return $this->render('galerie/index.html.twig', [
            'photos' => $photos,
        ]);
    }
    

    #[Route('/galerie/ajouter', name: 'galerie_ajouter')]
    public function ajouterPhoto(Request $request, EntityManagerInterface $em): Response
    {
        $photo = new Photo();
        $form = $this->createForm(PhotoType::class, $photo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('file')->getData();

            if ($file) {
                $uploadDir = $this->getParameter('kernel.project_dir').'/public/uploads/photos/';
                $fileName = uniqid().'.'.$file->guessExtension();
                $file->move($uploadDir, $fileName);

                $photo->setFileName($fileName);
                $photo->setCreatedAt(new \DateTime());
                $photo->setSize(filesize($uploadDir.$fileName));
                $photo->setUser($this->getUser());

                $em->persist($photo);
                $em->flush();

                $this->addFlash('success', 'Photo ajoutée avec succès !');
                return $this->redirectToRoute('galerie');
            }
        }

        return $this->render('galerie/ajouter.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/galerie/supprimer/{id}', name: 'galerie_supprimer')]
    public function supprimerPhoto(Photo $photo, EntityManagerInterface $em): Response
    {
        if ($this->getUser() !== $photo->getUser()) {
            throw $this->createAccessDeniedException();
        }

        $filePath = $this->getParameter('kernel.project_dir').'/public/uploads/photos/'.$photo->getFileName();
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $em->remove($photo);
        $em->flush();

        $this->addFlash('success', 'Photo supprimée avec succès !');
        return $this->redirectToRoute('galerie');
    }
}
