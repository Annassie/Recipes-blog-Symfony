<?php

namespace ContainerCb9nmVu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTestServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Services\TestService' shared autowired service.
     *
     * @return \App\Services\TestService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Services/TestService.php';

        return $container->privates['App\\Services\\TestService'] = new \App\Services\TestService();
    }
}