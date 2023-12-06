<?php

namespace App\Exceptions\Auth;

use Exception;

class PasswordResetTokenInvalidException extends Exception
{
    protected $message = 'Password reset token invalid.';

    public function render()
    {
        return response()->json([
            'error' => class_basename($this),
            'message' => $this->getMessage(),
        ], 400);
    }
}
