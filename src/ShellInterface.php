<?php

namespace Koine\Shell;

interface ShellInterface
{
    /**
     * @param CommandInterface $command
     *
     * @throws ShellException
     *
     * @return OutputInterface
     */
    public function execute(CommandInterface $command);
}
