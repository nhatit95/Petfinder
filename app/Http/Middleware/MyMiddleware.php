<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Session\Store;

class MyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Store $session){
        $this->session = $session;
    }
    public function handle($request, Closure $next, $role)
    {
        $username = Auth::user()->username;
        $pos = strpos( $username, $role);
        if($pos === false){
            $this->session->flash('msg', 'Bạn không đủ quyền truy cập');
            return redirect()->route('admin.index.index');
        }else{
            return $next($request);
            
        }
    }
}
