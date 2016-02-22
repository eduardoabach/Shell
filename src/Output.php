<?php

namespace Koine\Shell;

class Output implements OutputInterface
{
    /**
     * @var array
     */
    private $data = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function toString()
    {
        return implode("\n", $this->toArray());
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->toString();
    }
}
