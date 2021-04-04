<?php

use src\FactoryMethod\Gallery\Gallery;
use src\FactoryMethod\Gallery\ImageGallery;
use src\FactoryMethod\Gallery\VideoGallery;

function app(Gallery $gallery)
{
    echo 'Running app unaware of creator class.';

    return $gallery->getHtml();
}


echo 'Create gallery with image creator.';
echo app(new ImageGallery());

echo 'Create gallery with videos creator.';
echo app(new VideoGallery());