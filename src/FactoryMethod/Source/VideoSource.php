<?php
namespace src\FactoryMethod\Source;

class VideoSource implements SourceInterface {
    protected $url;

    public function setUrl($url) 
    {
        $this->url = $url;
    }

    public function render() 
    {
        return '<video src=">' . $this->url . '" />';;
    }
}