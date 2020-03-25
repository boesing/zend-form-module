<?php
declare(strict_types=1);

namespace Boesing\Zend\Form;

use Psr\Container\ContainerInterface;
use Zend\Form\Factory;

final class ZendFormFactory
{

    public function __invoke(ContainerInterface $container): Factory
    {
        $elementManager = $container->get('FormElementManager');

        return new Factory($elementManager);
    }
}
