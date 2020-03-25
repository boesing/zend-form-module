<?php
declare(strict_types=1);

namespace Boesing\Zend\Form;

final class Module
{

    public function getServiceConfig(): array
    {
        $provider = new ConfigProvider();

        return $provider->getServiceDependencies();
    }
}
