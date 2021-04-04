<?php

interface AbstractTable
{
    public function putCloth(): bool;
    public function getStyleName(): string;
    public function isSameDesign(AbstractChair $chair): bool;
}
