<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkCollabStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is authenticated and has the recruiter role
        $user = Auth::user();

        if ($user && $user->role === 'recruiter') {
            $recruiter = $user->recruiter;
            if ($recruiter) {
                // Redirect based on recruiter status
                switch ($recruiter->status) {
                    case 0:
                        return redirect()->route('collab.unverified');
                    case 2:
                        return redirect()->route('collab.expired');
                }
            }
        }

        return $next($request);
    }
}
