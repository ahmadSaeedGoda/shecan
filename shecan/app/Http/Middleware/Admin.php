<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Admin  
{
  public function handle($request, Closure $next, $guard = null)
  {
    if (Auth::guard($guard)->guest()) {
      if ($request->ajax()) {
        return response('Unauthorized.', 401);
      } else {
        return redirect()->guest('login');
      }
    } else if (!Auth::guard($guard)->user()->isAdmin) {
      return redirect()->to('/')->withError('Permission Denied');
    }
    if ( Auth::check() && Auth::user()->isAdmin() )
    {
        return $next($request);
    }

    return redirect('/');

    // return $next($request);
  }
}
