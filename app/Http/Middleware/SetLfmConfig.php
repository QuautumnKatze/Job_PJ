<?php

namespace App\Http\Middleware;

use Closure;
use Config;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLfmConfig
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('admin/file-manager/*')) {
            Config::set('lfm', require config_path('lfm_admin.php'));
        } elseif ($request->is('collab/file-manager/*')) {
            Config::set('lfm', require config_path('lfm_collab.php'));
        } elseif ($request->is('home/file-manager/*')) {
            Config::set('lfm', require config_path('lfm_home.php'));
        }

        return $next($request);
    }
}
