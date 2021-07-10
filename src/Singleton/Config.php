<?php

class Config extends Singleton
{
    private $appMode = 'default';

    public function getAppMode(): string
    {
        return $this->appMode;
    }

    public function setProductionMode(): void
    {
        $this->appMode = 'production';
    }

    public function setDeveloperMode(): void
    {
        $this->appMode = 'developer';
    }
}