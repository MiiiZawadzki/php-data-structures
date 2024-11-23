<?php

require 'SinglyNode.php';

class SinglyLinkedList
{
    private ?SinglyNode $head = null;
    private int $size = 0;

    public function addLast(mixed $item): void
    {
        $node = new SinglyNode($item);

        if (isset($this->head)) {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $current->next = $node;
        } else {
            $this->head = $node;
        }

        $this->size++;
    }

    public function addFirst(mixed $item): void
    {
        $node = new SinglyNode($item);

        $node->next = $this->head;
        $this->head = $node;

        $this->size++;
    }

    public function addAtIndex($index, $value)
    {
        if ($index < 0 || $index > $this->size) {
            throw new OutOfBoundsException("Index out of bounds");
        }

        if ($index === 0) {
            $this->addFirst($value);
            return;
        }

        $newNode = new SinglyNode($value);
        $current = $this->head;
        for ($i = 0; $i < $index - 1; $i++) {
            $current = $current->next;
        }
        $newNode->next = $current->next;
        $current->next = $newNode;

        $this->size++;
    }

    public function deleteFirst()
    {
        if ($this->head === null) {
            throw new UnderflowException("List is empty");
        }
        $this->head = $this->head->next;

        $this->size--;
    }

    public function deleteLast()
    {
        if ($this->head === null) {
            throw new UnderflowException("List is empty");
        }

        if ($this->head->next === null) {
            $this->head = null;
        } else {
            $current = $this->head;
            while ($current->next->next !== null) {
                $current = $current->next;
            }
            $current->next = null;
        }

        $this->size--;
    }

    public function deleteAtIndex($index)
    {
        if ($index < 0 || $index >= $this->size) {
            throw new OutOfBoundsException("Index out of bounds");
        }

        if ($index === 0) {
            $this->deleteFirst();
            return;
        }

        $current = $this->head;
        for ($i = 0; $i < $index - 1; $i++) {
            $current = $current->next;
        }
        $current->next = $current->next->next;

        $this->size--;
    }

    public function length(): int
    {
        return $this->size;
    }

    public function search($value): bool
    {
        $current = $this->head;

        while ($current !== null) {
            if ($current->data === $value) {
                return true;
            }
            $current = $current->next;
        }

        return false;
    }

    public function traverse(): void
    {
        $current = $this->head;
        while ($current !== null) {
            echo $current->data;
            $current = $current->next;
            if ($current !== null) {
                echo  " -> ";
            }
        }
        echo "\n";
    }
}
