<?php
namespace src\FactoryMethod\Source;

class ImageSource implements SourceInterface {
    protected $url;

    public function setUrl($url) 
    {
        $this->url = $url;
    }

    public function render() 
    {
        return '<img src=">' . $this->url . '" alt="gallery image">';
    }
}