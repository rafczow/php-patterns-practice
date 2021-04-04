<?php
namespace src\Builder;

class BuilderClient 
{
    function createComputers()
    {
        $director = new Director();
        $desktopBuilder = new DesktopBuilder();
        $laptopBuilder = new LaptopBuilder();

        $director->setBuilder($desktopBuilder);

        echo 'Desktop computers:\n';

        $director->buildOfficeComputer();
        $desktopBuilder->getComputer()->listParts();

        $director->buildGamingComputer();
        $desktopBuilder->getComputer()->listParts();
        
        $director->setBuilder($laptopBuilder);
        echo 'Laptop computers:\n';

        $director->buildOfficeComputer();
        $laptopBuilder->getComputer()->listParts();

        $director->buildGamingComputer();
        $laptopBuilder->getComputer()->listParts();

        echo 'Custom desktop:\n';
        $desktopBuilder->createCpu();
        $desktopBuilder->createGpu();
        $desktopBuilder->createGpu();
        $desktopBuilder->createRam();
        $desktopBuilder->createRam();
        $desktopBuilder->calculatePrice();
        $desktopBuilder->getComputer()->listParts();
    }
}