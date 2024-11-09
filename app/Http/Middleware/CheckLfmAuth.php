<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLfmAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Lấy role từ URL
        $role = $request->role;
        if (!$role) {
            return redirect()->route('home')->withErrors('Role not provided.');
        }

        // Kiểm tra role và thay đổi guard tương ứng
        if ($role == 1) {
            // Nếu role = 1, sử dụng guard 'admin'
            config(['auth.defaults.guard' => 'admin']);
        } elseif ($role == 2) {
            // Nếu role = 2, sử dụng guard 'collab'
            config(['auth.defaults.guard' => 'collab']);
        } elseif ($role == 3) {
            // Nếu role = 2, sử dụng guard 'collab'
            config(['auth.defaults.guard' => 'home']);
        } else {
            // Nếu không có role phù hợp, bạn có thể trả về lỗi hoặc áp dụng mặc định
            return redirect()->route('homepage.home')->withErrors('Invalid role');
        }
        return $next($request);
    }
}
