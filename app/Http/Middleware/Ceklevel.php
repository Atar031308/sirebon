<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Ceklevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$levels): Response
    {
        // Mengambil pengguna yang sedang login
        $user = auth()->user();

        // Pastikan pengguna ada sebelum mengecek levelnya
        if (!$user || !in_array($user->level, $levels)) {
            return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
        }

        // Melanjutkan request
        return $next($request);
    }
}
