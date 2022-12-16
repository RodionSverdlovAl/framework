<?php

namespace Core\Type;
use Iterator;
use ArrayAccess;
use Countable;
use JsonSerializable;

class Dictionary implements Iterator, ArrayAccess, Countable, JsonSerializable
{
    private $position =0;
    private $array = array();
    protected $count; // колличество эллементов объекта/массива

    private bool $readonly;

    public function rewind()
    {
        // TODO: Implement rewind() method.
        $this->position = 0;
    }

    public function key()
    {
        // TODO: Implement key() method.
        return $this->position;
    }

    public function current()
    {
        // TODO: Implement current() method.
        return $this->array[$this->position];
    }

    public function next()
    {
        // TODO: Implement next() method.
        ++$this->position;
    }

    public function valid() : bool
    {
        // TODO: Implement valid() method.
        return isset($this->array[$this->position]);
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
        unset($this->array[$offset]);
    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
        // return isset($this->array[$offset]) ? $this->array[$offset] : null;
        return $this->array[$offset] ?? null;
    }

    public function offsetExists($offset) : bool
    {
        // TODO: Implement offsetExists() method.
        return isset($this->array[$offset]);
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
        if (is_null($offset)) {
            $this->array[] = $value;
        } else {
            $this->array[$offset] = $value;
        }
    }

    public function count(): int
    {
        // TODO: Implement count() method.
        return $this-> count;
    }

    public function jsonSerialize() : array
    {
        // TODO: Implement jsonSerialize() method.
        return $this->array;
    }

    public function get($name)
    {
        $this->offsetGet($name);
    }

    public function set($name, $value)
    {
       $this->offsetSet($name, $value);
    }

    public function __construct($values, bool $readonly = false)
    {
        $this->array = $values;
        $this->count = count($this->array);
    }

    public function getValues()
    {
        return $this->array;
    }

    public function setValues($values)
    {
        $this->array = $values;
    }

    public function clear()
    {
        foreach ($this->array as $key=>$value){
            $this->offsetUnset($key);
        }
    }
}