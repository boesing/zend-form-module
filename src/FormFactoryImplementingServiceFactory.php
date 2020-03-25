<?php
declare(strict_types=1);

namespace Boesing\Zend\Form;

use Psr\Container\ContainerInterface;
use Zend\Form\Factory;

final class FormFactoryImplementingServiceFactory
{

    public function __invoke(ContainerInterface $container): FormFactoryImplementingService
    {
        return new FormFactoryImplementingService($container->get(Factory::class));
    }
}
