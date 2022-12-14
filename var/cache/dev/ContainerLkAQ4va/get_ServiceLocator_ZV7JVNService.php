<?php

namespace ContainerLkAQ4va;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZV7JVNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zV7JVN_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zV7JVN_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ChatController::DeleteMessage' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ChatController::EditMessage' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ChatController::index' => ['privates', '.service_locator.7B8MPwp', 'get_ServiceLocator_7B8MPwpService', true],
            'App\\Controller\\EditProfilController::index' => ['privates', '.service_locator..uMVgKe', 'get_ServiceLocator__UMVgKeService', true],
            'App\\Controller\\InscriptionController::index' => ['privates', '.service_locator..uMVgKe', 'get_ServiceLocator__UMVgKeService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ChatController:DeleteMessage' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ChatController:EditMessage' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ChatController:index' => ['privates', '.service_locator.7B8MPwp', 'get_ServiceLocator_7B8MPwpService', true],
            'App\\Controller\\EditProfilController:index' => ['privates', '.service_locator..uMVgKe', 'get_ServiceLocator__UMVgKeService', true],
            'App\\Controller\\InscriptionController:index' => ['privates', '.service_locator..uMVgKe', 'get_ServiceLocator__UMVgKeService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ChatController::DeleteMessage' => '?',
            'App\\Controller\\ChatController::EditMessage' => '?',
            'App\\Controller\\ChatController::index' => '?',
            'App\\Controller\\EditProfilController::index' => '?',
            'App\\Controller\\InscriptionController::index' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ChatController:DeleteMessage' => '?',
            'App\\Controller\\ChatController:EditMessage' => '?',
            'App\\Controller\\ChatController:index' => '?',
            'App\\Controller\\EditProfilController:index' => '?',
            'App\\Controller\\InscriptionController:index' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
