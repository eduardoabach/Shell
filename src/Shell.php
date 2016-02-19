<?php

namespace Koine\Shell;

class Shell implements ShellInterface
{
    public function execute(CommandInterface $command)
    {
        throw new \Exception('Not implemented');
    }
}
