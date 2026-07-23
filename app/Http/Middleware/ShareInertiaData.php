<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Inertia\Inertia;

class ShareInertiaData
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Share common data with all Inertia pages
        Inertia::share([
            'app' => [
                'name' => config('app.name', 'Website Desa'),
            ],
            'flash' => [
                'success' => fn () => $request->session()->get('success'),
                'error' => fn () => $request->session()->get('error'),
            ],
            'villageInfo' => fn () => \App\Models\VillageProfile::first(),
            'settings' => fn () => \App\Models\Setting::pluck('value', 'key'),
        ]);

        return $next($request);
    }
}
