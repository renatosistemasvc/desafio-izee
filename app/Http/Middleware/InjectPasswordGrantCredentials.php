<?php

namespace App\Http\Middleware;

use DB;
use Closure;

class InjectPasswordGrantCredentials
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $client = DB::table('oauth_clients')
                    ->where('name', 'Laravel Password Grant Client')
                    ->first();

        $request->request->add([
            'grant_type'=> 'password',
            'client_id' => $client->id,
            'client_secret' => $client->secret,
        ]);

        return $next($request);
    }
}
