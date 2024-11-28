<?php

require 'Queue.php';

$queue = new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue(5);

echo "Peek first item: {$queue->peek()} \n"; // print: 1
echo "Queue size: {$queue->size()} \n"; // print: 5

echo "Dequeue first item: {$queue->dequeue()} \n"; // remove first item from queue (1)
echo "Dequeue first item: {$queue->dequeue()} \n"; // remove first item from queue (2)
echo "Dequeue first item: {$queue->dequeue()} \n"; // remove first item from queue (3)
echo "Dequeue first item: {$queue->dequeue()} \n"; // remove first item from queue (4)

echo "Queue size: {$queue->size()} \n"; // print: 1
echo "Peek first item: {$queue->peek()} \n"; // print: 5
