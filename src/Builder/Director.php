<?php
namespace src\Builder;

class Director
{
    private BuilderInterface $builder;

    public function setBuilder(BuilderInterface $builder): void
    {
        $this->builder = $builder;
    }

    public function buildOfficeComputer()
    {
        $this->builder->createCpu();
        $this->builder->createRam();
        $this->builder->calculatePrice();
    }

    public function buildGamingComputer()
    {
        $this->builder->createGpu();
        $this->builder->createCpu();
        $this->builder->createRam();
        $this->builder->calculatePrice();
    }
}
