<?php

namespace KoineTest\Shell;

use Koine\Shell\Command;
use Koine\Shell\CommandInterface;
use PHPUnit_Framework_TestCase;

class CommandTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Command
     */
    protected $command;

    /**
     * @before
     */
    public function initialize()
    {
        $this->command = new Command();
    }

    /**
     * @test
     */
    public function implementsCommandInterface()
    {
        $this->assertInstanceOf(CommandInterface::class, $this->command);
    }
}
