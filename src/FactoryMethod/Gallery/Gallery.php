<?php
namespace src\FactoryMethod\Gallery;

abstract class Gallery 
{
    abstract public function createSource() : SourceInterface;

    protected function getHtml(): string
    {
        $source = $this->createSource();

        return $source->render();
    }
}