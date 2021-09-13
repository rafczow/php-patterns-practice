<?php

namespace src\Strategy;

$randomSortStrategy = new SortingStrategy\RandomSortStrategy();
$alphabeticalSortStrategy = new SortingStrategy\AlphabeticalSortStrategy();

$sorter = new Sorter($randomSortStrategy);

$data = [ 'mouse', 'elephant', 'cat', 'dog' ];

echo 'before random sort';
print_r($data);

$sorter->sort($data);

echo 'after random sort';
print_r($data);


$sorter->setStrategy($alphabeticalSortStrategy);

$data = [ 'mouse', 'elephant', 'cat', 'dog' ];

echo 'before alphabetical sort';
print_r($data);

$sorter->sort($data);

echo 'after alphabetical sort';
print_r($data);
