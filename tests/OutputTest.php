<?php

namespace KoineTest\Shell;

use Koine\Shell\Output;
use Koine\Shell\OutputInterface;
use PHPUnit_Framework_TestCase;
use Prophecy\Prophecy\ObjectProphecy;

class OutputTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Output
     */
    protected $output;

    /**
     * @before
     */
    public function initialize()
    {
        $this->output = new Output([]);
    }

    /**
     * @test
     */
    public function implementsTheOutputInterface()
    {
        $this->assertInstanceOf(OutputInterface::class, $this->output);
    }
}
