<?php

require 'SinglyLinkedList.php';

$list = new SinglyLinkedList();
$list->addFirst(1);
$list->addLast(2);
$list->addLast(3);
$list->addLast(5);
$list->addAtIndex(3, 4);
$list->traverse(); // print: 1 -> 2 -> 3 -> 4 -> 5
echo "List length: {$list->length()} \n"; // print: List length: 5
$list->deleteFirst();
$list->deleteAtIndex(1);
$list->deleteLast();
$list->traverse(); // print: 2 -> 4
