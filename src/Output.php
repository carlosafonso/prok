<?php

namespace Afonso\Prok;

/**
 * A class representing the output of a command.
 */
class Output
{
    /**
     * The return code of the command.
     *
     * @var int
     */
    public $returnCode;

    /**
     * The output of the command.
     *
     * @var string
     */
    public $output;

    public function __construct($returnCode, $output = null)
    {
        $this->returnCode = $returnCode;
        $this->output = $output;
    }
}
