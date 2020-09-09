<?php
namespace src\Builder;

interface BuilderInterface
{
    public function reset();
    public function createGpu();
    public function createCpu();
    public function createRam();
    public function setPrice();
}
