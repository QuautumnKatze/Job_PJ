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
        // Kiểm tra xem admin đã đăng nhập chưa
        if (!Auth::guard('collab')->check()) {
            // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập admin
            return redirect('/collab/login')->with('error', 'Bạn cần phải đăng nhập.');
        }

        // Nếu đã đăng nhập, tiếp tục xử lý request
        return $next($request);
    }
}
