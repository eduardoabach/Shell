<?php

namespace KoineTest\Shell;

use Koine\Shell\Shell;
use Koine\Shell\ShellInterface;
use PHPUnit_Framework_TestCase;

class ShellTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Shell
     */
    protected $shell;

    /**
     * @before
     */
    public function initialize()
    {
        $this->shell = new Shell();
    }

    /**
     * @test
     */
    public function implementsShellInterface()
    {
        $this->assertInstanceOf(ShellInterface::class, $this->shell);
    }
}
