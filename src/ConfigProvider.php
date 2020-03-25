<?php
declare(strict_types=1);

namespace Boesing\Zend\Form;

use Zend\Form\Factory;

final class ConfigProvider
{

    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getServiceDependencies(),
        ];
    }

    public function getServiceDependencies(): array
    {
        return [
            'factories' => [
                Factory::class => ZendFormFactory::class,
                FormFactoryImplementingService::class => FormFactoryImplementingServiceFactory::class,
            ],
        ];
    }
}
