<?php

namespace Container5hqxuea;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityControllerdeleteUserService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TQe_LeF.App\Controller\SecurityController::deleteUser()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TQe_LeF.App\\Controller\\SecurityController::deleteUser()'] = ($container->privates['.service_locator.TQe_LeF'] ?? $container->load('get_ServiceLocator_TQeLeFService'))->withContext('App\\Controller\\SecurityController::deleteUser()', $container);
    }
}
