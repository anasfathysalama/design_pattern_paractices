<?php

namespace Creational\AbstractFactory;

class RenderForm implements FormRenderableInterface
{
    public AbstractFormFactory $formFactory;

    /**
     * @param AbstractFormFactory $formFactory
     */
    public function __construct(AbstractFormFactory $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    public function changeFactory(AbstractFormFactory $formFactory): void
    {
        $this->formFactory = $formFactory;
    }

    public function render(): void
    {
        echo "
           {$this->formFactory->createInputFiled()->getLabelName()}\n
          {$this->formFactory->createSelectField()->getLabelName()}\n
          {$this->formFactory->createSubmitButton()->getName()}
        ";
    }
}