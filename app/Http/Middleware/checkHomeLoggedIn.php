<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkHomeLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra xem admin đã đăng nhập chưa
        if (Auth::check() && Auth::user()->role === 'user') {
            return $next($request); // Cho phép truy cập
        }
        // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập admin
        return redirect()->route('homepage.login')->with('error', 'Bạn cần phải đăng nhập.');

    }
}
