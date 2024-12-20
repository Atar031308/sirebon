<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CekWajibRetribusi
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if (!$user || $user->wajibRetribusi->isEmpty()) {
            return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        return $next($request);
    }
}
