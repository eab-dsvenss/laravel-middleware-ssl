<?php

namespace se\wb\site\Http\Middleware;

use Closure;
use \Illuminate\Http\Request;
use se\eab\php\laravel\util\url\UrlHelper;
use se\eab\php\laravel\util\url\RedirectContainer;

class SSLMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {

        if (!$request->secure()) {
            $rc = new RedirectContainer($request, $request->path(), true, true);
            return UrlHelper::getInstance()->performRedirect($rc);
        }

        return $next($request);
    }
    
    

}