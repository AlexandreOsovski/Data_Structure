<?php

namespace stack;

#LIFO STRUCTURE
#Handmade
class stack
{
    private int $size;
    private array $structure;
    const MAX_WIDTH = 11;

    public function __construct()
    {
        $this->size = 0;
        $this->structure = [];
    }

    public function __destruct()
    {
        unset($this->structure);
    }

    public function push($item): void
    {
        if ($this->size > self::MAX_WIDTH) {
            echo 'the structure ins full';
        } else {
            $this->structure[$this->size] = $item;
            $this->size++;
        }
    }

    public function pop(): void
    {
        if ($this->empty()) {
            echo 'this structure is empty';
        } else {
            unset($this->structure[$this->size - 1]);
            $this->size--;
        }
    }

    public function empty(): bool
    {
        return empty($this->structure);
    }

    public function getInfoStructure(): array
    {
        $array = [];
        $array = [
            "size" => count($this->structure),
            "memory_used" => memory_get_usage() / 1024 / 1024
        ];
        return $array;
    }

    public function itemsStack(): array
    {
        return $this->structure;
    }
}

$stack = new stack();

for ($i = 0; $i < 10; $i++) {
    $stack->push($i);
}

$stack->pop();

var_dump($stack->itemsStack());
