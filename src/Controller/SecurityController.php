<?php
namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils, EntityManagerInterface $em): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();

        $lastUsername = $authenticationUtils->getLastUsername();
        $user = $em->getRepository(User::class)->findOneBy(['email' => $lastUsername]);

        if ($user) {
            if ($error instanceof BadCredentialsException) {
                $user->setFailedLoginAttempts($user->getFailedLoginAttempts() + 1);

                if ($user->getFailedLoginAttempts() >= 3) {
                    $user->setLocked(true);
                    $error = "Votre compte est bloqué après 3 tentatives infructueuses.";
                } else {
                    $remainingAttempts = 3 - $user->getFailedLoginAttempts();
                    $error = "Identifiants incorrects. Il vous reste $remainingAttempts tentative(s).";
                }
                $em->flush();
            }
        }

        if ($this->getUser()) {
            if ($user) {
                $user->setFailedLoginAttempts(0);
                $user->setLocked(false);
                $em->flush();
            }
            return $this->redirectToRoute('home');
        }

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }


    #[Route('/admin/users', name: 'admin_users')]
public function adminUsers(EntityManagerInterface $em): Response
{
    $this->denyAccessUnlessGranted('ROLE_ADMIN');

    $users = $em->getRepository(User::class)->findAll();

    return $this->render('admin/users.html.twig', [
        'users' => $users,
    ]);
}

#[Route('/admin/user/delete/{id}', name: 'admin_user_delete')]
public function deleteUser(User $user, EntityManagerInterface $em): Response
{
    $this->denyAccessUnlessGranted('ROLE_ADMIN');

    $em->remove($user);
    $em->flush();

    $this->addFlash('success', 'Utilisateur supprimé avec succès.');
    return $this->redirectToRoute('admin_users');
}

#[Route('/admin/user/unlock/{id}', name: 'admin_user_unlock')]
public function unlockUser(User $user, EntityManagerInterface $em): Response
{
    $this->denyAccessUnlessGranted('ROLE_ADMIN');

    $user->setLocked(false);
    $user->setFailedLoginAttempts(0);
    $em->flush();

    $this->addFlash('success', 'Compte débloqué avec succès.');
    return $this->redirectToRoute('admin_users');
}

}
