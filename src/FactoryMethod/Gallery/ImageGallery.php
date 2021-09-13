<?php
namespace src\FactoryMethod\Gallery;

use src\FactoryMethod\Gallery;
use src\FactoryMethod\Source\ImageSource;
use src\FactoryMethod\Source\SourceInterface;

class ImageGallery extends Gallery 
{
    public function createSource() : SourceInterface 
    {
        $imageUrl = $this->fetchImageUrl();
        $source = new ImageSource();
        $source->setUrl($imageUrl);

        return $source;
    }

    private function fetchImageUrl() 
    {
        return '/images/example.png';
    }
}
