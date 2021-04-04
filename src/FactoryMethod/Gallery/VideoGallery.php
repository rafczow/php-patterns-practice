<?php
namespace src\FactoryMethod;

class VideoGallery extends Gallery {

    public function createSource() : SourceInterface 
    {
        $videoUrl = $this->fetchVideoUrl();
        $source = new VideoSource();
        $source->setUrl($videoUrl);

        return $source;
    }

    private function fetchVideoUrl() 
    {
        return '/videos/example.mp4';
    }
}