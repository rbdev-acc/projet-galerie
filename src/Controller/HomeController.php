<?php
namespace App\Controller;

use App\Entity\Photo;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name:"home")]
    public function index(EntityManagerInterface $em): Response
    {
        // Récupérer tous les utilisateurs ayant des photos
        $usersWithPhotos = $em->getRepository(User::class)->createQueryBuilder('u')
            ->join('u.photos', 'p') // On joint la relation photos
            ->groupBy('u.id') // On groupe par utilisateur
            ->having('COUNT(p.id) > 0') // On ne garde que ceux ayant des photos
            ->getQuery()
            ->getResult();

        // Sélectionner un utilisateur aléatoire
        $randomUser = null;
        if (count($usersWithPhotos) > 0) {
            $randomUser = $usersWithPhotos[array_rand($usersWithPhotos)];
        }

        // Récupérer les photos de cet utilisateur aléatoire
        $randomUserPhotos = $randomUser ? $randomUser->getPhotos() : [];

        return $this->render('home.html.twig', [
            'randomUser' => $randomUser,
            'randomUserPhotos' => $randomUserPhotos,
            'usersWithPhotos' => $usersWithPhotos,
        ]);
    }
}
