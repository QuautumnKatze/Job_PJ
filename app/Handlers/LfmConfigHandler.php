<?php

namespace App\Handlers;

use Auth;

class LfmConfigHandler extends \UniSharp\LaravelFilemanager\Handlers\ConfigHandler
{
    public function userFieldAdmin()
    {
        $guard = Auth::getDefaultDriver(); // Get the current guard
        $userId = Auth::guard('admin')->id();
        return "{$guard}_{$userId}"; // E.g., "admin_1" or "user_1"
    }
}
