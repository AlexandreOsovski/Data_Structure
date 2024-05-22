<?php

class StackFilo
{
    private int $size;
    private array $structure;
    const MAX_WIDTH = 10;

    public function __construct()
    {
        $this->size = 0;
        $this->structure = [];
    }

    public function push($item): void
    {
        if ($this->size > self::MAX_WIDTH) {
            echo 'This structure is full';
        } else {
            $this->structure[$this->size] = $item;
            $this->size++;
        }
    }

    public function pop(): void
    {
        if (self::empty()) {
            echo "This structure is empty";
        } else {
            for ($i = 0; $i < $this->size - 1; $i++) {
                $this->structure[$i] = $this->structure[$i + 1];
            }
            unset($this->structure[$this->size - 1]);
            $this->size--;
        }
    }

    public function empty(): bool
    {
        return empty($this->structure);
    }

    public function items()
    {
        return $this->structure;
    }
}

$stack = new StackFilo();
$stack->push(1);
$stack->push(2);
$stack->push(3);
$stack->push(4);
$stack->push(5);
$stack->push(6);

$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();

var_dump($stack->items());
