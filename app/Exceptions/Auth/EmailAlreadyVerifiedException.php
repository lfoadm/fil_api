<?php

namespace App\Exceptions\Auth;

use Exception;

class EmailAlreadyVerifiedException extends Exception
{
    protected $message = 'E-mail already verified.';

    public function render()
    {
        return response()->json([
            'error' => class_basename($this),
            'message' => $this->getMessage(),
        ], 400);
    }
}
