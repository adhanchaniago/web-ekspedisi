<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;

class GlobalVariable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $global = \DB::table('basic_variable')
                    ->select(
                        'variable_name',
                        'string_contain',
                        'text_contain'
                        )
                    ->get();

        View::share('global', $global);

        return $next($request);
    }
}
