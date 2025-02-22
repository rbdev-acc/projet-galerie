<?php

namespace ContainerAw94365;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPhotoTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\PhotoType' shared autowired service.
     *
     * @return \App\Form\PhotoType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/PhotoType.php';

        return $container->privates['App\\Form\\PhotoType'] = new \App\Form\PhotoType();
    }
}
