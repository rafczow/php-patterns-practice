<?php

/**
 * The client code.
 */
function clientCode()
{
    $config1 = Config::getInstance();
    echo 'Application mode is: ' . $config1->getAppMode();
    
    echo 'Setting production mode...';
    $config1->setProductionMode();
    
    $config2 = Config::getInstance();
    echo 'Application mode in config1 is: ' . $config1->getAppMode();
    echo 'Application mode in config2 is: ' . $config2->getAppMode();
}

clientCode();