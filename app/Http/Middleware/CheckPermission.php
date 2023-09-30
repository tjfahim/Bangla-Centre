<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            // Get the user's role (you need to adjust this based on your user model structure)
            $userRole = Auth::user()->role;

            // Redirect based on the user's role
            if ($userRole === 'user') {
                return redirect('/'); // Redirect to the user's home page
            } elseif ($userRole === 'admin') {
                return $next($request); // Redirect to the admin pagez
            }
        }
    }
}
