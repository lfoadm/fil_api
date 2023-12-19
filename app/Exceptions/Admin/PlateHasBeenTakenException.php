<?php

namespace App\Exceptions\Admin;

use Exception;

class PlateHasBeenTakenException extends Exception
{
    protected $message = 'Plate has been taken';

    public function render()
    {
        return response()->json([
            'error' => class_basename($this),
            'message' => $this->getMessage(),
        ], 400);
    }
}
