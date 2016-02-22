<?php

namespace KoineTest\Shell;

use Koine\Shell\Command;
use Koine\Shell\Shell;
use Koine\Shell\ShellException;
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

    /**
     * @test
     */
    public function throwsExceptionWithCorrectExitCodeWhenCommandFails()
    {
        try {
            $this->shell->execute(new Command('echox'));
            $this->fail('Exception expected');
        } catch (ShellException $e) {
            $code = 127;
            $this->assertEquals($code, $e->getCode());
        }

        $this->expectOutputString('');
    }

    /**
     * @test
     * @expectedException \Koine\Shell\ShellException
     * @expectedExceptionMessage command not found: echox
     */
    public function throwsExceptionWithCorrectMessageWhenCommandFails()
    {
        $this->shell->execute(new Command('echox'));
        $this->expectOutputString('');
    }

    /**
     * @test
     */
    public function canExecuteCommand()
    {
        $libRoot = LIB_ROOT;
        $command = new Command("ls $libRoot/*.md");
        $output = $this->shell->execute($command);

        $files = [
            LIB_ROOT . '/CODE_OF_CONDUCT.md',
            LIB_ROOT . '/README.md',
        ];

        $this->assertEquals($files, $output->toArray());
        $this->expectOutputString('');
    }
}
