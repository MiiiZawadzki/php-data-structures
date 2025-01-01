<?php

require 'Stack.php';

$stack = new Stack();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);

echo "Peek first item: {$stack->peek()} \n"; // print: 5
echo "Stack size: {$stack->size()} \n"; // print: 5

echo "Pop first item: {$stack->pop()} \n"; // remove first item from stack (5)
echo "Pop first item: {$stack->pop()} \n"; // remove first item from stack (4)
echo "Pop first item: {$stack->pop()} \n"; // remove first item from stack (3)
echo "Pop first item: {$stack->pop()} \n"; // remove first item from stack (2)

echo "Stack size: {$stack->size()} \n"; // print: 1
echo "Peek first item: {$stack->peek()} \n"; // print: 1
