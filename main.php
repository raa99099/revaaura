<?php
require_once 'autoload.php';

$list = new ArrayList();
$list->add("PHP");
$list->add("Java");
$list->add("C++");
echo "Isi ArrayList: ";
print_r($list->getAll());

$queue = new Queue();
$queue->enqueue("Task 1");
$queue->enqueue("Task 2
