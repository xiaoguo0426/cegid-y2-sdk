<?php

namespace Y2;

class ArrayOfUserField implements \ArrayAccess, \Iterator, \Countable
{
    /**
     * @var UserField[] $UserField
     */
    protected $UserField = null;

    public function __construct()
    {

    }

    /**
     * @return UserField[]
     */
    public function getUserField()
    {
        return $this->UserField;
    }

    /**
     * @param UserField[] $UserField
     *
     * @return ArrayOfUserField
     */
    public function setUserField(array $UserField = null)
    {
        $this->UserField = $UserField;
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
        return isset($this->UserField[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     *
     * @return UserField
     */
    public function offsetGet($offset)
    {
        return $this->UserField[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed     $offset The offset to assign the value to
     * @param UserField $value The value to set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->UserField[] = $value;
        } else {
            $this->UserField[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->UserField[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UserField Return the current element
     */
    public function current()
    {
        return current($this->UserField);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->UserField);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->UserField);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
        return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->UserField);
    }

    /**
     * Countable implementation
     *
     * @return UserField Return count of elements
     */
    public function count()
    {
        return count($this->UserField);
    }

}
