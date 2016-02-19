<?php

namespace Koine\Shell;

interface CommandInterface
{
    /**
     * @return string
     */
    public function toString();

    /**
     * @return string
     */
    public function __toString();
}
