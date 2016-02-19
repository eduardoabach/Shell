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
        $this->command = new Command('ls');
    }

    /**
     * @test
     */
    public function implementsCommandInterface()
    {
        $this->assertInstanceOf(CommandInterface::class, $this->command);
    }

    /**
     * @test
     */
    public function canBeConvertedIntoString()
    {
        $string = 'ls -l /tmp';
        $command = new Command($string);

        $this->assertEquals($string, $command->toString());
        $this->assertEquals($string, $command->__toString());
        $this->assertEquals($string, (string) $command);
    }
}
