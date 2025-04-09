<?php

namespace Y2\Loyalty;

class ArrayOfCardHeaderGet implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var CardHeaderGet[] $CardHeaderGet
     */
    protected $CardHeaderGet = null;

    public function __construct()
    {

    }

    /**
     * @return CardHeaderGet[]
     */
    public function getCardHeaderGet(){
        return $this->CardHeaderGet;
    }

    /**
     *
     * @param CardHeaderGet[] $cardHeaderGet
     * @return $this
     */
    public function setCardHeaderGet(array $cardHeaderGet = null)
    {
        $this->CardHeaderGet = $cardHeaderGet;
        return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     *
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
        return isset($this->CardHeaderGet[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return CardHeaderGet
     */
    public function offsetGet($offset): CardHeaderGet
    {
        return $this->CardHeaderGet[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed             $offset The offset to assign the value to
     * @param CardHeaderGet $value The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (!isset($offset)) {
            $this->CardHeaderGet[] = $value;
        } else {
            $this->CardHeaderGet[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->CardHeaderGet[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return CardHeaderGet Return the current element
     */
    public function current(): CardHeaderGet
    {
        return current($this->CardHeaderGet);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
        next($this->CardHeaderGet);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
        return key($this->CardHeaderGet);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid(): bool
    {
        return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind(): void
    {
        reset($this->CardHeaderGet);
    }

    /**
     * Countable implementation
     *
     * @return int Return count of elements
     */
    public function count(): int
    {
        return count($this->CardHeaderGet);
    }
}