<?php

namespace ContainerSjjyn6q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_ChoiceListFactory_DefaultService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'form.choice_list_factory.default' shared service.
     *
     * @return \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/ChoiceListFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/ChoiceList/Factory/DefaultChoiceListFactory.php';

        return $container->privates['form.choice_list_factory.default'] = new \Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory();
    }
}