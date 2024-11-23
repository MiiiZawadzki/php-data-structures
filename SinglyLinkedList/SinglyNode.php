<?php

class SinglyNode
{
    public function __construct(
        public mixed $data,
        public ?SinglyNode $next = null
    ) {}
}
