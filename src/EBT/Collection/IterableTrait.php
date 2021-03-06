<?php

/*
 * This file is a part of the Collection library.
 *
 * (c) 2013 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\Collection;

/**
 * IterableTrait
 */
trait IterableTrait
{
    /**
     * Rewind the Iterator to the first element.
     */
    public function rewind()
    {
        reset($this->getItems());
    }

    /**
     * Return the current element.
     *
     * @return mixed
     */
    public function current()
    {
        return current($this->getItems());
    }

    /**
     * Return the key of the current element.
     *
     * @return mixed|null scalar on success, or <b>null</b> on failure.
     */
    public function key()
    {
        return key($this->getItems());
    }

    /**
     * Move forward to next element.
     */
    public function next()
    {
        next($this->getItems());
    }

    /**
     * Checks if current position is valid.
     *
     * @return boolean <b>true</b> on success or <b>false</b> on failure.
     */
    public function valid()
    {
        return key($this->getItems()) !== null;
    }

    /**
     * @return array
     */
    abstract protected function &getItems();
}
