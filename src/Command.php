<?php

namespace Koine\Shell;

class Command implements CommandInterface
{
    /**
     * @var string
     */
    private $command;

    /**
     * @param string command
     */
    public function __construct($command)
    {
        $this->command = $command;
    }

    public function toString()
    {
        return $this->__toString();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->command;
    }
}
