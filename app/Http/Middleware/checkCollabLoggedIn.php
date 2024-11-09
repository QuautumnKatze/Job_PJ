<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkCollabLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra nếu người dùng đã đăng nhập và có vai trò là 'admin'
        if (Auth::check() && Auth::user()->role === 'recruiter') {
            return $next($request); // Cho phép truy cập
        }
        // Nếu không phải admin hoặc chưa đăng nhập, chuyển hướng đến trang login
        return redirect()->route('collab.login')->with('error', 'Bạn không có quyền truy cập.');
    }
}
