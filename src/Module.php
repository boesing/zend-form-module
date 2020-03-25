<?php
declare(strict_types=1);

namespace Boesing\Zend\Form;

use Zend\Form\Factory;

final class Module
{

    public function getServiceConfig(): array
    {
        return [
            'factories' => [
                Factory::class => ZendFormFactory::class,
                FormFactoryImplementingService::class => FormFactoryImplementingServiceFactory::class,
            ],
        ];
    }
}
