<?php

class Stack
{
    public function __construct(private array $elements = []) {}

    public function push($element): void
    {
        array_push($this->elements, $element);
    }

    public function pop(): mixed
    {
        if ($this->empty()) {
            throw new UnderflowException("Stack is empty");
        }
        return array_pop($this->elements);
    }

    public function peek(): mixed
    {
        if ($this->empty()) {
            throw new UnderflowException("Stack is empty");
        }
        return end($this->elements);
    }

    public function empty(): bool
    {
        return empty($this->elements);
    }
    
    public function size(): int
    {
        return count($this->elements);
    }
}
