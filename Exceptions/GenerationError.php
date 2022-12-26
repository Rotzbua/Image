<?php

namespace Gregwar\Image\Exceptions;

use Exception;

class GenerationError extends Exception
{
    private $newNewFile;
    public function __construct($newNewFile)
    {
        $this->newNewFile = $newNewFile;
    }

    public function getNewFile()
    {
        return $this->newNewFile;
    }
}
