<?php

namespace Koine\Shell;

class Shell implements ShellInterface
{
    public function execute(CommandInterface $command)
    {
        $code = 0;
        $output = [];

        exec($command->toString(), $output, $code);

        if ($code === 0) {
            return new Output($output);
        }

        $output = new Output($output);
        throw new ShellException($output, $code);
    }
}
