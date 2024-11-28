<?php

class Queue
{
    public function __construct(private array $elements = []) {}

    public function enqueue(mixed $element): void
    {
        $this->elements[] = $element;
    }

    public function dequeue(): mixed
    {
        if ($this->empty()) {
            throw new UnderflowException("Queue is empty");
        }
        return array_shift($this->elements);
    }

    public function empty(): bool
    {
        return empty($this->elements);
    }

    public function peek(): mixed
    {
        if ($this->empty()) {
            throw new UnderflowException("Queue is empty");
        }
        return $this->elements[0];
    }

    public function size(): int
    {
        return count($this->elements);
    }
}
