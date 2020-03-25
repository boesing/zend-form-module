<?php
declare(strict_types=1);

namespace Boesing\Zend\Form;

use Zend\Form\Factory;

final class FormFactoryImplementingService
{

    /**
     * @var Factory
     */
    private $formFactory;

    public function __construct(Factory $formFactory)
    {
        $this->formFactory = $formFactory;
    }
}
