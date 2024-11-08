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
        // Lấy người dùng đã đăng nhập
        $user = Auth::guard('collab')->user();

        // Kiểm tra nếu người dùng là nhà tuyển dụng (recruiter)
        if ($user->status === 0) {
            // Nếu status là 0, chuyển hướng đến view `collab.unverified`
            return redirect()->route('collab.unverified');
        } elseif ($user->status === 2) {
            // Nếu status là 2, chuyển hướng đến view `collab.expired`
            return redirect()->route('collab.expired');
        }

        // Nếu status là 1 hoặc 3, cho phép truy cập
        return $next($request);
    }
}
